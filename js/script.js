$(function(){
$("#navbarNav").bootnavbar();
});

$(function () {

    $('btn').click(function () {
        var text = $(this).text();
        alert(text);
    });

    $(document).scroll(function () {

        var top = $(document).scrollTop();
        console.log(top);

        if (top > 200) {
            $('.back-top').fadeIn();
        } else {
            $('.back-top').fadeOut();
        }

    });

    $('.back-top').click(function () {
        $('html').animate({
            scrollTop: 0
        }, 1500);
    });

        $('html').animate({
            scrollTop: xx
        }, 1500);
    });