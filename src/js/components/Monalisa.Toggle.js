/**
 * Monsalisa: Toggle
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('toggle', {
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
            if(e) e.preventDefault();
            this.$target.toggle();
        }

    });

})(Monalisa);
