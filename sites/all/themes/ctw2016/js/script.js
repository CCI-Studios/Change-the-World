 /* Thank you message pop up */
    
(function($){

$(function(){

      if (document.location.href.indexOf('submit') > -1 )
      {
        $('#block-block-11').fadeIn();
      }

      $(document).mouseup(function (e)
      { 
        var container =$('#block-block-11');
        if (!container.is(e.target)
                  && container.has(e.target).length === 0) 
              {
                  container.fadeOut();
              }
      });


      $('.calendar_title').click(function(e){

          e.preventDefault();
          $('.moreinfo').hide();
          $(this).next().show();
            //$('.moreinfo').not($(this).parent().find('.moreinfo')).slideUp();
            $('.calendar_title').not($(this)).removeClass('open');
            $(this).toggleClass('open');
        
      });

    /* Mobile Menu */

    $('#mobile-menu').click(function(e){

      e.preventDefault();
      $('#block-system-main-menu').slideToggle('slow');

    });

    var fbWidth;

    function attachFluidLikeBox(){
        // the FBML markup: WIDTH is a placeholder where we'll insert our calculated width
        var fbml = '<div class="fb-page" data-adapt-container-width="true" data-height="300" data-small-header="true" data-hide-cover="false" data-href="https://www.facebook.com/sarniagives" data-show-facepile="true" data-small-header="false" data-tabs="timeline">'+
        '<div class="fb-xfbml-parse-ignore">'+
        '<blockquote cite="https://www.facebook.com/sarniagives"><a href="https://www.facebook.com/sarniagives">Sarnia Gives</a></blockquote></div></div>';
        // the containing element in which the Likebox resides
        var container = $('#fb-timeline');  

        // we should only redraw if the width of the container has changed
        if(fbWidth != container.width()){
            container.empty(); // we remove any previously generated markup

            fbWidth = container.width(); // store the width for later comparison

            fbml = fbml.split('WIDTH').join(fbWidth.toString());    // insert correct width in pixels

            container.html(fbml);   // insert the FBML inside the container

            try{
                FB.XFBML.parse();   // parses all FBML in the DOM.
            }catch(err){
                // should Facebook's API crap out - wouldn't be the first time
            }
        }
    }

    var resizeTimeout;

    // Resize event handler
    function onResize(){
        if(resizeTimeout){
            clearTimeout(resizeTimeout);
        }

        resizeTimeout = setTimeout(attachFluidLikeBox, 200);    // performance: we don't want to redraw/recalculate as the user is dragging the window
    }

    // Resize listener
    $(window).resize(onResize);

    // first time we trigger the event manually
    onResize();
  

    });

})(jQuery);