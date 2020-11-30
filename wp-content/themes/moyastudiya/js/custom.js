$(window).on('load', function () {
    var $preloader = $('.vertical-centered-box'),
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

    $('body h1').css({
        'animation-duration': '1s',
        'animation-name': 'fade-down',
        'visibility': 'visible',
        'transition-timing-function': 'ease-out'
    });

    setTimeout(function () {
        if (window.location.pathname === "/projects/" || window.location.pathname === "/o-nas/" || window.location.pathname === "/") {
            var y = $(window).scrollTop();  //your current y position on the page
            $(window).scrollTop(y + 1);
        }
    }, 501);
    if ($('.single-post-content').length) {
        setTimeout(function () {
            var y = $(window).scrollTop();  //your current y position on the page
            $(window).scrollTop(y + 1);
        }, 501);
    }
    $('header').css({
        'animation-duration': '1s',
        'animation-name': 'fade-in-up',
        'transition-timing-function': 'ease-out'
    });
    if ($('#about-us').length) {
        setTimeout(function () {
            $('.about-left-block h1').css({
                'animation-duration': '1500ms',
                'animation-name': 'fade-down',
                'visibility': 'visible',
                'transition-timing-function': 'ease-out'
            });
            $('.about-left-block .about-us_text').css({
                'animation-duration': '1s',
                'animation-name': 'fade-in-down-curve',
                'visibility': 'visible'
            });
            // $('.about-right-block').css({
            //     'animation-duration': '1s',
            //     'animation-name': 'fade-in-down-curve',
            //     'visibility': 'visible'
            // });
        }, 700);
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
                    "ease": "easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimation.paint();
                $('.about-header').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-down',
                    'visibility': 'visible'
                });
                $('#clients .about-us_text').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-in-down-curve',
                    'visibility': 'visible'
                })
            }
        });
    }
    if ($('.proj-one-img').length) {
        $('.post-header').css({
            'animation-duration': '1s',
            'animation-name': 'fade-down',
            'visibility': 'visible',
            'transition-timing-function': 'ease-out'
        });
        $('.post-text-head').css({
            'animation-duration': '1s',
            'animation-name': 'fade-down',
            'visibility': 'visible',
            'transition-timing-function': 'ease-out'
        });
        $('.single-post-content p').css({
            'animation-duration': '1s',
            'animation-name': 'fade-down',
            'visibility': 'visible',
            'transition-timing-function': 'ease-out'
        })
    }
    if ($('.section-main_top').length) {
        $('.header-mainpage').css({
            'animation-duration': '1s',
            'animation-name': 'fade-down',
            'visibility': 'visible',
            'transition-timing-function': 'ease-out'
        });
        $('.video-mainpage').css({
            'animation-duration': '1s',
            'animation-name': 'fade-down',
            'visibility': 'visible',
            'transition-timing-function': 'ease-out'
        })
    }
    var videoSrc = $('.gif-container').attr('data-src');
    var addVideoEl = $(`<video id="video_cut" src="`+videoSrc+`" preload="auto" autoplay="true" loop="true" muted="muted" playsinline></video>`);
    $('.gif-container').append(addVideoEl);
    var cutVideo = document.getElementById("video_cut");
    setTimeout(function () {
        $('.watch_button').css({
            'animation-duration': '1s',
            'animation-name': 'fade-portrait',
            'visibility': 'visible',
            'transition-timing-function': 'ease-out'
        })
    },500)
    // cutVideo.play();
});
$(document).ready(function () {
    if ($('.project_image').length) {
        [].forEach.call(document.querySelectorAll('img[data-src]'), function (img) {
            img.setAttribute('src', img.getAttribute('data-src'));
            img.onload = function () {
                img.removeAttribute('data-src');
            };
        });
    }
    $("a").click(function (event) {
        event.preventDefault();
        var linkLocation = this.href;
        if ($(this).attr('href')!="#") {
            $('.main-content').delay(100).fadeOut(200);
            $('.vertical-centered-box').delay(100).fadeIn(200);
            setTimeout(function () {
                window.location = linkLocation;
            }, 500);
        }
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
                <a mailto="` + menuInfoMail + `">` + menuInfoMail + `</a>
                <a tel="` + menuInfoPhone + `">` + menuInfoPhone + `</a>
                <p>` + menuInfoAddr + `</p>
            </div>
        </div>
        <div class="mobile-menu-footer">
            <div class="logo">` + logoMobile + `</div>
            <div class="soc-netw">` + mobileSocial + `</div>
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

    if ($('#services').length) {

        var servicesHeader = $('#services h3'); // селектор для вашего блока
        var servisesHeaderStatus = true;
        $(window).scroll(function () {
            var scrollService = ($(window).scrollTop() > (servicesHeader.position().top - $(window).height()));
            if (scrollService && servisesHeaderStatus) {
                servisesHeaderStatus = false;
                $('#services h3').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-down',
                    'visibility': 'visible'
                });
            }
        });
    }
    if ($('#process').length) {
        var processHeader = $('#process h3'); // селектор для вашего блока
        var processHeaderStatus = true;
        $(window).scroll(function () {
            var scrollProcess = ($(window).scrollTop() > (processHeader.position().top - $(window).height()));
            if (scrollProcess && processHeaderStatus) {
                processHeaderStatus = false;
                $('#process h3').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-down',
                    'visibility': 'visible'
                });
                $('#process .process-header_text').css({
                    'animation-duration': '1s',
                    'animation-name': 'fade-down',
                    'visibility': 'visible'
                });
                // setTimeout(function () {
                //     $('.processes-wrapper').css({
                //         'animation-duration': '1s',
                //         'animation-name': 'fade-down',
                //         'visibility': 'visible'
                //     });
                // }, 1000)
            }
        });
    }

    var cForm = $('#c-form'),
        formStatus = true;
    $(window).scroll(function () {
        var scrollForm = ($(window).scrollTop() > (cForm.position().top - $(window).height()));
        if (scrollForm && formStatus) {
            formStatus = false;
            cForm.css({
                'animation-duration': '1s',
                'animation-name': 'fade-down',
                'visibility': 'visible'
            })
        }
    })
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
    var singlePost = $('.single-post'),
        processContainer = $('.process-container, .process-text');
    function hoverSingleProject(element){
        element.find('.post-contents').fadeOut(200);
        element.find('.post-gradient').fadeOut(200);
    }
    function hoverOutSingleProj(element){
        element.find('.post-gradient').fadeIn(100);
        element.find('.post-contents').fadeIn(100);
    }
    singlePost.mouseenter(function () {
        hoverSingleProject($(this));
    });
    singlePost.mouseleave(function () {
        hoverOutSingleProj($(this));
    });

    $('.gif-container').click(function (event) {
        event.stopImmediatePropagation();
        $('.modal-video.video-background').fadeIn(500);
        var fullVideo = $('.full-video')[0];
        fullVideo.setAttribute('src', fullVideo.getAttribute('data-src'));
        fullVideo.play();
    });
    $('.video-background, .modal-video, .video-background.modal-video').click(function () {
        var fullVideo = $('.full-video')[0];
        fullVideo.pause();
        fullVideo.currentTime = 0;
        $('.modal-video.video-background').fadeOut(500);
    })
    // processContainer.mouseover(function () {
    //     var element = $(this).find('.process-text'),
    //         elemHeader = $(this).find('.process-title');
    //
    //     elemHeader.css({
    //         'animation-duration': '.5s',
    //         'animation-name': 'fade-out-down',
    //         'display': 'none'
    //     });
    //     element.css({
    //         'animation-duration': '.5s',
    //         'animation-name': 'fade-down',
    //         'visibility': 'visible',
    //         "opacity": '1',
    //         'transition-timing-function': 'ease-out'
    //     })
    // });
    // processContainer.mouseout(function (e) {
    //     var element = $(this).find('.process-text'),
    //         elemHeader = $(this).find('.process-title');
    //
    //     elemHeader.css({
    //         'animation-duration': '.5s',
    //         'animation-name': 'fade-in-up',
    //         'display': 'block'
    //     });
    //     element.css({
    //         'animation-duration': '.5s',
    //         'animation-name': 'fade-out-down',
    //         'visibility': 'hidden',
    //         "opacity": '0'
    //     });
    //     e.stopPropagation();
    // })
});

