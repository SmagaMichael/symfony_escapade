(function(){

    var chat = {
      messageToSend: '',
  
      init: function() {
        this.cacheDOM();
        this.render();
      },
      cacheDOM: function() {
        this.$chatHistory = $('.chat-history');
      },
     
      render: function() {
        this.scrollToBottom();
        if (this.messageToSend.trim() !== '') {
          this.scrollToBottom();
        }
      },
      
      scrollToBottom: function() {
         this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
      },

    };
    
    chat.init();
  
  })();
  


  $('.message-data-name').click(function() {
    var $this = $(this);

    var parent = $this.parents("li");

    if (parent.find('.btn').is('[hidden]')) {
      parent.find('.btn').removeAttr('hidden');
    } else {
      parent.find('.btn').attr('hidden','');
    }


    // console.log(parent)

});


  $('.button-message').click(function() {
    

  var message = $('#love_message_form_text').val();
  console.log(message)

    if (message !== '') {

      setTimeout(function() {
        $('.button-message').attr('disabled','');
      
      }, 10);
     

    }

});