/**
 * Monsalisa: Toggle
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('number', {
        init: function(context) {
            var defaults = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);
        },

        start: function() {
            if ($(this.$el.find('.decrement')).length == 0) {
                this.$el.prepend('<span class="decrement button">-</span>');
            } else {
                this.$el.find('.decrement').removeClass('_disable');

            }
            if ($(this.$el.find('.increment')).length == 0) {
                this.$el.append('<span class="increment button">+</span>');
            } else {
                this.$el.find('.increment').removeClass('_disable');

            }

            var $increment = this.$el.find('.increment');
            var $decrement = this.$el.find('.decrement');
            $increment.on('click', this.increment.bind(this));
            $decrement.on('click', this.decrement.bind(this));
        },

        stop: function() {
            this.$el.find('.button').off('click');
            this.$el.find('.decrement').addClass('_disable');
            this.$el.find('.increment').addClass('_disable');
        },

        increment: function(e) {
            var button = $(e.toElement);
            var oldValue = button.parent().find("input").val();

            button.parent().find("input").val(parseFloat(oldValue) + 1);
        },

        decrement: function(e) {
            var button = $(e.toElement);
            var oldValue = button.parent().find("input").val();

            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }

            button.parent().find("input").val(newVal);
        }

    });

})(Monalisa);
