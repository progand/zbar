App = Ember.Application.create({
    mixmaster: 'Andy',
    totalReviews: 0,
    ready: function(){
        
    }
});
App.SearchTextField = Em.TextField.extend({
    insertNewline: function(){
         //App.tweetsController.loadTweets();
    }
});