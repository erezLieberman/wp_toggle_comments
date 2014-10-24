

(function ($) {
 
    $(document).ready(function () {
          
        $(function () {
            
            // retrieve the using_options from wp
            var using_options = ourPhpVariables.using_options_to_jquery;
            console.log(using_options);
            
            function jqueryToggle(){
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
            }

            if(using_options == "enable_in_all"){
              jqueryToggle();
            }else if(using_options == "enable_in_shortcode_only"){
                if($('.have_shortcode').length > 0){
                  jqueryToggle();  
                }
            } 
        });
        
        //end of document.ready function
    });
    
})(jQuery);