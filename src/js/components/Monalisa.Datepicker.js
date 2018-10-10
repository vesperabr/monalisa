/**
 * Monsalisa: Datepicker
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {
    $M.addComponent('datepicker', {
        init: function(context) {
            // defaults
            var defaults = {
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: '>',
                prevText: '<',
                showOtherMonths: true,
                selectOtherMonths: true
            };

            // context
            this.context  = context;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$el      = context.$el;
            this.$target  = $(this.settings.target);
        },

        start: function() {
            $(this.$el).mask('00/00/0000', {selectOnFocus: true});
            $(this.$el).datepicker(this.settings);
            $(this.$el).datepicker( "option", { disabled: false } );
            $('#ui-datepicker-div').addClass('Datepicker');
        },

        stop: function() {
            $(this.$el).datepicker( "option", { disabled: true } );
        }
    });

})(Monalisa);
