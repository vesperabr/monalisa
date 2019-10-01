/**
 * Monsalisa: On Send
 * This plugin prevent forms to be submited more than one time.
 * @author Véspera Tecnologia
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('onsend', {
        init: function(context) {
            var defaults = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$target  = $(this.settings.target);
        },

        start: function() {
            this.$el.parents('form').on('submit', this.disableButton.bind(this));
        },

        stop: function() {
            this.$el.off('submit');
        },

        disableButton: function(e) {
            let text = this.$el.attr('data-text');

            if (text) {
                this.$el.attr('data-text', this.$el.html());
                this.$el.html(text);
            }

            this.$el.addClass('_loading');
            this.$el.prop('disabled', true);
        },

        enableButton: function(e) {
            let text = this.$el.attr('data-text');

            if (text) {
                this.$el.attr('data-text', this.$el.html());
                this.$el.html(text);
            }

            this.$el.removeClass('_loading');
            this.$el.prop('disabled', false);
        }
    });

})(Monalisa);
