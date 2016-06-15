/*global document, window, alert, console, require*/
function menu_toggle() {
    'use strict';
    document.getElementsByClassName("nav-list")[0].classList.toggle("responsive");
}

(function () {
    'use strict';
    var i;
    i = setInterval(function () {
        return $("#menubox").toggleClass("cross");
    }, 1500);
    $("#menubox").click(function () {
        clearInterval(i);
        return $("#menubox").toggleClass("cross");
    });
}).call(this);
