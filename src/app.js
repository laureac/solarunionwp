$(window).ready(function(){

  setTimeout(function(){ $('#loading-screen').fadeOut(); }, 3000);
   
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