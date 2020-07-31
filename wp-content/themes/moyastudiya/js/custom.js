//youtube script
var videoID = $('#video-bg').data('videoid');
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
if (videoID) {
    onYouTubeIframeAPIReady = function () {
        player = new YT.Player('player', {
            height: '498',
            width: '1087',
            videoId: videoID,  // youtube video id
            playerVars: {
                'autoplay': 0,
                'rel': 0,
                'showinfo': 0,
                'controls': 0,
                'modestbranding': 0,

            },
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    var p = document.getElementById("player");
    $(p).hide();

    var t = document.getElementById("thumbnail");
    t.src = "http://i3.ytimg.com/vi/" + videoID + "/maxresdefault.jpg";

    onPlayerStateChange = function (event) {
        if (event.data == YT.PlayerState.ENDED) {
            $('.start-video').fadeIn('normal');
        }
    }

    $(document).on('click', '.start-video', function () {
        $('.start-video').hide();
        $("#player").show();
        $("#thumbnail_container").hide();
        player.playVideo();
    });
}

$(document).ready(function () {
    var singlePost = $('.single-post');
    singlePost.mouseenter(function () {
        $(this).find('.post-gradient').fadeOut(300);
    });
    singlePost.mouseleave(function () {
        $(this).find('.post-gradient').fadeIn(300);
    });
});