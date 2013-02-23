App = Ember.Application.create();

App.Item = Ember.Object.extend({
    name:null,
    url:null
});

App.itemsController = Ember.ArrayController.create({
    content: [],
    searchitem: '',
    loadItems: function() {
        var me = this;
        var searchitem = me.get("searchitem");        
        if (searchitem) {
            me.set('content', []);
            $.ajax({
                url: "http://uk.wikipedia.org/w/api.php?action=opensearch&format=json",
                dataType: "jsonp",
                data: {
                    "search": searchitem                        
                },
                success: function( data ) {
                    $.map( data[1], function( name ) {
                        var item = App.Item.create({
                            "name": name,
                            "url": "http://uk.wikipedia.org/wiki/"+name
                        });
                        me.pushObject(item);
                    });
                }
            });
        }
    }
});

App.SearchTextField = Em.TextField.extend({
    insertNewline: function(){
        App.itemsController.loadItems();
    }
});



function initAutoComplete(){
    $( "#query" ).autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: "http://uk.wikipedia.org/w/api.php?action=opensearch&format=json",
                dataType: "jsonp",
                data: {
                    "search": request.term                        
                },
                success: function( data ) {
                    response( $.map( data[1], function( item ) {
                        return {
                            label: item,
                            value: item
                        }
                    }));
                }
            });
        },
        minLength: 2,
        select: function( event, ui ) {
               
        },
        open: function() {
            $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
        },
        close: function() {
            $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
        }
    });
}
