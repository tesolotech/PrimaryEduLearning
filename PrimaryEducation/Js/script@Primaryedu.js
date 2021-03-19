$(document).ready(function() {
    $(".dropdown").hover(
        function() {
            $('.sub-menu').stop(true, true).slideDown('medium');
        },
        function() {
            $('.sub-menu').stop(true, true).slideUp('medium');
        }
    });
});