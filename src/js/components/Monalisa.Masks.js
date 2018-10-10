/**
 * Monsalisa: Tabs
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('masks', {
        init: function(context) {
            var defaults  = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);

            // items
            this.$items   = this.$el.find('.mask');
        },
        
        start: function() {
            // items
            this.$items.each(this.masks.bind(this));
        },

        stop: function() {
            this.$items.unmask(this);
        },
        
        masks: function(i, el) {
            var type = $(el).data('type');
            $(el).attr('autocomplete', 'nope')


            if (type === 'date') {
                $(el).mask('00/00/0000', {selectOnFocus: true});
            } else if (type === 'time') {
                $(el).mask('00:00');
            } else if (type === 'date_time') {
                $(el).mask('00/00/0000 00:00');
            } else if (type === 'cep') {
                $(el).mask('00000-000');
            } else if (type === 'cpf') {
                $(el).mask('000.000.000-00');
            } else if (type === 'cnpj') {
                $(el).mask('00.000.000/0000-00');
            } else if (type === 'phone_us') {
                $(el).mask('(000) 000-0000');
            } else if (type === 'telefone') {
                var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };

                $(el).mask(SPMaskBehavior, spOptions);
            }
        },
    });

})(Monalisa);

