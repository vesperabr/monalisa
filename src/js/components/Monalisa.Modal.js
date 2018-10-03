/**
 * Monsalisa: Modal
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('modal', {
        init: function(context) {
            var defaults = {
                target: null,
                show: false,
                url: false,
                header: false,
                width: '600px',
                height: false,
                maxHeight: false,
                position: 'center',
                appendForms: false,
                appendFields: false,
            };

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$target  = $(this.settings.target);
        },
        start: function() {
            $('body').add($(this.$target));
            this.$header = this.$target.find('.modal-header');
            this.$close = this.$target.find('.close');
            this.$body = this.$target.find('.modal-body');

            if (this.$close.length === 0) this.$target.prepend('<span class="close"></span>');
            if (this.$body.length === 0) this.$target.prepend('<span class="modal-body"></span>');

            $('.close').on('click', this.close.bind(this));
            $(document).on('keyup.modal', this.handleEscape.bind(this));

            if (this.settings.header) this.$header.html(this.settings.header);

            if ($('#modal-overlay').length !== 0) {
                this.$overlay = $('#modal-overlay');
            }
            else {
                this.$overlay = $('<div id="modal-overlay">').addClass('Modal _hide');
                $('body').prepend(this.$overlay);
            }

            this.$target.appendTo(this.$overlay);
            this.$target.addClass('_hide');

            if (this.settings.show) this.open();
            
            this.$el.on('click.modal', this.open.bind(this));
        },
        stop: function() {
            this.$el.off('click .modal');
        },

        open: function(e) {
            if (e) e.preventDefault();

            if (this.settings.url) {
                $.ajax({
                    url: this.settings.url,
                    cache: false,
                    type: 'post',
                    success: $.proxy(function(data)
                    {
                        $(this.$target.selector + ' .modal-body').html(data);
                    }, this)
                });

            } 

            this.$overlay.removeClass('_hide');
            this.$target.removeClass('_hide');
            $('html').css('overflow', 'hidden');

            // css
            var width = this.settings.width;
            var top = '2%';
            var bottom = '2%';
            var percent = width.match(/%$/);

            if ((parseInt(this.settings.width) > $(window).width()) && !percent) {
                width = '96%';
            }
            else if (!percent) {
                top = '36px';
                bottom = '36px';
            }

            this.$target.css({ 'width': width, 'margin-top': top, 'margin-bottom': bottom });

            // enter
            this.$target.find('input[type=text],input[type=url],input[type=email]').on('keydown.modal', this.handleEnter.bind(this));
        },
        close: function(e) {
            this.$target.addClass('_hide');
            $('html').css('overflow', '');

            this.$overlay.addClass('_hide');
        },
        handleEnter: function(e) {
            if (e.which === 13) {
                e.preventDefault();
                this.close(false);
            }
        },
        handleEscape: function(e) {
            return (e.which === 27) ? this.close(false) : true;
        }

    });

})(Monalisa);
