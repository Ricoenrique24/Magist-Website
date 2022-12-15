//Menu JS
$(document).ready(function () {
    $(".menu-item").click(function() {
        const value = $(this).attr("data-menu");
        if (value == "all") {
            $(".menu-box").show("1000");
        } else {
            $(".menu-box")
                .not("." + value)
                .hide("1000");
            $(".menu-box")
                .filter("." + value)
                .show("1000");
        }
    });
    //Add Active Button
    $(".menu-item").click(function() {
        $(this).addClass("active-filter").siblings().removeClass("active-filter");
    });
});
//Nav Change on Scroll
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
    header.classList.toggle("shadow", window.scrollY > 0);
});