$(document).ready(function () {
    setTimeout(function () {
        $('iframe .vp-controls').css({
            "display": "none"
        });
    }, 5000);
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
            $('.burger-menu').css({"position": "fixed"});
            $('.header-logo').css({"position": "fixed"});
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
            $('.burger-menu').css({"position": "absolute"});
            $('.header-logo').css({"position": "unset"});
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
            }
        });
    }
    if ($('.mainpage-svg-lg').length && $(".mainpage-svg-lg").css("display") !== "none") {
        var jqBar = $('.mainpage-svg-lg'); // селектор для вашего блока
        var jqBarStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus) {
                jqBarStatus = false;
                var el = document.querySelector('#VectorLg');
                var myAnimation = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
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
                        "display": "block"
                    });
                }, 77);

                setTimeout(function () {
                    $('.star-2-overlay').fadeOut(100);
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-up",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 319);
                setTimeout(function () {
                    $('.star-3-overlay').fadeOut(100);
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 520);
            }
        });
    }


    if ($('.mainpage-svg-xxl').length && $(".mainpage-svg-xxl").css("display") !== "none") {
        var mpxxl = $('.mainpage-svg-xxl');
        var mpxxlStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (mpxxl.position().top - $(window).height()));
            if (scrollEvent && mpxxlStatus) {
                mpxxlStatus = false;
                var el = document.querySelector('#Vectorxxl');
                var myAnimationXXL = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
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
                        "display": "block"
                    });
                }, 204);
                setTimeout(function () {
                    $('.star-2-overlay').fadeOut(100);
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-down-curve",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 345);
                setTimeout(function () {
                    $('.star-3-overlay').fadeOut(100);
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 457);
            }
        })
    }

    if ($('.mainpage-svg-xl').length && $(".mainpage-svg-xl").css("display") !== "none") {
        var mpxl = $('.mainpage-svg-xl');
        var mpxlStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (mpxl.position().top - $(window).height()));
            if (scrollEvent && mpxlStatus) {
                mpxlStatus = false;
                var el = document.querySelector('#Vector2000');
                var myAnimationXL = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
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
                        "display": "block"
                    });
                }, 150);

                setTimeout(function () {
                    $('.star-2-overlay').fadeOut(100);
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-down",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 333);
                setTimeout(function () {
                    $('.star-3-overlay').fadeOut(100);
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 600);
            }
        })
    }
    if ($('.mainpage-svg-sm').length && $(".mainpage-svg-sm").css("display") !== "none") {
        var mpsm = $('.mainpage-svg-sm');
        var mpsmStatus = true;
        $(window).scroll(function () {
            var scrollEvent = ($(window).scrollTop() > (mpsm.position().top - $(window).height()));
            if (scrollEvent && mpsmStatus) {
                mpsmStatus = false;
                var el = document.querySelector('#Vector3');
                var myAnimationSM = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square",
                    "reverse": "true"
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
                        "display": "block"
                    });
                }, 150);

                setTimeout(function () {
                    secondAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-right",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 333);
                setTimeout(function () {
                    thirdAct.css({
                        "animation-duration": ".5s",
                        "animation-name": "fade-in-left",
                        "visibility": "visible",
                        "display": "block"
                    });
                }, 600);
            }
        })
    }

    var footer = $('footer');
    var footerStatus = true;
    $(window).scroll(function () {
        var scrollFooter = ($(window).scrollTop() > (footer.position().top - $(window).height()));
        if (scrollFooter && footerStatus) {
            footerStatus = false;
            footer.css({
                'animation-duration': '1s',
                'animation-name': 'fade-down',
                'visibility': 'visible',
                'transition-timing-function': 'ease-out'
            })
        }
    });
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
    $(function () {

        var $btn = $('#btnTop');
        var $home = $('#header');
        var startpoint = $home.scrollTop() + $home.height();

        $(window).on('scroll', function () {
            if ($(window).scrollTop() > startpoint + 50) {
                $btn.show();
            } else {
                $btn.hide();
            }
        });
        const scrollToTopButton = document.getElementById('btnTop');


        const scrollToTop = () => {
            const c = document.documentElement.scrollTop || document.body.scrollTop;

            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, c - c / 10);
            }
        };
        scrollToTopButton.onclick = function (e) {
            e.preventDefault();
            scrollToTop();
        }
    });
    $('.agree').attr('checked', false);
    var wpcf7Elm = document.querySelector('.wpcf7');
    $('.but-to-submit').on("click", function () {
        console.log('ss');
        $('.wpcf7-form-control.wpcf7-submit.submit-hidden').click();
    });
    wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
        console.log('mail event');
        event.stopImmediatePropagation();
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

