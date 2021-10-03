$(window).scroll(function(){

    // Add parallax scrolling to all images in .paralax-image container
        $('.block').each(function(){
          // only put top value if the window scroll has gone beyond the top of the image
                  if ($(this).offset().top < $(window).scrollTop()) {
                // Get ammount of pixels the image is above the top of the window
                var difference = $(window).scrollTop() - $(this).offset().top;
                // Top value of image is set to half the amount scrolled
                // (this gives the illusion of the image scrolling slower than the rest of the page)
                var half = (difference / 2) + 'px',
              transform = 'translate3d( 0, ' + half + ',0)';

                $(this).find('.text-wrapper').css('transform', transform);
                $(this).find('img').css('transform', transform);
          } else {
                // if image is below the top of the window set top to 0
                $(this).find('.text-wrapper').css('transform', 'translate3d(0,0,0)');
                $(this).find('img').css('transform', 'translate3d(0,0,0)');
          }
        });
});

function openImg(evt, key) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    console.log(tabcontent)

    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = $('.tablinks')
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(key).style.display = "block";
    evt.currentTarget.className += " active";
}
window.openImg = openImg