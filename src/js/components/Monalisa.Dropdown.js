/**
 * Monsalisa: Dropdown
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('dropdown', {
        init: function(context) {
            var defaults = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$target  = $(this.settings.target);
        },

        start: function() {
            this.$el.on('click.toggle', this.toggle.bind(this));
        },

        stop: function() {
            this.$el.off('.toggle');
        },

        toggle: function(e) {
            if (e)
            {
                e.stopPropagation();
                e.preventDefault();
            }


            this.$el.toggleClass('_active');
            this.$target.toggleClass('_hide').toggleClass('_show');
            
            if (this.$el.hasClass('_active') === true) $(window).on('click.toggle', this.close.bind(this));
        },

        close: function(e) {
            this.$el.removeClass('_active');
            this.$target.addClass('_hide');
            this.$target.removeClass('_show');
        }

    });

})(Monalisa);
