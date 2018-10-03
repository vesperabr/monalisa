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
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior'
            };

            // context
            this.context  = context;
            this.settings = Object.assign({}, defaults, context.settings);
            this.$el      = context.$el;
            this.$target  = $(this.settings.target);
        },

        start: function() {
            console.log(this.settings);
            $(this.$el).datepicker(this.settings);
            $('#ui-datepicker-div').addClass('Datapicker');
        }
    });

})(Monalisa);
