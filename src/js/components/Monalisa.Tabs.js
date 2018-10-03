/**
 * Monsalisa: Tabs
 * @author VESPERA
 * @version 1.0.0
 */

;(function($M) {

    $M.addComponent('tabs', {
        init: function(context) {
            var defaults  = {};

            this.context  = context;
            this.$el      = context.$el;
            this.settings = Object.assign({}, defaults, context.settings);

            // items
            this.$items   = this.$el.find('a');
        },
        
        start: function() {

            this.tabsCollection = [];
            
            // items
            this.$items.each(this.loadItems.bind(this));
            
            // tabs
            this.$tabs = this.getTabs();
        },

        stop: function() {
            this.$items.off('click');
        },
        
        getTabs: function() {
            return $(this.tabsCollection).map(function(){
                return this.toArray();
            });
        },
      
        getItem: function(element) {
            var item     = {};
            
            item.$el     = $(element);
            item.hash    = item.$el.attr('href');
            item.$parent = item.$el.parent();
            item.$tab    = $(item.hash);

            return item;
        },
        
        loadItems: function(i, el) {
            var item = this.getItem(el);

            item.$el.attr('rel', item.hash);
            this.tabsCollection.push(item.$tab);

            // active
            if (i === 0) {
                item.$tab.removeClass('_hide').addClass('_open');
                item.$parent.addClass('_active');
            } else {
                item.$tab.addClass('_hide');
            }

            // event
            item.$el.click(this.open.bind(this));
        },
        
        open: function(e, item) {
            e.preventDefault();

            var item = this.getItem(e.target);

            this.$tabs.removeClass('_open').addClass('_hide');
            this.$items.parent().removeClass('_active');

            item.$parent.addClass('_active');
            item.$tab.removeClass('_hide').addClass('_open');
        }
    });

})(Monalisa);