$(document).ready(function () {

    var isScrolling = false;

    window.addEventListener("scroll", throttleScroll, false);

    function throttleScroll(e) {
        if (isScrolling == false) {
            window.requestAnimationFrame(function () {
                scrolling(e);
                isScrolling = false;
            });
        }
        isScrolling = true;
    }

    document.addEventListener("DOMContentLoaded", scrolling, false);

    var listItems = document.querySelectorAll(".project_image");
    var projList = document.querySelectorAll(".single-post");
    var servicesList = document.querySelectorAll(".services-item");
    var processList = document.querySelectorAll('.process-container');
    var aboutUsRightBlock = document.querySelector('.about-right-block');
    var activitiesHeader = document.querySelector('.activities-header');


    function scrolling(e) {
        for (var i = 0; i < listItems.length; i++) {
            var listItem = listItems[i];
            if (isPartiallyVisible(listItem)) {
                listItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        for (var j = 0; j < projList.length; j++) {
            var projItem = projList[j];
            if (isPartiallyVisible(projItem)) {
                projItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        for (var q = 0; q < processList.length; q++) {
            var processItem = processList[q];
            if (isPartiallyVisible(processItem)) {
                processItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        setTimeout(function () {
            for (var k = 0; k < servicesList.length; k++) {
                var serviceItem = servicesList[k];
                if (isPartiallyVisible(serviceItem)) {
                    serviceItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
                }
            }
        }, 500);
        if (aboutUsRightBlock && isPartiallyVisible(aboutUsRightBlock)) {
            aboutUsRightBlock.style = "animation-duration:1s; animation-name: fade-portrait; visibility: visible; transition-timing-function: ease-out";
        }
        if (activitiesHeader && isPartiallyVisible(activitiesHeader)) {
            activitiesHeader.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
        }
    }

    function isPartiallyVisible(el) {
        var elementBoundary = el.getBoundingClientRect();

        var top = elementBoundary.top;
        var bottom = elementBoundary.bottom;
        var height = elementBoundary.height;

        return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    }
    $('.accordion').accordion({
        "transitionSpeed": 400,
        "singleOpen":false
    });
    $(".to-cForm a").click(function(e) {
        e.preventDefault();
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#c-form").offset().top
        }, 500);
    });
    var contactsRussia = $('.country-russia'),
        contactsUkraine = $('.country-ukraine'),
        contactsPoland = $('.country-poland');

    contactsRussia.on('mouseenter', function () {
        $("#use5578").attr("fill","#C99B69");
    });
    contactsRussia.on('mouseleave', function () {
        $("#use5578").attr("fill","#323232");
    });
    contactsUkraine.on('mouseenter', function () {
        $("#use5581").attr("fill","#C99B69");
    });
    contactsUkraine.on('mouseleave', function () {
        $("#use5581").attr("fill","#323232");
    });
    contactsPoland.on('mouseenter', function () {
        $("#use5725").attr("fill","#C99B69");
    });
    contactsPoland.on('mouseleave', function () {
        $("#use5725").attr("fill","#323232");
    });
});