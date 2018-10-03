/**
 * Monsalisa: Alert
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('alert', {
        init: function(context) {
            var defaults = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
        },
        start: function() {
            this.$el.on('click', '.close', this.close.bind(this));
        },

        stop: function() {
            this.$el.off();
        },

        open: function() {
            this.$el.show('slow');
        },
        
        close: function() {
            this.$el.hide('slow');
        },
    });

})(Monalisa);
