/**
 * Monsalisa
 * @author Véspera Tecnologia
 */

;if (typeof jQuery === 'undefined' && typeof Zepto === 'undefined') {throw new Error('Monalisa requires jQuery or Zepto')};

var $M = {
    options: {},
    components: {},
    componentsAvaible: {},

    init: function(options) {
        if (options) this.options = options;
        this.loadComponents();
        this.startComponents();
    },

    // Add a component in avaible list
    addComponent: function(name, prototype) {
        var F = function() {};
        F.prototype = prototype;
        this['componentsAvaible'][name] = F;

        return true;
    },

    // Load DOM components
    loadComponents: function() {
        var options = this.options;

        $(document).find('[data-component]').each(function(index, el) {
            var context  = new Context(index, el, options);
            var instance = new Instance(context);

            if (instance && instance.init) {
                $M['components'][context.id] = instance;
                instance.init(context);
            } else {
                console.error('Error loading component: ' + context.component);
            }
        });
    },

    // Start all components
    startComponents: function() {
        for (var c in this.components) {
            this["components"][c].start();
        }
    },

    // Stop all components
    stopComponents: function() {
        for (var c in this.components) {
            this["components"][c].stop();
        }
    }
};

var Context = function(index, el, options) {
    var $el       = $(el);
    var data      = $el.data();
    var component = $el.data('component');
    var id        = ($el.attr('id')) ? $el.attr('id') : component + '-' + index;
        id        = ($el.attr('data-name')) ? $el.attr('data-name') : id;

    if ($el.attr('id') == undefined) {
        $el.attr('id', component + '-' + index);
    }

    if (typeof options[id] !== 'undefined') {
        data = Object.assign({}, data, options[id]);
    }

    delete data.component;

    return {
        $el: $el,
        component: component,
        id: id,
        settings: data
    }
};

var Instance = function(context) {
    var Component = $M['componentsAvaible'][context.component];
    var instance  = false;

    if (typeof Component !== 'undefined') {
        instance = new Component();
    } else {
        console.error('Component not found: ' + context.component);
    }

    return instance;
};

window.Monalisa = window.$M = $M;
