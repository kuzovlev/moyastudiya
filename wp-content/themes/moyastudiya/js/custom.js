$(window).on('load', function () {
    let $preloader = $('.vertical-centered-box'),
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
        if (window.location.pathname === "/projects/" || window.location.pathname === "/about/" || window.location.pathname === "/" || window.location.pathname === "/prices/" || window.location.pathname === "/contact/") {
            let y = $(window).scrollTop();  //your current y position on the page
            $(window).scrollTop(y + 1);
        }
    }, 501);
    if ($('.single-post-content').length || $('.package_container').length) {
        setTimeout(function () {
            let y = $(window).scrollTop();  //your current y position on the page
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
        let aboutUnder = $('.about-us-underline'); // селектор для вашего блока
        let aboutUnderStatus = true;
        $(window).scroll(function () {
            let scrollAbout = ($(window).scrollTop() > (aboutUnder.position().top - $(window).height()));
            if (scrollAbout && aboutUnderStatus) {
                aboutUnderStatus = false;
                let el = document.querySelector('#aboutUsLine');
                let myAnimation = new LazyLinePainter(el, {
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
    let videoSrc = $('.gif-container').attr('data-src');
    let addVideoEl = $(`<video id="video_cut" src="`+videoSrc+`" preload="auto" autoplay="true" loop="true" muted="muted" playsinline></video>`);
    $('.gif-container').append(addVideoEl);
    let cutVideo = document.getElementById("video_cut");
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
        if (!$(this).hasClass("phone")) {
            event.preventDefault();
            let linkLocation = this.href;
            if ($(this).hasClass("address") || $(this).hasClass("city")) {
                window.open(event.target.href, '_blank');
            } else if ($(this).attr('href') != "#") {
                $('.main-content').delay(100).fadeOut(200);
                $('.vertical-centered-box').delay(100).fadeIn(200);
                setTimeout(function () {
                    window.location = linkLocation;
                }, 500);
            }
        }
    });
    let menuInfoPhone = $('.phone-Ukr').html(),
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

        let servicesHeader = $('#services h3'); // селектор для вашего блока
        let servisesHeaderStatus = true;
        $(window).scroll(function () {
            let scrollService = ($(window).scrollTop() > (servicesHeader.position().top - $(window).height()));
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
        let processHeader = $('#process h3'); // селектор для вашего блока
        let processHeaderStatus = true;
        $(window).scroll(function () {
            let scrollProcess = ($(window).scrollTop() > (processHeader.position().top - $(window).height()));
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

    let cForm = $('#c-form'),
        formStatus = true;
    $(window).scroll(function () {
        let scrollForm = ($(window).scrollTop() > (cForm.position().top - $(window).height()));
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
    let videoID = $('#video-bg').data('videoid');
    $(".youtube").each(function () {
        // Based on the YouTube ID, we can easily find the thumbnail image
        $(this).css('background-image', 'url(https://i.ytimg.com/vi/' + videoID + '/maxresdefault.jpg)');

        $(document).delegate('#' + this.id, 'click', function () {
            // Create an iFrame with autoplay set to true
            let iframe_url = "https://www.youtube.com/embed/" + videoID + "?autoplay=1&autohide=1";
            if ($(this).data('params')) iframe_url += '&' + $(this).data('params');

            // The height and width of the iFrame should be the same as parent
            let iframe = $('<iframe/>', {
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
    let singlePost = $('.single-post'),
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
        let fullVideo = $('.full-video')[0];
        fullVideo.setAttribute('src', fullVideo.getAttribute('data-src'));
        fullVideo.play();
    });
    $('.video-background, .modal-video, .video-background.modal-video').click(function () {
        let fullVideo = $('.full-video')[0];
        fullVideo.pause();
        fullVideo.currentTime = 0;
        $('.modal-video.video-background').fadeOut(500);
    })
    // processContainer.mouseover(function () {
    //     let element = $(this).find('.process-text'),
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
    //     let element = $(this).find('.process-text'),
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
    let hLine = 3;
    let sepLine = 7;
    let ease = Power2.easeOut;
    let menuOpened = false;
    let overwrite = "all";
    //-
    let line0 = $('.burger-menu #line0');
    let line1 = $('.burger-menu #line1');
    let line2 = $('.burger-menu #line2');
    let txtBurger = $('.burger-menu .txt-container');
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
    let scrollProjects = $('#our_projects');
    let scrollProjStatus = true;
    if (scrollProjects.length) {
        $(window).scroll(function () {
            let scrollEvent = ($(window).scrollTop() > (scrollProjects.position().top - $(window).height()));
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
        let jqBar = $('.mainpage-svg-lg'); // селектор для вашего блока
        let jqBarStatus = true;
        $(window).scroll(function () {
            let scrollEvent = ($(window).scrollTop() > (jqBar.position().top - $(window).height()));
            if (scrollEvent && jqBarStatus) {
                jqBarStatus = false;
                let el = document.querySelector('#VectorLg');
                let myAnimation = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
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
        let mpxxl = $('.mainpage-svg-xxl');
        let mpxxlStatus = true;
        $(window).scroll(function () {
            let scrollEvent = ($(window).scrollTop() > (mpxxl.position().top - $(window).height()));
            if (scrollEvent && mpxxlStatus) {
                mpxxlStatus = false;
                let el = document.querySelector('#Vectorxxl');
                let myAnimationXXL = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimationXXL.paint();
                let firstAct = $('.first-activity');
                let secondAct = $('.second-activity');
                let thirdAct = $('.third-activity');
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
        let mpxl = $('.mainpage-svg-xl');
        let mpxlStatus = true;
        $(window).scroll(function () {
            let scrollEvent = ($(window).scrollTop() > (mpxl.position().top - $(window).height()));
            if (scrollEvent && mpxlStatus) {
                mpxlStatus = false;
                let el = document.querySelector('#Vector2000');
                let myAnimationXL = new LazyLinePainter(el, {
                    "ease": "easeOutQuad",
                    "strokeWidth": 1,
                    "strokeOpacity": 1,
                    "strokeColor": "#C99B69",
                    "strokeCap": "square"
                });
                myAnimationXL.paint();
                let firstAct = $('.first-activity');
                let secondAct = $('.second-activity');
                let thirdAct = $('.third-activity');
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
        let mpsm = $('.mainpage-svg-sm');
        let mpsmStatus = true;
        $(window).scroll(function () {
            let scrollEvent = ($(window).scrollTop() > (mpsm.position().top - $(window).height()));
            if (scrollEvent && mpsmStatus) {
                mpsmStatus = false;
                let el = document.querySelector('#Vector3');
                let myAnimationSM = new LazyLinePainter(el, {
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
                let firstAct = $('.first-activity');
                let secondAct = $('.second-activity');
                let thirdAct = $('.third-activity');
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

    let footer = $('footer');
    let footerStatus = true;
    $(window).scroll(function () {
        let scrollFooter = ($(window).scrollTop() > (footer.position().top - $(window).height()));
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
        let $lightbox = $("<div class='lightbox'></div>");
        let $img = $("<img>");
        let $caption = $("<p class='caption'></p>");

        // Add image and caption to lightbox

        $lightbox
            .append($img);
        // .append($caption);

        // Add lighbox to document

        $('body').append($lightbox);

        $('.mgl-img-container img').click(function (e) {
            e.preventDefault();
            let src = $(this).attr("src");
            let cap = $(this).attr("alt");

            $img.attr('src', src);
            $caption.text(cap);

            $lightbox.fadeIn('fast');

            $lightbox.click(function () {
                $lightbox.fadeOut('fast');
            });
        });

    }());
    $(function () {

        let $btn = $('#btnTop');
        let $home = $('#header');
        let startpoint = $home.scrollTop() + $home.height();

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
    let wpcf7Elm = document.querySelector('.wpcf7');
    $('.but-to-submit').on("click", function () {
        console.log('ss');
        $('.wpcf7-form-control.wpcf7-submit.submit-hidden').click();
    });
    wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
        console.log('mail event');
        event.stopImmediatePropagation();
        if (window.location.href.indexOf("uk") > -1) {
            let formMess = "<div class='respon_mess'><p>Дякуємо! Незабаром мі з Вамі зв'яжемось!</p></div>"
        }
        if (window.location.href.indexOf("en") > -1) {
            let formMess = "<div class='respon_mess'><p>Thanks! Will contact you as soon as possible!</p></div>"
        }
        if (window.location.href.indexOf("uk") === -1 && window.location.href.indexOf("en") === -1) {
            let formMess = "<div class='respon_mess'><p>Спасибо! Мы скоро с Вами свяжемся!</p></div>"
        }
        $(this).fadeOut(300);

        $('#c-form').append(formMess);

    }, false);
    let buttonsToHover = $('.link-button.draw');
    $.each(buttonsToHover, function (i) {
        let btnHov = $(this);
        let btnHovStat = true;
        $(window).scroll(function () {
            let btnEvent = ($(window).scrollTop() > (btnHov.position().top - $(window).height()));
            if (btnEvent && btnHovStat) {
                btnHovStat = false;
                btnHov.addClass('hovered');
            }
        })
    });
});

$(document).ready(function () {

    let isScrolling = false;

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

    let listItems = document.querySelectorAll(".project_image");
    let projList = document.querySelectorAll(".single-post");
    let servicesList = document.querySelectorAll(".services-item");
    let processList = document.querySelectorAll('.process-container');
    let aboutUsRightBlock = document.querySelector('.about-right-block');
    let activitiesHeader = document.querySelector('.activities-header');
    let packagesList = document.querySelectorAll('.package_container');
    let contactsContainer = document.querySelectorAll('.c-container');


    function scrolling(e) {
        for (let i = 0; i < listItems.length; i++) {
            let listItem = listItems[i];
            if (isPartiallyVisible(listItem)) {
                listItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        for (let j = 0; j < projList.length; j++) {
            let projItem = projList[j];
            if (isPartiallyVisible(projItem)) {
                projItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        for (let q = 0; q < processList.length; q++) {
            let processItem = processList[q];
            if (isPartiallyVisible(processItem)) {
                processItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        for (let s = 0; s < packagesList.length; s++) {
            let packagesItem = packagesList[s];
            if (isPartiallyVisible(packagesItem)) {
                packagesItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        for (let o=0; o<contactsContainer.length; o++){
            let contactItem = contactsContainer[o];
            if (isPartiallyVisible(contactItem)) {
                contactItem.style = "animation-duration:1s; animation-name: fade-down; visibility: visible; transition-timing-function: ease-out";
            }
        }
        setTimeout(function () {
            for (let k = 0; k < servicesList.length; k++) {
                let serviceItem = servicesList[k];
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
        let elementBoundary = el.getBoundingClientRect();

        let top = elementBoundary.top;
        let bottom = elementBoundary.bottom;
        let height = elementBoundary.height;

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
    let contactsRussia = $('.country-russia'),
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