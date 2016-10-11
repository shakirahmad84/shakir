jQuery(document).ready(function () {

    // window height
    function headerHeight() {

        var windowH = $(window).height();
        $(".header-top").css('height', windowH);

        var logoH = $(".logo").height(),
            vertical = ((windowH - logoH) / 2);

        $(".logo").css({
            paddingTop: vertical,
            paddingBottom: vertical
        });

    }

    headerHeight();

    $(window).resize(function () {
        headerHeight();
    });

    $(window).load(function () {
        headerHeight();
    });


    //smoth scroll
    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;
            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });


});
