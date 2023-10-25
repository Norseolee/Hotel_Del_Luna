$(function () {
    if (
        $(document).height() > $(window).height() &&
        !("ontouchstart" in document.documentElement)
    ) {
        var scrollTop = $("html").scrollTop()
            ? $("html").scrollTop()
            : $("body").scrollTop();
        $("html").addClass("noscroll").css("top", -scrollTop);
    }

    $(".fa-x").click(function () {
        let $toggleOption = $(this).closest(".toggle_option");
        $toggleOption.slideUp("fast", enableScroll);
    });

    $(".toggle_option").hide();
    $(".toggle_btn").click(function () {
        let $toggleOption = $(this).next(".toggle_option");
        $toggleOption.slideToggle(function () {
            if ($toggleOption.is(":visible")) {
                disableScroll();
            } else {
                enableScroll();
            }
        });
    });

    function disableScroll() {
        var scrollTop = parseInt($("html").css("top"));
        $("html").addClass("noscroll");
        $("html,body").scrollTop(-scrollTop);
    }

    function enableScroll() {
        var scrollTop = parseInt($("html").css("top"));
        $("html").removeClass("noscroll");
        $("html,body").scrollTop(-scrollTop);
    }

    enableScroll();
});
