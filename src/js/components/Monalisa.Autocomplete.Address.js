/**
 * Monsalisa: Autocomplete Address
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('autocomplete-cep', {
        init: function(context) {
            var defaults = {
                api: 'https://viacep.com.br/ws/{{cep}}/json/',
                apiAddress: 'logradouro',
                apiNeighborhood: 'bairro',
                apiCity: 'localidade',
                apiState: 'uf',
                address: '[data-autocomplete-address]',
                neighborhood: '[data-autocomplete-neighborhood]',
                city: '[data-autocomplete-city]',
                state: '[data-autocomplete-state]'
            };

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);

            this.currentCep = this.$el.val();
        },

        start: function() {
            this.$el.on('blur change keyup', this.sendRequest.bind(this));
        },

        stop: function() {
            this.$el.off('blur change keyup');
        },

        sendRequest: function() {
            var cep = this.$el.val().replace(/\-|\./g, "");

            if (cep && this.currentCep !== cep && cep.length === 8) {
                var self = this;
                this.currentCep = cep;

                $.ajax({
                    url: this.settings.api.replace('{{cep}}', cep),
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        self.bindValues(response);
                    }
                });
            }
        },

        bindValues: function(values) {
            var settings      = this.settings;
            var $address      = $(settings.address);
            var $neighborhood = $(settings.neighborhood);
            var $city         = $(settings.city);
            var $state        = $(settings.state);

            $address.val(values[settings.apiAddress]);
            $neighborhood.val(values[settings.apiNeighborhood]);

            if ($state.is('select')) {
                $state.children('option').each(function(index, el) {
                    let $children = $(el);
                    if ($children.text().indexOf(values[settings.apiState]) > -1) {
                        $children.prop('selected', true);
                    }
                });
            } else {
                $state.val(values[settings.apiState]);
            }
            $state.change();

            if ($city.is('select')) {
                $city.children('option').each(function(index, el) {
                    let $children = $(el);
                    if ($children.text().indexOf(values[settings.apiCity]) > -1) {
                        $children.prop('selected', true);
                    }
                });
            } else {
                $city.val(values[settings.apiCity]);
            }
            $city.change();
        }
    });

})(Monalisa);
