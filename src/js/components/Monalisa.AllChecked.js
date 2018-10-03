/**
 * Monsalisa: Alert
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {
    
    $M.addComponent('check_all', {
        init: function(context) {
            var defaults = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
        },

        start: function() {
            this.$all = this.$el.find('[data-type=all]');
            this.$el.on('click', this.$all.selector, this.checked.bind(this));
        },

        stop: function() {
            this.$el.off('.checked');
        },

        checked: function(e) {
            this.$el.children().children('input:checkbox').prop('checked', this.$all[0].checked);
        }
    });

})(Monalisa);
