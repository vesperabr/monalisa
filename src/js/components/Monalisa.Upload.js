/**
 * Monsalisa: Validate
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('upload', {
        init: function(context){
            // defaults
            var defaults = {
                size: 120, // pixels
                url: false,
                urlRemove: false,
                param: false,
                type: false, // image, file
                multiple: false,
                placeholder: 'Arrate o arquivo ou clique aqui para upload',
                progress: false,
                target: false,
                append: false
            };

            this.context  = context;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$el      = context.$el;
            this.$target  = $(this.settings.target);

            // local
            this.statusMap = ['hover', 'error', 'success', 'drop'];

        },
        // public
        start: function(){
            this._buildBox();
            this._buildInput();
            this._buildCount();
            this._buildType();
            this._buildPlaceholder();
            this._buildSize();
            this._buildMultiple();
            this._buildItems();
            this._buildEvents();

        },
        stop: function() {
            this.$box.remove();
            this.$el.off('.Upload');
        },

        // private
        _buildBox: function() {
            if (this.settings.type === 'image')
            {
                this.$box = this.$el.find('.upload-item');
            }
            else
            {
                this.$box = this.$el;
            }
        },
        _buildInput: function() {
            this.$input = $('<input>');
            this.$input.attr('type', 'file');
            this.$input.attr('name', this._getParamName());
            this.$input.hide();

            this.$el.before(this.$input);
        },
        _buildCount: function() {
            this.$inputCount = $('<input>');
            this.$inputCount.attr('type', 'hidden');
            this.$inputCount.attr('name', this._getParamName() + '-count');
            this.$inputCount.val(0);

            this.$el.before(this.$inputCount);
        },
        _buildType: function() {
            this.isBox = this.$el.hasClass('Upload');
        },
        _buildPlaceholder: function() {
            if (this.isBox)
            {
                var $placeholder = $('<span>');
                $placeholder.addClass('upload-placeholder');
                $placeholder.text(this.settings.placeholder);

                this.$el.append($placeholder);
            }
        },
        _buildSize: function() {
            if (this.isBox)
            {
                this.$box.css({
                    height: this.settings.size + 'px'
                });
            }
            else if (this.settings.type === 'image')
            {
                this.$box.css({
                    width: this.settings.size + 'px',
                    height: this.settings.size + 'px'
                });
            }
        },
        _buildMultiple: function() {
            this.isMultiple = this.settings.multiple;
            if (this.isMultiple)
            {
                this.$input.attr('multiple', 'true');
            }
        },
        _buildItems: function() {
            if (!this.settings.type) return;

            var isFile = (this.settings.type === 'file');
            var $target = (isFile) ? this.$target : this.$el;
            var fn = (isFile) ? '_removeFile' : '_removeImage';

            var $closes = $target.find('.close');
            $closes.on('click', this[fn].bind(this));

            if (!isFile)
            {
                $closes.closest('.upload-item').addClass('_uploaded');
            }

            this.$inputCount.val($closes.length);
        },
        _buildEvents: function() {
            this.$input.on('change', this._change.bind(this));
            this.$box.on('click', this._click.bind(this));
            this.$box.on('drop', this._drop.bind(this));
            this.$box.on('dragover', this._dragover.bind(this));
            this.$box.on('dragleave', this._dragleave.bind(this));
        },


        // Events
        _click: function(e) {
            e.preventDefault();

            var $el = $(e.target);
            if ($el.hasClass('close')) return;

            this.$input.click();
        },
        _change: function(e) {
            this._buildSize();
            this._buildMultiple();
            this._buildItems();
            this._send(e, this.$input.get(0).files);
        },
        _drop: function(e) {
            e.preventDefault();

            this._clearStatuses();
            this._setStatus('drop');

            this._buildSize();
            this._buildMultiple();
            this._buildItems();
            this._send(e);
        },
        _dragover: function(e) {
            e.preventDefault();
            this._setStatus('hover');

            return false;
        },
        _dragleave: function(e) {
            e.preventDefault();
            this._removeStatus('hover');

            return false;
        },

        // Count
        _upCount: function()
        {
            var val = this.$inputCount.val();
            val++;

            this.$inputCount.val(val);
        },
        _downCount: function()
        {
            var val = this.$inputCount.val();
            val--;
            val = (val < 0) ? 0 : val;

            this.$inputCount.val(val);
        },
        _clearCount: function()
        {
            this.$inputCount.val(0);
        },

        // Name
        _getParamName: function() {
            return (this.settings.param) ? this.settings.param : 'file';
        },
        _getHiddenName: function() {
            var name = this._getParamName();
            return (this.isMultiple) ? name + '-uploaded[]' : name + '-uploaded';
        },

        // Status
        _clearStatuses: function() {
            this.$box.removeClass('_upload-' + this.statusMap.join(' _upload-'));
        },
        _setStatus: function(status) {
            this.$box.addClass('_upload-' + status);
        },
        _removeStatus: function(status) {
            this.$box.removeClass('_upload-' + status);
        },


        // Target
        _clearTarget: function() {
            var $items = this.$target.find('.upload-item');
            $items.each(function(node)
            {
                var $node = $(node);
                this._removeFileRequest($node.attr('data-id'));
            }.bind(this));

            this._clearCount();
            this.$target.html('');
        },
        _clearBox: function() {
            var $items = this.$target.find('.upload-item');
            $items.each(function(node)
            {
                var $node = $(node);
                this._removeFileRequest($node.attr('data-id'));
            }.bind(this));

            this._clearCount();
            this.$target.html('');
        },


        // Remove
        _removeFile: function(e) {
            e.preventDefault();

            var $el   = $(e.target);
            var $item = $el.closest('.upload-item');
            var id    = $item.attr('data-id');

            $item.remove();
            this._downCount();
            this._removeFileRequest(id);

            // clear target
            if (this.$target.find('.upload-item').length === 0)
            {
                this.$target.html('');
            }

            this._buildSize();
            this._buildMultiple();
            this._buildItems();
        },
        _removeImage: function(e) {
            e.preventDefault();

            var $el   = $(e.target);
            var $item = $el.closest('.upload-item');
            var id    = $item.attr('data-id');

            if (this.isMultiple) {
                $item.remove();
                this._downCount();
                this._removeFileRequest(id);

                // clear target
                if (this.$target.find('.upload-item').length === 0)
                {
                    this.$target.html('');
                }
            }
            else
            {
                var $img = $item.find('img');

                $el.hide();
                this.$box.html('');
                this.$box.removeClass('_uploaded');
                this._downCount();
                this._removeFileRequest(id);

            }

            this._buildSize();
            this._buildMultiple();
            this._buildItems();
        },
        _removeFileRequest: function(id) {
            if (this.settings.urlRemove)
            {
                $.ajax({
                    url: this.settings.urlRemove,
                    type: 'POST',
                    data: { id: id }
                });
            }
        },


        // Send
        _send: function(e, files) {
            e = e.originalEvent || e;

            files = (files) ? files : e.dataTransfer.files;

            var data = new FormData();
            var name = this._getParamName();

            data = this._buildData(name, files, data);

            if (this.settings.append)
            {
                data = this.utils.extendData(data, this.settings.append);
            }

            this._sendData(data, files, e);
        },
        _sendData: function(data, files, e) {
            var response = files;
            console.log(response);
            this._complete(response, e);
        },
        _buildData: function(name, files, data) {
            for (var i = 0; i < files.length; i++)
            {
                data.append(name + '[]', files[i]);
            }

            return data;
        },
        _complete: function (response, e) {
            this._clearStatuses();

            // error
            var json = (Array.isArray(response)) ? response[0] : response;

            if (typeof json.type !== 'undefined' && json.type === 'error')
            {
                this._setStatus('error');
                this.error(response);
            }
            // complete
            else
            {
                this._setStatus('success');

                switch (this.settings.type)
                {
                    case 'image':
                        this._completeBoxImage(response);
                        break;
                    default:
                        this._completeBoxFile(response);
                }

                setTimeout(this._clearStatuses.bind(this), 500);
            }
        },
        _completeBoxImage: function(response) {

            for (var i = 0; i < response.length; i++) {
                // img
                var $img = $('<img>');
                var reader = new FileReader();
                reader.onload = function(e) {
                    $img.attr("src", e.target.result);
                    $img.attr("data-id", e.loaded);
                };
                reader.readAsDataURL(response[i]);
                // close
                var $close = $('<span>');
                $close.addClass('close');
                $close.on('click', this._removeImage.bind(this));

                // hidden
                var $hidden = $('<input>');
                $hidden.attr('type', 'hidden');
                $hidden.attr('name', this._getHiddenName());
                $hidden.val(response[i].size);

                // item
                var $item = $('<div>');
                $item.addClass('upload-item _uploaded');
                $item.attr('data-id', response[i].size);
                this._upCount();

                if (this.isMultiple)
                {
                    // append
                    $item.append($close);
                    $item.append($img);
                    $item.append($hidden);

                    this.$box.last().before($item);
                }
                // single
                else
                {
                    var $lastImg = this.$box.find('img');
                    if ($lastImg.length !== 0)
                    {
                        this._removeFileRequest(this.$box.attr('data-id'));
                    }

                    this.$box.html('');
                    this.$box.attr('data-id', response[i].size);
                    this.$box.append($close);
                    this.$box.append($img);
                    this.$box.append($hidden);

                    return;
                }
            }
        },
        _completeBoxFile: function(response) {
            if (!this.isMultiple) this._clearTarget();

            for (var i = 0; i < response.length; i++) {
                // item
                var $item = $('<div>');
                $item.addClass('upload-item');
                $item.attr('data-id', response[i].size);

                // file
                var $file = $('<span>');
                $file.html(response[i].name);

                // close
                var $close = $('<span>');
                $close.addClass('close');
                $close.on('click', this._removeFile.bind(this));

                // hidden
                var $hidden = $('<input>');
                $hidden.attr('type', 'hidden');
                $hidden.attr('name', this._getHiddenName());
                $hidden.val(response[i].size);

                // append
                $item.append($close);
                $item.append($file);
                $item.append($hidden);

                // target
                this.$target.append($item);
                this._upCount();
            }
        }
    });

})(Monalisa);
