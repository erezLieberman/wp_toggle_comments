

(function($) {
 
    $(document).ready(function(){
        $(function(){
          $('.comment-notes').toggle();
          $('.comment-form-author').toggle();
          $('.comment-form-email').toggle();
          $('.comment-form-url').toggle();
          $('.form-submit').toggle();
          $('.subscribe-to-comments').toggle();
          $('.comment-subscription-form').toggle();

          $('.comment-form-comment textarea').on('focus',function(){

            if($('.form-submit').css('display') != "block"){

              $('.comment-notes').slideToggle("fast");
              $('.comment-form-author').slideToggle("fast");
              $('.comment-form-email').slideToggle("fast");
              $('.comment-form-url').slideToggle("fast");
              $('.form-submit').slideToggle("fast");
              $('.subscribe-to-comments').slideToggle("fast");
              $('.comment-subscription-form').slideToggle("fast");

            }

          })
        });
        
        //end of document.ready function
    });
    
})(jQuery);