function check(x) {
    if (x.className.indexOf("checked") == -1) {
        x.className = "button checked event_status event_detail";
        x.innerHTML = "<i class='fa fa-check-circle'></i>&nbsp;Participating";
    } else {
        x.className = "button event_status event_detail";
        x.innerHTML = "<i class='fa fa-circle-o'></i>&nbsp;Participate";
    }
}
