$(document).ready(function() {
    var $loginLeftText = $(".login-left-text-inner");
    var $loginRightWrap = $(".login-right-wrap");
    var $loginRight = $(".login-right");

    function swap() {
        if ($(window).width() < 768) {
            $loginRight.insertAfter($loginLeftText);
        } else {
            $loginRight.insertAfter($loginRightWrap);
        }
    }

    // Run on load
    swap();

    // Run on window resize
    $(window).resize(swap);
});
