$(window).on('load', function () {
    var $preloader = $('.preloader-1'),
        // $svg_anm = $preloader.find('.svg_anm'),
        $main_content = $('.main-content');
    // $svg_anm.fadeOut();
    if (window.location.href.indexOf("uk") > -1) {
        $('#menu-item-language-uk').remove();
    }
    if (window.location.href.indexOf("en") > -1) {
        $('#menu-item-language-en').remove();
    }
    if (window.location.href.indexOf("uk") === -1 && window.location.href.indexOf("en") === -1) {
        $('#menu-item-language-ru').remove();
    }
    $(".active-lang a").click(function(e){
        if (e.target == this)
            e.preventDefault();
    });
    $preloader.delay(500).fadeOut('slow');
    $main_content.delay(500).fadeIn('slow');

});

//youtube script

"use strict";
$(function () {
    var videoID = $('#video-bg').data('videoid');
    $(".youtube").each(function () {
        // Based on the YouTube ID, we can easily find the thumbnail image
        $(this).css('background-image', 'url(https://i.ytimg.com/vi/' + videoID + '/maxresdefault.jpg)');

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
            line1.fadeOut(300);
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
            line1.fadeIn(300);
        }
    });
    var scrollProjects = $('#our_projects');
    var scrollProjStatus = true;
    $(window).scroll(function () {
        var scrollEvent = ($(window).scrollTop() > (scrollProjects.position().top - $(window).height()));
        if (scrollEvent && scrollProjStatus) {
            scrollProjStatus = false;
            [].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
                img.setAttribute('src', img.getAttribute('data-src'));
                img.onload = function() {
                    img.removeAttribute('data-src');
                };
            });
            //
            // ОДИН ИЗ ВАРИАНТОВ РЕШЕНИЯ ПРОБЛЕМЫ ВЫСОТЫ БЛОКА //

            // var postImages = $('.single-post_image').toArray();
            // $.each(postImages, function () {
            //     var naturalHeight =  this.naturalHeight;
            //     $(this).parent('.single-post').css({'height':naturalHeight});
            // })
        }
    });
    if ($('.mainpage-svg-lg').length) {
        var jqBar = $('.mainpage-svg-lg'); // селектор для вашего блока
        var jqBarStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus) {
                jqBarStatus = false;
                var el = document.querySelector('#VectorLg');
                var myAnimation = new LazyLinePainter(el, {
                    "ease": "easeLinear",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimation.paint();
                var firstAct = $('.first-activity');
                var secondAct = $('.second-activity');
                var thirdAct = $('.third-activity');
                setTimeout(function () {
                    firstAct.css({
                        "animation-duration":"1s",
                        "animation-name":"fade-in-left",
                        "visibility":"visible"
                    });
                }, 168);
                setTimeout(function () {
                    secondAct.css({
                        "animation-duration":".5s",
                        "animation-name":"fade-in-down",
                        "visibility":"visible"
                    });
                }, 655);
                setTimeout(function () {
                    thirdAct.css({
                        "animation-duration":".5s",
                        "animation-name":"fade-in-left",
                        "visibility":"visible"
                    });
                }, 1040);
            }
        });
    }


    if($('.mainpage-svg-xxl').length){
        var mpxxl = $('.mainpage-svg-xxl');
        var mpxxlStatus = true;
        $(window).scroll(function(){
            var scrollEvent = ($(window).scrollTop() > (mpxxl.position().top - $(window).height()));
            if (scrollEvent && mpxxlStatus){
                mpxxlStatus = false;
                var el = document.querySelector('#Vectorxxl');
                var myAnimationXXL = new LazyLinePainter(el, {
                    "ease": "easeLinear",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimationXXL.paint();
            }
        })
    }

    if($('.mainpage-svg-xl').length){
        var mpxl = $('.mainpage-svg-xl');
        var mpxlStatus = true;
        $(window).scroll(function(){
            var scrollEvent = ($(window).scrollTop() > (mpxl.position().top - $(window).height()));
            if (scrollEvent && mpxlStatus){
                mpxlStatus = false;
                var el = document.querySelector('#Vector2000');
                var myAnimationXL = new LazyLinePainter(el, {
                    "ease": "easeLinear",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimationXL.paint();
                var firstAct = $('.first-activity');
                var secondAct = $('.second-activity');
                var thirdAct = $('.third-activity');
                setTimeout(function () {
                    firstAct.fadeIn(300);
                }, 168);
                setTimeout(function () {
                    secondAct.fadeIn(300);
                }, 655);
                setTimeout(function () {
                    thirdAct.fadeIn(300);
                }, 1040);
            }
        })
    }

// Create a lightbox
    (function () {
        var $lightbox = $("<div class='lightbox'></div>");
        var $img = $("<img>");
        var $caption = $("<p class='caption'></p>");

        // Add image and caption to lightbox

        $lightbox
            .append($img);
        // .append($caption);

        // Add lighbox to document

        $('body').append($lightbox);

        $('.mgl-img-container img').click(function (e) {
            e.preventDefault();
            var src = $(this).attr("src");
            var cap = $(this).attr("alt");

            $img.attr('src', src);
            $caption.text(cap);

            $lightbox.fadeIn('fast');

            $lightbox.click(function () {
                $lightbox.fadeOut('fast');
            });
        });

    }());
    // (function(){
    //     document.onreadystatechange = () => {
    //         if (document.readyState === 'complete') {
    //
    //         }
    //     }
    // })();
    var wpcf7Elm = document.querySelector( '.wpcf7' );
    wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
        if (window.location.href.indexOf("uk") > -1) {
            var formMess = "<div class='respon_mess'><p>Дякуємо! Незабаром мі з Вамі зв'яжемось!</p></div>"
        }
        if (window.location.href.indexOf("en") > -1) {
            var formMess = "<div class='respon_mess'><p>Thanks! Will contact you as soon as possible!</p></div>"
        }
        if (window.location.href.indexOf("uk") === -1 && window.location.href.indexOf("en") === -1) {
            var formMess = "<div class='respon_mess'><p>Спасибо! Мы скоро с Вами свяжемся!</p></div>"
        }
        $(this).fadeOut(300);

        $('#c-form').append(formMess);

        // Либо что-то более полезное
    }, false );
});
