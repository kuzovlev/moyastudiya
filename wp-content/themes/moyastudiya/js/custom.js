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
    $(".active-lang a").click(function (e) {
        if (e.target == this)
            e.preventDefault();
    });
    $preloader.delay(500).fadeOut('slow');
    $main_content.delay(500).fadeIn('slow');

    $('header').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-up'
    });
    if ($('#about-us').length){
        var textWrapper = document.querySelector('.about_text_animate');

        textWrapper.innerHTML = textWrapper.textContent.replace(/[\wа-яёіє]+./gim, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
            .add({
                targets: '.about_text_animate .letter',
                translateX: [40,0],
                translateZ: 0,
                opacity: [0,1],
                easing: "easeOutExpo",
                duration: 300,
                delay: (el, i) => 500 + 10 * i
            });
        $('.about-right-block').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-right'
        })
    }
    if ($('.about-us-underline').length) {
        var aboutUnder = $('.about-us-underline'); // селектор для вашего блока
        var aboutUnderStatus = true;
        $(window).scroll(function () {
            var scrollAbout = ($(window).scrollTop() > (aboutUnder.position().top - $(window).height()));
            if (scrollAbout && aboutUnderStatus) {
                aboutUnderStatus = false;
                var el = document.querySelector('#aboutUsLine');
                var myAnimation = new LazyLinePainter(el, {
                    "ease":"easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimation.paint();
                $('.about-header').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-in-up',
                    'visibility':'visible'
                });
                $('#clients .about-us_text').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-in-left',
                    'visibility':'visible'
                })
            }
        });
    }
    if ($('.proj-one-img').length){
        $('.post-header').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-left',
            'visibility':'visible'
        });
        $('.post-text-head').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-right',
            'visibility':'visible'
        });
        $('.single-post-content').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-down',
            'visibility':'visible'
        })
    };
    if($('.section-main_top').length){
        $('.header-mainpage').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-left',
            'visibility':'visible'
        });
        $('.video-mainpage').css({
            'animation-duration': '1s',
            'animation-name': 'fade-in-right',
            'visibility':'visible'
        })
    }
});
$(document).ready(function () {
    if($('.project_image').length){
        [].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.onload = function () {
                img.removeAttribute('data-src');
            };
        });
    }
    $("a").click(function(event){
        event.preventDefault();
        var linkLocation = this.href;
        $('.main-content').delay(100).fadeOut(200);
        $('.preloader-1').delay(100).fadeIn(200);
        window.location = linkLocation;
    });
    var menuInfoPhone = $('.phone-Ukr').html(),
        menuInfoMail = $('.email-foot-link').html(),
        menuInfoAddr = $('.addr-Ukr').html(),
        logoMobile = $('footer .custom-logo-link').html(),
        mobileSocial = $('footer .logo_soc-buttons').html();

    $('#collapsibleNavbar').append(`
        <div class="mobile-langmenu" style="position:absolute; bottom: 0;">
            <ul>
                <li class="mobile-lang-rus">
                    <a href="/">РУС</a>
                </li>
                <li class="mobile-lang-ukr">
                    <a href="/uk">УКР</a>
                </li>
                <li class="mobile-lang-eng">
                    <a href="/en">ENG</a>
                </li>
            </ul>
            <div class="mobile-menu-contacts">
                <a mailto="`+menuInfoMail+`">` + menuInfoMail + `</a>
                <a tel="`+menuInfoPhone+`">` + menuInfoPhone + `</a>
                <p>` + menuInfoAddr + `</p>
            </div>
        </div>
        <div class="mobile-menu-footer">
            <div class="logo">`+logoMobile+`</div>
            <div class="soc-netw">`+mobileSocial+`</div>
        </div>
    `);
    if (window.location.href.indexOf("uk") > -1) {
        $('.mobile-lang-ukr').remove();
    }
    if (window.location.href.indexOf("en") > -1) {
        $('.mobile-lang-eng').remove();
    }
    if (window.location.href.indexOf("uk") === -1 && window.location.href.indexOf("en") === -1) {
        $('.mobile-lang-rus').remove();
    }
})
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
        $(this).find('.post-contents').fadeOut(200);
        $(this).find('.post-gradient').fadeOut(200);
    });
    singlePost.mouseleave(function () {
        $(this).find('.post-contents').fadeIn(200);
        $(this).find('.post-gradient').fadeIn(200);
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
            $('.burger-menu').css({"position":"fixed"});
            $('.header-logo').css({"position":"fixed"});
            // TweenMax.to(txtBurger, 0.3, {y: (hLine + sepLine), height: 0, ease: ease, overwrite: overwrite});
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
            $('.burger-menu').css({"position":"absolute"});
            $('.header-logo').css({"position":"unset"});
            menuOpened = undefined;
            TweenMax.to(line0, 0.3, {rotation: 0, y: 0, ease: ease, overwrite: overwrite});
            TweenMax.to(line2, 0.3, {rotation: 0, y: 0, ease: ease, overwrite: overwrite});
            line1.fadeIn(300);
        }
    });
    var scrollProjects = $('#our_projects');
    var scrollProjStatus = true;
    if (scrollProjects.length) {
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (scrollProjects.position().top - $(window).height()));
            if (scrollEvent && scrollProjStatus) {
                scrollProjStatus = false;
                [].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
                    img.setAttribute('src', img.getAttribute('data-src'));
                    img.onload = function () {
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
    }
    if ($('.mainpage-svg-lg').length && $(".mainpage-svg-lg").css("display")!=="none") {
        var jqBar = $('.mainpage-svg-lg'); // селектор для вашего блока
        var jqBarStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus) {
                jqBarStatus = false;
                var el = document.querySelector('#VectorLg');
                var myAnimation = new LazyLinePainter(el, {
                    "ease":"easeOutQuad",
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
                    $('.star-1-overlay').fadeOut(100);
                    firstAct.css({
                        "animation-duration": "1s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 77);

                setTimeout(function () {
                    $('.star-2-overlay').fadeOut(100);
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-down",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 319);
                setTimeout(function () {
                    $('.star-3-overlay').fadeOut(100);
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 520);
            }
        });
    }


    if ($('.mainpage-svg-xxl').length && $(".mainpage-svg-xxl").css("display")!=="none") {
        var mpxxl = $('.mainpage-svg-xxl');
        var mpxxlStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (mpxxl.position().top - $(window).height()));
            if (scrollEvent && mpxxlStatus) {
                mpxxlStatus = false;
                var el = document.querySelector('#Vectorxxl');
                var myAnimationXXL = new LazyLinePainter(el, {
                    "ease":"easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimationXXL.paint();
                var firstAct = $('.first-activity');
                var secondAct = $('.second-activity');
                var thirdAct = $('.third-activity');
                setTimeout(function () {
                    $('.star-1-overlay').fadeOut(100);
                    firstAct.css({
                        "animation-duration": "1s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 204);
                setTimeout(function () {
                    $('.star-2-overlay').fadeOut(100);
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-down",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 345);
                setTimeout(function () {
                    $('.star-3-overlay').fadeOut(100);
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 457);
            }
        })
    }

    if ($('.mainpage-svg-xl').length && $(".mainpage-svg-xl").css("display")!=="none") {
        var mpxl = $('.mainpage-svg-xl');
        var mpxlStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (mpxl.position().top - $(window).height()));
            if (scrollEvent && mpxlStatus) {
                mpxlStatus = false;
                var el = document.querySelector('#Vector2000');
                var myAnimationXL = new LazyLinePainter(el, {
                    "ease":"easeOutQuad",
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
                    $('.star-1-overlay').fadeOut(100);
                    firstAct.css({
                        "animation-duration": "1s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 150);

                setTimeout(function () {
                    $('.star-2-overlay').fadeOut(100);
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-down",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 333);
                setTimeout(function () {
                    $('.star-3-overlay').fadeOut(100);
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 600);
            }
        })
    }
    if ($('.mainpage-svg-sm').length && $(".mainpage-svg-sm").css("display")!=="none") {
        var mpsm = $('.mainpage-svg-sm');
        var mpsmStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (mpsm.position().top - $(window).height()));
            if (scrollEvent && mpsmStatus) {
                mpsmStatus = false;
                var el = document.querySelector('#Vector3');
                var myAnimationSM = new LazyLinePainter(el, {
                    "ease":"easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square",
                    "reverse":"true"
                });
                myAnimationSM.paint();
                $('.full-height-star-overlay').css({
                    "animation-duration": ".7s",
                    "animation-name": "fade-out-down",
                    "visibility": "hidden",
                })
                var firstAct = $('.first-activity');
                var secondAct = $('.second-activity');
                var thirdAct = $('.third-activity');
                setTimeout(function () {
                    firstAct.css({
                        "animation-duration": "1s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 150);

                setTimeout(function () {
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-right",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 333);
                setTimeout(function () {
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display":"block"
                    });
                }, 600);
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
    $('.agree').attr('checked', false);
    var wpcf7Elm = document.querySelector('.wpcf7');
    $('.but-to-submit').on("click", function () {
        console.log('ss');
        $('.wpcf7-form-control.wpcf7-submit.submit-hidden').click();
    });
    wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
        event.preventDefault();
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
    }, false);
    var buttonsToHover = $('.link-button.draw');
    $.each(buttonsToHover, function (i) {
        var btnHov = $(this);
        var btnHovStat = true;
        $(window).scroll(function () {
            var btnEvent = ($(window).scrollTop() > (btnHov.position().top - $(window).height()));
            if (btnEvent && btnHovStat) {
                btnHovStat = false;
                btnHov.addClass('hovered');
            }
        })
    });
});
