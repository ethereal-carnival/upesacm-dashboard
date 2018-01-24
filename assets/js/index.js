function scrolled() {
    var scrollTop = document.getElementById("overlay").scrollTop;
    if (scrollTop == 0) {
        document.getElementById("header").style.background = "rgba(255,255,255,0.8)";
        document.getElementById("header").style.height = "8vh";
        document.getElementById("header").style.paddingTop = "2vh";
    }
    else {
        document.getElementById("header").style.background = "rgba(255,255,255,1)";
        document.getElementById("header").style.height = "7vh";
        document.getElementById("header").style.paddingTop = "1vh";
    }
    //else document.getElementById("header").style.background = "rgba(78,9,103,1)";
}
