/**
 * Monsalisa: Toggle
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('on_send', {
        init: function(context) {
            var defaults = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$target  = $(this.settings.target);
        },

        start: function() {
            this.$el.parent('form').on('submit', this.onSend.bind(this));
        },

        stop: function() {
            this.$el.off('submit');
        },

        onSend: function(e) {
            if(e) e.preventDefault();

            this.$el.attr('disabled', 'true');
        }

    });

})(Monalisa);
