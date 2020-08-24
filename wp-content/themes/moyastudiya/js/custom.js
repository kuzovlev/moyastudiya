$(window).on('load', function () {
    var $preloader = $('.preloader-1'),
        // $svg_anm = $preloader.find('.svg_anm'),
        $main_content = $('.main-content');
    // $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
    $main_content.delay(500).fadeIn('slow');
});

//youtube script

"use strict";
$(function () {
    var videoID = $('#video-bg').data('videoid');
    $(".youtube").each(function () {
        // Based on the YouTube ID, we can easily find the thumbnail image
        $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + videoID + '/maxresdefault.jpg)');

        $(document).delegate('#' + this.id, 'click', function () {
            // Create an iFrame with autoplay set to true
            var iframe_url = "https://www.youtube.com/embed/" + videoID + "?autoplay=1&autohide=1";
            if ($(this).data('params')) iframe_url += '&' + $(this).data('params');

            // The height and width of the iFrame should be the same as parent
            var iframe = $('<iframe/>', {
                id: 'player',
                'frameborder': '0',
                'src': iframe_url,
                'width': $(this).width(),
                'height': $(this).height()
            })

            // Replace the YouTube thumbnail with YouTube HTML5 Player
            $(this).replaceWith(iframe);
        });
    });
});

$(document).ready(function () {
    var singlePost = $('.single-post');
    singlePost.mouseenter(function () {
        $(this).find('.post-gradient').fadeOut(300);
    });
    singlePost.mouseleave(function () {
        $(this).find('.post-gradient').fadeIn(300);
    });
});

$(document).ready(function () {
    //-
    var hLine = 3;
    var sepLine = 7;
    var ease = Power2.easeOut;
    var menuOpened = false;
    var overwrite = "all";
    //-
    var line0 = $('.burger-menu #line0');
    var line1 = $('.burger-menu #line1');
    var line2 = $('.burger-menu #line2');
    var txtBurger = $('.burger-menu .txt-container');
    //-
    TweenMax.set(txtBurger, {y: (hLine + sepLine)});
    TweenMax.set([line0, line2], {transformOrigin: 'center center', z: 0.01});
    //-

    $('.burger-menu').hover(
        function (e) {
            if (!menuOpened) {
                TweenMax.to(txtBurger, 0.3, {
                    y: 0,
                    height: (hLine) + (sepLine * 2),
                    delay: 0.05,
                    ease: ease,
                    overwrite: overwrite
                });
                TweenMax.to(line1, 0.3, {y: (hLine) + (sepLine), ease: ease, overwrite: overwrite});
                TweenMax.to(line1, 0.01, {autoAlpha: 0, delay: 0.3});
            }
        },

        function (e) {
            if (!menuOpened) {
                TweenMax.to(line1, 0.01, {autoAlpha: 1, overwrite: overwrite});
                TweenMax.to(txtBurger, 0.3, {
                    y: (hLine + sepLine),
                    height: 0,
                    delay: 0.05,
                    ease: ease,
                    overwrite: overwrite
                });
                TweenMax.to(line1, 0.3, {y: 0, ease: ease});
            }
        }
    ).bind('click', function (e) {
        //tlOver.pause();
        if (!menuOpened) {
            menuOpened = true;

            TweenMax.to(txtBurger, 0.3, {y: (hLine + sepLine), height: 0, ease: ease, overwrite: overwrite});
            TweenMax.to(line0, 0.3, {
                rotation: 45,
                y: (hLine) + (sepLine),
                delay: 0.12,
                ease: ease,
                overwrite: overwrite
            });
            TweenMax.to(line2, 0.3, {
                rotation: -45,
                y: -(hLine) - (sepLine),
                delay: 0.12,
                ease: ease,
                overwrite: overwrite
            });

        } else {
            menuOpened = undefined;
            TweenMax.to(line0, 0.3, {rotation: 0, y: 0, ease: ease, overwrite: overwrite});
            TweenMax.to(line2, 0.3, {rotation: 0, y: 0, ease: ease, overwrite: overwrite});
            TweenMax.to(txtBurger, 0.3, {
                y: 0,
                height: (hLine) + (sepLine * 2),
                delay: 0.3,
                ease: ease,
                overwrite: overwrite
            });
        }
    });
    var jqBar = $('.mainpage-svg-lg'); // селектор для вашего блока
    var jqBarStatus = true;
    $(window).scroll(function () {
        var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
        if (scrollEvent && jqBarStatus) {
            jqBarStatus = false;
            let el = document.querySelector('#animate');
            let myAnimation = new LazyLinePainter(el, {
                "ease": "easeLinear",
                "strokeWidth": 1,
                "strokeOpacity": 1,
                "strokeColor": "#C99B69",
                "strokeCap": "square"
            });
            myAnimation.paint();
            let firstAct = $('.first-activity');
            let secondAct = $('.second-activity');
            let thirdAct = $('.third-activity');
            setTimeout(function () {
                firstAct.fadeIn(300);
            }, 1500);
            console.log('ok1');
            setTimeout(function () {
                secondAct.fadeIn(300);
            }, 2000);
            console.log('ok2');
            setTimeout(function () {
                thirdAct.fadeIn(300);
            }, 2500);
            console.log('ok3');
        }
    });
    // (function(){
    //     document.onreadystatechange = () => {
    //         if (document.readyState === 'complete') {
    //
    //         }
    //     }
    // })();

});
