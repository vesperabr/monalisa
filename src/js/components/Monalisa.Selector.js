/**
 * Monsalisa: Validate
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('selector', {
        init: function(context) {
            // defaults
            var defaults = {};

            // context
            this.context  = context;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$el      = context.$el;
        },
        start: function() {
            this.$selector = (this.$el.context.tagName === 'SELECT') ? this.$el : this.$el.find('input');
            this.$selector.on('change.selector', this._toggle.bind(this));
        },
        stop: function() {
            this.$selector.off('.selector');
        },

        // private
        _toggle: function() {
            var $boxes = $([]);
            var $targets = (this.$el.context.tagName === 'SELECT') ? this.$selector.find('option') : this.$selector;

            $targets.each(function(index, el) {
                if (el.value.search(/^#/) === 0) {
                    $(el.value).addClass('_hide');
                }
            }.bind(this));

            var value = (this.$el.context.tagName === 'SELECT') ? this.$selector.val() : this.$selector.filter(':checked').val();
            var $box = $(value);

            $box.removeClass('_hide');
        }
    });

})(Monalisa);