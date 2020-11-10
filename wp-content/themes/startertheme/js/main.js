/**
 * main.js
 *
 */

(function($) {
  
    

    
     /**
	 * image section background swap
	 */
    
    function updateImgBkg() { 
        $window = $(window); 
         var  windowWidth = $window.innerWidth();
        
        // Swap background images if needed
        $('.has-background-image').each(function() {
            var back = $(this).css('background-image');
            back = back.replace('url("','').replace('")','');
            back = back.replace('url(\'','').replace('\')','');
            back = back.replace('url(','').replace(')','');

            var m = $(this).data('background-mobile');
            var d = $(this).data('background');
            
            if (m && d) {
                if (windowWidth <= 768 ) {
                    // mobile
                    if (back != m) {
                        // switch background to mobile image
                        var new_back = 'url("' + m + '")';
                        $(this).css('background-image', new_back);
                        console.log('Backgrounds switched to mobile');
                    }

                } else {
                   // desktop
                    if (back != d) {
                        // switch background to desktop image
                        var new_back = 'url("' + d + '")';
                        $(this).css('background-image', new_back);
                        console.log('Backgrounds switched to desktop');
                    }
                }    
            }
            
        });
    }
    updateImgBkg();
    window.addEventListener("resize", updateImgBkg);
   
    
   
    
    
    
    /**
	 * Skrollr
	 */
    var thisSkrollr;
    if ($(window).width() > 576 && $(window).height() > 576) {
        var thisSkrollr = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                //console.log(data.curTop);
            },
            forceHeight: false // prevent excessively tall footer, but causes some animations to not finish
        });
        if (thisSkrollr.isMobile()) {
            thisSkrollr.destroy(); 
        }
    } else {
         console.log ('no skrollr');
    }
    
    
    

    /**
	 * Scrolling animation
	 */
    function goToByScroll(theId) {
      
        $('html, body').animate({
            scrollTop: $(theId).offset().top
        }, 1000, 'easeInOutQuint');
    }
    
    
   
    
    
})( jQuery );