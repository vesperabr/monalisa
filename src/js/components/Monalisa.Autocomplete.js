/**
 * Monsalisa: Alert
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {
    
    $M.addComponent('autocomplete', {
        init: function(context) {
            this.$doc = $('html');
            this.$win = $(window);
            this.$body = $('body');
            this.animate = context.animate;

            // defaults
            var defaults = {
                url: false,
                min: 2,
                labelClass: false,
                target: false,
                json: false
            };

            // context
            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$target  = $(this.settings.target);
        },
        start: function() {
            this.build();

            this.timeout = null;
            this.$el.on('keyup.monalisa.autocomplete', this.open.bind(this));
        },
        stop: function() {
            this.$box.remove();

            this.$el.off('.monalisa.autocomplete');
            this.$doc.off('.monalisa.autocomplete');
            this.$win.off('.monalisa.autocomplete');
        },

        build: function() {
            this.$box = $('<div />');
            this.$box.addClass('Autocomplete');
            this.$box.addClass('_hide');

            this.$body.append(this.$box);

            if (this.$target && !this.isInputTarget())
            {
                this.$target.addClass('Autocomplete-labels');

                var $closes = this.$target.find('.close');
                $closes.on('click', this.removeLabel.bind(this));
            }
        },
        open: function(e) {
            if (e) e.preventDefault();

            clearTimeout(this.timeout);

            var value = this.$el.val();
            if (value.length >= this.settings.min)
            {
                this.resize();
                this.$win.on('resize.monalisa.autocomplete', this.resize.bind(this));
                this.$doc.on('click.monalisa.autocomplete', this.close.bind(this));

                this.$box.addClass('_show');
                this.listen(e);
            }
            else
            {
                this.close(e);
            }
        },
        close: function(e) {
            if (e) e.preventDefault();

            this.$box.removeClass('_show');
            this.$box.addClass('_hide');

            this.$doc.off('.monalisa.autocomplete');
            this.$win.off('.monalisa.autocomplete');
        },
        resize: function() {
            this.$box.width(this.$el.width());
        },
        lookup: function() {
            if (this.settings.json) {
                this.complete(this.settings.json);
            } else {
                $.ajax({
                    url: this.settings.url,
                    type: 'POST',
                    success: $.proxy(function(data){
                        this.complete(data);
                    }, this)
                });
            }

        },
        complete: function(json) {
            arr = json;
            part = this.$el.val();
            part = part.toLowerCase();

            result = arr.filter(function(obj) {
                return obj.name.toLowerCase().indexOf(part) !== -1; 
            });

            this.$box.html('');

            if (result.length === 0) return this.close();

            for (var i = 0; i < result.length; i++)
            {
                var $item = $('<a>');
                $item.attr('href', '#');
                $item.attr('rel', result[i].id);

                $item.html(result[i].name);
                $item.on('click', this.set.bind(this));

                this.$box.append($item);
            }

            var pos = this.$el.offset();
            var height = this.$el.height();
            var width = this.$el.width();
            var placement = ((this.$doc.height() - (pos.top + height)) < this.$box.height()) ? 'top' : 'bottom';
            var top = (placement === 'top') ? (pos.top - this.$box.height() - height) : (pos.top + height);

            this.$box.css({ width: width + 'px', top: top + 'px', left: pos.left + 'px' });
            this.$box.removeClass('_hide');
        },
        listen: function(e) {
            switch(e.which)
            {
                case 40: // down
                    e.preventDefault();
                    this.select('next');
                break;

                case 38: // up
                    e.preventDefault();
                    this.select('prev');
                break;

                case 27: // esc
                    this.close(e);
                break;

                default:
                        this.timeout = setTimeout(this.lookup.bind(this),100);
                break;
            }
        },
        select: function(type) {
            var $links = this.$box.find('a');
            var $active = this.$box.find('._active');

            $links.removeClass('_active');

            var $item = this.selectItem($active, $links, type);
            $item.addClass('_active');
        },
        selectItem: function($active, $links, type) {
            var $item;
            var isActive = ($active.length !== 0);
            var size = (type === 'next') ? 0 : ($links.length - 1);

            if (isActive)
            {
                $item = $active[type]();
            }

            if (!isActive || !$item || $item.length === 0)
            {
                $item = $links.eq(size);
            }

            return $item;
        },
        set: function(e) {
            var $active = this.$box.find('._active');

            if (e)
            {
                e.preventDefault();
                $active = $(e.target);
            }

            var id = $active.attr('rel');
            var value = $active.html();

            if (this.$target.length !== 0)
            {
                if (this.isInputTarget())
                {
                    this.$target.val(value);
                }
                else
                {
                    var $added = this.$target.find('[data-id="' + id + '"]');
                    if ($added.length === 0)
                    {
                        this.addLabel(id, value);
                    }
                }

                this.$el.val('');
            }
            else
            {
                this.$el.val(value);
            }

            this.$el.focus();

            this.close();
        },
        addLabel: function(id, name) {
            var $label = $('<span>');
            $label.addClass('label');
            $label.attr('data-id', id);
            $label.text(name + ' ');

            if (this.settings.labelClass)
            {
                $label.addClass(this.settings.labelClass);
            }

            var $close = $('<span>');
            $close.addClass('close');
            $close.on('click', this.removeLabel.bind(this));

            var $input = $('<input>');
            var name = this.$target.attr('data-name');
            $input.attr('type', 'hidden');
            $input.attr('name', (name) ? name : this.$target.attr('id') + '[]');
            $input.val(name);

            $label.append($close);
            $label.append($input);

            this.$target.append($label);
        },
        isInputTarget: function() {
            return (this.$target.get().tagName === 'INPUT');
        },
        removeLabel: function(e) {
            e.preventDefault();

            var $el = $(e.target);
            var $label = $el.closest('.label');

            $label.remove();
        }
    });
})(Monalisa);