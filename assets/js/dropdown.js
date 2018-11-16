$(document).ready (function () {
    $(".dropdown").each( function (ind, el) {
        $(el).find(".menu-item").each( function (ind2,el2) {
            if (ind2 == 0) {
                $(el2).addClass("first");
            }
        });
    }); 
});