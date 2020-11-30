<?php
/*
 * Template name: Контакты
 */
get_header(); ?>
<style>
    body {
        background: black !important;
    }
</style>
<div class="map_container container">
    <div class="map-overlay"></div>
    <div class="country-contacts country-russia">
        <p class="city"><?= get_field( 'rus_city', 32 ) ?></p>
        <p class="phone"><?= get_field('telefon_rus', 32);?></p>
        <p class="address"><?= get_field( 'address_rus', 32 ); ?></p>
    </div>
    <div class="country-contacts country-ukraine">
        <p class="city"><?= get_field( 'ukr_city', 32 ) ?></p>
        <p class="phone"><?= get_field('telefon_ukr', 32);?></p>
        <p class="address"><?= get_field( 'address_ukr', 32 ); ?></p>
    </div>
    <div class="country-contacts country-poland">
        <p class="city"><?= get_field( 'pol_city', 32 ) ?></p>
        <p class="phone"><?= get_field('telefon_pol', 32);?></p>
        <p class="address"><?= get_field( 'address_pol', 32 ); ?></p>
    </div>
    <svg
            class="map__image"
            width="1440"
            height="700"
            viewBox="0 0 770 350"
            version="1.1"
            id="svg6611">
        <metadata
                id="metadata6615">
            <rdf:RDF>
                <cc:Work
                        rdf:about="">
                    <dc:format>image/svg+xml</dc:format>
                    <dc:type
                            rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                    <dc:title></dc:title>
                </cc:Work>
            </rdf:RDF>
        </metadata>
        <sodipodi:namedview
                pagecolor="#ffffff"
                bordercolor="#666666"
                borderopacity="1"
                objecttolerance="10"
                gridtolerance="10"
                guidetolerance="10"
                inkscape:pageopacity="0"
                inkscape:pageshadow="2"
                inkscape:window-width="1440"
                inkscape:window-height="900"
                id="namedview6613"
                showgrid="false"
                inkscape:snap-page="true"
                inkscape:zoom="0.5894754"
                inkscape:cx="720"
                inkscape:cy="267.55542"
                inkscape:window-x="0"
                inkscape:window-y="0"
                inkscape:window-maximized="0"
                inkscape:current-layer="svg6611" />
        <!-- <title>layer1</title> -->
        <g
                id="Canvas"
                transform="translate(149.67996,-3484.93)">
            <g
                    id="layer1">
                <g
                        id="path3302">
                    <use
                            xlink:href="#path9_fill"
                            transform="translate(291.432,3771.66)"
                            fill="#141414"
                            id="use5547"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5885">
                    <use
                            xlink:href="#path10_fill"
                            transform="translate(240.914,3668.98)"
                            fill="#141414"
                            id="use5550"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5883">
                    <use
                            xlink:href="#path11_fill"
                            transform="translate(106.955,3777.23)"
                            fill="#141414"
                            id="use5553"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5875">
                    <use
                            xlink:href="#path12_fill"
                            transform="translate(309.739,3749.66)"
                            fill="#141414"
                            id="use5556"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="g8643">
                    <g
                            id="path3298">
                        <use
                                xlink:href="#path13_fill"
                                transform="translate(198.366,3761.13)"
                                fill="#141414"
                                id="use5559"
                                x="0"
                                y="0"
                                width="100%"
                                height="100%" />
                    </g>
                    <g
                            id="path9522">
                        <use
                                xlink:href="#path14_fill"
                                transform="translate(242.303,3779.39)"
                                fill="#141414"
                                id="use5562"
                                x="0"
                                y="0"
                                width="100%"
                                height="100%" />
                    </g>
                </g>
                <g
                        id="path5863">
                    <use
                            xlink:href="#path15_fill"
                            transform="translate(239.674,3795.38)"
                            fill="#141414"
                            id="use5566"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5861">
                    <use
                            xlink:href="#path16_fill"
                            transform="translate(226.338,3782.47)"
                            fill="#141414"
                            id="use5569"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5857">
                    <use
                            xlink:href="#path17_fill"
                            transform="translate(106.995,3777.06)"
                            fill="#141414"
                            id="use5572"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5797">
                    <use
                            xlink:href="#path19_fill"
                            transform="translate(55.2062,3666.74)"
                            fill="#141414"
                            id="use5575"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5735"
                        data-map-country="russia">
                    <use
                            xlink:href="#path21_fill"
                            transform="translate(94.2999,3489.43)"
                            fill="#323232"
                            id="use5578"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5071"
                        data-map-country="ukraine">
                    <use
                            xlink:href="#path103_fill"
                            transform="translate(72.0719,3690.42)"
                            fill="#323232"
                            id="use5581"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5172">
                    <use
                            xlink:href="#path104_fill"
                            transform="translate(-561.222,3998.1)"
                            fill="#141414"
                            id="use5584"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5166">
                    <use
                            xlink:href="#path105_fill"
                            transform="translate(-562.394,3980.56)"
                            fill="#141414"
                            id="use5587"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5164">
                    <use
                            xlink:href="#path106_fill"
                            transform="translate(-562.812,3985.02)"
                            fill="#141414"
                            id="use5590"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5158">
                    <use
                            xlink:href="#path108_fill"
                            transform="translate(-570.065,3983.09)"
                            fill="#141414"
                            id="use5593"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5156">
                    <use
                            xlink:href="#path109_fill"
                            transform="translate(-571.624,3975.51)"
                            fill="#141414"
                            id="use5596"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5154">
                    <use
                            xlink:href="#path110_fill"
                            transform="translate(-584.902,3974.69)"
                            fill="#141414"
                            id="use5599"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5152">
                    <use
                            xlink:href="#path111_fill"
                            transform="translate(-584.904,3979.74)"
                            fill="#141414"
                            id="use5602"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5150">
                    <use
                            xlink:href="#path112_fill"
                            transform="translate(-645.967,3969.67)"
                            fill="#141414"
                            id="use5605"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5144">
                    <use
                            xlink:href="#path128_fill"
                            transform="translate(-589.164,3976.45)"
                            fill="#141414"
                            id="use5608"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5140">
                    <use
                            xlink:href="#path130_fill"
                            transform="translate(-559.268,4011.66)"
                            fill="#141414"
                            id="use5611"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5136">
                    <use
                            xlink:href="#path132_fill"
                            transform="translate(-561.127,4017.2)"
                            fill="#141414"
                            id="use5614"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5132">
                    <use
                            xlink:href="#path134_fill"
                            transform="translate(-549.044,4017.91)"
                            fill="#141414"
                            id="use5617"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3947">
                    <use
                            xlink:href="#path140_fill"
                            transform="translate(-27.3651,3760.55)"
                            fill="#141414"
                            id="use5620"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3943">
                    <use
                            xlink:href="#path141_fill"
                            transform="translate(-119.295,3825.79)"
                            fill="#141414"
                            id="use5623"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3939">
                    <use
                            xlink:href="#path142_fill"
                            transform="translate(6.24097,3760.55)"
                            fill="#141414"
                            id="use5626"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3929">
                    <use
                            xlink:href="#path143_fill"
                            transform="translate(-19.4592,3726.94)"
                            fill="#141414"
                            id="use5629"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3927">
                    <use
                            xlink:href="#path144_fill"
                            transform="translate(-13.5278,3731.88)"
                            fill="#141414"
                            id="use5632"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3923">
                    <use
                            xlink:href="#path145_fill"
                            transform="translate(21.069,3826.78)"
                            fill="#141414"
                            id="use5635"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3921">
                    <use
                            xlink:href="#path146_fill"
                            transform="translate(-73.8258,3765.49)"
                            fill="#141414"
                            id="use5638"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3919">
                    <use
                            xlink:href="#path147_fill"
                            transform="translate(-68.8842,3770.44)"
                            fill="#141414"
                            id="use5641"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3903">
                    <use
                            xlink:href="#path148_fill"
                            transform="translate(-41.2045,3706.18)"
                            fill="#141414"
                            id="use5644"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3901">
                    <use
                            xlink:href="#path149_fill"
                            transform="translate(-37.2524,3707.17)"
                            fill="#141414"
                            id="use5647"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3897">
                    <use
                            xlink:href="#path150_fill"
                            transform="translate(148.583,3829.74)"
                            fill="#141414"
                            id="use5650"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3895">
                    <use
                            xlink:href="#path151_fill"
                            transform="translate(101.138,3721.7)"
                            fill="#141414"
                            id="use5653"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3893">
                    <use
                            xlink:href="#path152_fill"
                            transform="translate(13.4984,3734.64)"
                            fill="#141414"
                            id="use5656"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3885">
                    <use
                            xlink:href="#path153_fill"
                            transform="translate(109.043,3816.89)"
                            fill="#141414"
                            id="use5659"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3863">
                    <use
                            xlink:href="#path154_fill"
                            transform="translate(95.2054,3821.84)"
                            fill="#141414"
                            id="use5662"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3855">
                    <use
                            xlink:href="#path155_fill"
                            transform="translate(94.2166,3818.87)"
                            fill="#141414"
                            id="use5665"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3843">
                    <use
                            xlink:href="#path156_fill"
                            transform="translate(85.319,3800.09)"
                            fill="#141414"
                            id="use5668"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3839">
                    <use
                            xlink:href="#path157_fill"
                            transform="translate(84.3323,3811.95)"
                            fill="#141414"
                            id="use5671"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3819">
                    <use
                            xlink:href="#path158_fill"
                            transform="translate(57.6434,3778.26)"
                            fill="#141414"
                            id="use5674"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3817">
                    <use
                            xlink:href="#path159_fill"
                            transform="translate(59.5807,3656.48)"
                            fill="#141414"
                            id="use5677"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3815">
                    <use
                            xlink:href="#path160_fill"
                            transform="translate(35.8961,3712.21)"
                            fill="#141414"
                            id="use5680"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3809">
                    <use
                            xlink:href="#path161_fill"
                            transform="translate(-37.2524,3680.48)"
                            fill="#141414"
                            id="use5683"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3799">
                    <use
                            xlink:href="#path162_fill"
                            transform="translate(-53.0663,3680.48)"
                            fill="#141414"
                            id="use5686"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3795">
                    <use
                            xlink:href="#path163_fill"
                            transform="translate(30.9534,3720.63)"
                            fill="#141414"
                            id="use5689"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3793">
                    <use
                            xlink:href="#path164_fill"
                            transform="translate(72.3911,3631.41)"
                            fill="#141414"
                            id="use5692"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3791">
                    <use
                            xlink:href="#path165_fill"
                            transform="translate(70.4929,3636)"
                            fill="#141414"
                            id="use5695"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3789">
                    <use
                            xlink:href="#path166_fill"
                            transform="translate(70.4929,3638.53)"
                            fill="#141414"
                            id="use5698"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3787">
                    <use
                            xlink:href="#path167_fill"
                            transform="translate(63.5737,3635.01)"
                            fill="#141414"
                            id="use5701"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3785">
                    <use
                            xlink:href="#path168_fill"
                            transform="translate(62.5861,3638.95)"
                            fill="#141414"
                            id="use5704"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3781">
                    <use
                            xlink:href="#path169_fill"
                            transform="translate(48.5449,3762.53)"
                            fill="#141414"
                            id="use5707"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3779">
                    <use
                            xlink:href="#path170_fill"
                            transform="translate(58.6321,3765.49)"
                            fill="#141414"
                            id="use5710"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3777">
                    <use
                            xlink:href="#path171_fill"
                            transform="translate(50.2404,3740.72)"
                            fill="#141414"
                            id="use5713"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3775">
                    <use
                            xlink:href="#path172_fill"
                            transform="translate(74.4479,3757.33)"
                            fill="#141414"
                            id="use5716"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3773">
                    <use
                            xlink:href="#path173_fill"
                            transform="translate(-58.01,3696.3)"
                            fill="#141414"
                            id="use5719"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3771">
                    <use
                            xlink:href="#path174_fill"
                            transform="translate(28.9077,3748.22)"
                            fill="#141414"
                            id="use5722"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3769">
                    <use
                            xlink:href="#path175_fill"
                            transform="translate(17.1151,3669.34)"
                            fill="#323232"
                            id="use5725"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3767">
                    <use
                            xlink:href="#path176_fill"
                            transform="translate(-141.815,3665.19)"
                            fill="#141414"
                            id="use5728"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3751">
                    <use
                            xlink:href="#path177_fill"
                            transform="translate(-86.6754,3634.02)"
                            fill="#141414"
                            id="use5731"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3747">
                    <use
                            xlink:href="#path178_fill"
                            transform="translate(-89.3927,3636.99)"
                            fill="#141414"
                            id="use5734"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3725">
                    <use
                            xlink:href="#path179_fill"
                            transform="translate(-113.364,3654.78)"
                            fill="#141414"
                            id="use5737"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3713"
                        data-map-country="uk">
                    <use
                            xlink:href="#path180_fill"
                            transform="translate(-124.237,3633.04)"
                            fill="#141414"
                            id="use5740"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3711">
                    <use
                            xlink:href="#path181_fill"
                            transform="translate(64.5615,3625.13)"
                            fill="#141414"
                            id="use5743"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3701">
                    <use
                            xlink:href="#path182_fill"
                            transform="translate(49.5187,3553)"
                            fill="#141414"
                            id="use5746"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3693">
                    <use
                            xlink:href="#path183_fill"
                            transform="translate(61.5963,3626.12)"
                            fill="#141414"
                            id="use5749"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3681">
                    <use
                            xlink:href="#path184_fill"
                            transform="translate(52.7007,3628.09)"
                            fill="#141414"
                            id="use5752"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3673">
                    <use
                            xlink:href="#path185_fill"
                            transform="translate(54.6761,3770.77)"
                            fill="#141414"
                            id="use5755"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3671">
                    <use
                            xlink:href="#path186_fill"
                            transform="translate(4.26343,3700.23)"
                            fill="#141414"
                            id="use5758"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3669">
                    <use
                            xlink:href="#path187_fill"
                            transform="translate(59.6188,3723.07)"
                            fill="#141414"
                            id="use5761"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3667">
                    <use
                            xlink:href="#path188_fill"
                            transform="translate(58.6281,3643.46)"
                            fill="#141414"
                            id="use5764"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3647">
                    <use
                            xlink:href="#path189_fill"
                            transform="translate(-6.60754,3667.63)"
                            fill="#141414"
                            id="use5767"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3635">
                    <use
                            xlink:href="#path190_fill"
                            transform="translate(40.8387,3769.45)"
                            fill="#141414"
                            id="use5770"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3627">
                    <use
                            xlink:href="#path191_fill"
                            transform="translate(32.9309,3764.5)"
                            fill="#141414"
                            id="use5773"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3623">
                    <use
                            xlink:href="#path192_fill"
                            transform="translate(28.9769,3761.54)"
                            fill="#141414"
                            id="use5776"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3621">
                    <use
                            xlink:href="#path193_fill"
                            transform="translate(25.022,3758.57)"
                            fill="#141414"
                            id="use5779"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3619">
                    <use
                            xlink:href="#path194_fill"
                            transform="translate(26.0117,3760.55)"
                            fill="#141414"
                            id="use5782"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3613">
                    <use
                            xlink:href="#path195_fill"
                            transform="translate(23.0465,3756.6)"
                            fill="#141414"
                            id="use5785"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3607">
                    <use
                            xlink:href="#path196_fill"
                            transform="translate(20.0813,3753.63)"
                            fill="#141414"
                            id="use5788"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path5088">
                    <use
                            xlink:href="#path197_fill"
                            transform="translate(14.1249,3738.01)"
                            fill="#141414"
                            id="use5791"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3591">
                    <use
                            xlink:href="#path198_fill"
                            transform="translate(-35.8794,3668.53)"
                            fill="#141414"
                            id="use5794"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3589">
                    <use
                            xlink:href="#path199_fill"
                            transform="translate(-21.9014,3645.89)"
                            fill="#141414"
                            id="use5797"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3581">
                    <use
                            xlink:href="#path200_fill"
                            transform="translate(59.6188,3585.59)"
                            fill="#141414"
                            id="use5800"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3577">
                    <use
                            xlink:href="#path201_fill"
                            transform="translate(41.8275,3632.05)"
                            fill="#141414"
                            id="use5803"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3565">
                    <use
                            xlink:href="#path202_fill"
                            transform="translate(0.311646,3643.91)"
                            fill="#141414"
                            id="use5806"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3563">
                    <use
                            xlink:href="#path203_fill"
                            transform="translate(-2.81128,3559.57)"
                            fill="#141414"
                            id="use5809"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3561">
                    <use
                            xlink:href="#path204_fill"
                            transform="translate(-12.7438,3717.08)"
                            fill="#141414"
                            id="use5812"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3551">
                    <use
                            xlink:href="#path205_fill"
                            transform="translate(-32.3088,3732.94)"
                            fill="#141414"
                            id="use5815"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3549">
                    <use
                            xlink:href="#path206_fill"
                            transform="translate(62.5851,3772.6)"
                            fill="#141414"
                            id="use5818"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3547">
                    <use
                            xlink:href="#path207_fill"
                            transform="translate(-36.2979,3726.94)"
                            fill="#141414"
                            id="use5821"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3545">
                    <use
                            xlink:href="#path208_fill"
                            transform="translate(75.4357,3659)"
                            fill="#141414"
                            id="use5824"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3539">
                    <use
                            xlink:href="#path209_fill"
                            transform="translate(-32.3088,3631.06)"
                            fill="#141414"
                            id="use5827"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3511">
                    <use
                            xlink:href="#path210_fill"
                            transform="translate(48.7478,3552.97)"
                            fill="#141414"
                            id="use5830"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3501">
                    <use
                            xlink:href="#path211_fill"
                            transform="translate(40.8387,3551.98)"
                            fill="#141414"
                            id="use5833"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3485">
                    <use
                            xlink:href="#path212_fill"
                            transform="translate(25.022,3560.88)"
                            fill="#141414"
                            id="use5836"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3475">
                    <use
                            xlink:href="#path213_fill"
                            transform="translate(18.1039,3567.8)"
                            fill="#141414"
                            id="use5839"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3473">
                    <use
                            xlink:href="#path214_fill"
                            transform="translate(17.1151,3565.82)"
                            fill="#141414"
                            id="use5842"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3457">
                    <use
                            xlink:href="#path215_fill"
                            transform="translate(9.20728,3575.7)"
                            fill="#141414"
                            id="use5845"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3453">
                    <use
                            xlink:href="#path216_fill"
                            transform="translate(7.22974,3580.65)"
                            fill="#141414"
                            id="use5848"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3451">
                    <use
                            xlink:href="#path217_fill"
                            transform="translate(6.24097,3580.65)"
                            fill="#141414"
                            id="use5851"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3439">
                    <use
                            xlink:href="#path218_fill"
                            transform="translate(-1.66687,3592.51)"
                            fill="#141414"
                            id="use5854"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3431">
                    <use
                            xlink:href="#path219_fill"
                            transform="translate(-4.6322,3590.53)"
                            fill="#141414"
                            id="use5857"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3429">
                    <use
                            xlink:href="#path220_fill"
                            transform="translate(-18.4705,3602.39)"
                            fill="#141414"
                            id="use5860"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3421">
                    <use
                            xlink:href="#path221_fill"
                            transform="translate(-21.4347,3603.38)"
                            fill="#141414"
                            id="use5863"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3415">
                    <use
                            xlink:href="#path222_fill"
                            transform="translate(-28.3558,3606.35)"
                            fill="#141414"
                            id="use5866"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3413">
                    <use
                            xlink:href="#path223_fill"
                            transform="translate(-29.3425,3607.34)"
                            fill="#141414"
                            id="use5869"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3411">
                    <use
                            xlink:href="#path224_fill"
                            transform="translate(-32.3088,3609.31)"
                            fill="#141414"
                            id="use5872"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3409">
                    <use
                            xlink:href="#path225_fill"
                            transform="translate(-32.3088,3609.31)"
                            fill="#141414"
                            id="use5875"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3369">
                    <use
                            xlink:href="#path226_fill"
                            transform="translate(39.022,3492.25)"
                            fill="#141414"
                            id="use5878"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3367">
                    <use
                            xlink:href="#path227_fill"
                            transform="translate(37.0917,3490.69)"
                            fill="#141414"
                            id="use5881"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3363">
                    <use
                            xlink:href="#path228_fill"
                            transform="translate(28.5804,3484.93)"
                            fill="#141414"
                            id="use5884"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3359">
                    <use
                            xlink:href="#path229_fill"
                            transform="translate(-40.2167,3545.06)"
                            fill="#141414"
                            id="use5887"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3345">
                    <use
                            xlink:href="#path230_fill"
                            transform="translate(-141.338,3761.01)"
                            fill="#141414"
                            id="use5890"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3315">
                    <use
                            xlink:href="#path231_fill"
                            transform="translate(-146.307,3774.81)"
                            fill="#141414"
                            id="use5893"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
                <g
                        id="path3299">
                    <use
                            xlink:href="#path232_fill"
                            transform="translate(-107.433,3699.97)"
                            fill="#141414"
                            id="use5896"
                            x="0"
                            y="0"
                            width="100%"
                            height="100%" />
                </g>
            </g>
        </g>
        <defs
                id="defs6609">
            <linearGradient
                    id="paint22_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(-41.5651,-241.717,405.451,142.181,218.182,170.627)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5901" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5903" />
            </linearGradient>
            <linearGradient
                    id="paint23_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5906" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5908" />
            </linearGradient>
            <linearGradient
                    id="paint24_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5911" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5913" />
            </linearGradient>
            <linearGradient
                    id="paint25_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5916" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5918" />
            </linearGradient>
            <linearGradient
                    id="paint26_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5921" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5923" />
            </linearGradient>
            <linearGradient
                    id="paint27_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5926" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5928" />
            </linearGradient>
            <linearGradient
                    id="paint28_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5931" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5933" />
            </linearGradient>
            <linearGradient
                    id="paint29_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5936" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5938" />
            </linearGradient>
            <linearGradient
                    id="paint30_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5941" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5943" />
            </linearGradient>
            <linearGradient
                    id="paint31_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5946" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5948" />
            </linearGradient>
            <linearGradient
                    id="paint32_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5951" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5953" />
            </linearGradient>
            <linearGradient
                    id="paint33_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5956" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5958" />
            </linearGradient>
            <linearGradient
                    id="paint34_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5961" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5963" />
            </linearGradient>
            <linearGradient
                    id="paint35_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5966" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5968" />
            </linearGradient>
            <linearGradient
                    id="paint36_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5971" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5973" />
            </linearGradient>
            <linearGradient
                    id="paint37_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5976" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5978" />
            </linearGradient>
            <linearGradient
                    id="paint38_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5981" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5983" />
            </linearGradient>
            <linearGradient
                    id="paint39_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5986" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5988" />
            </linearGradient>
            <linearGradient
                    id="paint40_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5991" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5993" />
            </linearGradient>
            <linearGradient
                    id="paint41_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop5996" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop5998" />
            </linearGradient>
            <linearGradient
                    id="paint42_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6001" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6003" />
            </linearGradient>
            <linearGradient
                    id="paint43_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6006" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6008" />
            </linearGradient>
            <linearGradient
                    id="paint44_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6011" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6013" />
            </linearGradient>
            <linearGradient
                    id="paint45_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6016" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6018" />
            </linearGradient>
            <linearGradient
                    id="paint46_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6021" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6023" />
            </linearGradient>
            <linearGradient
                    id="paint47_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6026" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6028" />
            </linearGradient>
            <linearGradient
                    id="paint48_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6031" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6033" />
            </linearGradient>
            <linearGradient
                    id="paint49_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6036" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6038" />
            </linearGradient>
            <linearGradient
                    id="paint50_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6041" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6043" />
            </linearGradient>
            <linearGradient
                    id="paint51_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6046" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6048" />
            </linearGradient>
            <linearGradient
                    id="paint52_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6051" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6053" />
            </linearGradient>
            <linearGradient
                    id="paint53_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6056" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6058" />
            </linearGradient>
            <linearGradient
                    id="paint54_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6061" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6063" />
            </linearGradient>
            <linearGradient
                    id="paint55_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6066" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6068" />
            </linearGradient>
            <linearGradient
                    id="paint56_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6071" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6073" />
            </linearGradient>
            <linearGradient
                    id="paint57_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6076" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6078" />
            </linearGradient>
            <linearGradient
                    id="paint58_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6081" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6083" />
            </linearGradient>
            <linearGradient
                    id="paint59_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6086" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6088" />
            </linearGradient>
            <linearGradient
                    id="paint60_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6091" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6093" />
            </linearGradient>
            <linearGradient
                    id="paint61_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6096" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6098" />
            </linearGradient>
            <linearGradient
                    id="paint62_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6101" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6103" />
            </linearGradient>
            <linearGradient
                    id="paint63_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6106" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6108" />
            </linearGradient>
            <linearGradient
                    id="paint64_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6111" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6113" />
            </linearGradient>
            <linearGradient
                    id="paint65_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6116" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6118" />
            </linearGradient>
            <linearGradient
                    id="paint66_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6121" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6123" />
            </linearGradient>
            <linearGradient
                    id="paint67_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6126" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6128" />
            </linearGradient>
            <linearGradient
                    id="paint68_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6131" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6133" />
            </linearGradient>
            <linearGradient
                    id="paint69_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6136" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6138" />
            </linearGradient>
            <linearGradient
                    id="paint70_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6141" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6143" />
            </linearGradient>
            <linearGradient
                    id="paint71_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6146" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6148" />
            </linearGradient>
            <linearGradient
                    id="paint72_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6151" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6153" />
            </linearGradient>
            <linearGradient
                    id="paint73_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6156" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6158" />
            </linearGradient>
            <linearGradient
                    id="paint74_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6161" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6163" />
            </linearGradient>
            <linearGradient
                    id="paint75_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6166" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6168" />
            </linearGradient>
            <linearGradient
                    id="paint76_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6171" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6173" />
            </linearGradient>
            <linearGradient
                    id="paint77_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6176" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6178" />
            </linearGradient>
            <linearGradient
                    id="paint78_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6181" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6183" />
            </linearGradient>
            <linearGradient
                    id="paint79_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6186" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6188" />
            </linearGradient>
            <linearGradient
                    id="paint80_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6191" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6193" />
            </linearGradient>
            <linearGradient
                    id="paint81_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6196" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6198" />
            </linearGradient>
            <linearGradient
                    id="paint82_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6201" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6203" />
            </linearGradient>
            <linearGradient
                    id="paint83_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6206" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6208" />
            </linearGradient>
            <linearGradient
                    id="paint84_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6211" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6213" />
            </linearGradient>
            <linearGradient
                    id="paint85_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6216" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6218" />
            </linearGradient>
            <linearGradient
                    id="paint86_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6221" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6223" />
            </linearGradient>
            <linearGradient
                    id="paint87_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6226" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6228" />
            </linearGradient>
            <linearGradient
                    id="paint88_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6231" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6233" />
            </linearGradient>
            <linearGradient
                    id="paint89_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6236" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6238" />
            </linearGradient>
            <linearGradient
                    id="paint90_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6241" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6243" />
            </linearGradient>
            <linearGradient
                    id="paint91_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6246" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6248" />
            </linearGradient>
            <linearGradient
                    id="paint92_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6251" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6253" />
            </linearGradient>
            <linearGradient
                    id="paint93_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6256" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6258" />
            </linearGradient>
            <linearGradient
                    id="paint94_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6261" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6263" />
            </linearGradient>
            <linearGradient
                    id="paint95_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6266" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6268" />
            </linearGradient>
            <linearGradient
                    id="paint96_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6271" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6273" />
            </linearGradient>
            <linearGradient
                    id="paint97_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6276" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6278" />
            </linearGradient>
            <linearGradient
                    id="paint98_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6281" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6283" />
            </linearGradient>
            <linearGradient
                    id="paint99_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6286" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6288" />
            </linearGradient>
            <linearGradient
                    id="paint100_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6291" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6293" />
            </linearGradient>
            <linearGradient
                    id="paint101_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6296" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6298" />
            </linearGradient>
            <linearGradient
                    id="paint102_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(189.196,614.899,-890.447,70.213,665.364,-26.8116)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6301" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6303" />
            </linearGradient>
            <linearGradient
                    id="paint114_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6306" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6308" />
            </linearGradient>
            <linearGradient
                    id="paint115_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6311" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6313" />
            </linearGradient>
            <linearGradient
                    id="paint116_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6316" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6318" />
            </linearGradient>
            <linearGradient
                    id="paint117_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6321" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6323" />
            </linearGradient>
            <linearGradient
                    id="paint118_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6326" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6328" />
            </linearGradient>
            <linearGradient
                    id="paint119_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6331" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6333" />
            </linearGradient>
            <linearGradient
                    id="paint120_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6336" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6338" />
            </linearGradient>
            <linearGradient
                    id="paint121_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6341" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6343" />
            </linearGradient>
            <linearGradient
                    id="paint122_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6346" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6348" />
            </linearGradient>
            <linearGradient
                    id="paint123_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6351" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6353" />
            </linearGradient>
            <linearGradient
                    id="paint124_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6356" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6358" />
            </linearGradient>
            <linearGradient
                    id="paint125_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6361" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6363" />
            </linearGradient>
            <linearGradient
                    id="paint126_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6366" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6368" />
            </linearGradient>
            <linearGradient
                    id="paint127_linear"
                    x1="0"
                    y1="0"
                    x2="1"
                    y2="0"
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="matrix(90.2645,579.539,-424.828,66.1754,337.429,-25.2698)">
                <stop
                        offset="0"
                        stop-color="#141414"
                        id="stop6371" />
                <stop
                        offset="0.666923"
                        stop-color="#1A1A1A"
                        id="stop6373" />
            </linearGradient>
            <path
                    id="path09876_fill"
                    d="M 39.0892,8.89157 C 35.3417,8.66539 20.0143,16.2574 15.9572,20.3494 12.3674,23.97 8.44516,22.8724 10.0479,18.6956 10.6716,17.0703 8.91891,14.7319 5.53375,12.6733 L -2.37414e-6,9.30796 4.17544,5.51431 C 7.7651,2.25287 16.5423,0.356571 24.7175,0.0455723 32.8927,-0.265445 40.4659,1.00888 41.6478,4.0888 c 0.1283,0.33462 0.1,2.63191 0.0762,3.75828 z" />
            <path
                    id="path1_fill"
                    d="M 1.15947,8.86565 C -0.554354,8.17156 -0.393024,6.83117 1.80866,3.47093 4.60892,-0.802815 4.98272,-0.873825 10.2754,1.86315 14.7849,4.19514 15.4001,5.22357 13.5897,7.40489 11.4125,10.0283 5.69067,10.7008 1.15947,8.86565 Z" />
            <path
                    id="path2_fill"
                    d="M 13.798,-4.12975e-5 C 12.2743,4.25688 4.51665,23.7335 4.57051,24.2815 L 0.432217,24.0836 C -1.15306,20.9801 1.73972,4.19428 7.1882,1.96045 Z" />
            <path
                    id="path3_fill"
                    d="m 183.377,117.047 c -3.871,1.705 -8.495,4.353 -11.208,5.034 -6.335,1.59 -8.98,4.855 -8.368,10.329 0.347,3.108 -0.585,4.564 -3.238,5.062 -4.415,0.829 -8.443,5.519 -8.237,9.59 l -0.677,2.17 c -1.759,-2.684 -7.654,-8.895 -10.783,-10.513 -5.208,-2.694 -6.374,-2.681 -13.789,0.151 l -8.099,3.093 -24.8494,-12.042 C 78.843,122.514 66.9801,115.449 63.3057,111.563 57.6085,105.538 57.4243,104.884 59.3199,97.4154 61.0566,90.5736 60.7616,88.4569 56.9845,80.6539 54.6068,75.7419 49.4118,68.1974 45.4401,63.8882 41.4683,59.5791 38.6698,55.3235 39.2212,54.4313 39.7726,53.5391 36.9749,47.5262 33.004,41.0692 28.4929,33.7338 25.3093,25.8762 24.5184,20.1258 23.5046,12.7543 22.3233,10.499 18.5836,8.79513 14.6194,6.98892 13.5109,7.21912 11.2411,10.3199 c -3.19676,4.3672 -2.28795,8.9777 4.7805,24.2528 2.8724,6.2073 5.8409,15.4092 6.5966,20.4486 0.7557,5.0395 2.9878,12.326 4.9603,16.1924 4.672,9.1579 1.6553,8.9962 -5.7122,-0.306 C 17.521,65.4212 16.3474,62.4123 17.211,58.9715 18.133,55.2978 17.2259,53.5286 12.7089,50.1889 5.85926,45.1247 4.40958,41.858 6.92566,37.1566 8.3929,34.415 7.7201,31.4084 3.99391,24.0551 0.165852,16.5008 -0.58652,12.9994 0.38386,7.2558 1.56607,0.25821 1.871,-4.2571e-5 8.95078,-4.2571e-5 13.4053,-4.2571e-5 20.6452,2.19752 27.3632,5.58877 c 8.6156,4.3492 13.5379,5.58883 22.1921,5.58883 6.1164,0 11.6388,-0.8383 12.272,-1.86295 1.7397,-2.81488 9.8106,-2.23419 14.8511,1.06845 2.4606,1.6123 4.9936,5.2978 5.6288,8.1901 0.6353,2.8922 2.7329,6.6865 4.6613,8.4317 3.2286,2.922 3.8429,2.9373 7.7606,0.1932 8.7289,-6.114 14.6399,-2.1878 19.1209,12.7007 2.917,9.695 7.565,15.9893 11.805,15.9893 1.842,0 2.28,1.0406 1.373,3.2601 -7.999,19.5822 -8.676,23.9394 -5.578,35.8977 5.528,21.3321 13.211,27.7141 29.228,24.2791 12.072,-2.589 19.322,-7.836 21.987,-15.911 1.692,-5.1282 3.518,-6.8235 8.983,-8.3413 8.277,-2.2991 11.658,-2.3693 14.907,-0.3094 1.919,1.2169 1.672,3.3541 -5.701,19.6957 z" />
            <path
                    id="path4_fill"
                    d="m 1.46345,21.7792 c 1.09204,-2.9901 3.26279,-5.1231 5.21361,-5.1231 4.66694,0 7.56584,-4.097 6.30654,-8.91275 -0.8307,-3.17678 0.0242,-4.47446 3.9251,-5.95756 6.8287,-2.596286 9.0544,-2.378985 7.8476,0.76603 -0.5619,1.46415 -1.5832,5.65576 -2.2696,9.31468 -1.0689,5.6977 -0.7503,6.6484 2.2194,6.624 l 2.4668,0.6479 c -1.2058,1.7569 -3.1021,5.4166 -4.8762,7.5871 -3.5484,4.3412 -7.6024,8.4506 -9.0265,8.492 -1.0246,0.0298 -4.1106,-1.312 -7.22829,-3.2132 L 4.98068,31.2462 C 3.42184,30.2956 1.41753,28.7212 -1.16888e-5,27.3522 Z" />
            <path
                    id="path5_fill"
                    d="M 0.309598,1.86291 C -0.323649,0.838296 0.0460291,-2.58701e-5 1.13111,-2.58701e-5 c 1.08508,0 1.97288,0.8383218701 1.97288,1.8629358701 0,2.38713 -1.31906,2.38713 -2.794392,0 z" />
            <path
                    id="path6_fill"
                    d="m 561.262,197.74 c -3.916,-2.489 -8.221,-17.572 -7.03,-24.632 0.912,-5.41 0.296,-7.337 -3.484,-10.888 -3.023,-2.84 -5.833,-3.921 -8.22,-3.164 -1.996,0.634 -7.639,-0.568 -12.546,-2.671 -7.518,-3.223 -9.917,-3.493 -15.284,-1.721 -3.639,1.201 -7.255,4.049 -8.439,6.648 -1.762,3.866 -2.928,4.362 -7.793,3.316 -3.147,-0.677 -7.985,-2.388 -10.752,-3.801 -6.815,-3.482 -10.631,-3.239 -18.285,1.162 -3.57,2.053 -10.822,5.966 -16.114,8.694 -9.059,4.671 -13.664,10.264 -13.664,16.595 0,3.824 -5.057,5.41 -8.401,2.634 -1.521,-1.262 -4.026,-6.543 -5.568,-11.735 -3.022,-10.174 -9.083,-18.057 -13.885,-18.057 -1.643,0 -4.886,1.33 -7.207,2.956 -5.176,3.625 -8.831,1.286 -10.603,-6.785 -1.999,-9.1 -18.497,-17.281 -22.333,-11.075 -0.633,1.025 -6.156,1.863 -12.272,1.863 -8.654,0 -13.576,-1.239 -22.192,-5.589 -7.369,-3.72 -13.85,-5.588 -19.382,-5.588 -6.751,0 -8.539,-0.72 -9.527,-3.832 -0.669,-2.108 -4.069,-5.193 -7.556,-6.855 -4.972,-2.372 -6.581,-4.458 -7.463,-9.675 -0.617,-3.658 -1.815,-9.369 -2.661,-12.691 -0.88,-3.4554 -0.816,-6.4863 0.149,-7.0832 0.929,-0.5738 0.321,-3.1296 -1.35,-5.6797 -2.461,-3.7557 -2.629,-5.5332 -0.887,-9.3572 1.183,-2.5963 1.63,-5.5642 0.992,-6.5953 -0.637,-1.0311 0.951,-4.1119 3.529,-6.8464 2.579,-2.7344 6.011,-8.188 7.628,-12.119 1.617,-3.9309 6.6,-11.218 11.073,-16.1934 4.474,-4.9755 10.145,-13.6911 12.603,-19.3679 3.412,-7.8798 5.411,-10.32903 8.453,-10.3533 2.192,-0.01677 3.869,1.0161 3.726,2.2968 -0.565,5.0848 3.555,3.8406 7.712,-2.32864 L 348.493,-3.38385e-5 441.768,1.25549 c 75.142,1.01137 95.349,0.06576 97.983,1.99802 1.811,1.3282 6.931,3.33304 11.378,4.45518 l 8.086,2.0402 -5.757,3.64531 c -3.166,2.0048 -5.757,4.0027 -5.757,4.4398 0,0.437 2.143,1.6094 4.762,2.6052 3.543,1.3471 6.242,1.0451 10.545,-1.18 5.313,-2.7473 6.297,-2.7457 12.095,0.0192 3.492,1.6654 8.26,2.5205 10.675,1.9144 2.4,-0.6024 4.878,-0.2633 5.506,0.7535 0.643,1.0393 -1.982,2.3767 -5.993,3.0544 -10.902,1.842 -16.567,6.382 -24.475,19.6169 -6.605,11.0546 -6.984,12.3878 -4.351,15.3101 2.583,2.8672 3.296,2.9125 6.84,0.434 2.176,-1.5219 6.052,-7.1466 8.614,-12.4995 4.977,-10.4015 14.24,-18.1481 21.699,-18.1481 5.369,0 5.432,0.8713 0.516,7.1208 l -3.865,4.9142 3.737,3.0262 c 3.165,2.563 3.348,3.4241 1.194,5.6259 -1.399,1.4298 -3.109,4.905 -3.8,7.7227 -1.077,4.3942 -0.684,5.123 2.765,5.123 4.865,0 13.796,-4.4594 21.933,-10.9519 4.32,-3.4469 7.786,-4.6461 12.304,-4.2568 4.55,0.3919 7.842,-0.7647 11.903,-4.1814 7.991,-6.7246 14.488,-8.9842 29.966,-10.4224 12.291,-1.1421 14.249,-1.9036 20.492,-7.9695 8.288,-8.0519 17.067,-11.939 19.194,-8.4983 0.782,1.2653 0.595,3.8445 -0.415,5.7314 -1.009,1.887 -1.304,5.1064 -0.654,7.1542 1.017,3.2042 -0.904,4.6616 -13.782,10.4528 -12.355,5.5568 -15.156,7.6102 -16.073,11.784 -1.171,5.3312 -5.253,7.8984 -19.408,12.2048 -4.529,1.378 -10.397,4.7078 -13.04,7.3998 -2.644,2.692 -7.705,6.7225 -11.247,8.9568 -3.543,2.2342 -6.935,6.1486 -7.538,8.6986 -0.994,4.2024 -1.225,4.3021 -2.469,1.0647 -2.331,-6.0661 -5.843,-0.1356 -6.045,10.2073 -0.207,10.598 -5.579,17.827 -17.361,23.362 -12.079,5.676 -29.267,19.087 -32.749,25.554 -3.075,5.709 -3.204,7.933 -1.309,22.607 1.775,13.75 1.666,17.115 -0.697,21.687 -3.141,6.072 -2.828,5.865 -5.908,3.909 z M -1.95935e-5,214.145 c 0,-1.025 0.8383175935,-1.863 1.8629295935,-1.863 1.02461,0 1.86293,0.838 1.86293,1.863 0,1.025 -0.83832,1.863 -1.86293,1.863 -1.024612,0 -1.8629295935,-0.838 -1.8629295935,-1.863 z M 9.31462,218.912 c 0,-0.452 0.83828,-1.339 1.86288,-1.973 1.0247,-0.633 1.863,-0.263 1.863,0.822 0,1.085 -0.8383,1.973 -1.863,1.973 -1.0246,0 -1.86288,-0.37 -1.86288,-0.822 z m 9.31468,4.548 c -2.3881,-1.544 -2.3204,-1.81 0.4657,-1.835 1.7931,-0.015 3.2601,0.81 3.2601,1.835 0,2.272 -0.2101,2.272 -3.7258,0 z m 3.1937,9.285 c 1.3571,-5.189 3.4026,-6.04 6.2558,-2.603 1.9978,2.408 1.9534,3.212 -0.2547,4.609 -4.5008,2.848 -7.0477,1.997 -6.0011,-2.006 z" />
            <path
                    id="path7_fill"
                    d="m 1.99793,19.1065 c -2.979195,-3.4194 -2.545924,-7.9289 0.76182,-7.9289 1.05874,0 1.49702,1.6364 0.97399,3.6365 -0.52304,2.0001 0.00746,3.9812 1.17993,4.4023 1.17199,0.4212 1.63674,1.305 1.03278,1.9638 C 5.34247,21.8391 3.56564,20.9058 1.99793,19.1065 Z M 12.8196,4.47109 c -0.663,-1.72776 -0.7863,-3.560595 -0.274,-4.072903 0.5123,-0.512308 1.474,0.482201 2.137,2.209963 0.663,1.72776 0.7863,3.56048 0.274,4.07279 -0.5123,0.51231 -1.474,-0.48209 -2.137,-2.20985 z M 1.14529,2.7944 C 1.14529,1.25748 2.7421,-7.24072e-6 4.69374,-7.24072e-6 7.8479,-7.24072e-6 7.93167,0.310488 5.44777,2.7944 c -3.5086,3.50862 -4.30248,3.50862 -4.30248,0 z m 32.31461,48.562 c -0.661,-1.1177 0.9549,-2.1584 1.8358,-2.3991 0.6067,-0.1658 0.7734,0.2328 1.2943,0.3394 0.873,0.1786 1.5409,-0.9915 2.1259,-1.4207 -0.1638,0.9125 -0.441,2.0599 -1.1601,2.707 -1.0043,0.9027 -2.8895,0.297 -4.0959,0.7734 z" />
            <path
                    id="path8_fill"
                    d="M 1.38082e-6,2.28248 C 1.38082e-6,1.83064 0.838319,0.942841 1.86293,0.309591 2.88754,-0.323659 3.72586,0.0460208 3.72586,1.13111 3.72586,2.21619 2.88754,3.104 1.86293,3.104 0.838319,3.104 1.38082e-6,2.73432 1.38082e-6,2.28248 Z" />
            <path
                    id="path9_fill"
                    d="M 1.11157e-5,1.67733 4.96888,0.255451 C 8.07697,-0.633971 11.6303,0.771988 17.3825,4.9029 c 9.7275,6.9858 12.0241,7.1307 17.6752,1.11533 5.8496,-6.226587 12.7966,-5.9245307 21.4237,0.93147 3.8679,3.0738 8.6222,5.5888 10.5651,5.5888 2.0355,0 5.1001,2.657 7.2316,6.2696 2.8333,4.8022 7.2875,7.8889 19.0322,13.1895 l 14.8037,7.9781 -5.524,1.497 c -3.4877,0.9452 -6.9735,4.575 -8.0985,7.044 -1.1249,2.4691 -4.9264,5.8631 -8.4476,7.5423 -7.3808,3.5197 -6.6226,3.3864 -9.2571,1.6273 v -1e-4 C 75.6594,56.9334 73.7621,54.4656 72.5705,52.2021 70.3296,47.9455 61.5251,43.3854 44.8612,37.8505 35.5394,34.7543 34.9385,34.7722 26.7636,38.3884 L 18.308,42.1287 17.1237,37.1141 C 16.4724,34.356 14.4776,30.4227 12.6909,28.3735 10.9042,26.3243 8.40172,22.6343 7.12988,20.1736 5.09024,16.2273 5.18858,15.8419 7.96351,16.9067 9.69385,17.5707 12.7398,17.2415 14.7323,16.1751 18.24,14.2979 18.2001,14.0332 13.4734,7.83614 9.42505,2.52848 7.98855,1.75864 5.05837,3.32684 2.66856,4.60582 1.52501,4.60604 1.52501,3.3273 Z" />
            <path
                    id="path10_fill"
                    d="m 224.589,99.2193 c -3.214,0.6028 -8.66,0.2878 -12.104,-0.7 -4.712,-1.3511 -7.583,-1.1134 -11.592,0.9599 -3.536,1.8288 -7.789,2.3628 -12.641,1.5868 -6.129,-0.98 -7.639,-0.559 -9.33,2.6 -1.109,2.073 -4.868,5.531 -8.352,7.684 -6.282,3.883 -6.404,3.886 -14.461,0.409 -4.563,-1.969 -10.82,-6.881 -14.269,-11.201 -5.382,-6.742 -7.076,-7.6938 -13.697,-7.6938 -4.931,0 -13.118,-2.6068 -23.573,-7.5061 -15.5106,-7.2686 -16.329,-7.4415 -25.8572,-5.4635 -5.4117,1.1235 -10.238,2.6874 -10.725,3.4754 -0.487,0.788 0.7293,6.7661 2.7029,13.2847 1.9737,6.5183 3.3605,12.0803 3.0818,12.3583 -0.2787,0.279 -3.6005,-1.694 -7.3817,-4.385 -5.8387,-4.154 -7.5084,-4.565 -11.0776,-2.729 l -5.4419,1.667 c -1.3394,-1.026 -3.1867,-2.181 -5.2188,-3.218 -8.9935,-4.5883 -12.1939,-9.6719 -9.3887,-14.9135 2.1229,-3.9668 9.7075,-6.7466 12.9464,-4.7449 4.3668,2.6989 5.6539,-1.2795 2.0509,-6.3394 C 44.4957,66.2534 36.7337,63.7822 27.9293,67.2407 20.8334,70.028 20.6315,69.9875 14.7185,64.5867 11.4158,61.5702 6.72607,57.7998 4.29679,56.2081 -2.40044,51.8199 -0.851393,39.1086 6.0575,41.7598 c 2.18468,0.8383 3.61327,-0.2049 4.8941,-3.5737 0.9948,-2.6166 4.4417,-6.119 7.6598,-7.7831 5.0107,-2.5912 7.2296,-2.7019 15.4492,-0.7707 5.279,1.2402 11.7912,3.3634 14.4716,4.7181 3.5537,1.7962 6.6334,1.9773 11.3727,0.6687 4.8141,-1.3292 8.5403,-1.0744 14.3715,0.983 7.0791,2.4977 8.458,2.4746 13.6844,-0.2281 l 5.812,-3.0054 -4.7694,-4.1026 c -4.2086,-3.6201 -4.4705,-4.5113 -2.2275,-7.5789 1.3981,-1.912 2.0713,-4.9595 1.496,-6.7722 -0.7887,-2.4851 0.2402,-3.5648 4.1829,-4.38948 2.8759,-0.60153 12.8072,-3.14445 22.0702,-5.6509 20.28,-5.48747 22.169,-5.55302 28.576,-0.99128 2.754,1.96125 8.333,4.16744 12.396,4.90261 4.064,0.73515 8.849,2.09005 10.632,3.01085 2.142,1.1054 5.025,0.7532 8.486,-1.0365 4.767,-2.46513 5.781,-2.36934 11.194,1.0578 3.274,2.0728 5.953,4.5712 5.953,5.552 0,0.9808 4.088,3.4824 9.085,5.559 5.511,2.2903 9.893,5.5485 11.138,8.2819 1.569,3.443 3.491,4.4981 8.147,4.4719 13.954,-0.0786 21.527,1.4592 30.847,6.2638 5.418,2.7927 10.665,4.5744 11.66,3.9593 0.996,-0.6152 3.551,-0.566 5.679,0.1094 l 3.868,1.2278 -3.982,4.2382 c -2.841,3.0245 -3.647,5.5694 -2.815,8.8861 1.198,4.7738 -2.926,8.3317 -6.848,5.9078 -2.246,-1.3884 -9.029,4.5229 -9.029,7.8691 0,1.3518 -2.461,3.7309 -5.47,5.2868 -7.738,4.0015 -8.025,5.2405 -2.844,12.2642 2.452,3.3227 3.629,6.1023 3.51,8.8289 -0.059,1.3628 -0.443,2.7128 -1.153,4.1108 -6.261,-1.908 -12.44,-4.2322 -18.966,-4.8157 z" />
            <path
                    id="path11_fill"
                    d="M 43.5978,45.1077 C 39.3834,41.9201 32.1372,41.5017 30.3802,44.3445 29.0323,46.5254 19.507,44.9968 14.3407,41.7703 10.6291,39.4523 7.161,32.553 7.161,27.487 7.161,25.544 5.27479,22.6257 2.96942,21.0018 -0.598558,18.4885 -0.806424,17.7771 1.57222,16.2203 3.10913,15.2144 6.27054,14.8393 8.59754,15.3867 11.5656,16.085 14.2945,14.9161 17.74,11.4705 20.9825,8.22801 24.9259,6.4382 29.344,6.20371 33.0248,6.00834 38.3565,4.31958 41.1921,2.451 c 6.4105,-4.22425 20.4127,-2.860676 31.9074,3.10721 10.6594,5.53419 26.7539,5.61519 30.3805,0.15282 2.283,-3.43755 3.293,-3.66848 8.105,-1.85203 3.024,1.14133 5.965,3.54541 6.535,5.34231 0.57,1.79689 3.111,4.89869 5.647,6.89299 2.66,2.093 3.804,4.1237 2.705,4.8031 -1.242,0.7672 -1.007,2.6032 0.675,5.2716 1.418,2.252 3.159,6.0323 3.867,8.4009 1.211,4.0509 0.908,4.2353 -5.098,3.1084 -3.513,-0.6589 -10.082,-0.1838 -14.6,1.0555 -4.518,1.2394 -13.5341,2.3732 -20.0364,2.5196 -8.9167,0.2008 -12.4108,1.0712 -14.2173,3.5418 -2.0744,2.8369 -2.5416,2.8941 -3.4885,0.4265 -1.3608,-3.546 -8.0982,-3.5719 -14.2508,-0.0548 -5.9625,3.4085 -11.1664,3.3889 -15.7252,-0.0592 z" />
            <path
                    id="path12_fill"
                    d="M 97.7413,66.9481 C 95.9015,67.1734 91.726,62.0109 90.5487,60.3695 89.3714,58.7281 81.6229,54.967 73.927,51.5849 63.0609,46.8095 59.4331,44.2248 57.6899,40.0163 56.1411,36.2772 53.4817,34.0548 49.1119,32.8483 45.6285,31.8865 40.2115,28.9396 37.0741,26.2996 29.7958,20.1752 22.4202,20.1235 16.7521,26.1569 12.7879,30.3766 4.01461,32.9826 6.3176,29.2562 6.84721,28.3993 5.64566,22.3215 3.64743,15.7499 1.64919,9.1784 0.00785118,3.6515 2.68766e-5,3.468 -0.00742484,3.2845 4.42824,2.21205 9.85789,1.08487 19.4264,-0.901566 20.2225,-0.7337 35.7476,6.54167 c 10.379,4.86383 18.6531,7.50613 23.5041,7.50613 6.5415,0 8.2516,0.966 13.5481,7.6535 3.4865,4.4021 9.5774,9.1607 14.3369,11.2009 8.1797,3.5062 8.3446,3.5043 14.2813,-0.1649 5.144,-3.1793 6.497,-3.3533 9.425,-1.2123 1.88,1.3748 4.884,2.1166 6.674,1.6484 1.79,-0.4683 4.71,-0.0371 6.489,0.9581 2.919,1.6339 2.763,2.1177 -1.611,4.9836 -3.57,2.3388 -5.729,2.6791 -8.205,1.2935 -1.848,-1.0343 -2.941,-2.5682 -2.429,-3.4087 0.513,-0.8406 -0.898,-1.7887 -3.134,-2.107 -2.732,-0.389 -4.789,0.8329 -6.272,3.7259 -1.214,2.3675 -3.8778,5.6351 -5.9197,7.2614 -3.6254,2.8875 -3.6335,3.106 -0.3349,9.3147 1.8575,3.4962 -0.8881,-2.2743 3.6898,6.2041 z" />
            <path
                    id="path13_fill"
                    d="m 20.8898,4.38119 c 5.1529,0.55062 21.318,6.98041 27.9345,10.68321 3.1651,1.7713 3.1117,2.0693 -0.8689,4.8575 -3.1212,2.1862 -5.1672,2.4748 -7.7491,1.0929 C 38.2768,19.9822 35.04,19.6636 33.0133,20.3068 26.9561,22.2293 16.493,17.7812 15.2294,12.7466 14.8338,11.1704 13.4244,9.42465 10.735,7.29896 9.39024,6.2361 2.08624,1.53906 -1.72103e-5,0.374574 7.49262,-1.58987 14.121,4.83345 20.8898,4.38119 Z" />
            <path
                    id="path14_fill"
                    d="M 21.5872,-2.58337e-6 C 23.2783,1.90891 28.5819,7.8074 31.1444,10.5626 c 3.1311,3.3665 3.6797,6.2305 0.8596,4.4876 -1.0478,-0.6476 -2.3937,1.3794 -3.0308,4.5644 L 27.8274,25.344 23.3852,20.5508 C 20.5625,17.505 17.7419,16.1387 15.6484,16.8032 13.5538,17.468 10.104,15.7939 6.17693,12.207 L 1.56639e-5,6.56531 4.78264,2.80327 C 8.37052,-0.018966 10.4179,-0.502472 12.9785,0.867905 15.1912,2.05212 17.3392,2.05773 19.0857,0.88462 Z" />
            <path
                    id="path15_fill"
                    d="M 1.12026,2.79442 C -0.173415,1.23563 -0.37512,1.33171e-5 0.664077,1.33171e-5 1.68869,1.33171e-5 3.57059,1.2575 4.84611,2.79442 6.13979,4.35321 6.34155,5.58883 5.30235,5.58883 4.27774,5.58883 2.39579,4.33134 1.12026,2.79442 Z" />
            <path
                    id="path16_fill"
                    d="M 19.0904,14.7477 C 17.0041,12.4424 14.3905,11.4095 12.3124,12.069 10.1168,12.7659 7.14856,11.3609 3.85237,8.06471 -0.977251,3.23506 -1.04702,2.91717 2.42419,1.55966 4.43144,0.774675 7.03368,0.073568 8.20695,0.00156543 11.1356,-0.178208 27.7643,15.7491 26.2397,17.2737 c -1.995,1.995 -3.5575,1.4429 -7.1493,-2.526 z" />
            <path
                    id="path17_fill"
                    d="M 0.253008,5.55114 C 0.615944,2.83762 2.26013,0.35603 3.90678,0.0364619 6.67287,-0.500399 17.2785,5.05348 15.9755,6.35651 15.6581,6.67388 11.8422,7.73258 7.49579,8.70917 -0.341754,10.4702 -0.401401,10.4442 0.253008,5.55114 Z" />
            <path
                    id="path18_fill"
                    d="M 5.58605,10.4777 C -0.867133,4.44954 -1.58696,1.91006 2.69222,0.267974 6.52432,-1.20255 13.5983,3.59149 16.2795,9.47612 c 2.8134,6.17478 2.7635,6.40648 -1.3788,6.40648 -1.9409,0 -6.13247,-2.4322 -9.31465,-5.4049 z" />
            <path
                    id="path19_fill"
                    d="M 4.2315,6.07651 C 2.81459,6.0957 1.4105,6.23688 2.15583e-6,5.48809 L 4.04892,2.20953 C 5.31778,1.18206 6.70211,0.477261 8.06492,0.074382 9.42773,-0.328497 10.6569,1.02768 11.8395,1.20768 c 1.1827,0.17996 2.0946,-0.255753 2.823,0.46539 0.7284,0.72114 0.4546,0.91777 0.4546,2.13833 0,1.81402 0.3698,2.51469 -1.4318,2.61578 C 11.1284,6.57062 12.7694,5.96136 4.2315,6.07651 Z" />
            <path
                    id="path20_fill"
                    d="m 49.7233,102.725 c 0,-1.31 5.6489,-3.6021 13.6624,-5.5434 3.0378,-0.7359 4.8338,-0.5584 4.2303,0.4181 -0.5768,0.9333 -3.3716,2.1657 -6.2106,2.7383 -2.839,0.573 -6.6289,1.609 -8.4219,2.303 -1.7931,0.694 -3.2602,0.732 -3.2602,0.085 z m 120.4127,1.189 c -0.629,-1.018 0.104,-2.887 1.63,-4.1531 3.029,-2.5138 3.661,-0.5424 1.115,3.4761 -0.973,1.535 -2.051,1.801 -2.745,0.677 z m 16.137,13.317 c 0.647,-0.647 0.332,-2.754 -0.7,-4.682 -1.206,-2.254 -1.241,-4.641 -0.098,-6.684 2.603,-4.65 -2.221,-12.7342 -9.011,-15.1011 -3.102,-1.0815 -8.446,-4.1064 -11.876,-6.7223 -3.429,-2.6158 -7.693,-4.756 -9.475,-4.756 -1.781,0 -9.881,-1.6957 -17.998,-3.7683 -13.05,-3.3321 -15.35,-3.4636 -19.871,-1.1369 -9.369,4.8217 -19.2942,6.7869 -23.3407,4.6213 -3.0352,-1.6244 -6.3476,-0.6212 -17.8977,5.4205 -7.7952,4.0776 -17.1072,8.0465 -20.6934,8.8199 C 51.7261,94.0154 44.8631,96.6279 40.061,99.0476 26.4402,105.911 6.92833,112.83 1.53121,112.71 -1.95199,112.632 0.40296,111.104 9.67049,107.429 25.4207,101.183 41.6047,93.0495 43.1017,90.6273 44.9455,87.6441 40.9432,86.5737 36.1356,88.7643 32.5959,90.377 30.4145,90.2262 26.33,88.086 l -5.2533,-2.7524 5.7144,-2.9551 c 6.4598,-3.3405 8.4919,-7.1199 7.0077,-13.0334 -1.4374,-5.7272 6.488,-9.9353 23.5615,-12.5103 9.1738,-1.3835 16.1478,-3.6865 20.8432,-6.8828 8.2797,-5.6364 6.8573,-9.8964 -2.0698,-6.1987 -4.2261,1.7506 -7.3043,1.7698 -13.5629,0.0845 -7.6058,-2.048 -7.8768,-2.3404 -4.4748,-4.828 5.6925,-4.1624 17.4657,-6.6661 25.201,-5.3592 4.8947,0.8269 8.9041,0.248 13.019,-1.8799 l 5.946,-3.0748 -3.9141,-4.1665 c -2.1528,-2.2916 -3.9142,-4.6591 -3.9142,-5.2613 0,-1.7285 11.2153,-5.1853 16.8223,-5.1853 2.799,0 10.472,-2.0262 17.051,-4.50261 6.58,-2.47642 21.759,-5.85728 33.732,-7.51304 19.458,-2.690899 23.502,-2.721232 38.093,-0.28585 8.978,1.49855 21.773,3.30842 28.433,4.02196 6.66,0.71354 13.551,1.82992 15.315,2.48093 2.411,0.88999 -6.949,9.22021 -37.73,33.57831 l -40.936,32.3947 3.694,5.7744 c 3.257,5.0904 4.568,5.7058 11.067,5.1959 6.18,-0.4849 7.873,0.1875 10.476,4.1597 2.533,3.866 2.726,5.8235 1.049,10.6348 -1.461,4.19 -1.479,6.591 -0.064,8.296 2.31,2.784 -0.754,10.089 -4.232,10.089 -1.159,0 -1.578,-0.529 -0.931,-1.176 z m -13.224,0.693 c -1.825,-2.199 -1.709,-3.223 0.581,-5.124 3.786,-3.142 5.664,-1.01 3.46,3.928 -1.519,3.405 -2.072,3.569 -4.041,1.196 z" />
            <path
                    id="path21_fill"
                    d="M 301.117,8.42629 C 288.652,7.43644 287.192,6.63646 290.963,2.86533 c 3.532,-3.532665 12.063,-3.833328 20.137,-0.70974 4.429,1.71319 4.939,2.52589 3.032,4.82381 -1.261,1.51995 -2.819,2.61706 -3.462,2.43805 -0.643,-0.17902 -4.942,-0.62502 -9.553,-0.99116 z m 15.331,0.96751 c 0.955,-2.8657 14.242,-3.38345 14.942,-0.58228 0.256,1.02462 -3.184,2.12498 -7.646,2.44518 -6.049,0.4343 -7.904,-0.0393 -7.296,-1.8629 z m 24.534,6.8506 c 0.847,-5.772 3.896,-6.67208 14.303,-4.2223 l 10.104,2.3782 -9.315,0.5775 c -5.123,0.3177 -10.111,1.3656 -11.084,2.3287 -2.636,2.6077 -4.475,2.1202 -4.008,-1.0621 z m 296.394,17.7168 c -0.684,-1.1064 1.497,-1.863 5.369,-1.863 3.586,0 7.038,0.8384 7.672,1.863 0.684,1.1064 -1.497,1.8629 -5.369,1.8629 -3.587,0 -7.039,-0.8383 -7.672,-1.8629 z m -12.691,0.6598 c -2.43,-2.4294 -1.27,-4.3857 2.6,-4.3857 2.168,0 3.556,0.9765 3.144,2.2122 -0.908,2.7224 -4.018,3.8995 -5.744,2.1735 z m -22.442,0.2828 c -1.955,-5.0925 0.244,-6.4033 10.046,-5.99 7.419,0.3129 9.251,1.0354 9.251,3.6502 0.001,1.946 -1.407,3.2601 -3.492,3.2601 -1.921,0 -5.992,0.4998 -9.046,1.1107 -4.178,0.8355 -5.853,0.3324 -6.759,-2.031 z M 139.974,62.3256 c -9.524,-3.7621 -9.329,-3.5564 -6.557,-6.8956 1.296,-1.5617 1.625,-2.8661 0.731,-2.8987 -0.894,-0.0326 0.051,-1.3261 2.1,-2.8746 2.05,-1.5484 3.726,-3.4096 3.726,-4.136 0,-0.7263 2.783,-4.379 6.185,-8.1171 5.95,-6.5382 6.764,-6.8334 21.424,-7.7616 8.381,-0.5307 18.71,-1.5202 22.953,-2.1989 4.56,-0.7295 8.19,-0.4657 8.876,0.6449 1.321,2.1372 -1.2,3.0456 -15.659,5.6433 -14.348,2.5777 -22.972,6.5946 -28.652,13.3453 -5.984,7.1115 -6.185,11.6016 -0.689,15.4351 l 4.191,2.924 -5.588,-0.0833 c -3.074,-0.0458 -8.942,-1.4078 -13.041,-3.0267 z M 803.675,248.665 c -1.581,-1.793 -5.391,-8.292 -8.466,-14.442 -3.075,-6.149 -11.206,-17.442 -18.068,-25.095 -7.667,-8.551 -11.563,-14.22 -10.105,-14.706 1.304,-0.434 4.101,1.514 6.215,4.329 5.126,6.825 11.437,12.752 21.396,20.091 8.255,6.084 12.338,11.714 7.011,9.67 -6.142,-2.357 -4.609,3.238 3.339,12.188 4.634,5.217 8.426,9.878 8.426,10.356 0,2.265 -7.2,0.499 -9.748,-2.391 z M 45.1487,200.537 c 5.3072,-0.995 7.0925,-0.304 12.069,4.672 7.5591,7.559 13.2719,10.397 26.3644,13.095 8.3024,1.711 11.5358,3.411 14.5555,7.652 4.0394,5.672 3.7424,7.343 -2.5441,14.326 -2.0753,2.306 -3.1055,4.192 -2.2891,4.192 0.8164,0 0.4238,1.278 -0.8722,2.839 -1.2961,1.562 -1.8513,3.345 -1.2339,3.962 0.6175,0.618 -0.0579,3.406 -1.5009,6.196 l -2.6236,5.074 15.2112,8.388 5.646,-0.296 c 1.844,-0.045 7.016,-0.06 9.931,1.761 3.624,2.264 3.698,1.524 6.38,1.425 1.975,-1.221 8.09,2.164 28.597,11.359 6.051,2.714 9.485,4.004 11.118,3.705 l 4.051,-1.082 c -3.622,-4.642 -8.473,-11.369 -8.473,-12.428 0,-1.378 -1.796,-3.698 -3.991,-5.155 -3.361,-2.232 -3.655,-3.275 -1.866,-6.618 1.168,-2.183 4.675,-5.785 7.793,-8.005 l 5.669,-4.037 -4.699,-4.354 c -2.583,-2.394 -7.648,-6.604 -11.254,-9.354 -3.605,-2.751 -6.555,-6.633 -6.555,-8.628 0,-6.017 3.632,-11.115 7.129,-10.005 2.087,0.662 3.804,-0.4 5.009,-3.098 1.008,-2.258 4.566,-5.688 7.905,-7.621 5.43,-3.142 7.104,-3.271 15.835,-1.219 5.37,1.262 11.956,3.403 14.637,4.757 3.553,1.797 6.633,1.978 11.372,0.669 4.816,-1.33 8.542,-1.074 14.384,0.987 6.697,2.363 8.609,2.403 12.694,0.262 l 4.81,-2.52 -5.005,-3.279 c -4.107,-2.691 -4.596,-3.771 -2.727,-6.023 1.253,-1.509 2.315,-4.946 2.362,-7.637 0.061,-3.583 1.331,-5.252 4.741,-6.234 18.121,-5.217 40.754,-10.858 43.567,-10.858 1.849,0 5.616,1.605 8.37,3.566 2.755,1.961 8.333,4.168 12.397,4.903 4.064,0.735 8.848,2.09 10.632,3.011 2.147,1.108 5.042,0.744 8.563,-1.077 4.959,-2.564 5.783,-2.437 12.126,1.873 3.743,2.544 6.806,5.319 6.806,6.168 0,0.848 3.832,3.006 8.517,4.795 5.17,1.975 9.309,4.992 10.534,7.681 1.493,3.278 3.516,4.426 7.784,4.42 13.726,-0.02 21.27,1.522 30.349,6.203 5.324,2.745 10.989,4.489 12.589,3.875 1.601,-0.614 5.001,0.253 7.557,1.928 4.134,2.709 5.228,2.745 9.902,0.328 2.89,-1.495 6.339,-4.024 7.664,-5.621 5.084,-6.125 15.601,-7.056 30.431,-2.693 8.813,2.593 15.628,3.582 18.945,2.749 5.04,-1.265 5.09,-1.4 1.829,-5.004 -3.232,-3.57 -3.222,-3.83 0.256,-7.246 3.314,-3.254 4.37,-3.342 12.923,-1.078 5.123,1.356 13.507,4.717 18.63,7.47 7.09,3.809 10.92,4.755 16.038,3.958 4.419,-0.688 12.036,0.543 22.218,3.59 17.998,5.387 23.08,5.674 32.302,1.821 6.582,-2.751 18.649,-2.299 25.383,0.95 1.536,0.741 5.299,0.293 8.36,-0.996 4.783,-2.014 5.579,-3.354 5.653,-9.521 0.048,-3.979 -1.42,-9.417 -3.296,-12.204 -3.254,-4.836 -3.255,-5.094 -0.029,-6.82 7.182,-3.844 16.976,-4.334 27.206,-1.36 8.214,2.388 12.06,4.964 19.252,12.892 12.409,13.68 20.537,19.317 31.343,21.739 5.078,1.138 11.766,3.998 14.862,6.355 8.712,6.633 12.912,7.3 19.756,3.138 6.848,-4.165 14.116,-2.344 12.057,3.021 -0.615,1.603 0.203,4.931 1.818,7.396 2.813,4.292 2.668,4.749 -3.436,10.854 -6.055,6.055 -6.226,6.58 -3.439,10.56 1.614,2.304 10.239,10.379 8.822,11.515 1.8,10.154 2.811,-3.542 5.578,-2.49 7.24,2.753 12.17,-1.202 16.576,-13.296 6.363,-17.469 4.818,-44.189 -2.792,-48.261 -2.011,-1.076 -5.269,-5.118 -7.24,-8.982 -4.812,-9.432 -20.224,-21.448 -25.276,-19.706 -6.549,2.259 -15.189,1.194 -23.113,-2.849 -7.301,-3.724 -7.548,-4.123 -4.994,-8.065 1.478,-2.28 3.662,-8.059 4.854,-12.842 1.192,-4.783 4.248,-10.651 6.792,-13.041 4.03,-3.785 6.584,-4.364 19.844,-4.496 8.37,-0.083 17.405,-0.773 20.077,-1.533 3.112,-0.884 7.435,-0.305 12.025,1.613 4.179,1.746 9.306,2.524 12.3,1.867 4.4,-0.967 4.992,-1.842 4.141,-6.119 -0.547,-2.745 -0.076,-7.401 1.046,-10.346 1.927,-5.056 2.479,-5.284 9.916,-4.097 4.331,0.691 9.83,2.536 12.218,4.099 5.508,3.605 10.298,2.011 8.737,-2.908 -1.695,-5.339 5.025,-8.587 8.802,-4.254 5.752,6.599 6.789,10.479 4.098,15.34 -1.408,2.545 -2.591,6.554 -2.627,8.911 -0.036,2.356 -1.311,6.691 -2.832,9.633 -2.684,5.19 -2.518,5.68 5.569,16.438 4.585,6.099 11.488,13.38 15.341,16.179 3.853,2.8 10.041,8.446 13.751,12.547 5.375,5.943 7.578,7.193 10.846,6.155 2.937,-0.932 3.724,-2.18 2.771,-4.394 -0.732,-1.7 -1.554,-5.187 -1.826,-7.749 -0.272,-2.561 -1.078,-6.117 -1.791,-7.902 -0.852,-2.131 -0.276,-3.636 1.68,-4.386 2.669,-1.025 2.691,-1.654 0.207,-6.071 -1.525,-2.71 -3.556,-7.129 -4.514,-9.819 -1.091,-3.066 -4.763,-6.355 -9.833,-8.81 -9.311,-4.507 -15.922,-13.564 -12.173,-16.675 1.276,-1.059 4.83,-2.53 7.898,-3.268 3.068,-0.738 7.884,-2.504 10.701,-3.923 4.405,-2.219 5.871,-2.195 10.453,0.175 4.897,2.532 5.654,2.455 9.315,-0.956 2.192,-2.042 3.985,-4.497 3.985,-5.455 0,-2.886 11.348,-7.829 15.953,-6.948 4.195,0.801 9.959,-1.297 8.211,-2.989 -0.483,-0.468 -8.422,-3.793 -17.644,-7.389 -16.959,-6.615 -20.135,-10.027 -8.583,-9.221 6.174,0.43 6.244,0.355 3.007,-3.221 -4.74,-5.2374 -0.119,-6.5841 10.288,-2.9988 4.443,1.5309 8.8,2.3368 9.682,1.792 0.882,-0.5452 2.615,-0.1901 3.851,0.7888 4.203,3.331 16.401,6.351 20.994,5.198 l 4.578,-1.149 -6.074,-5.2753 c -9.774,-8.4901 -13.927,-10.0968 -20.327,-7.8656 -4.681,1.6317 -7.049,1.2236 -14.338,-2.47 -4.802,-2.4334 -13.747,-5.0381 -19.877,-5.788 -6.13,-0.7499 -14.917,-2.8234 -19.528,-4.6079 -8.855,-3.427 -35.013,-8.1989 -56.819,-10.3652 -13.014,-1.2928 -13.034,-1.2876 -9.66,2.49 4.692,5.2517 1.244,6.6103 -7.375,2.9061 -5.339,-2.2947 -13.403,-3.1483 -31.402,-3.3238 -19.564,-0.1908 -25.445,-0.8902 -30.605,-3.6404 -5.084,-2.7094 -11.793,-3.5527 -32.867,-4.1316 -22.209,-0.61 -27.937,-1.384 -35.528,-4.8007 -4.977,-2.2403 -11.983,-4.2839 -15.57,-4.5413 -3.586,-0.2574 -11.863,-1.4251 -18.395,-2.5949 -14.259,-2.554 -25.865,-1.0889 -22.594,2.8524 1.691,2.0381 0.978,3.1645 -3.453,5.4562 -4.53,2.3425 -7.458,2.53 -15.501,0.9923 -8.092,-1.547 -11.153,-1.3413 -16.64,1.1184 -6.555,2.9387 -6.966,2.8817 -16.416,-2.2734 -5.332,-2.9081 -13.173,-7.1738 -17.424,-9.4792 -8.554,-4.638 -23.298,-5.578 -35.282,-2.2495 -5.252,1.4585 -9.547,1.2401 -17.832,-0.9069 -7.941,-2.0578 -12.622,-2.3387 -17.181,-1.031 -4.568,1.3099 -8.773,1.0532 -15.508,-0.9468 -8.208,-2.4377 -10.487,-2.4212 -20.401,0.1479 -15.307,3.9664 -17.982,0.9236 -5.327,-6.0582 5.24,-2.8909 9.539,-5.7885 9.554,-6.4391 0.015,-0.6506 -2.279,-2.7379 -5.097,-4.6384 -4.073,-2.7474 -8.749,-3.4699 -22.82,-3.5264 -13.091,-0.0523 -19.25,-0.9062 -23.66,-3.2791 -8.637,-4.6473 -14.898,-3.9682 -23.066,2.5016 -6.367,5.0425 -8.146,5.5692 -15.226,4.5075 -7.127,-1.0687 -37.783,3.202 -40.178,5.5972 -0.475,0.4741 0.136,2.0651 1.356,3.5356 3.112,3.7496 -0.388,5.5649 -11.202,5.8102 -5.331,0.1209 -10.618,1.5898 -13.746,3.8188 -13.676,9.7468 -18.671,11.937 -24.71,10.8339 -4.028,-0.7357 -6.054,-0.3719 -6.054,1.0868 0,4.2796 3.911,9.3997 9.314,12.194 6.873,3.5543 9.752,8.7885 8.21,14.9303 -1.315,5.2417 -10.663,11.1063 -15.03,9.4303 -2.306,-0.8845 -2.105,-1.9764 1.217,-6.6423 4.487,-6.3009 4.837,-5.3682 -8.896,-23.7021 -10.578,-14.1215 -13.885,-16.3357 -21.532,-14.4162 -13.177,3.3072 -12.278,14.2097 1.734,21.017 4.519,2.1955 8.216,4.8116 8.216,5.8135 0,2.9679 -6.622,5.763 -8.709,3.6761 -3.034,-3.0348 -53.447,-14.8299 -55.331,-12.946 -1.026,1.0269 0.437,2.1736 3.691,2.8919 2.966,0.6546 6.511,1.5398 7.876,1.9671 3.173,0.9923 1.594,5.6262 -1.654,4.8547 -1.337,-0.3176 -8.175,0.3914 -15.196,1.5756 -9.882,1.6667 -13.378,1.6442 -15.479,-0.0995 -3.786,-3.1415 -13.937,-0.9133 -26.975,5.9213 -8.892,4.6609 -11.443,5.2774 -14.677,3.5467 -2.152,-1.1521 -3.712,-3.1177 -3.466,-4.3679 0.248,-1.265 -1.9387,-2.5453 -4.9326,-2.8872 -5.6104,-0.6405 -5.5564,-0.9114 -1.7004,8.5161 1.0194,2.4923 0.12,2.9425 -12.1709,6.0919 -5.7435,1.4717 -7.7795,2.834 -7.0554,4.7205 1.5459,4.029 -5.0925,6.8 -10.9518,4.573 -7.3386,-2.79 -10.0356,-2.105 -4.1923,1.065 6.3177,3.427 6.3592,4.145 0.3714,6.422 -6.232,2.37 -18.3113,-3.576 -22.0828,-10.869 -1.4811,-2.8643 -4.9792,-6.2495 -7.7734,-7.5227 -3.7616,-1.7139 -4.5367,-2.8586 -2.9859,-4.4094 1.5509,-1.5509 4.8888,-1.4971 12.8582,0.2072 5.92,1.2661 13.9341,2.7586 17.8091,3.3167 8.4607,1.2186 18.2942,-2.3136 16.8583,-6.0555 C 73.1268,83.4406 38.8158,72.5713 32.883,73.7382 29.9254,74.3199 27.8833,70.7159 17.3895,66.3594 l -8.2423,0.9564 -6.00358,2.7289 -2.7289,0.5458 c -0.87308,1.431 -0.3582229,4.1764 1.45541,5.8073 2.11748,0.7744 4.44373,1.0268 6.17715,2.7613 -0.24922,3.1858 -1.02591,4.5933 -2.92481,6.8952 1.11179,2.0155 3.20245,3.0206 4.93443,4.0024 1.2875,1.9959 1.4415,4.3157 1.2598,6.7313 l -1.2598,2.547 3.4566,3.639 2.7289,3.274 -0.7416,3.847 c 2.8172,1.716 4.9259,2.322 7.109,3.794 l 1.0915,4.912 -17.10108,14.191 -2.91082,1.273 1.27348,2.365 c 4.30561,0.97 8.61122,0.734 12.91682,2.911 -4.0885,1.886 -0.5869,-2.079 -11.4614,1.637 l 0.7277,1.638 -2.36504,4.366 -0.73715,4.184 2.73834,4.003 -1.65411,2.365 c 1.54847,1.701 0.46724,4.683 3.6553,6.549 l 2.13096,3.833 c 2.3111,1.384 4.9959,2.387 7.5151,2.729 l 8.5466,1.088 1.848,3.55 0.1403,4.81 c 1.8194,2.319 3.4996,4.513 6.0042,6.03 l 5.4565,2.52 1.0917,4.003 c -2.2615,1.577 -4.1213,1.435 -6.5929,1.963 l 1.304,4.95 c 3.0446,3.724 0.319,2.799 2.2589,3.874 l 2.4977,-2.237" />
            <path
                    id="path22_fill"
                    d="m 425.452,23.0535 c -9.029,-1.9978 -9.36,-2.7493 -2.725,-6.188 9.671,-5.0124 18.822,-6.2971 22.983,-3.2264 3.294,2.4312 3.103,2.8069 -3.366,6.6242 -6.743,3.9785 -9.48,4.4305 -16.892,2.7902 z m 36.327,17.02 c -3.23,-1.8958 -7.799,-2.4449 -14.904,-1.7913 -6.641,0.611 -11.747,0.0843 -14.512,-1.497 -3.812,-2.18 -2.88,-2.4285 8.755,-2.3343 14.549,0.1178 20.938,-2.9967 13.059,-6.3655 -3.743,-1.6004 -3.197,-1.7456 3.219,-0.8568 8.376,1.1604 11.632,-1.0838 7.068,-4.8715 -4.866,-4.0389 0.485,-5.2928 17.8,-4.1709 10.715,0.6942 17.449,0.3048 20.201,-1.1682 5.273,-2.8219 3.204,-6.4141 -2.823,-4.9014 -4.165,1.0454 -33.073,-0.67 -31.852,-1.8902 0.872,-0.87205 41.826,-4.66503 68.717,-6.36431 13.948,-0.88143 29.457,-2.11096 34.464,-2.73232 L 580.075,0 565.047,7.21854 c -14.09,6.76786 -37.002,13.36576 -46.415,13.36576 -2.292,0 -8.88,2.515 -14.64,5.5888 -5.76,3.0739 -11.628,5.5888 -13.04,5.5888 -1.412,0 -7.506,2.5043 -13.542,5.5652 -6.036,3.0609 -10.974,5.5462 -10.974,5.5228 0,-0.0232 -2.096,-1.2727 -4.657,-2.7764 z m -41.916,11.712 c -12.296,-0.978 -22.585,-1.991 -22.865,-2.2511 -1.666,-1.5456 2.489,-6.5768 6.96,-8.4289 4.396,-1.821 6.422,-1.5794 12.441,1.4838 5.866,2.9857 9.648,3.482 20.546,2.6965 7.346,-0.5294 15.729,-0.3619 18.629,0.3722 l 5.273,1.3347 -6.52,3.4841 c -3.586,1.9163 -7.778,3.3948 -9.315,3.2855 -1.537,-0.1092 -12.854,-0.9988 -25.149,-1.9768 z m -59.485,13.7182 c -2.669,-4.3186 15.56,-11.0035 23.303,-8.5458 5.644,1.7911 1.872,4.869 -7.972,6.5053 -4.404,0.7322 -9.391,1.9202 -11.08,2.6399 -1.689,0.7198 -3.602,0.45 -4.251,-0.5994 z m -29.004,5.4394 c 0,-0.9919 -2.306,-3.1266 -5.123,-4.7439 l -5.123,-2.9405 6.859,1.0787 c 4.874,0.7665 7.301,0.3099 8.383,-1.5773 1.288,-2.2445 13.145,-6.7357 17.872,-6.7696 0.795,-0.0056 0.146,2.5017 -1.441,5.5721 -3.74,7.2315 -21.427,14.9749 -21.427,9.3805 z m -134.588,2.4112 c -3.004,-3.0045 -2.319,-3.6586 12.095,-11.5496 16.889,-9.2456 25.375,-10.473 40.524,-5.8607 l 8.383,2.5524 -11.178,2.2163 c -9.141,1.8126 -28.513,8.2908 -43.812,14.6509 -1.56,0.6487 -4.254,-0.2516 -6.012,-2.0093 z m 45.167,20.504 c -2.561,-0.4048 -8.801,-2.5961 -13.866,-4.8694 l -9.21,-4.1333 12.935,-0.9314 c 7.115,-0.5123 12.935,-1.7698 12.935,-2.7944 0,-1.0247 -5.029,-2.3124 -11.177,-2.8615 -8.117,-0.7251 -9.647,-1.2352 -5.589,-1.863 6.795,-1.051 7.285,-3.9939 0.932,-5.5984 -4.576,-1.1555 -4.542,-1.2261 1.893,-3.9989 11.154,-4.8056 23.034,-5.7261 33.559,-2.6004 8.642,2.5662 9.992,2.5553 14.066,-0.1142 2.881,-1.8879 4.591,-2.2038 4.739,-0.8758 0.128,1.1425 0.338,3.0553 0.466,4.2507 0.433,4.0358 4.149,3.5136 8.583,-1.2062 4.104,-4.3694 11.22,-6.4625 11.204,-3.296 -0.004,0.7685 -1.661,4.1103 -3.683,7.4262 l -3.676,6.0288 6.012,3.1364 6.011,3.1363 -9.871,4.5052 c -8.907,4.0654 -10.734,4.2981 -18.718,2.3828 -7.741,-1.8571 -9.962,-1.6447 -17.762,1.6987 -8.81,3.7764 -10.667,4.0185 -19.783,2.5778 z m 135.79,35.6247 c -3.672,-1.931 -6.525,-2.096 -11.668,-0.676 -8.745,2.414 -11.803,0.648 -7.365,-4.256 5.68,-6.277 9.533,-7.511 16.385,-5.25 7.711,2.545 11.134,6.328 9.054,10.007 -1.327,2.345 -2.231,2.37 -6.406,0.175 z m 70.241,7.607 c -4,-2.459 -8.903,-7.043 -10.894,-10.188 -3.888,-6.141 -7.473,-6.921 -17.968,-3.911 -3.553,1.019 -7.54,1.117 -9.135,0.225 -5.516,-3.087 4.448,-6.123 15.546,-4.737 8.44,1.055 10.315,0.754 11.299,-1.81 1.978,-5.154 11.028,-8.847 16.06,-6.554 3.098,1.412 5.914,1.372 9.871,-0.138 5.323,-2.032 5.397,-2.215 1.92,-4.768 -1.989,-1.461 -4.259,-2.656 -5.045,-2.656 -0.785,0 -3.621,-3.742 -6.302,-8.316 -2.681,-4.5741 -7.704,-10.0661 -11.164,-12.2044 -5.88,-3.6341 -6.658,-3.6979 -11.918,-0.9782 -4.597,2.3777 -7.254,2.5442 -14.529,0.9106 -4.896,-1.0994 -11.733,-1.4697 -15.193,-0.8228 -6.001,1.1222 -16.996,-1.8147 -16.996,-4.5398 0,-5.0061 15.777,-16.2409 25.149,-17.9086 l 7.452,-1.326 -5.327,5.675 c -7.347,7.8284 -4.584,11.4312 3.395,4.4256 3.384,-2.9717 9.234,-5.981 12.999,-6.6873 5.753,-1.0793 8.217,-0.3755 15.441,4.4091 9.61,6.366 10.351,6.5368 15.771,3.636 3.264,-1.7467 4.474,-1.267 8.019,3.1781 2.451,3.0746 7.926,6.4226 13.265,8.1119 8.49,2.6862 9.091,3.2879 9.091,9.0956 0,6.1314 0.758,7.0734 12.297,15.2902 3.607,2.569 3.769,3.32 1.503,6.95 -3.728,5.969 -6.647,6.403 -14.866,2.211 -5.71,-2.914 -8.205,-3.313 -11.08,-1.775 -3.518,1.883 -3.556,2.285 -0.724,7.762 2.324,4.494 2.537,6.763 0.957,10.23 -1.946,4.271 -2.256,4.337 -7.54,1.604 -10.389,-5.372 -17.384,-1.837 -7.693,3.888 3.036,1.794 5.097,3.945 4.58,4.782 -1.805,2.92 -11.022,1.371 -18.241,-3.064 z m 15.238,118.733 -6.941,-0.728 13.06,-12.931 c 7.183,-7.112 13.999,-12.931 15.147,-12.931 1.21,0 0.848,1.369 -0.865,3.262 -3.879,4.285 -1.234,9.1 5.853,10.656 3.094,0.68 6.178,3.051 7.37,5.667 1.913,4.198 1.589,4.626 -4.866,6.418 -6.771,1.881 -14.854,2.046 -28.758,0.587 z m 9.734,6.012 c 0,-1.537 0.812,-2.795 1.805,-2.795 0.992,0 1.322,1.258 0.732,2.795 -1.373,3.578 -2.537,3.578 -2.537,0 z m -197.063,35.966 c 0.432,-1.339 3.425,-4.11 6.649,-6.159 3.225,-2.05 6.389,-5.264 7.031,-7.144 0.857,-2.511 2.338,-3.125 5.575,-2.312 3.108,0.78 4.931,0.126 6.186,-2.219 3.654,-6.827 -5.889,-15.315 -12.963,-11.529 -5.074,2.715 -11.703,-2.687 -10.288,-8.385 0.525,-2.112 -0.554,-5.787 -2.422,-8.253 -3.97,-5.238 -9.973,-5.695 -23.558,-1.791 -9.791,2.814 -20.355,1.496 -30.187,-3.766 -3.106,-1.662 -28.775,-1.397 -99.319,-2.371 -86.6933,-1.198 -94.4508,-0.441 -93.8076,-2.122 0.5881,-1.538 -4.9297,-7.283 -9.6433,-11.864 -7.8181,-7.598 -8.3202,-8.605 -5.7205,-11.478 2.1061,-2.327 2.3539,-4.035 0.9493,-6.545 -2.322,-4.149 1.3275,-14.3 5.1413,-14.3 4.1269,0 9.0336,-8.86 6.5583,-11.842 -1.5353,-1.85 -1.5302,-4.094 0.0197,-8.54 1.8057,-5.18 1.5714,-6.729 -1.6613,-10.988 -3.0609,-4.031 -5.1333,-4.897 -11.1012,-4.636 -6.1836,0.271 -7.80913,-0.476 -10.33474,-4.752 L 0,151.732 39.9752,120.157 c 32.0165,-25.2891 40.988,-31.4902 45.0623,-31.1467 2.7978,0.2359 10.5361,0.9495 17.1965,1.5858 9.235,0.8825 15.792,0.2095 27.628,-2.8354 8.535,-2.1959 17.096,-3.4918 19.024,-2.8798 1.928,0.6119 5.207,0.2024 7.285,-0.9101 2.864,-1.5329 5.086,-1.3474 9.172,0.7658 3.692,1.9093 8.249,2.4542 14.454,1.7283 6.547,-0.7658 12.279,0.0274 20.647,2.8569 6.372,2.1544 13.448,3.9171 15.725,3.9171 4.035,0 4.048,0.0683 0.525,2.6613 -3.455,2.5427 -3.465,2.72 -0.221,3.9771 1.868,0.7237 8.351,0.7977 14.407,0.1647 10.936,-1.143 11.031,-1.1108 14.081,4.787 l 3.07,5.937 3.986,-4.998 c 2.29,-2.872 7.733,-6.1264 12.796,-7.6501 7.651,-2.3029 9.974,-2.2952 17.659,0.0584 5.425,1.6613 11.918,2.2667 16.781,1.5642 6.192,-0.8944 9.067,-0.3373 13.108,2.5395 5.1,3.632 5.241,3.634 9.765,0.128 2.525,-1.957 7.72,-4.4296 11.545,-5.4952 9.157,-2.5513 12.262,-7.9876 6.763,-11.8393 -3.889,-2.7238 -3.718,-2.9317 6.503,-7.945 7.624,-3.7389 11.057,-4.5879 12.543,-3.102 1.486,1.486 1.471,3.1204 -0.055,5.9718 -2.601,4.8599 0.636,12.2058 4.693,10.6491 1.458,-0.5596 3.877,-0.547 5.376,0.028 2.353,0.9031 2.316,1.6689 -0.277,5.626 -7.163,10.9316 8.895,7.8346 19.767,-3.8128 4.419,-4.7352 11.267,-6.1708 17.686,-3.7078 4.145,1.5907 3.757,2.8929 -3.108,10.4199 -8.18,8.9703 -12.367,10.8043 -24.654,10.8043 -5.938,0 -12.949,1.287 -16.215,2.976 -4.522,2.338 -6.727,2.533 -10.293,0.908 -6.65,-3.03 -8.964,-0.508 -4.195,4.569 l 4.072,4.334 -8.123,2.305 c -4.468,1.268 -11.895,2.428 -16.506,2.578 -6.686,0.217 -8.386,0.943 -8.396,3.586 -0.009,2.262 -3.262,4.642 -10.246,7.497 -22.631,9.251 -41.828,25.93 -34.878,30.303 1.302,0.819 3.37,3.772 4.594,6.561 1.41,3.213 4.128,5.453 7.412,6.11 2.853,0.571 10.217,3.516 16.364,6.543 6.148,3.027 13.693,6.053 16.767,6.722 8.462,1.845 8.536,2.039 4.595,12.038 -3.372,8.555 -3.44,9.776 -0.827,14.829 1.566,3.028 3.874,5.477 5.128,5.44 6.105,-0.176 11.828,-5.81 15.385,-15.142 3.389,-8.894 4.934,-10.553 14.663,-15.75 14.359,-7.669 20.33,-15.222 18.739,-23.704 -1.037,-5.525 -0.498,-6.821 4.23,-10.188 2.98,-2.122 6.926,-7.201 8.768,-11.286 4.118,-9.132 10.735,-12.298 21.893,-10.473 9.895,1.617 21.597,7.9 23.01,12.353 0.58,1.828 0.099,5.111 -1.071,7.296 -1.77,3.309 -1.436,4.706 2.004,8.367 l 4.129,4.395 6.742,-3.495 c 3.708,-1.922 9.652,-5.672 13.208,-8.333 l 6.466,-4.838 1.519,4.106 c 0.835,2.259 1.073,5.27 0.527,6.692 -0.546,1.422 -0.121,4.212 0.943,6.201 1.197,2.237 1.29,4.767 0.244,6.637 -1.179,2.107 -0.391,5.309 2.607,10.587 4.295,7.562 4.296,7.569 0.524,10.211 -4.964,3.476 -1.779,7.163 3.669,4.248 5.41,-2.896 11.604,-2.519 15.423,0.937 5.647,5.11 0.951,11.223 -14.036,18.274 -16.301,7.67 -23.566,9.189 -44.844,9.377 -15.711,0.139 -17.792,0.64 -33.067,7.963 -8.965,4.297 -16.3,8.551 -16.3,9.453 0,3.844 2.825,3.509 13.663,-1.618 6.386,-3.021 14.617,-5.435 18.538,-5.436 6.696,-0.001 6.94,0.206 4.849,4.113 -1.211,2.263 -3.823,5.428 -5.805,7.033 -3.116,2.523 -3.298,3.588 -1.348,7.868 2.925,6.42 10.564,9.509 19.701,7.967 l 7.221,-1.218 -5.552,3.831 c -3.054,2.106 -8.084,4.377 -11.178,5.045 -3.094,0.668 -9.452,3.143 -14.13,5.499 -4.748,2.393 -9.518,3.659 -10.8,2.867 -2.948,-1.823 0.164,-4.556 9.743,-8.558 3.805,-1.59 6.415,-3.704 5.801,-4.698 -1.494,-2.417 -5.975,-2.157 -14.352,0.833 -6.323,2.257 -7.032,2.174 -8.021,-0.943 -0.597,-1.88 -0.233,-5.011 0.809,-6.957 1.344,-2.511 1.222,-4.458 -0.418,-6.701 -3.136,-4.289 -11.01,-1.296 -20.282,7.713 -6.259,6.08 -8.172,6.82 -20.492,7.926 -7.474,0.671 -16.942,2.762 -21.041,4.648 -4.098,1.885 -8.201,3.258 -9.116,3.051 -4.285,-0.97 -12.839,2.48 -20.327,8.197 -5.27,4.024 -8.872,5.638 -10.02,4.489 -1.149,-1.148 -4.323,-0.735 -8.833,1.149 -5.396,2.255 -6.856,2.373 -6.253,0.509 z" />
            <path
                    id="path23_fill"
                    d="m 562.847,110.15 c 4.262,4.931 8.09,7.223 14,8.385 14.613,2.872 22.424,1.454 19.354,-3.512 -0.766,-1.24 0.379,-4.065 2.609,-6.439 4.798,-5.107 3.869,-8.533 -5.027,-18.5436 -5.623,-6.3277 -6.273,-8.0782 -5.288,-14.242 0.816,-5.0972 0.409,-7.302 -1.479,-8.0265 -1.432,-0.5495 -4.4,-5.8002 -6.595,-11.6684 -3.658,-9.777 -3.766,-11.2336 -1.293,-17.4144 4.661,-11.6498 -0.435,-16.5349 -26.155,-25.0713 -9.425,-3.1285 -9.873,-3.1084 -19.094,0.8588 -5.194,2.2343 -9.444,4.7757 -9.444,5.6479 0,0.8722 -2.503,2.8807 -5.564,4.4634 -5.333,2.7578 -6.091,2.6119 -18.164,-3.4961 -9.318,-4.7141 -13.509,-8.0906 -16.093,-12.96672 -4.281,-8.0756535 -7.812,-9.62848 -13.469,-5.92227 -5.552,3.63759 -9.85,3.59446 -13.977,-0.14031 -1.809,-1.63731 -4.102,-2.474868 -5.094,-1.861275 -2.275,1.406235 7.433,20.672875 13.726,27.242175 3.551,3.7069 4.412,6.1522 3.632,10.322 -1.194,6.3872 3.418,14.315 11.356,19.5226 2.857,1.874 6.93,7.0223 9.052,11.4408 2.621,5.4592 5.051,8.0485 7.582,8.0801 7.827,0.0971 12.314,3.2752 16.618,11.7682 3.713,7.3272 6.264,9.6206 15.735,14.1479 10.597,5.065 11.802,5.253 19.255,3.02 l 7.95,-2.382 z" />
            <path
                    id="path24_fill"
                    d="m 639.938,124.182 c 0,0.925 1.317,3 2.927,4.61 3.676,3.676 5.308,3.679 8.349,0.013 1.502,-1.809 4.01,-2.515 6.614,-1.861 2.518,0.632 5.339,-0.092 7.058,-1.81 2.574,-2.575 2.117,-3.608 -4.554,-10.279 -7.246,-7.246 -7.352,-7.542 -4.623,-12.819 1.613,-3.1212 5.363,-6.2973 8.88,-7.5219 6.445,-2.2446 22.981,-22.9129 20.955,-26.1913 -0.587,-0.9512 -0.212,-3.3301 0.836,-5.2865 1.602,-2.9952 1.046,-3.912 -3.519,-5.8033 -3.316,-1.3734 -6.193,-4.4563 -7.407,-7.9347 -2.686,-7.7074 0.231,-11.1784 8.145,-9.6936 4.236,0.7946 7.115,0.1097 10.266,-2.4413 l 4.378,-3.5457 -10.973,-6.8639 c -6.036,-3.7752 -11.969,-6.4821 -13.186,-6.0152 -1.217,0.4669 -5.176,1.4048 -8.798,2.0844 -9.282,1.7413 -11.728,5.2002 -8.926,12.6241 1.956,5.179 1.785,6.2302 -1.409,8.6996 -1.997,1.5449 -5.211,7.0005 -7.142,12.1235 -1.93,5.1231 -4.516,9.0968 -5.747,8.8303 -3.715,-0.8045 -12.961,4.8581 -14.174,8.6807 -2.133,6.7188 -10.306,10.2392 -23.812,10.2541 -6.916,0.0081 -12.575,0.5342 -12.575,1.1693 0,0.635 2.185,3.187 4.856,5.671 7.621,7.0899 9.043,12.6774 4.467,17.5484 -2.152,2.292 -3.352,5.354 -2.732,6.971 1.486,3.873 19.112,6.088 25.453,3.199 3.769,-1.718 5.854,-1.543 10.546,0.883 3.215,1.663 5.847,3.78 5.847,4.705 z" />
            <path
                    id="path25_fill"
                    d="m 155.577,167.486 c 0,-0.821 -19.701,-16.078 -43.779,-33.904 -41.6483,-30.833 -43.7792,-32.709 -43.7792,-38.523 0,-5.2445 1.0465,-6.6458 7.3778,-9.8755 4.0572,-2.0701 8.6121,-3.7637 10.1222,-3.7637 4.8241,0 21.4192,-11.4015 20.4122,-14.0247 -1.21,-3.1512 5.901,-7.0035 10.332,-5.5974 5.64,1.7905 7.573,-2.7522 6.024,-14.1647 l -1.408,-10.3738 9.171,-5.1549 c 13.968,-7.8528 24.436,-9.9338 44.646,-8.8766 20.803,1.088 22.434,2.7866 15.798,16.4453 l -3.959,8.1505 5.959,7.9492 c 6.665,8.8907 11.942,19.7297 10.634,21.8452 -0.472,0.765 -0.027,6.5603 0.99,12.8783 1.293,8.0317 1.241,12.6248 -0.173,15.2688 -3.393,6.338 1.022,16.011 9.522,20.865 4.004,2.287 7.078,4.735 6.831,5.441 -0.249,0.707 -11.119,9.299 -24.157,19.096 -21.814,16.389 -24.379,17.811 -32.135,17.811 -4.636,0 -8.43,-0.672 -8.429,-1.492 z" />
            <path
                    id="path26_fill"
                    d="m 701.005,34.2316 c -1.712,0.4063 -3.285,1.5245 -5.763,3.6094 -4.456,3.7487 -6.904,4.5094 -11.702,3.6095 -3.331,-0.625 -6.56,-0.3297 -7.16,0.6403 -2.059,3.3317 2.514,11.2017 8.208,14.1467 4.875,2.5208 5.419,3.4722 3.726,6.6367 -1.089,2.0352 -1.513,4.4743 -0.932,5.4142 1.982,3.2048 -16.292,26.0794 -22.471,28.1187 -3.189,1.0529 -6.757,3.9729 -7.917,6.5199 -1.91,4.191 -1.404,5.319 5.414,11.935 l 7.568,7.335 -3.901,3.843 c -2.625,2.625 -5.227,3.527 -8.15,2.794 -6.385,-1.603 -9.726,3.227 -5.123,7.393 1.945,1.761 5.024,2.944 6.811,2.62 4.945,-0.897 5.427,3.855 0.582,5.647 l -4.249,1.572 4.948,4.948 c 7.462,7.462 17.016,6.117 17.174,-2.386 0.027,-1.449 1.113,-2.949 2.387,-3.377 3.179,-1.067 6.436,8.311 5.065,14.554 -2.03,9.239 1.503,19.047 25.324,70.21 3.937,8.455 7.675,18.188 8.325,21.656 0.72,3.843 2.787,7.085 5.239,8.267 5.569,2.684 6.519,2.17 12.982,-6.753 7.228,-9.976 10.092,-26.32 8.21,-46.806 -0.313,-3.399 1.63,-6.114 7.917,-10.945 4.593,-3.53 9.786,-8.724 11.527,-11.585 1.739,-2.861 4.788,-5.722 6.753,-6.346 1.964,-0.623 4.544,-3.214 5.705,-5.763 1.161,-2.55 5.066,-6.111 8.732,-7.86 4.718,-2.249 6.422,-4.11 5.822,-6.403 -1.351,-5.166 2.742,-8.68 12.516,-10.829 0.718,-0.158 1.244,-0.354 1.788,-0.557 l 0.012,-0.004 c 0.438,-0.163 0.888,-0.331 1.46,-0.487 l -2.852,-7.044 c -0.441,-1.463 -0.628,-2.963 -0.349,-4.075 0.529,-2.115 -1.106,-7.38 -3.726,-11.993 -3.965,-6.979 -4.225,-8.582 -2.037,-10.77 2.187,-2.188 3.737,-1.557 10.478,4.075 8.639,7.217 9.079,7.375 13.099,4.832 4.1,-2.593 7.518,1.241 6.346,7.103 -0.599,2.989 0.34,5.794 2.386,8.849 l 5.473,5.239 2.096,-5.705 c 2.601,-7.017 4.906,-15.344 6.927,-25.092 0.634,-3.052 2.924,-5.699 6.172,-7.044 6.117,-2.534 11.414,-9.489 7.218,-9.489 -1.42,0 -3.553,-1.207 -4.774,-2.678 -5.902,-7.1117 -22.023,-4.7958 -25.906,3.7259 -1.136,2.4923 -3.331,4.5411 -4.891,4.5411 -1.558,0 -2.852,1.235 -2.852,2.794 0,1.559 -1.915,3.71 -4.25,4.774 -5.836,2.66 -13.97,-0.662 -16.242,-6.637 -0.981,-2.5797 -3.059,-4.6571 -4.657,-4.6571 -2.368,0 -2.565,0.6807 -0.873,3.8421 1.654,3.093 1.447,4.631 -1.106,7.452 -3.621,4.001 -4.387,3.858 -28.876,-3.959 -23.432,-7.4792 -35.279,-13.9184 -35.279,-19.1531 0,-2.3394 0.862,-5.1124 1.921,-6.171 1.324,-1.3244 -0.455,-3.0202 -5.763,-5.4141 -8.143,-3.6719 -14.067,-10.4997 -11.993,-13.8557 1.577,-2.5519 2.623,-16.9265 1.455,-19.9684 -0.488,-1.2715 -3.87,-3.1866 -7.509,-4.1916 -2.915,-0.8048 -4.751,-1.105 -6.463,-0.6985 z" />
            <path
                    id="path27_fill"
                    d="m 242.896,256.34 c 1.847,2.67 3.923,6.414 4.614,8.322 1.907,5.266 16.905,2.518 24.987,-4.577 3.388,-2.977 6.857,-5.412 7.705,-5.412 0.85,0 7.001,-4.027 13.67,-8.95 l 12.125,-8.951 -3.652,-7.117 c -2.678,-5.221 -3.314,-8.915 -2.385,-13.87 1.565,-8.342 6.509,-17 9.709,-17 1.758,0 2.386,-4.083 2.367,-15.369 l -0.025,-15.369 -24.687,-14.346 c -34.849,-20.252 -47.83,-21.584 -38.98,-3.998 2.845,5.652 3.495,10.28 3.076,21.91 -0.497,13.765 -1.018,15.433 -7.865,25.149 -10.925,15.503 -11.017,16.681 -2.355,30.084 8.771,13.571 9.547,19.533 2.93,22.548 -4.531,2.064 -4.547,2.157 -1.234,6.946 z" />
            <path
                    id="path28_fill"
                    d="m 420.112,296.423 c -9.015,-5.14 -22.356,-18.632 -22.356,-22.61 0,-1.339 -2.934,-3.833 -6.52,-5.543 -3.586,-1.71 -6.515,-3.583 -6.508,-4.161 0.005,-0.579 2.579,-2.514 5.718,-4.301 4.231,-2.408 5.416,-4.163 4.582,-6.789 -1.254,-3.953 2.893,-14.097 10.37,-25.368 2.722,-4.104 5.267,-9.104 5.653,-11.111 0.934,-4.851 10.257,-7.38 21.171,-5.743 6.666,1 10.364,3.011 16.12,8.766 7.095,7.096 7.311,7.643 4.321,10.946 -2.973,3.287 -2.894,3.713 1.453,7.766 2.53,2.359 5.202,6.207 5.938,8.552 1.83,5.829 12.928,12.571 25.26,15.346 5.636,1.268 10.908,2.685 11.719,3.149 0.809,0.463 -1.286,3.975 -4.657,7.803 -3.372,3.829 -7.971,9.161 -10.219,11.849 -2.45,2.927 -6.933,5.406 -11.178,6.181 -3.898,0.711 -9.184,2.743 -11.745,4.516 -3.533,2.444 -5.647,2.773 -8.753,1.363 -2.994,-1.36 -6.131,-1.044 -11.68,1.177 l -1.088,0.436 c -3.837,1.542 -5.846,2.349 -7.808,2.251 -2.154,-0.109 -4.252,-1.308 -8.653,-3.824 z" />
            <path
                    id="path29_fill"
                    d="m 245.328,313.901 c 2.868,0.222 7.7,-2.62 9.694,-4.286 l -11.775,-17.421 c -3.525,-6.94 -3.803,-8.895 -1.919,-13.444 1.213,-2.928 3.324,-6.252 4.69,-7.386 2.043,-1.696 1.807,-3.28 -1.33,-8.911 -2.098,-3.767 -4.65,-7.875 -5.669,-9.131 -1.336,-1.643 -0.498,-2.9 2.993,-4.49 5.295,-2.413 6.038,-6.272 2.641,-13.726 l -2.204,-4.838 -6.155,10.805 c -3.386,5.943 -6.166,12.734 -6.178,15.09 -0.038,6.881 -4.997,14.57 -11.001,17.057 -3.06,1.268 -6.43,1.77 -7.487,1.116 -3.572,-2.207 -11.271,4.824 -13.224,12.076 -1.729,6.419 -1.457,7.609 2.777,12.178 2.581,2.785 4.693,7.006 4.693,9.379 0,4.157 0.634,4.338 17.232,4.93 9.477,0.338 19.478,0.789 22.222,1.002 z" />
            <path
                    id="path30_fill"
                    d="m 451.186,338.978 c -2.425,-3.618 -5.372,-16.602 -3.284,-24.239 2.975,-10.886 12.514,-20.061 22.517,-21.661 5.606,-0.897 9.295,-2.939 12.784,-7.08 2.698,-3.201 7.633,-8.938 10.966,-12.75 7.174,-8.204 6.274,-9.523 -8.855,-12.97 -5.635,-1.284 -12.896,-3.931 -16.136,-5.883 -7.188,-4.331 -10.982,-13.309 -7.013,-16.602 1.829,-1.518 2.658,-1.569 2.658,-0.163 0,1.124 2.547,3.361 5.661,4.972 5.231,2.704 7.02,2.633 23.469,-0.931 9.794,-2.122 20.169,-5.079 23.056,-6.572 l 5.248,-2.714 1.245,7.374 c 1.133,6.701 -0.085,9.929 -13.348,35.365 -14.259,27.349 -14.926,28.253 -29.104,39.447 -7.981,6.3 -16.361,14.053 -18.621,17.229 -0.646,0.906 -2.708,3.214 -4.869,5.63 l -0.01,0.011 -0.028,0.031 c -1.613,1.803 -3.275,3.662 -4.44,5.042 z" />
            <path
                    id="path31_fill"
                    d="m 235.659,372.963 c -1.959,-0.622 -5.48,-0.2 -7.824,0.938 l -3.878,2.629 1.958,6.863 15.786,-1.657 16.264,-0.383 4.227,8.849 c 3.762,7.872 4.843,8.803 9.799,8.437 3.064,-0.227 5.819,-1.156 6.122,-2.065 2.241,-6.724 5.266,-8.112 13.09,-6.005 7.776,2.094 7.818,2.153 7.828,10.882 0.006,4.828 0.899,11.976 1.985,15.885 1.82,6.554 2.385,7.017 7.264,5.946 2.995,-0.658 5.819,-0.307 6.509,0.81 0.67,1.084 3.307,1.972 5.858,1.972 2.552,0 7.139,1.291 10.192,2.87 3.052,1.579 6.431,2.326 7.508,1.661 1.076,-0.665 4.727,1.816 8.113,5.513 6.598,7.203 7.842,7.693 12.176,4.797 2.483,-1.661 2.483,-2.058 0,-3.57 -10.404,-6.334 -11.043,-8.241 -8.973,-26.792 0.604,-5.406 6.825,-10.366 13.163,-10.495 4.174,-0.084 4.147,-0.304 -1.397,-11.243 -2.561,-5.055 -4.657,-11.275 -4.657,-13.823 0,-2.547 -0.983,-6.789 -2.185,-9.427 -1.646,-3.612 -1.656,-5.324 -0.044,-6.936 1.586,-1.586 1.598,-2.794 0.048,-4.662 -2.702,-3.256 0.863,-11.726 4.936,-11.726 3.349,0 3.378,-0.19 0.992,-6.464 -1.523,-4.008 -0.866,-6.573 3.805,-14.85 6.596,-11.688 6.078,-17.67 -2.028,-23.442 -4.508,-3.21 -5.939,-3.411 -10.266,-1.44 -4.594,2.094 -5.39,1.835 -9.251,-3.006 -2.942,-3.692 -4.992,-4.802 -6.759,-3.663 -1.394,0.899 -5.468,1.742 -9.054,1.874 -3.587,0.131 -11.38,1.747 -17.318,3.59 -10.692,3.319 -10.876,3.312 -19.182,-0.723 -10.263,-4.986 -15.719,-3.226 -14.864,4.794 0.3,2.812 -1.048,8.83 -2.996,13.374 -2.057,4.797 -3.102,10.272 -2.492,13.055 0.763,3.483 -0.697,7.504 -5.348,14.719 -3.52,5.46 -6.93,12.044 -7.58,14.632 -2.783,11.09 -14.046,20.656 -21.527,18.282 z" />
            <path
                    id="path32_fill"
                    d="m 438.99,422.889 c -0.345,-0.346 -3.376,0.709 -7.953,2.301 l -0.019,0.007 -0.087,0.03 c -0.819,0.285 -1.687,0.587 -2.597,0.9 -13.981,4.821 -30.578,3.624 -30.578,-2.206 0,-5.296 -5.665,-12.982 -9.133,-12.394 -5.895,0.999 -18.799,-10.205 -24.499,-21.271 -6.558,-12.734 -7.064,-20.443 -1.58,-24.084 2.211,-1.468 4.135,-5.007 4.43,-8.145 1.111,-11.832 3.895,-15.446 12.946,-16.803 7.503,-1.125 10.287,-0.368 25.202,6.857 9.222,4.468 16.786,8.862 16.81,9.766 0.024,0.903 1.911,4.667 4.195,8.363 3.192,5.165 4.21,9.81 4.398,20.065 0.195,10.732 1.387,15.789 6.081,25.821 z" />
            <path
                    id="path33_fill"
                    d="m 439.503,424.33 c -0.603,2.403 1.665,13.254 2.784,18.477 1.764,8.223 1.564,10.423 -1.488,16.403 -4.405,8.631 -7.909,11.733 -20.222,17.903 -5.379,2.696 -9.781,5.698 -9.781,6.671 0,0.973 -3.772,6.017 -8.382,11.208 -4.611,5.192 -8.384,10.283 -8.384,11.314 0,1.032 1.729,5.263 3.841,9.404 6.311,12.369 -0.144,17.616 -12.958,27.637 -5.894,4.609 -7.319,5.736 -7.789,12.472 l -2.734,0.12 c -0.823,-0.824 -2.519,-14.71 -3.488,-29.742 -0.247,-3.843 0.227,-6.986 1.055,-6.986 2.389,0 8.457,-13.143 11.567,-25.053 2.547,-9.755 2.551,-11.502 0.035,-16.367 -2.798,-5.413 -15.052,-12.483 -21.774,-12.565 -5.075,-0.061 -2.411,-2.777 9.094,-9.27 l 10.381,-5.859 5.92,3.515 c 4.88,2.899 5.838,4.538 5.455,9.343 -0.671,8.422 4.972,11.132 10.635,5.105 5.16,-5.494 3.903,-14.333 -3.101,-21.799 -3.793,-4.043 -4.405,-6.051 -3.335,-10.927 1.312,-5.972 1.313,-5.973 10.62,-4.738 7.065,0.937 12.209,0.269 21.348,-2.772 z" />
            <path
                    id="path34_fill"
                    d="m 336.652,585.904 c -3.216,-3.216 -2.799,-4.762 2.159,-8.01 7.883,-5.165 14.082,0.818 7.582,7.318 -3.501,3.5 -6.705,3.728 -9.741,0.692 z" />
            <path
                    id="path35_fill"
                    fill-rule="evenodd"
                    d="m 344.648,525.642 c 5.739,-4.703 7.969,-6.153 11.837,-6.116 1.288,0.012 2.758,0.189 4.602,0.465 7.595,1.139 8.067,1.563 8.056,7.201 -0.006,3.294 0.626,9.342 1.407,13.441 1.278,6.699 0.985,7.639 -2.918,9.314 -6.14,2.636 -6.602,9.044 -0.839,11.669 3.543,1.615 5.057,1.547 6.589,-0.298 0.409,-0.494 0.892,-2.254 1.193,-3.354 l 0.034,-0.124 0.007,-0.025 0.018,-0.064 0.012,-0.044 0.016,-0.058 0.011,-0.038 0.011,-0.043 0.014,-0.048 0.018,-0.065 c 0.037,-0.127 0.066,-0.23 0.091,-0.3 l 2.475,0.04 -0.042,0.561 c -0.189,2.636 -0.783,10.951 -2.712,12.356 -2.651,1.931 -5.984,5.727 -7.405,8.438 -4.803,9.162 -29.687,33.216 -39.46,38.139 -8.319,4.192 -10.454,4.563 -16.566,2.875 -5.39,-1.488 -9.74,-1.255 -18.778,1.015 -1.05,0.264 -2.017,0.509 -2.909,0.736 -6.659,1.692 -9.156,2.327 -11.088,1.551 -1.16,-0.466 -2.115,-1.44 -3.644,-2.998 -0.34,-0.347 -0.707,-0.722 -1.112,-1.126 -3.946,-3.946 -4.604,-5.963 -3.723,-11.396 0.831,-5.114 0.04,-8.124 -3.503,-13.339 -2.517,-3.704 -4.578,-7.681 -4.578,-8.842 0,-1.161 -1.691,-4.263 -3.759,-6.891 -4.79,-6.091 -1.946,-8.021 5.866,-3.981 5.459,2.823 6.448,2.831 12.163,0.105 l 6.223,-2.965 v -14.001 c 0,-8.093 0.786,-14.005 1.862,-14.005 1.847,0 2.366,2.182 2.649,11.178 0.12,3.806 0.98,4.567 4.705,4.151 5.194,-0.579 11.275,-5.428 11.275,-8.987 0,-4.119 3.401,-4.742 9.279,-1.703 6.398,3.309 12.046,1.543 13.918,-4.351 0.601,-1.895 3.173,-4.395 5.716,-5.553 2.541,-1.158 4.62,-2.904 4.62,-3.882 0,-0.978 3.765,-4.866 8.369,-8.638 z m 2.809,49.455 c -1.014,-0.542 -2.067,-0.843 -3.144,-0.913 -3.23,-0.209 -6.668,1.681 -9.842,5.505 -2.031,2.448 -1.879,3.54 0.909,6.622 4.23,4.674 7.377,4.663 12.077,-0.036 4.739,-4.739 4.739,-8.642 0,-11.178 z" />
            <path
                    id="path36_fill"
                    d="m 255.811,570.616 c 1.735,-0.519 5.252,0.248 7.814,1.704 5.748,3.267 6.159,3.288 12.021,0.617 4.678,-2.132 4.745,-2.461 4.745,-23.234 0,-18.426 0.585,-22.394 4.657,-31.603 3.217,-7.273 4.658,-13.863 4.658,-21.302 v -10.77 l 8.849,-0.902 c 4.866,-0.496 11.239,-0.91 14.159,-0.921 2.921,-0.01 6.232,-0.941 7.358,-2.068 2.726,-2.726 -6.508,-2.73 -19.198,-0.009 -7.741,1.66 -11.895,1.454 -22.357,-1.11 -8.205,-2.011 -15.547,-2.694 -20.308,-1.89 -4.101,0.693 -12.1,0.296 -17.775,-0.882 -11.457,-2.378 -17.794,-1.261 -17.794,3.137 0,1.597 3.301,8.884 7.334,16.191 8.068,14.616 14.049,34.644 15.917,53.307 1.371,13.69 5.129,21.165 9.92,19.735 z" />
            <path
                    id="path37_fill"
                    d="m 366.991,559.474 c -3.762,-2.75 -2.663,-8.593 1.615,-8.593 2.758,0 5.418,8.795 3.094,10.231 -0.735,0.455 -2.855,-0.282 -4.709,-1.638 z" />
            <path
                    id="path38_fill"
                    d="m 285.422,542.539 c 1.972,1.442 3.167,4.863 3.167,9.062 0,5.938 0.458,6.606 3.819,5.579 5.163,-1.577 8.477,-4.404 8.477,-7.231 0,-5.119 5.042,-6.899 10.926,-3.856 6.681,3.455 10.196,2.455 12.999,-3.698 1.142,-2.505 2.723,-4.555 3.515,-4.555 0.791,0 6.205,-4.471 12.03,-9.936 l 10.591,-9.935 -5.004,-4.755 c -5.611,-5.332 -13.805,-16.137 -19.064,-25.134 -3.376,-5.779 -3.67,-5.89 -8.689,-3.284 -2.858,1.483 -6.698,2.221 -8.534,1.639 -1.836,-0.582 -6.656,-0.498 -10.712,0.188 l -7.373,1.245 v 9.851 c 0,6.457 -1.605,13.478 -4.657,20.381 -5.441,12.303 -5.981,21.156 -1.491,24.439 z" />
            <path
                    id="path39_fill"
                    d="m 467.617,544.929 c -5.26,-2.983 -6.008,-4.558 -7.381,-15.554 -1.098,-8.787 -0.64,-10.697 4.616,-19.24 5.343,-8.682 5.727,-10.355 4.549,-19.786 -1.701,-13.617 1.195,-20.773 9.109,-22.509 7.457,-1.636 23.591,-15.88 27.456,-24.24 l 2.955,-6.389 2.053,4.507 c 5.167,11.339 4.641,16.32 -4.348,41.19 -4.809,13.306 -9.968,29.224 -11.465,35.371 -4.79,19.675 -7.513,24.419 -15.359,26.77 l -1.382,0.416 c -3.914,1.18 -5.458,1.645 -6.86,1.375 -0.912,-0.176 -1.764,-0.664 -3.169,-1.469 l -0.009,-0.005 z" />
            <path
                    id="path40_fill"
                    d="m 345.57,510.827 c 4.039,4.403 7.336,6.277 12.364,7.027 9.097,1.356 10.877,1.346 13.016,-0.069 3.27,-2.163 7.599,-11.707 10.705,-23.599 4.338,-16.614 0.698,-21.754 -19.202,-27.113 l -7.701,-2.074 -8.012,8.849 c -6.654,7.35 -9.118,8.849 -14.542,8.849 h -6.53 l 3.797,6.614 c 3.301,5.75 10.658,15.578 16.105,21.516 z" />
            <path
                    id="path41_fill"
                    d="m 558.43,506.148 c 0,-1.025 0.012,-1.863 1.036,-1.863 1.025,0 2.69,0.838 2.69,1.863 0,0.184 0.008,0.362 0.017,0.53 0.036,0.768 0.063,1.333 -0.777,1.333 -1.025,0 -2.966,-0.839 -2.966,-1.863 z" />
            <path
                    id="path42_fill"
                    d="m 302.746,471.283 c 2.05,2.605 3.727,5.396 3.727,6.201 l 3.151,2.087 c 0.781,-0.016 1.985,-0.098 3.325,-0.19 3.238,-0.222 7.27,-0.497 8.048,-0.027 1.745,1.053 6.484,1.779 10.531,1.612 6.154,-0.254 8.53,-1.624 14.524,-8.379 3.942,-4.442 8.729,-8.972 10.637,-10.067 1.91,-1.096 8.575,-4.909 14.814,-8.474 13.682,-7.82 14.733,-10.709 12.776,-35.088 -0.389,-4.856 -2.262,-7.498 -8.774,-12.377 -4.554,-3.412 -9.584,-5.795 -11.178,-5.295 -10.207,3.201 -12.757,4.886 -13.035,8.618 -1.113,14.861 -0.646,20.372 1.851,21.806 1.484,0.853 4.374,2.865 6.423,4.472 3.683,2.888 3.684,2.955 0.109,5.717 -5.125,3.961 -6.353,3.608 -13.382,-3.845 -3.443,-3.651 -7.08,-6.131 -8.082,-5.512 -1.002,0.619 -4.32,-0.166 -7.373,-1.745 -3.053,-1.579 -7.688,-2.87 -10.3,-2.87 -3.961,0 -4.751,0.867 -4.751,5.216 0,6.563 -3.06,9.687 -9.488,9.687 -5.937,0 -7.278,2.729 -7.278,14.805 0,6.09 1.179,10.41 3.725,13.648 z" />
            <path
                    id="path43_fill"
                    d="m 241.615,382.738 16.18,0.619 2.054,6.225 c 1.13,3.423 3.601,7.623 5.491,9.334 4.564,4.13 12.819,2.055 15.535,-3.905 1.734,-3.808 2.919,-4.306 7.768,-3.268 8.314,1.781 8.506,2.039 8.621,11.609 0.057,4.807 1.112,11.673 2.344,15.26 1.984,5.779 2.976,6.52 8.743,6.52 6.317,0 6.487,0.189 5.855,6.52 -0.861,8.633 -1.43,9.315 -7.777,9.315 -6.811,0 -9.271,4.32 -9.271,16.282 0,6.755 1.192,10.689 4.659,15.388 l 3.836,7.199 c -15.098,2.589 -16.796,2.45 -24.329,-0.085 -5.014,-1.687 -31.554,-3.596 -52.628,-3.786 -6.564,-0.059 -7.918,-0.688 -7.918,-3.678 0,-5.851 5.558,-22.131 11.504,-33.696 l 5.531,-10.758 -3.108,-9.358 c -1.739,-5.234 -2.588,-11.429 -1.927,-14.059 0.776,-3.093 -0.061,-6.727 -2.445,-10.622 -0.997,-1.628 -3.347,-7.18 -4.138,-9.257 z" />
            <path
                    id="path44_fill"
                    d="m 222.14,372.44 -0.033,-0.078 c -0.884,-2.132 -1.906,-4.591 -2.344,-5.276 -2.193,-3.427 -2.188,-4.34 0.042,-6.19 1.438,-1.194 2.18,-3.302 1.649,-4.686 -1.324,-3.449 5.697,-6.868 11.244,-5.476 3.519,0.883 5.237,0.084 7.611,-3.539 2.836,-4.328 2.839,-5.119 0.034,-10.544 -2.32,-4.486 -2.529,-6.472 -0.89,-8.447 1.68,-2.023 1.101,-3.625 -2.677,-7.402 -2.651,-2.651 -4.82,-5.231 -4.82,-5.732 0,-0.501 4.096,-0.367 9.102,0.297 7.746,1.027 9.69,0.62 13.041,-2.73 2.165,-2.166 3.938,-5.196 3.938,-6.733 0,-2.066 2.166,-2.794 8.316,-2.794 h 8.317 l -3.735,8.714 c -2.204,5.141 -3.304,10.678 -2.684,13.506 0.766,3.497 -0.725,7.546 -5.514,14.976 -3.61,5.601 -6.563,10.923 -6.563,11.827 0,0.905 -1.371,4.533 -3.046,8.063 -3.502,7.378 -11.773,12.402 -17.896,10.868 -2.482,-0.622 -5.737,0.168 -7.934,1.926 l -3.878,2.447 c -0.269,-0.563 -0.748,-1.716 -1.28,-2.997 z" />
            <path
                    id="path45_fill"
                    d="m 394.556,462.458 c -0.223,2.957 0.597,5.996 1.821,6.752 1.224,0.757 3.77,-0.023 5.658,-1.732 4.548,-4.115 2.759,-14.429 -3.68,-21.218 -3.956,-4.172 -4.466,-5.933 -3.236,-11.177 2.393,-10.2 -0.798,-22.06 -5.936,-22.06 -3.363,0 -5.022,6.661 -2.727,10.95 1.795,3.355 -0.19,21.652 -2.611,24.074 -0.464,0.464 1.847,2.686 5.136,4.938 4.668,3.197 5.891,5.275 5.575,9.473 z" />
            <path
                    id="path46_fill"
                    d="m 434.084,367.11 c 1.238,-2.924 12.036,-15.825 18.082,-22.485 l -3.394,-5.974 c -3.291,-11.007 -4.736,-24.971 0.835,-32.242 4.815,-6.283 4.162,-6.735 0.334,-7.95 -2.107,-0.668 -7.475,0.177 -11.93,1.879 -7.75,2.959 -8.415,2.932 -15.328,-0.647 -3.975,-2.058 -8.829,-4.941 -10.784,-6.408 -2.808,-2.105 -4.77,-2.233 -9.316,-0.611 -6.734,2.403 -8.959,4.892 -6.776,7.581 0.86,1.059 2.47,5.245 3.578,9.303 1.64,6.006 1.473,8.202 -0.897,11.82 -1.601,2.443 -3.959,7.472 -5.241,11.174 l -2.331,6.732 16.461,8.156 c 9.054,4.486 16.461,9.033 16.461,10.104 0,1.071 1.799,4.859 3.999,8.417 l 3.998,6.47 z" />
            <path
                    id="path47_fill"
                    d="m 355.759,364.335 c -0.984,-3.102 -0.254,-5.041 2.844,-7.55 5.953,-4.82 8.106,-4.252 6.602,1.743 -0.707,2.816 -1.427,5.149 -1.599,5.185 -0.173,0.036 -1.711,1.13 -3.419,2.431 -2.643,2.014 -3.299,1.746 -4.428,-1.809 z" />
            <path
                    id="path48_fill"
                    d="m 202.186,332.761 c -2.514,10.48 -1.32,14.056 7.963,23.866 4.209,4.448 6.305,5.504 8.049,4.056 1.298,-1.077 1.924,-3.091 1.392,-4.477 -1.445,-3.766 7.355,-8.779 12.947,-7.376 6.923,1.738 9.908,-4.512 5.879,-12.305 -2.215,-4.284 -2.442,-6.373 -0.894,-8.239 2.917,-3.515 -7.483,-13.999 -13.886,-13.999 -3.793,0 -4.72,0.915 -4.72,4.657 0,4.172 -0.759,4.658 -7.266,4.658 -7.163,0 -7.298,0.13 -9.464,9.159 z" />
            <path
                    id="path49_fill"
                    d="m 355.826,353.385 c -0.637,-1.03 -0.657,-3.451 -0.045,-5.381 1.834,-5.775 12.168,-6.631 12.168,-1.008 0,3.378 -10.549,8.937 -12.123,6.389 z" />
            <path
                    id="path50_fill"
                    d="m 362.5,336.073 c 1.077,2.833 2.926,5.749 4.108,6.48 1.183,0.73 3.1,0.539 4.263,-0.426 1.163,-0.965 6.011,-2.288 10.774,-2.941 4.904,-0.672 8.661,-2.169 8.661,-3.451 0,-1.245 2.043,-6.106 4.541,-10.803 3.937,-7.405 4.286,-9.484 2.621,-15.647 -1.055,-3.909 -2.516,-7.74 -3.246,-8.513 -0.73,-0.774 -6.579,-0.858 -12.999,-0.187 -11.23,1.174 -11.629,1.393 -10.53,5.773 0.796,3.168 -0.574,7.595 -4.504,14.559 -4.815,8.53 -5.358,10.765 -3.689,15.156 z" />
            <path
                    id="path51_fill"
                    d="m 183.52,326.506 c 0,-0.452 0.838,-1.339 1.863,-1.973 1.025,-0.633 1.863,-0.263 1.863,0.822 0,1.085 -0.838,1.973 -1.863,1.973 -1.025,0 -1.863,-0.37 -1.863,-0.822 z" />
            <path
                    id="path52_fill"
                    d="m 211.465,314.287 c -4.347,0 -5.589,0.828 -5.589,3.726 0,2.898 1.242,3.726 5.589,3.726 4.346,0 5.588,-0.828 5.588,-3.726 0,-2.898 -1.242,-3.726 -5.588,-3.726 z" />
            <path
                    id="path53_fill"
                    d="m 255.372,308.493 c 0,-0.61 -0.871,-1.843 -1.742,-3.076 -0.611,-0.862 -1.22,-1.724 -1.531,-2.374 -0.408,-0.851 -1.417,-2.33 -2.63,-4.11 l -0.009,-0.014 c -1.387,-2.034 -3.041,-4.46 -4.371,-6.788 -4.817,-8.437 -4.378,-9.184 -1.205,-14.579 l 0.485,-0.827 c 2.987,-5.114 5.243,-6.494 13.172,-8.057 5.261,-1.037 11.508,-3.667 13.881,-5.845 2.371,-2.177 6.409,-5.007 8.97,-6.288 2.562,-1.281 8.948,-5.594 14.192,-9.584 5.738,-4.366 10.683,-6.813 12.423,-6.145 1.588,0.61 3.884,5.261 5.102,10.337 1.714,7.144 3.432,9.859 7.604,12.016 2.964,1.533 5.39,3.604 5.39,4.602 0,0.999 3.466,5.282 7.703,9.518 7.163,7.164 7.456,7.848 4.191,9.775 -1.931,1.139 -6.445,2.182 -10.031,2.316 -3.587,0.135 -11.38,1.753 -17.318,3.597 -10.712,3.325 -10.861,3.319 -19.304,-0.782 -7.938,-3.857 -8.811,-3.935 -13.048,-1.158 -3.219,2.109 -4.206,4.029 -3.391,6.597 1.035,3.263 0.212,3.622 -8.291,3.622 -8.081,0 -9.44,0.517 -9.44,3.593 z" />
            <path
                    id="path54_fill"
                    d="m 194.697,304.151 c 0,-0.452 0.838,-1.34 1.862,-1.973 1.025,-0.633 1.863,-0.263 1.863,0.822 0,1.085 -0.838,1.973 -1.863,1.973 -1.024,0 -1.862,-0.37 -1.862,-0.822 z" />
            <path
                    id="path55_fill"
                    d="m 337.546,279.87 c -2.54,-1.664 -6.765,-6.27 -9.39,-10.237 -1.667,-3.068 -3.215,-4.639 -4.329,-5.768 -2.495,-2.53 -2.803,-2.843 2.643,-12.83 l 3.97,-0.056 5.982,5.927 8.275,-0.783 7.268,2.069 8.274,-4.194 c 0.16,-0.278 0.304,-0.595 0.448,-0.912 0.36,-0.793 0.719,-1.585 1.322,-1.771 1.085,0.287 2.244,0.65 3.404,1.014 l 0.024,0.007 0.034,0.011 c 2.36,0.74 4.719,1.479 6.454,1.595 l 7.353,-6.512 c 1.514,-1.88 1.949,-3.657 1.984,-5.397 l 0.179,-0.475 c 0.539,-1.438 1.076,-2.875 2.454,-3.472 1.818,1.414 2.552,4.843 3.286,8.273 l 0.008,0.036 c 0.999,1.575 2.573,3.056 4.528,4.472 l 0.952,5.386 c -0.742,1.003 -2.088,1.972 -4.131,3.029 -7.351,3.801 -7.169,5.921 0.837,9.739 3.586,1.71 6.52,4.182 6.52,5.494 0,1.312 2.595,5.04 5.766,8.284 5.937,6.073 5.151,9.036 -2.414,9.105 -1.742,0.015 -3.838,1.223 -4.657,2.684 -0.878,1.565 -6.532,3.331 -13.769,4.299 -11.361,1.521 -12.701,1.318 -17.936,-2.719 -4.986,-3.846 -6.257,-4.09 -10.714,-2.059 -4.551,2.073 -5.395,1.858 -8.418,-2.15 -1.848,-2.45 -2.962,-5.492 -2.475,-6.759 0.486,-1.268 -1.194,-3.666 -3.732,-5.33 z" />
            <path
                    id="path56_fill"
                    d="m 68.3913,280.106 c 2.2438,2.459 3.3377,5.701 2.8277,8.383 l 0.0379,5.004 c 1.876,-0.329 6.7513,-1.429 14.4591,-3.543 7.7077,-2.115 15.681,-3.316 17.719,-2.669 l 0.651,0.209 c 1.42,0.458 2.256,0.728 2.616,0.428 0.514,-0.431 0.054,-2.031 -1.068,-5.922 l -0.357,-1.241 c -1.265,-4.409 -1.223,-10.029 0.132,-17.495 2.171,-11.979 0.638,-15.087 -6.5839,-13.339 -2.0115,0.486 -5.2431,-0.55 -7.1807,-2.305 -2.3784,-2.152 -6.8593,-3.232 -13.7803,-3.321 l -10.2558,-0.131 0.9584,8.503 c 0.527,4.677 0.0426,10.185 -1.0779,12.241 -3.2941,6.043 -3.004,10.918 0.9025,15.198 z" />
            <path
                    id="path57_fill"
                    d="m 43.6679,269.577 c 0.7963,-1.746 1.7281,-3.179 2.4722,-4.322 0.7527,-1.158 1.3129,-2.018 1.3442,-2.606 0.1953,-3.642 5.7522,-0.447 7.5343,4.239 1.2153,3.198 2.622,3.993 5.6574,3.2 3.3661,-0.881 3.8458,-0.442 2.8703,2.629 -0.7706,2.43 0.1091,4.843 2.5822,7.082 2.0647,1.868 3.8667,5.571 4.0061,8.23 l -0.2645,5.436 c -0.5877,-0.162 -1.4485,-0.45 -2.3917,-0.765 -1.2162,-0.406 -2.5699,-0.858 -3.6515,-1.146 -4.352,-1.155 -16.2411,-11.068 -23.8873,-18.146 z" />
            <path
                    id="path58_fill"
                    d="m 38.0162,271.369 1.0902,1.303 4.6032,-5.862 c 2.0997,-4.084 3.8174,-8.485 3.8174,-9.781 0,-2.761 -6.6413,-9.808 -9.2425,-9.808 -3.1216,0 -9.3875,8.002 -9.3913,11.995 -0.0019,1.262 5.9038,8.311 9.0861,12.109 l 0.0113,0.014 0.0181,0.021 z" />
            <path
                    id="path59_fill"
                    d="m 173.531,288.094 c -0.776,-3.879 -3.173,-6.414 -8.761,-9.264 -4.231,-2.159 -8.868,-3.473 -10.306,-2.922 -4.013,1.54 -3.346,-13.588 1.192,-27.061 2.879,-8.547 3.293,-11.915 1.7,-13.835 -1.609,-1.938 -1.131,-4.274 2.018,-9.876 5.771,-10.27 11.255,-12.431 20.047,-7.9 11.754,6.058 22.672,7.754 28.967,4.5 4.225,-2.186 6.468,-2.36 9.945,-0.776 3.464,1.578 5.707,1.415 9.827,-0.715 5.183,-2.68 5.447,-2.588 9.099,3.18 l 3.761,5.941 -6.395,11.435 c -3.517,6.29 -6.395,13.202 -6.395,15.36 0,6.638 -3.955,13.058 -9.443,15.332 -2.88,1.192 -6.13,1.615 -7.224,0.939 -3.568,-2.205 -12.956,6.315 -14.918,13.539 -1.853,6.815 -1.985,6.895 -11.96,7.177 -9.699,0.274 -10.127,0.081 -11.154,-5.054 z" />
            <path
                    id="path60_fill"
                    d="m 107.126,264.059 c -1.251,6.596 -1.172,12.144 0.251,17.797 1.137,4.517 2.676,8.213 3.418,8.213 2.691,0 23.297,-7.578 24.862,-9.143 0.9,-0.9 0.308,-4.118 -1.346,-7.317 -1.624,-3.141 -2.953,-9.399 -2.953,-13.908 0,-4.509 -0.921,-10.838 -2.046,-14.065 -1.954,-5.606 -2.493,-5.866 -12.131,-5.866 h -9.89 c 1.195,-0.941 3.965,-1.087 10.096,-1.275 6.147,-0.188 12.016,-0.526 13.04,-0.749 1.025,-0.224 2.701,-0.539 3.726,-0.699 5.334,-0.837 9.567,-3.213 11.642,-6.537 2.091,-3.349 1.596,-4.08 -5.065,-7.478 -8.072,-4.118 -11.847,-9.303 -10.097,-13.866 1.596,-4.16 -3.553,-3.739 -7.49,0.612 -1.763,1.948 -6.279,4.118 -10.035,4.823 -10.16,1.905 -12.585,3.72 -20.0928,15.031 l -6.848,10.317 3.9416,4.195 c 2.5992,2.767 6.1114,4.195 10.3202,4.195 5.674,0 6.347,-0.525 6.08,-4.751 -0.115,-1.82 -0.115,-2.946 0.607,-3.663 l 0.903,7.198 c 0.508,4.044 0.106,11.665 -0.893,16.936 z" />
            <path
                    id="path61_fill"
                    d="m 136.388,273.718 c -1.617,-3.815 -3.36,-11.546 -3.872,-17.182 -0.512,-5.635 -1.192,-11.832 -1.511,-13.771 -1.151,-7.01 3.593,-4.795 6.419,2.996 3.334,9.195 5.696,32.549 3.433,33.948 -0.84,0.519 -2.85,-2.177 -4.469,-5.991 z" />
            <path
                    id="path62_fill"
                    d="m 142.535,260.256 c 0,3.846 0.512,9.55 1.137,12.676 1.763,8.813 6.315,5.537 6.315,-4.545 0,-4.533 1.689,-13.257 3.754,-19.385 3.503,-10.401 3.551,-11.45 0.716,-15.776 -3.725,-5.686 -3.993,-5.693 -9.043,-0.244 -2.237,2.414 -5.145,4.749 -6.46,5.187 -1.889,0.629 -1.763,2.306 0.594,7.947 1.643,3.932 2.987,10.295 2.987,14.14 z" />
            <path
                    id="path63_fill"
                    d="m 56.8406,266.623 c 0,-1.432 -1.676,-3.651 -3.7255,-4.931 -2.0494,-1.279 -3.7263,-3.42 -3.7263,-4.757 0,-2.946 -8.3363,-11.577 -11.1811,-11.577 -1.1205,0 -3.8866,1.996 -6.1474,4.435 l -4.1094,4.435 -12.2162,-15.913 5.756,-5.756 c 4.7056,-4.706 7.0546,-5.669 12.8722,-5.28 3.915,0.262 8.3333,1.486 9.8197,2.72 1.9452,1.615 4.4838,1.732 9.0652,0.418 3.4999,-1.004 6.4764,-1.825 6.6148,-1.825 0.1384,0 1.2039,2.305 2.368,5.123 3.497,8.467 5.8564,26.664 3.9245,30.274 -2.2533,4.209 -9.3145,6.207 -9.3145,2.634 z" />
            <path
                    id="path64_fill"
                    d="m 65.4896,237.951 c -1.8324,-8.933 -5.1141,-11.459 -12.2285,-9.409 -6.5541,1.888 -12.4276,-0.38 -10.2226,-3.948 0.5829,-0.943 -0.6864,-4.671 -2.8192,-8.287 -2.9842,-5.057 -3.4326,-7.406 -1.9452,-10.184 1.747,-3.265 4.0743,-3.612 24.2229,-3.612 h 22.289 v -80.107 h 4.7056 c 5.3237,0 64.0824,42.22 64.1704,46.108 0.029,1.281 1.729,2.329 3.778,2.329 3.332,0 3.723,1.232 3.697,11.643 -0.014,6.404 -0.812,12.883 -1.769,14.398 -1.079,1.706 -7.497,3.576 -16.862,4.915 -10.277,1.468 -16.424,3.356 -19.188,5.893 -2.237,2.053 -7.001,4.325 -10.587,5.049 -9.682,1.953 -13.9049,5.311 -21.6487,17.211 -3.8477,5.913 -7.3276,11.17 -7.7324,11.682 -0.4057,0.513 -4.3729,0.952 -8.8159,0.977 -7.158,0.039 -8.1903,-0.492 -9.0444,-4.658 z" />
            <path
                    id="path65_fill"
                    d="m 453.808,231.189 c -1.665,2.008 -1.46,3.291 0.902,5.653 3.624,3.624 8.25,0.96 8.25,-4.752 0,-4.166 -5.955,-4.752 -9.152,-0.901 z" />
            <path
                    id="path66_fill"
                    d="m 9.33611,232.608 -5.58909,-2.806 5.58909,-2.384 c 3.07329,-1.311 7.92289,-2.421 10.77719,-2.467 4.5995,-0.075 4.9644,0.334 3.2173,3.599 -3.1386,5.865 -7.739,7.199 -13.99449,4.058 z" />
            <path
                    id="path67_fill"
                    d="m 132.99,215.064 c 0.911,2.104 3.325,3.557 10.429,7.836 l 11.227,6.767 4.092,-6.713 c 5.987,-9.823 12.033,-12.039 20.684,-7.58 11.755,6.058 22.673,7.754 28.967,4.499 4.177,-2.16 6.487,-2.351 9.855,-0.817 5.899,2.688 13.054,-0.623 14.592,-6.752 0.641,-2.554 4.565,-9.463 8.719,-15.353 6.958,-9.868 7.596,-11.792 8.089,-24.465 0.611,-15.638 -4.919,-33.225 -10.466,-33.283 -1.664,-0.018 -6.334,-1.199 -10.378,-2.626 l -7.352,-2.594 -24.506,18.429 c -15.947,11.992 -26.149,18.429 -29.21,18.429 -4.501,0 -4.702,0.474 -4.702,11.09 0,14.493 -2.768,20.58 -9.355,20.58 -2.766,0 -8.778,0.514 -13.36,1.142 -7.785,1.067 -8.311,1.495 -8.011,6.532 l 0.037,0.635 c 0.108,1.904 0.18,3.16 0.649,4.244 z" />
            <path
                    id="path68_fill"
                    d="m 1.80846,224.742 c -1.9063165,-3.085 -0.06351,-3.862 10.01694,-4.227 5.1379,-0.186 9.8956,-0.891 10.5725,-1.568 2.2542,-2.254 -6.9181,-5.649 -12.3357,-4.565 -4.54442,0.909 -5.76632,0.243 -8.20634,-4.476 -2.687427,-5.198 -2.609696,-5.893 1.24655,-11.108 8.90309,-12.043 18.37599,-8.978 30.41679,9.843 4.6307,7.237 8.4187,13.759 8.4187,14.493 0,2.703 -5.2602,3.214 -13.9718,1.356 -6.3171,-1.348 -10.9772,-1.299 -15.8658,0.166 -8.49927,2.546 -8.77038,2.548 -10.29184,0.086 z" />
            <path
                    id="path69_fill"
                    d="m 432.579,208.987 c 6.62,0.993 10.035,2.968 16.129,9.325 4.253,4.437 8.805,8.145 10.116,8.242 3.973,0.292 -4.955,-10.241 -16.586,-19.57 -7.542,-6.049 -11.116,-10.359 -11.992,-14.463 -2.064,-9.662 -4.123,-10.925 -10.331,-6.335 -5.735,4.24 -10.032,15.499 -7.967,20.879 0.898,2.34 2.527,2.795 6.71,1.877 3.039,-0.668 9.303,-0.647 13.921,0.045 z" />
            <path
                    id="path70_fill"
                    d="m 465.086,217.931 c -1.986,-3.892 -4.208,-11.863 -4.94,-17.714 -1.274,-10.197 -1.13,-10.728 3.478,-12.827 3.804,-1.733 7.245,-1.594 16.492,0.665 11.665,2.85 11.691,2.847 15.906,-1.702 4.478,-4.832 16.342,-10.648 25.62,-12.56 5.183,-1.069 5.926,-0.508 10.246,7.728 l 4.657,8.881 -7.677,7.572 c -4.223,4.165 -11.768,9.109 -16.767,10.985 -4.999,1.877 -13.699,5.689 -19.335,8.473 -5.635,2.783 -13.356,5.626 -17.159,6.317 -6.591,1.2 -7.079,0.93 -10.521,-5.818 z" />
            <path
                    id="path71_fill"
                    d="m 18.0202,216.779 c -2.5518,-1.139 -6.172,-1.116 -10.06146,0.061 -5.7019,1.727 -5.45733,1.837 3.98616,1.779 7.9608,-0.049 9.2292,-0.433 6.0753,-1.84 z" />
            <path
                    id="path72_fill"
                    d="M 30.9256,201.847 C 25.9157,193.74 17.2704,188.712 11.0348,190.276 6.90368,191.313 6.73779,191.06 8.5095,186.4 c 2.1926,-5.766 0.56592,-19.804 -3.14055,-27.11 -1.40391,-2.767 -2.55282,-5.491 -2.55282,-6.054 0,-0.564 6.70672,-1.025 14.90357,-1.025 h 14.9037 v -6.221 c 0,-4.828 1.0427,-6.696 4.6572,-8.343 4.2165,-1.922 4.6573,-3.182 4.6573,-13.34 V 113.09 h 12.9167 c 12.4342,0 12.9385,-0.177 13.5064,-4.731 l 0.5886,-4.731 10.89,7.991 c 8.9288,6.553 10.1867,8.098 6.9855,8.587 -3.8222,0.582 -3.9027,1.421 -3.9027,40.518 v 39.924 H 60.8513 c -20.8444,0 -22.1706,0.224 -23.8721,4.039 -1.73,3.876 -1.9736,3.762 -6.0536,-2.84 z" />
            <path
                    id="path73_fill"
                    d="m 452.776,183.616 c -2.595,-3.085 -4.72,-6.382 -4.72,-7.327 0,-0.945 -3.361,-5.182 -7.47,-9.416 -5.118,-5.273 -8.424,-10.996 -10.497,-18.166 -1.665,-5.757 -5.051,-12.982 -7.527,-16.056 -17.184,-21.341 -22.187,-28.785 -24.941,-37.1207 -3.259,-9.8569 -2.957,-13.7253 0.824,-10.5863 3.9,3.2362 13.347,-4.4541 15.887,-12.9327 2.563,-8.5575 7.496,-11.4 15.701,-9.047 6.787,1.9464 20.371,9.8933 23.636,13.827 3.857,4.6479 16.106,10.3016 21.852,10.0863 13.681,-0.5126 26.386,9.865 30.421,24.8474 1.277,4.747 3.386,7.676 6.328,8.795 2.427,0.922 5.529,3.998 6.893,6.834 3.008,6.259 13.552,13.68 19.433,13.68 2.362,0 6.413,0.965 9.004,2.146 15.454,7.041 -0.29,26.379 -23.343,28.672 -9.456,0.941 -22.683,6.779 -28.47,12.565 -4.478,4.479 -4.564,4.488 -16.166,1.654 -10.605,-2.591 -12.138,-2.577 -16.894,0.152 -5.099,2.927 -5.35,2.861 -9.951,-2.607 z" />
            <path
                    id="path74_fill"
                    d="m 530.362,173.671 c -0.328,0.294 1.145,3.947 3.273,8.118 3.592,7.041 4.3,7.502 9.91,6.451 8.407,-1.576 16.874,-8.35 23.107,-18.486 2.909,-4.733 8.015,-11.765 11.344,-15.628 3.33,-3.863 6.055,-7.829 6.055,-8.815 0,-2.26 -12.098,-12.048 -19.839,-16.049 -6.522,-3.372 -7.232,-2.944 -12.577,7.58 -1.692,3.33 -2.245,6.055 -1.23,6.055 1.014,0 2.796,1.776 3.957,3.946 1.664,3.109 1.433,5.453 -1.088,11.044 -2.531,5.614 -5.2,7.95 -12.759,11.173 -5.256,2.242 -9.825,4.317 -10.153,4.611 z" />
            <path
                    id="path75_fill"
                    d="m 246.328,136.917 c 4.522,-3.637 16.951,0.86 39.709,14.368 24.119,14.316 26.024,15.202 26.024,12.104 0,-1.024 1.258,-1.863 2.795,-1.863 2.411,0 2.794,-6.581 2.794,-48.048 V 65.4295 l -10.287,-5.0453 c -12.48,-6.1207 -20.447,-6.5481 -23.284,-1.2491 -1.116,2.0878 -1.558,5.2877 -0.979,7.1107 0.661,2.0812 -0.617,4.882 -3.432,7.5274 -4.189,3.935 -4.84,4.0296 -9.863,1.4322 -2.957,-1.5295 -8.501,-3.3667 -12.318,-4.0829 -4.909,-0.9208 -7.879,-2.8891 -10.143,-6.7232 -2.034,-3.443 -5.596,-6.0474 -9.761,-7.1376 l -1.021,-0.2675 c -9.516,-2.4924 -13.025,-3.4116 -15.738,-2.3304 -1.584,0.6315 -2.896,1.9453 -4.974,4.0265 l -0.385,0.3849 c -3.226,3.2256 -5.865,7.0874 -5.865,8.5815 0,1.4942 -1.239,4.6078 -2.754,6.9191 -2.237,3.4147 -2.403,6.3776 -0.884,15.8051 1.311,8.1398 1.265,12.7311 -0.155,15.3841 -3.358,6.274 0.826,15.333 9.278,20.083 3.999,2.248 7.545,4.875 7.879,5.837 1.001,2.883 20.778,7.312 23.364,5.232 z" />
            <path
                    id="path76_fill"
                    d="m 4.6779,147.834 c 0,-1.383 2.42674,-5.865 5.3929,-9.959 2.9651,-4.094 6.8129,-10.298 8.5495,-13.786 1.7366,-3.488 5.8071,-10.322 9.0453,-15.187 l 5.8877,-8.845 32.6008,-0.008 v 11.178 H 40.0733 v 11.81 c 0,10.789 -0.402,11.993 -4.6573,13.932 -3.4714,1.582 -4.6572,3.555 -4.6572,7.751 v 5.628 h -13.04 c -9.70603,0 -13.0409,-0.643 -13.0409,-2.514 z" />
            <path
                    id="path77_fill"
                    d="m 319.514,144.674 33.067,0.554 c 18.186,0.305 33.631,0.744 34.321,0.975 0.689,0.231 4.043,-1.844 7.451,-4.61 3.409,-2.766 6.509,-5.242 6.888,-5.502 1,-0.686 -10.9,-23.686 -20.011,-38.6742 -9.102,-14.9739 -7.872,-20.5336 1.833,-8.2808 l 6.302,7.9573 1.044,-5.508 c 0.669,-3.536 -0.312,-8.3774 -2.744,-13.5225 -3.115,-6.5934 -4.498,-7.8357 -7.804,-7.0061 -2.21,0.5547 -6.564,0.121 -9.676,-0.9638 -3.915,-1.3646 -7.792,-1.383 -12.584,-0.0599 -5.13,1.4166 -10.603,1.2086 -21.11,-0.8019 -7.8,-1.4927 -14.811,-2.7141 -15.58,-2.7143 -0.769,-1e-4 -1.397,17.5851 -1.397,39.0782 z" />
            <path
                    id="path78_fill"
                    d="m 538.753,139.23 c -7.454,-1.442 -16.317,-6.991 -17.675,-11.066 -0.637,-1.908 0.042,-1.945 3.338,-0.181 7.185,3.845 15.841,0.724 24.137,-8.701 4.154,-4.719 7.62,-7.833 7.704,-6.92 0.964,10.57 0.439,13.596 -3.325,19.151 -2.353,3.473 -4.279,7.036 -4.279,7.918 0,0.881 -0.628,1.506 -1.397,1.389 -0.768,-0.118 -4.595,-0.833 -8.503,-1.59 z" />
            <path
                    id="path79_fill"
                    d="m 516.78,121.335 -0.057,-0.353 c -0.285,-1.72 -0.396,-2.389 0.367,-4.229 1.092,-2.627 1.985,-2.385 3.591,0.063 2.29,3.488 2.35,5.085 0.24,6.389 -0.908,0.562 -4.413,2.716 -4.244,-1.453 z" />
            <path
                    id="path80_fill"
                    d="m 42.5304,93.6979 c 10.7288,-6.5946 18.0375,-14.3375 18.0375,-19.1093 0,-9.6653 5.6858,-18.7874 15.9663,-25.613 5.5625,-3.6935 10.1146,-7.3873 10.1146,-8.2083 0,-0.8209 1.6901,-3.3068 3.7557,-5.5242 l 3.7558,-4.0315 7.8327,4.0829 c 4.309,2.2456 10.164,3.8386 13.011,3.5398 4.861,-0.5097 5.196,-0.0791 5.487,7.0493 0.171,4.1757 0.381,9.0592 0.467,10.8522 0.113,2.37 -1.068,3.1253 -4.321,2.7661 -5.293,-0.5843 -13.765,4.4533 -12.727,7.5679 0.845,2.5366 -14.0164,12.4726 -18.723,12.5178 -1.7575,0.0167 -6.5494,1.924 -10.6473,4.2382 -5.3995,3.0489 -7.6139,5.6058 -8.0415,9.284 -0.5886,5.0704 -0.6076,5.0763 -15.8345,5.0183 L 35.4179,98.07 Z" />
            <path
                    id="path81_fill"
                    d="m 481.695,80.4231 c -3.082,1.9043 -2.336,3.9769 2.222,6.175 6.256,3.0168 8.051,2.6785 8.051,-1.5169 0,-3.9476 -6.589,-6.9352 -10.273,-4.6581 z" />
            <path
                    id="path82_fill"
                    d="m 389.256,77.433 c -2.623,-5.818 -2.942,-8.0335 -1.239,-8.6013 1.262,-0.4207 2.819,-4.0478 3.461,-8.0603 0.642,-4.0126 1.758,-7.2956 2.48,-7.2956 1.524,0 1.296,3.9594 -0.739,12.7958 -0.948,4.124 -0.623,7.8094 0.95,10.7495 1.617,3.0209 1.782,5.087 0.508,6.3612 -1.274,1.2741 -3.035,-0.6582 -5.421,-5.9493 z" />
            <path
                    id="path83_fill"
                    d="m 398.124,54.8566 c -0.266,0.6691 -0.506,1.2678 -0.693,1.701 l 3.272,1.5121 c 2.651,0.7154 7.921,-1.6107 16.679,-7.3627 7.041,-4.6248 13.375,-8.4089 14.075,-8.4089 0.7,0 1.866,-3.982 2.591,-8.8489 0.724,-4.8669 2.286,-10.0284 3.471,-11.4698 1.819,-2.2124 0.993,-2.3889 -5.297,-1.1317 -4.099,0.819 -12.063,1.5793 -17.698,1.6893 -7.972,0.1559 -11.177,1.1309 -14.438,4.3919 -4.66,4.6598 -5.617,11.6434 -1.596,11.6434 4.289,0 5.033,5.4514 1.604,11.7614 -0.611,1.1249 -1.355,2.9832 -1.958,4.4927 z" />
            <path
                    id="path84_fill"
                    d="m 400.11,59.0817 c 2.575,1.613 4.891,1.1547 10.719,-2.1208 7.259,-4.0796 7.496,-4.0949 10.02,-0.6426 2.291,3.134 2.132,3.761 -1.404,5.5154 -2.194,1.0886 -5.19,5.4312 -6.657,9.6499 -1.599,4.5989 -4.727,8.8871 -7.81,10.7083 -5.111,3.0192 -5.162,2.998 -8.212,-3.4317 -2.168,-4.5677 -2.647,-8.2769 -1.629,-12.6168 0.794,-3.3809 1.507,-6.9855 1.587,-8.01 z" />
            <path
                    id="path85_fill"
                    d="m 463.891,82.0099 c -3.074,-1.6426 -8.337,-5.3763 -11.696,-8.2971 -6.908,-6.0077 -19.376,-12.7852 -23.52,-12.7852 -2.633,0 -8.563,-6.7111 -8.563,-9.6913 0,-0.7758 3.271,-3.0794 7.269,-5.1192 6.608,-3.3711 7.387,-4.5609 8.558,-13.0762 0.709,-5.1524 2.061,-9.8459 3.007,-10.4301 0.946,-0.5844 1.206,-1.8914 0.58,-2.9048 -0.714,-1.1556 2.324,-1.5648 8.151,-1.0977 7.869,0.6308 10.186,1.7657 15.15,7.4205 4.537,5.167 5.593,7.7469 4.673,11.4151 -1.493,5.9464 4.71,16.5461 12.309,21.035 2.97,1.7542 6.271,5.6926 7.339,8.7525 1.066,3.0598 3.384,7.1599 5.15,9.1114 3.114,3.4416 3.006,3.5096 -3.619,2.2667 -5.723,-1.0735 -7.227,-0.6475 -9.271,2.6275 -2.891,4.6275 -7.843,4.8742 -15.517,0.7729 z" />
            <path
                    id="path86_fill"
                    d="m 588.805,67.228 c 2.066,0.7928 2.47,2.8445 1.613,8.2038 l -1.143,7.1467 13.69,-0.2739 c 14.641,-0.2929 20.595,-2.689 23.719,-9.5436 2.072,-4.548 12.327,-10.7629 15.017,-9.1006 0.909,0.5621 3.048,-3.1756 4.751,-8.3061 1.704,-5.1304 4.689,-10.4423 6.634,-11.8042 3.086,-2.162 3.257,-3.214 1.34,-8.2909 -1.87,-4.9565 -1.702,-6.3585 1.139,-9.4982 1.833,-2.026 6.692,-4.2511 10.798,-4.9447 4.854,-0.8201 6.829,-1.8971 5.646,-3.0794 -1.182,-1.1823 -4.278,-1.139 -8.852,0.124 -7.63,2.1067 -10.179,1.4508 -10.179,-2.6195 0,-1.4405 -1.713,-3.5361 -3.808,-4.6569 -3.206,-1.71571 -4.61,-1.17855 -8.886,3.3989 -6.871,7.3554 -11.927,8.673 -19.083,4.9726 -7.428,-3.841 -14.25,-2.2513 -17.09,3.9822 -2.387,5.2387 -14.668,12.4312 -18.63,10.9107 -1.597,-0.6128 -3.348,1.3539 -4.814,5.4066 -1.99,5.5053 -1.782,7.764 1.541,16.6426 2.114,5.6501 5.083,10.7486 6.597,11.3299 z" />
            <path
                    id="path87_fill"
                    d="m 194.411,55.7729 c 3.309,4.372 6.904,10.2535 7.99,13.07 2.177,5.6479 5.337,5.1995 5.337,-0.7575 0,-2.09 2.64,-6.2659 5.865,-9.2795 l 5.866,-5.4795 -5,-5.2192 c -4.362,-4.5524 -4.749,-5.8808 -3.032,-10.398 1.364,-3.5844 1.374,-5.8967 0.035,-7.5105 -1.065,-1.2824 -1.438,-3.6312 -0.828,-5.2195 1.723,-4.4913 -5.062,-7.2527 -11.936,-4.8567 -5.031,1.7543 -5.476,2.4874 -3.946,6.5128 1.305,3.4328 0.741,6.5606 -2.321,12.8621 l -4.044,8.3262 z" />
            <path
                    id="path88_fill"
                    d="m 395.18,51.9646 c -1.554,-2.5132 0.534,-11.5293 2.668,-11.5293 3.189,0 3.716,3.7961 1.197,8.605 -1.577,3.0094 -3.1,4.1621 -3.865,2.9243 z" />
            <path
                    id="path89_fill"
                    d="m 384.668,236.846 c 0.55,0.169 1.16,0.355 2.858,4.142 -0.531,3.691 3.978,8.742 4.251,8.56 0.364,-0.127 1.073,-1.724 2.175,-4.206 l 0.007,-0.014 c 1.919,-4.327 5.031,-11.336 9.588,-17.961 2.964,-4.306 5.388,-9.096 5.388,-10.644 0,-1.548 0.839,-3.334 1.867,-3.969 1.241,-0.767 1.214,-2.377 -0.08,-4.794 -3.027,-5.658 0.884,-16.748 7.951,-22.54 l 6.079,-4.983 -3.95,-4.332 c -5.788,-6.348 -8.135,-11.69 -8.194,-18.648 -0.032,-3.853 -2.056,-8.825 -5.382,-13.217 l -5.329,-7.04 -11.715,9.857 -70.668,-0.624 v 8.478 c 0,6.294 -0.721,8.478 -2.795,8.478 -2.298,0 -2.794,3.312 -2.794,18.63 0,15.188 -0.508,18.629 -2.751,18.629 -3.651,0 -7.86,6.787 -9.382,15.126 -0.913,4.999 -0.216,8.734 2.694,14.438 2.159,4.232 3.28,7.72 2.491,7.751 -0.789,0.032 -0.053,0.864 1.635,1.85 1.69,0.986 4.071,5.958 5.293,11.049 1.516,6.319 3.075,9.621 5.553,10.408 l 1.658,-0.827 c 0,0 0.167,-1.99 1.454,-4.518 l 2.934,-6.067 c 2.249,-1.071 4.336,-1.112 5.762,-0.494 1.046,0.925 1.639,1.863 2.224,2.787 0.621,0.98 1.232,1.944 2.362,2.863 2.359,0.389 3.761,0.126 5.083,-0.121 0.961,-0.181 1.879,-0.353 3.093,-0.26 2.196,-0.221 3.537,0.645 4.561,1.306 l 0.351,0.224 c 1.07,0.665 3.431,1.193 5.66,-0.724 1.377,-1.185 2.462,-1.41 3.181,-1.559 0.446,-0.093 0.752,-0.156 0.902,-0.4 0.788,-0.447 0.973,-1.263 1.131,-1.966 0.09,-0.398 0.172,-0.76 0.351,-0.998 1.147,-1.358 2.894,-0.75 3.952,0.083 l 7.112,1.945 7.954,-7.379 c 0.417,-0.788 0.557,-1.68 0.696,-2.568 0.192,-1.231 0.384,-2.454 1.311,-3.377 0.294,-0.433 0.53,-0.823 0.737,-1.163 0.663,-1.096 1.024,-1.69 2.023,-1.655 0.276,0.309 0.492,0.375 0.718,0.444 z" />
            <path
                    id="path90_fill"
                    d="m 512.328,115.289 c 0.101,0.333 0.424,0.725 0.74,1.11 l 0.028,0.034 0.019,0.023 c 0.088,0.107 0.174,0.214 0.255,0.318 0.095,-0.11 0.108,-0.359 0.122,-0.634 0.012,-0.227 0.026,-0.472 0.086,-0.669 0.062,-0.434 -0.022,-0.816 -0.156,-1.25 -0.627,-0.049 -0.808,-0.062 -1.052,0.252 -0.117,0.287 -0.095,0.41 -0.069,0.559 l 0.002,0.01 0.004,0.02 0.002,0.012 0.002,0.013 c 0.007,0.058 0.017,0.122 0.017,0.202 z" />
            <path
                    id="path91_fill"
                    d="m 569.46,495.028 c -0.556,-0.922 -1.559,0.088 -1.559,0.54 0,0.452 0.46,1.042 1.236,0.374 0.423,-0.365 0.403,-0.705 0.323,-0.914 z" />
            <path
                    id="path92_fill"
                    d="m 573.597,496.688 c -0.556,-0.922 -1.559,0.089 -1.559,0.541 0,0.451 0.46,1.042 1.236,0.373 0.423,-0.364 0.403,-0.704 0.323,-0.914 z" />
            <path
                    id="path93_fill"
                    d="m 567.381,501.954 c -1.025,0.633 -1.863,1.521 -1.863,1.973 0,0.452 0.838,0.821 1.863,0.821 1.025,0 1.863,-0.887 1.863,-1.972 0,-1.085 -0.838,-1.455 -1.863,-0.822 z" />
            <path
                    id="path94_fill"
                    d="m 477.404,449.492 c -1.039,-0.608 -0.264,-1.863 0.822,-1.863 1.084,0 1.972,0.839 1.972,1.863 0,1.902 -0.837,1.323 -1.922,0.571 l -0.006,-0.004 -0.022,-0.015 c -0.27,-0.186 -0.553,-0.382 -0.844,-0.552 z" />
            <path
                    id="path95_fill"
                    d="m 471.794,445.611 c -0.789,-0.28 -1.003,0.798 -0.466,1.007 0.374,0.145 0.452,0.132 0.64,0.1 0.197,-0.034 0.515,-0.089 1.418,-0.004 0.82,0.076 -0.716,-0.793 -1.592,-1.103 z" />
            <path
                    id="path96_fill"
                    d="m 475.089,444.385 c -0.235,-0.039 -0.309,-0.051 -10e-4,0.12 l 1.19,0.154 c 0.508,0.065 0.797,0.385 0.963,0.568 0.196,0.217 0.218,0.241 0.222,-0.585 0.002,-0.653 -0.307,-1.082 -0.978,-0.418 -0.34,0.337 -1.047,0.219 -1.396,0.161 z" />
            <path
                    id="path97_fill"
                    d="m 469.4,439.203 c 0.011,-0.711 0.021,-1.409 0.365,-2.073 0.926,0.437 0.931,0.954 0.938,1.632 0.004,0.435 0.009,0.936 0.258,1.525 0.249,0.536 0.291,0.908 0.328,1.247 0.037,0.328 0.071,0.625 0.285,1.009 -0.281,0.377 -0.394,0.261 -0.694,-0.049 -0.3,-0.309 -0.786,-0.811 -1.812,-1.208 0.312,-0.694 0.323,-1.395 0.332,-2.083 z" />
            <path
                    id="path98_fill"
                    d="m 567.45,358.252 c -0.005,-0.055 -0.007,-0.085 0.006,-0.102 0.017,-0.02 0.061,-0.019 0.159,-0.015 0.051,0.001 0.116,0.004 0.199,0.004 0.507,0 0.989,0.303 0.989,0.79 0,0.134 0.014,0.227 0.024,0.292 0.009,0.064 0.015,0.101 -10e-4,0.122 -0.021,0.027 -0.08,0.027 -0.217,0.025 l -0.128,-10e-4 c -0.508,0 -1.049,-0.26 -1.022,-0.854 0.005,-0.121 -0.003,-0.204 -0.009,-0.261 z" />
            <path
                    id="path99_fill"
                    d="m 579.829,355.481 c -0.008,-0.071 -0.013,-0.11 0.004,-0.13 0.02,-0.023 0.07,-0.02 0.178,-0.014 0.073,0.004 0.172,0.009 0.307,0.009 0.667,0 1.3,0.359 1.3,0.936 0,0.158 0.018,0.269 0.031,0.346 0.012,0.073 0.019,0.116 10e-4,0.141 -0.025,0.036 -0.102,0.035 -0.29,0.033 l -0.167,-0.001 c -0.666,0 -1.344,-0.434 -1.344,-1.012 0,-0.141 -0.011,-0.239 -0.02,-0.308 z" />
            <path
                    id="path100_fill"
                    d="m 570.011,362.132 c 0.877,-0.2 0.902,-0.64 0.921,-0.962 0.013,-0.218 0.023,-0.383 0.292,-0.383 0.096,0 0.128,0.137 0.174,0.335 0.117,0.494 0.323,1.368 1.822,1.448 1.703,0.09 1.56,0.419 1.348,0.907 -0.149,0.342 -0.331,0.762 0.06,1.234 0.378,0.458 -0.328,0.458 -0.982,0.458 h -0.049 c -0.089,0 -0.122,-0.118 -0.171,-0.292 -0.136,-0.482 -0.392,-1.398 -2.283,-1.479 -0.837,-0.036 -1.455,-1.193 -1.132,-1.266 z" />
            <path
                    id="path101_fill"
                    d="m 437.021,375.501 c -0.02,0.291 -0.041,0.605 -0.041,0.926 0,1.223 -1.536,2.371 -2.202,2.371 -0.454,0 -0.391,-0.534 -0.305,-1.262 0.04,-0.339 0.085,-0.72 0.085,-1.109 0,-1.224 1.404,-2.372 2.07,-2.372 0.492,0 0.449,0.626 0.393,1.446 z" />
            <path
                    id="path102_fill"
                    d="m 433.241,384.904 c 0.03,0.403 0.063,0.839 0.063,1.282 0,1.696 2.364,3.286 3.388,3.286 0.699,0 0.601,-0.739 0.469,-1.748 -0.062,-0.47 -0.131,-0.999 -0.131,-1.538 0,-1.695 -2.16,-3.286 -3.184,-3.286 -0.757,0 -0.691,0.868 -0.605,2.004 z" />
            <path
                    id="path103_fill"
                    d="m 55.1216,55.9138 -3.3626,2.2418 -0.8967,-1.6814 -2.2418,-0.7846 -5.044,2.2418 -0.5605,-0.7846 -0.5604,-0.8968 2.3539,-3.0264 2.0175,-4.3715 c 1.6066,-0.8507 3.2132,-0.4552 4.8198,0.7846 l 1.4573,-1.6813 -0.6726,-3.699 -2.578,-1.7934 -1.5693,-3.0265 -3.5868,-5.3803 -4.7078,-1.233 -3.3627,-2.1297 c -2.1286,0.2831 -4.0414,0.5451 -6.7254,-0.5605 -0.786,1.9944 -3.4145,2.8833 -5.6045,4.0353 l -6.9495,1.7935 -3.4748,-1.3452 C 11.7698,34.9162 9.86723,35.2733 7.48359,33.6079 L 4.12091,34.0562 C 1.84981,33.8928 1.00692,32.5869 0.197776,31.2539 -0.418909,29.7497 0.40745,27.747 2.66379,25.089 l 1.00878,-4.4836 c 0.95638,-1.6479 1.81061,-3.449 3.92314,-3.3627 L 11.0705,13.2074 V 11.0777 C 8.7242,9.39636 7.77649,7.71502 7.81982,6.03366 10.5769,4.97795 13.0894,2.4545 16.1145,3.00725 l 3.5868,0.22417 5.4925,0.89672 c 2.0921,-0.20477 3.7718,0.62093 5.2681,1.90552 2.6155,-0.72442 5.2309,-0.54269 7.8463,1.12092 2.7204,-1.95879 4.2764,-0.42454 6.1649,0.11215 2.466,-0.75458 4.932,0.23005 7.398,0.8967 L 52.6557,6.37 C 52.306,4.6009 52.4938,3.13901 54.225,2.55893 l 4.1472,-1.00882 1.4087,2.14179 c 12.7188,-6.01701 13.1715,-4.263575 19.2623,2.2566 6.5019,6.9604 13.7329,10.5426 26.6568,13.206 17.55,3.6164 21.115,15.3979 6.519,21.5411 -23.7687,10.0036 -24.0933,10.1987 -21.7205,13.0577 1.2649,1.5242 4.0834,2.8063 6.2633,2.8493 3.201,0.0631 2.7091,0.7648 -2.5568,3.6477 -8.0179,4.3897 -7.5759,4.3632 -12.7148,0.7637 -3.3367,-2.3372 -3.773,-3.5119 -2.0676,-5.5668 1.7008,-2.0494 1.4219,-2.8824 -1.3084,-3.9083 -1.9085,-0.7171 -4.369,-2.5021 -5.4679,-3.9668 -1.7246,-2.2986 -2.7701,-2.2637 -7.6408,0.2551 -3.1036,1.6049 -7.0535,5.0708 -8.7775,7.7021" />
            <path
                    id="path104_fill"
                    d="M 0.676066,3.62242 C 0.566526,2.49584 -0.393293,1.12659 0.182818,1.32807e-5 1.67933,0.382772 2.46358,3.07393 0.676066,3.62242 Z" />
            <path
                    id="path105_fill"
                    d="M 0.863526,1.19851 C 0.29334,1.08897 -0.0469865,0.643104 0.00528728,0.0630597 0.832949,-0.228974 1.09337,0.552355 0.863526,1.19851 Z" />
            <path
                    id="path106_fill"
                    d="M 0.845608,1.42713 C -0.0816826,1.46364 -0.380601,0.110159 0.63844,0.00559261 1.55291,-0.0890446 1.20568,1.04239 0.845608,1.42713 Z" />
            <path
                    id="path107_fill"
                    d="M 6.57956e-4,2.05765 C 1.18639,0.489005 3.27269,-0.115722 5.17107,0.0179626 7.64357,0.0272773 10.0771,0.763635 12.226,1.96402 c 1.0138,0.40403 2.2633,0.6557 2.8288,1.69818 0.4272,0.47484 0.9707,1.48307 0.0074,1.71694 C 14.4354,5.50396 13.7571,5.53841 13.1334,5.37726 12.5224,5.19991 12.0092,4.77693 11.4018,4.60498 10.6405,4.63367 10.3605,5.80825 9.50308,5.51786 8.82267,5.40124 8.41081,5.96653 8.24546,6.51181 7.66348,6.62787 7.42659,5.69099 6.78561,5.72071 6.13165,5.56962 5.43861,5.84144 4.80921,5.53816 4.17009,5.31814 3.6951,4.7989 3.39643,4.20963 2.85506,3.41861 2.01552,2.75169 1.02309,2.71754 0.625257,2.62029 0.196738,2.44308 -2.4269e-5,2.0576" />
            <path
                    id="path108_fill"
                    d="M 1.42056,1.44152 C 0.926323,1.01338 0.452799,0.563566 -4.07516e-6,0.0920195 0.846399,-0.314399 1.46693,0.714475 1.42056,1.44152 Z" />
            <path
                    id="path109_fill"
                    d="M 1.46997e-5,0.924344 C 0.454811,0.586966 0.928317,0.279162 1.42058,-1.81928e-5 1.09406,0.482371 0.583037,0.842487 1.46997e-5,0.924344 Z" />
            <path
                    id="path110_fill"
                    d="M 0.708939,0.464697 C 0.472626,0.370232 0.23634,0.275606 2.68017e-5,0.181066 0.687284,-0.133049 0.924556,-0.0384779 0.708939,0.464697 Z" />
            <path
                    id="path111_fill"
                    d="M 0.00105782,0.814562 C -0.0464469,-0.685904 1.55967,0.406119 2.33898,0.104249 1.6593,0.628088 0.807016,0.671507 0.00105782,0.814562 Z" />
            <path
                    id="path112_fill"
                    d="M 3.17608,2.21972 C 2.98373,2.07664 -1.14572,0.320771 0.31034,0.021863 1.23862,-0.168529 3.92384,0.912625 3.17608,2.21972 Z" />
            <path
                    id="path113_fill"
                    d="m 2.87204,11.0641 c 1.6948,0.7034 2.26792,0.4468 3.90648,0.4972 -1.95621,0.2397 0.88192,0.7309 1.34853,0.7882 1.1019,0.1341 2.17125,0.1658 3.27515,0.3492 1.5064,0.2486 1.2173,-0.3581 2.4248,-0.7626 0.7675,-0.2564 1.9947,0.3088 2.1141,-0.658 C 16.1522,9.56164 12.9214,9.01608 13.3653,6.79351 13.8033,4.60152 14.1378,3.1849 11.3243,2.61275 10.2204,2.38879 7.58053,2.50322 9.7952,0.945558 c 2.5609,-1.800361 4.5103,-0.609606 7.0574,0.134172 1.6809,0.49128 5.2047,-0.07005 4.7775,2.29854 -0.1825,1.01312 -0.3107,1.70466 -0.1183,2.73949 0.2585,1.39292 -1.4383,1.38007 -1.5902,2.10615 -0.0838,0.41234 0.8613,0.52775 0.7646,1.33768 -0.1302,1.09801 -1.1019,1.84481 -2.1891,1.78751 1.1592,1.1256 1.6901,3.1262 0.9512,4.6435 -1.5103,-2.124 -3.9816,-1.6564 -6.2072,-1.0921 -2.1367,0.5416 -7.11359,-2.0361 -8.44337,0.4183 -1.01311,1.8704 -2.2413,-1.24 -3.77531,-1.5004 -2.4662,-0.4193 0.08103,-3.9145 1.84968,-2.7544" />
            <path
                    id="path114_fill"
                    d="M 56.1441,13.395 C 56.8787,8.87067 57.4409,3.42323 57.7565,0 L 54.3913,0.793713 C 45.2664,4.0098 36.5709,8.71472 32.1098,12.8494 l -4.8345,4.4805 4.7217,5.611 c 2.5974,3.0871 7.8576,6.4442 11.6948,7.4633 9.1582,2.4331 9.7677,2.4855 9.7753,0.8407 0.0038,-0.7686 1.2086,-8.801 2.677,-17.8499 z" />
            <path
                    id="path115_fill"
                    d="m 91.3518,105.143 -0.0247,0.039 c -1.8229,2.871 -3.3993,5.355 -4.0676,6.517 l 9.3752,5.561 c 5.4563,2.534 12.2883,5.102 15.1813,5.707 2.893,0.605 7.085,3.179 9.315,5.72 12.633,14.397 14.742,15.931 20.252,14.72 3.528,-0.775 6.963,-0.141 9.99,1.842 3.913,2.565 4.298,3.611 2.537,6.902 -1.615,3.017 -1.474,4.483 0.631,6.588 2.369,2.369 2.979,1.33 4.872,-8.293 1.823,-9.262 1.701,-12.113 -0.771,-18.029 -2.6,-6.225 -2.619,-7.376 -0.165,-10.088 2.1,-2.32 2.288,-3.925 0.779,-6.622 -1.582,-2.827 -1.267,-4.089 1.529,-6.136 1.937,-1.417 5.198,-2.17 7.247,-1.672 2.049,0.498 5.218,-0.204 7.041,-1.56 2.925,-2.175 2.97,-2.596 0.385,-3.588 -2.277,-0.874 -2.497,-1.933 -0.986,-4.756 1.348,-2.5189 1.349,-5.1953 0.003,-8.7347 -1.066,-2.8065 -1.419,-7.4721 -0.783,-10.368 0.804,-3.6602 0.401,-5.3517 -1.32,-5.5491 -1.362,-0.156 -3.373,-0.3794 -4.469,-0.4968 -2.131,-0.2277 -15.565,-5.5704 -23.022,-9.155 -2.696,-1.2962 -6.011,-5.807 -8.213,-11.177 l -3.692,-9.0038 4.019,-8.2737 c 2.486,-5.1154 5.976,-9.0795 9.145,-10.3846 4.27,-1.7586 4.55,-2.2463 1.682,-2.9213 -2.012,-0.473 -5.543,1.1997 -8.486,4.0191 -2.772,2.656 -6.758,4.8293 -8.858,4.8293 -4.126,0 -13.677,7.8279 -13.677,11.2101 0,1.1402 -4.529,6.4599 -10.064,11.8218 -7.0405,6.8185 -9.6321,10.5614 -8.6226,12.4534 3.0286,5.6781 3.8596,16.9318 1.8096,24.5423 -0.3886,1.4431 -4.9473,8.6251 -8.559,14.315 z" />
            <path
                    id="path116_fill"
                    d="m 87.6633,114.188 c 1.2456,2.016 17.5127,9.199 23.8987,10.553 l 4.462,1.425 -2.151,7.552 c -1.846,6.477 -4.481,8.918 -11.861,13.066 -6.8239,3.837 -9.7085,6.806 -11.3029,11.639 -2.4296,7.362 -2.6088,7.42 -10.236,3.373 -3.0732,-1.631 -5.8896,-3.226 -6.2574,-3.544 -0.3678,-0.318 1.1944,-3.195 3.4714,-6.394 l 4.1416,-5.815 -3.8762,-1.013 c -9.1287,-2.387 -8.6092,-11.262 7.686,-31.826 z" />
            <path
                    id="path117_fill"
                    d="m 1.18402,118.553 c 2.54714,-4.758 3.67425,-5.048 3.04765,-0.782 -0.255,1.737 -1.51956,3.511 -2.80971,3.941 -1.826695,0.609 -1.87978,-0.091 -0.23794,-3.159 z" />
            <path
                    id="path118_fill"
                    d="m 60.4184,49.2318 c -0.6702,2.5626 1.0531,4.434 6.7835,7.3673 8.7211,4.4644 11.3886,4.2836 11.4,-0.7726 0.0114,-4.9175 8.6396,-7.7515 14.9064,-4.8964 4.0696,1.8543 4.4971,2.7577 2.8041,5.9222 -2.4723,4.6177 0.364,4.9616 4.7506,0.5756 2.969,-2.9691 2.838,-3.4149 -2.1959,-7.4425 -6.2366,-4.9902 -11.2995,-5.3711 -20.47,-1.5395 -5.7967,2.4219 -7.2594,2.429 -11.8465,0.0569 -4.7937,-2.4788 -5.3094,-2.4172 -6.1322,0.729 z" />
            <path
                    id="path119_fill"
                    d="m 50.6858,47.5668 c -2.9339,-3.062 -6.7854,-6.0281 -8.56,-6.5912 -3.7368,-1.1862 -6.2327,-6.4158 -4.0856,-8.5625 0.8076,-0.808 4.8848,-0.6018 9.0605,0.4581 9.0311,2.2925 14.2959,9.4665 11.7934,16.0714 -0.874,2.3056 -1.8779,4.1916 -2.2315,4.1916 -0.3536,0 -3.0429,-2.5053 -5.9768,-5.5674 z" />
            <path
                    id="path120_fill"
                    d="m 159.487,24.311 c -1.223,-3.2107 3.047,-5.3486 3.672,-1.8498 0.357,2.0053 0.618,3.0395 0.711,3.4076 l 0.012,0.0486 c 0.018,0.0746 0.027,0.1102 0.024,0.1111 -0.003,10e-4 -0.018,-0.0355 -0.047,-0.1043 -0.076,-0.1841 -0.247,-0.5993 -0.536,-1.1494 -0.548,-1.0428 -1.464,-0.6665 -2.277,-0.3325 -0.689,0.2832 -1.305,0.5358 -1.559,-0.1313 z" />
            <path
                    id="path121_fill"
                    d="m 184.124,114.453 c -3.682,-3.432 -4.791,-5.993 -4.188,-9.674 0.131,-0.797 -1.011,-1.929 -2.539,-2.515 -2.066,-0.793 -2.308,-1.942 -0.948,-4.4835 1.21,-2.2619 1.173,-5.1434 -0.112,-8.5206 -1.066,-2.8066 -1.432,-7.4139 -0.811,-10.2387 0.869,-3.96 0.264,-5.5974 -2.642,-7.1531 -2.074,-1.1099 -4.45,-1.7967 -5.281,-1.5268 -0.831,0.27 -5.266,-1.0679 -9.856,-2.9729 -4.59,-1.905 -10.085,-4.1257 -12.212,-4.935 -2.268,-0.8632 -5.26,-5.1183 -7.235,-10.2929 -3.314,-8.6757 -3.304,-8.9558 0.582,-16.9543 5.021,-10.3363 7.648,-10.446 5.782,-0.2417 -0.878,4.8028 -0.68,9.3162 0.506,11.5317 1.894,3.5393 2.045,3.5189 5.493,-0.7378 2.454,-3.0308 2.949,-4.9744 1.608,-6.3156 -3.201,-3.1997 -2.237,-5.8591 3.717,-10.2609 6.182,-4.5703 10.963,-4.1013 16.298,1.5986 3.911,4.1792 24.793,9.8283 30.778,8.3262 2.84,-0.7129 8.667,0.9656 16.743,4.8237 12.068,5.7648 19.075,11.0869 14.596,11.0869 -1.146,0 -3.902,3.8723 -6.127,8.6052 -3.253,6.9211 -3.619,9.2859 -1.872,12.0837 3.369,5.3948 2.811,6.3153 -7.096,11.7071 -7.677,4.1785 -9.949,4.6793 -13.24,2.9179 -6.357,-3.4024 -8.482,0.3723 -5.081,9.0288 3.274,8.334 2.024,11.125 -7.082,15.83 -5.468,2.826 -6.02,2.785 -9.781,-0.717 z" />
            <path
                    id="path122_fill"
                    d="m 160.814,17.6501 c 0.159,0.1066 0.318,0.2135 0.438,0.3621 0.13,0.1631 0.204,0.3565 0.278,0.5494 0.026,0.0666 0.051,0.1332 0.079,0.1984 0.038,-0.0316 0.091,-0.0576 0.144,-0.0835 0.107,-0.0521 0.214,-0.1042 0.194,-0.2005 l -0.136,-0.2384 c -0.327,-0.574 -0.69,-1.2106 -1.234,-1.686 -0.001,0.0021 -0.623,0.0225 -0.27,0.6363 0.123,0.2034 0.315,0.3326 0.507,0.4622 z" />
            <path
                    id="path123_fill"
                    d="m 174.8,21.0399 c 0.196,0.1323 0.392,0.2652 0.533,0.4408 0.163,0.2022 0.269,0.483 0.359,0.7198 0.13,0.3467 0.226,0.5984 0.41,0.3688 0.311,-0.3863 -0.137,-1.145 -0.847,-2.0297 -0.783,-0.9755 -1.172,-1.3374 -1.172,-0.4854 0,0.5006 0.357,0.7421 0.717,0.9857 z" />
            <path
                    id="path124_fill"
                    d="m 168.988,21.3364 c 0.363,0.2116 0.707,0.4128 0.888,0.6385 0.491,0.6112 1.203,0.7238 1.583,0.25 -0.249,-0.6773 -0.366,-1.0945 -0.443,-1.3653 L 171.01,20.833 c -0.068,-0.2413 -0.101,-0.3609 -0.174,-0.4493 -0.071,-0.0868 -0.179,-0.1432 -0.391,-0.2541 -0.106,-0.055 -0.235,-0.1233 -0.4,-0.2152 -1.564,-0.8743 -2.348,-0.9727 -2.348,0.0718 0,0.5972 0.672,0.989 1.291,1.3502 z" />
            <path
                    id="path125_fill"
                    d="m 219.261,40.8372 c 0.38,-0.5678 1.056,-0.8482 1.725,-1.1262 0.792,-0.3282 1.575,-0.6529 1.851,-1.4445 0.313,-0.8987 0.112,-2.9722 -1.228,-2.8983 0.949,-0.9598 2.561,-1.1523 3.835,-1.2696 1.636,-0.15 1.367,0.4418 0.987,1.2796 -0.222,0.4901 -0.482,1.0643 -0.422,1.6237 0.034,0.3173 0.104,0.6287 0.172,0.9285 0.233,1.0312 0.435,1.9242 -0.977,2.4423 -0.947,0.3465 -1.939,0.2816 -2.93,0.2164 -1.021,-0.0671 -2.042,-0.1342 -3.013,0.2481 z" />
            <path
                    id="path126_fill"
                    d="m 228.14,31.4617 c 0.149,-0.8908 0.95,-1.4393 1.775,-1.6326 0.041,0.696 -0.6,1.0127 -1.182,1.3008 -0.219,0.1084 -0.43,0.2129 -0.593,0.3318 z" />
            <path
                    id="path127_fill"
                    d="m 221.886,24.0747 c -0.758,-0.7221 -0.123,-1.6455 0.641,-1.9899 0.286,0.7487 0.055,1.5657 -0.641,1.9899 z" />
            <path
                    id="path128_fill"
                    d="M 1.35535e-5,0.62915 C 0.319636,0.152685 0.844427,-0.130448 1.42052,0.0599445 1.02889,0.455539 0.555408,0.644929 1.35535e-5,0.62915 Z" />
            <path
                    id="path129_fill"
                    d="M 9.37864,4.83733 C 6.98342,4.66166 3.90266,5.50914 1.61203,4.82056 1.09214,4.66482 -0.0285424,5.06026 0.313752,3.84492 0.510067,3.51246 0.644223,3.15536 0.717231,2.77655 0.669726,2.18071 -0.0798528,1.94395 0.00697832,1.28497 0.306854,-0.988913 7.65032,0.360628 8.82917,0.785806 9.78114,1.12911 12.0304,0.40308 12.0126,2.06629 12.0033,3.02615 10.2004,4.53649 9.37864,4.83637" />
            <path
                    id="path130_fill"
                    d="M 0.782848,2.77008 C -0.588379,2.22256 0.125849,0.816813 0.782848,8.15035e-6 1.79401,0.535677 1.44775,2.10911 0.782848,2.77008 Z" />
            <path
                    id="path131_fill"
                    d="M -2.45783e-5,11.0447 C 1.95642,10.1242 5.50013,9.8435 4.60164,6.85583 6.51811,3.62585 10.5024,2.68059 13.8394,1.69225 17.49,1.44433 21.0329,-0.844416 24.7311,0.336146 c 3.1089,0.023473 6.411,-0.104872 9.3022,1.130964 3.3081,0.33147 5.5127,2.56522 7.8813,4.52602 2.9595,1.40027 6.7337,1.2115 8.9982,3.91527 0.9474,0.6999 4.8296,4.355 3.8976,1.6773 2.1348,0.2404 1.7731,2.094 0.9715,2.2857 2.8268,0.5292 4.0726,3.1047 7.126,2.9199 1.5044,1.5053 5.8576,0.2707 3.8468,3.3946 0.1013,1.93 3.9478,-0.3262 5.215,1.3016 1.5834,1.0226 4.9916,2.7374 4.8243,4.1797 -3.1752,1.8904 -7.1327,1.8003 -10.6899,2.2115 -3.6098,-0.9578 -7.2404,-0.7357 -10.7935,0.2605 -1.4246,0.9896 -6.2755,0.2236 -3.2561,-1.6231 2.127,-0.6917 5.4067,-4.6193 1.5378,-5.1098 -2.7416,0.0404 -6.5877,-0.6893 -7.0729,-3.9395 0.7758,-3.1256 -2.9021,-5.1037 -5.4737,-3.7383 C 37.764,13.4984 34.7476,10.6528 32.3189,9.71275 29.9619,10.1321 28,8.31729 25.7226,8.59398 24.0662,8.7473 19.6807,7.02421 23.3333,6.23827 26.3715,4.39717 20.6389,3.56984 19.152,3.9747 16.699,4.22902 14.276,5.40296 12.8018,7.42086 8.9468,7.50469 6.22586,11.5537 2.59777,11.1831 1.74971,11.0983 0.841931,10.7639 2.59682e-4,11.0447" />
            <path
                    id="path132_fill"
                    d="M 0.512883,2.20089 C -0.494328,1.59122 0.203164,0.637311 0.729944,1.88659e-5 1.2508,0.725111 1.00811,1.55176 0.512883,2.20089 Z" />
            <path
                    id="path133_fill"
                    d="M 0.49873,15.9262 C 1.39346,14.5238 0.657265,12.8929 2.41417e-5,11.6032 0.446233,10.6465 1.71862,10.9179 1.75903,8.81092 -0.227861,7.73291 3.48221,6.71315 2.55416,6.2686 2.60092,5.32671 2.55975,4.45276 2.63688,3.49244 2.99695,2.5298 2.20203,1.49602 2.57861,0.580576 3.45169,-0.429155 4.80266,0.352865 5.89547,0.391372 c 1.2743,-0.08849 2.68126,-0.841374 3.86656,0.011199 1.26927,0.51419 2.62417,0.850689 3.79127,1.590559 1.3747,-0.08924 2.8759,0.69756 2.5395,2.22446 0.5546,1.26188 2.2336,1.19533 3.3068,0.71276 0.9637,-0.85759 2.3217,1.02553 0.686,1.04904 -0.6476,0.04694 -2.6955,-0.34921 -2.1939,0.71588 1.4451,0.64609 3.0309,1.22243 4.6345,0.89895 1.6081,0.01863 2.2473,1.73062 3.3805,2.57168 0.9789,0.9264 0.0657,2.2997 -0.8542,2.8626 -0.6111,0.7781 -2.041,1.5551 -2.5658,0.2096 -1.3586,-1.0889 -3.173,-0.3399 -4.7333,-0.7069 -1.1368,-0.2172 -2.5684,-0.6163 -3.4684,0.3752 -0.9414,1.2292 -2.5721,1.8198 -4.0898,1.6182 C 9.35307,14.2175 9.48576,11.91 8.30764,13.1166 7.48779,14.1149 5.42023,13.6354 5.40535,15.3599 4.86327,16.8587 3.85374,18.1389 2.90562,19.3906 1.6552,19.3738 1.41559,17.4877 0.989818,16.4984 0.869101,16.2824 0.721312,16.0476 0.498674,15.927 Z" />
            <path
                    id="path134_fill"
                    d="M 0.790654,2.13082 C -0.155397,1.72634 0.0113257,0.837516 0.0113257,-4.78469e-6 0.802493,0.293948 2.25065,1.61389 0.790654,2.13082 Z" />
            <path
                    id="path135_fill"
                    d="M 2.21085,4.04041 C 1.63573,3.15946 0.92838,3.90904 0.648214,3.0746 0.376935,2.26666 0.010943,1.39164 1.0074e-4,0.526476 -0.0129398,-0.60701 1.16517,0.384325 1.47393,0.773101 2.0757,1.52973 2.91619,3.10225 2.21085,4.04041 Z" />
            <path
                    id="path136_fill"
                    d="M 0.375006,0.921692 C -0.22365,0.304285 -0.105535,-0.0019375 0.729434,3.36246e-5 0.848622,0.40376 0.730451,0.71095 0.375006,0.921692 Z" />
            <path
                    id="path137_fill"
                    d="M 9.96958e-6,1.84674 C 0.621501,1.28147 -0.014911,0.17756 0.996342,3.56578e-6 1.13047,0.90364 1.8822,1.55271 2.62305,1.98972 1.92561,2.23043 0.376843,2.94173 9.96958e-6,1.84668" />
            <path
                    id="path138_fill"
                    d="M 1.91438,0.352885 C 1.57305,0.928998 1.04428,4.54945 0.151509,2.08717 -0.350625,0.70114 0.435622,-0.663199 1.91438,0.352885 Z" />
            <path
                    id="path139_fill"
                    d="M 1.04348e-5,0.449725 C 0.586546,-0.213613 0.895083,-0.143627 0.926636,0.662623 0.579644,0.751222 0.271107,0.681237 1.04348e-5,0.449725 Z" />
            <path
                    id="path140_fill"
                    d="M -7.8125e-7,0.986593 V 1.30023e-5 c 0,0.9866019977 0,0.9865799977 0,0.9865799977 z" />
            <path
                    id="path141_fill"
                    d="m 0.987897,-1.12879e-5 c 0,0.9876732879 -1.9e-5,0.9876732879 -0.9879235416,0 0.9879045416,0 0.9879235416,0 0.9879235416,0 z" />
            <path
                    id="path142_fill"
                    d="M 1.22164e-5,1.30147e-5 H 0.987709 V 0.987534 Z" />
            <path
                    id="path143_fill"
                    d="m 5.93075,11.8619 c 7.90775,0 7.90775,-11.86190948752 0,-11.86190948752 -7.9077,0 -7.9077,11.86190948752 0,11.86190948752 z" />
            <path
                    id="path144_fill"
                    d="M -2.79803e-5,0.9884 0.988402,-6.82228e-6 c 0,0 0.988548,1.97682682228 -0.9884299803,0.98840682228 z" />
            <path
                    id="path145_fill"
                    d="m 0.98851,1.97725 c 0,0 -0.9885435836,-0.988489 -0.9885435836,-1.97724332326 C 0.988436,0.988761 1.97711,0.988753 0.98851,1.97725 Z" />
            <path
                    id="path146_fill"
                    d="m 5.93082,11.8619 c 7.90798,0 7.90798,-11.8619127349 0,-11.8619127349 -7.90782,0 -7.90782,11.8619127349 0,11.8619127349 z" />
            <path
                    id="path147_fill"
                    d="M -4.13701e-5,-2.72891e-7 C 0.988391,-2.72891e-7 1.97704,5.99615e-6 2.96548,0.988406 c -0.98844,0 -1.977092,0.988404 -1.977092,0.988404 0,-0.988398 3e-6,-0.98841 -0.9884293701,-1.976810272891 z" />
            <path
                    id="path148_fill"
                    d="m 5.93099,11.8618 c 7.90781,0 7.90781,-11.86179370986 0,-11.86179370986 -7.90794,0 -7.90794,11.86179370986 0,11.86179370986 z" />
            <path
                    id="path149_fill"
                    d="M -3.89323e-6,2.96518 C -3.89323e-6,1.97678 -4.37494e-5,0.988394 0.988426,-6.09002e-6 1.97701,-6.09002e-6 1.97708,0.988397 1.97708,1.97678 c 0.98849,0 1.97688,0.9884 2.96529,0.9884 0,0.98854 -0.98843,1.97736 -0.98843,2.96578 -0.98839,0 -2.965474,1e-5 -3.95394389323,-0.98841 0.98846989323,0 0,-0.98883 0,-1.97737 z" />
            <path
                    id="path150_fill"
                    d="M 0.988525,5.93093 C -3.78644e-5,5.93093 -1.85929e-5,4.94252 -1.85929e-5,4.94252 0.988544,5.93092 2.96557,3.95374 3.95416,3.95374 c 1.97682,0 -9e-5,-0.98852 1.97674,-0.98852 1.97694,0 2.96544,0 4.9425,-0.98846 1.9768,0 3.9539,-1.97675528808 5.9309,-1.97675528808 C 14.8273,0.988386 13.8388,2.96522 12.8503,2.96522 c -1.9769,0.98853 0,1.97731 0,2.96571 H 10.8734 C 9.88494,6.91935 9.8849,6.91933 8.89631,7.90771 7.90782,7.90771 5.9309,7.90774 5.9309,8.89612 3.95407,7.90774 1.97699,8.89611 0.988525,5.93093 Z" />
            <path
                    id="path151_fill"
                    d="M -5.74888e-6,1.28941 C 0.887698,-0.013155 2.63466,0.291823 3.98646,0.315985 5.28893,0.0244354 6.98489,-0.425577 7.94245,0.895339 8.74724,2.35031 10.6807,2.14123 11.8446,3.1175 c 0.8149,-1.31207 2.0788,0.08886 2.857,0.70158 1.2782,0.27084 2.3389,1.12908 2.5272,2.5002 0.1798,1.05375 0.7172,1.97116 1.4696,2.72215 0.4966,0.57585 1.6953,0.40252 1.3266,1.55607 0.087,0.5565 -0.8296,1.5984 -0.9152,1.406 1.5892,-0.7372 2.8855,1.0781 3.7339,2.1709 0.1161,1.0471 0.6138,2.1825 0.6131,3.0806 -1.0632,1.3446 -2.2108,-0.7001 -3.419,-0.5439 -1.2345,0.1544 -3.14,-1.0173 -3.2404,0.9812 0.1535,1.436 -0.8381,2.3619 -1.5449,3.4432 -0.6071,1.0848 -0.8608,2.5185 -1.979,3.2105 -0.8431,0.5665 -2.1993,0.62 -1.7651,-0.7584 0.8158,-1.6512 -0.8882,-2.8494 -0.6476,-4.4592 -0.0093,-1.4107 1.1919,-2.5936 0.8014,-4.0167 C 11.0079,13.3188 9.61113,11.9163 8.31336,10.5603 6.94934,9.17999 5.47541,7.89876 4.19977,6.43924 2.95926,4.8729 2.73076,2.50758 0.830944,1.50869 0.570898,1.38462 0.287761,1.30806 -5.74888e-6,1.28941 Z" />
            <path
                    id="path152_fill"
                    d="M 0.650484,7.12532 C 0.97998,6.79586 1.30942,6.46641 1.63891,6.13695 0.882285,5.94041 -0.718374,5.13811 0.365086,4.3787 0.68823,3.46569 1.50502,2.35179 2.53286,3.10225 3.52999,3.41355 4.57811,3.53344 5.59741,3.76569 6.25487,3.89722 6.91226,4.02865 7.56972,4.16013 8.62593,2.93903 10.1863,2.02314 11.8453,2.1732 c 1.1086,-0.09501 2.4444,0.37014 3.3374,-0.52153 0.5797,-0.64453 2.0936,0.29159 2.0396,0.25484 -0.7638,-0.930877 0.5564,-2.725915 1.4293,-1.482088 0.9371,0.896968 1.8302,1.838468 2.7568,2.746168 -0.8218,0.14885 -2.1321,-0.81937 -2.5943,0.21126 0.3403,0.27997 0.737,1.10351 -0.0648,0.77098 -1.0796,-0.11364 -1.4051,1.44372 -2.5803,1.16138 -0.8129,0.07694 -2.1944,0.75841 -1.0876,1.56486 0.9096,1.06454 -0.0075,2.25797 -1.1925,2.41148 -0.5081,0.09463 -1.9424,1.00215 -0.6392,0.79025 0.3509,0.0261 -0.4586,0.6899 -0.3089,1.0825 0.0167,0.9868 -1.0574,1.4519 -1.6915,0.6656 -0.927,-0.66 -2.1196,-0.7559 -3.084,-1.3091 C 7.78929,10.0629 7.35344,10.1737 7.27136,10.7461 6.58929,11.4741 5.32305,12.4292 4.34143,11.7784 4.09178,11.472 3.44822,11.2554 3.61225,11.9045 3.00719,12.2667 2.25426,11.996 1.57399,12.067 1.33881,12.0042 0.533183,12.2108 0.765211,11.9272 1.51498,11.3901 3.64832,10.9302 2.42734,9.6909 1.79987,9.32375 1.3956,8.48632 1.28859,8.05389 0.883442,7.95125 0.65706,7.51834 0.650484,7.12518 Z" />
            <path
                    id="path153_fill"
                    d="m 1.89258e-5,0.986579 c 0,-0.98658332267 0,-0.986579735466 0,-0.986579735466 0,0 0,-3.587204e-6 0,0.986579735466 z" />
            <path
                    id="path154_fill"
                    d="M 0.987682,1.03516e-6 H -1.46524e-5 c 0.9876986524,0 0.9876966524,0 0.9876966524,0 z" />
            <path
                    id="path155_fill"
                    d="m 6.537e-6,-4.2041e-6 c 0.986585463,0 0.986585463,0 0,0 z" />
            <path
                    id="path156_fill"
                    d="M 0.987775,0.987679 C 0.987775,5.54717e-6 0.987719,-1.23876e-5 -3.57039e-5,-1.23876e-5 0.987719,-1.23876e-5 0.987775,5.54717e-6 0.987775,0.987679 Z" />
            <path
                    id="path157_fill"
                    d="M 0.987794,0.987536 C 0.987794,-6.98944e-6 0.987813,-1.31874e-5 -1.6434e-5,-1.31874e-5 0.987813,-1.31874e-5 0.987794,-6.98944e-6 0.987794,0.987536 Z" />
            <path
                    id="path158_fill"
                    d="m 2.96538,17.2382 c 1.22059,1.1183 2.13222,-1.264 1.78402,-2.1664 2.52747,-0.8044 2.91628,-3.328 4.43071,-5.12388 0.2508,-1.4158 -0.95138,-3.1286 1.25589,-2.59463 1.4637,0 2.9275,0 4.3912,0 0.0608,-1.78209 1.968,-2.14209 3.3884,-1.97681 0.8475,0 1.695,0 2.5424,0 -0.5575,-2.31616 1.6611,-1.88936 2.9212,-1.69343 0.34,-0.6142 1.6203,-0.1295 2.3538,-0.2839 1.4097,0.09073 2.9229,-0.01488 3.8685,-1.25092 0.5673,-1.0344 1.7015,-0.66666 2.666,-0.72586 1.7502,-0.552269 1.647,3.25623 3.7591,1.57526 1.5286,0.26253 2.463,2.31895 4.0775,0.71438 C 41.835,2.95702 45.3803,4.96706 44.7287,1.91656 44.1594,1.23224 42.6537,-0.332776 44.6052,0.0632847 46.7953,-0.47706 48.8495,3.43291 46.235,3.77057 45.2961,5.00583 45.1336,8.31695 43.6114,8.16773 42.0793,6.64193 39.1831,8.10326 37.3924,6.7973 36.0024,6.00934 34.9888,8.80815 33.7318,6.93815 31.8358,5.09291 31.6674,10.1006 29.3068,8.34187 27.3624,7.8353 28.3532,9.42725 29.083,9.88603 c -1.3007,2.09727 2.3998,0.65757 2.8592,2.51187 1.6963,2.0292 -1.7108,0.5686 -2.2619,-0.4564 -1.3802,-1.5726 -2.3163,0.3094 -0.8906,1.3009 0.6733,0.8765 2.8813,2.7314 0.5404,1.6942 -1.3238,-0.3573 -2.7382,-4.1758 -3.6296,-1.6525 0.8831,0.3504 3.1602,2.5096 0.9169,2.0463 -0.6829,-1.7563 -1.6706,-3.0423 -3.7149,-3.3257 -2.4083,-0.1989 0.8062,-2.23834 -0.521,-2.57348 -2.4103,0.56948 -2.3037,3.51568 -1.3531,5.28878 0.8151,2.446 3.5595,3.7153 4.1877,6.2838 0.3885,1.2688 -2.6267,1.4785 -0.5349,0.8676 0.5051,-1.9791 -3.5115,-2.2253 -2.1933,0.1854 0.7356,0.9529 1.9365,1.6268 0.1235,2.3478 -0.9713,0.5322 -2.6297,-0.6661 -0.9576,0.3398 1.3266,0.3097 2.724,1.1516 3.5523,1.7607 1.1135,-1.0419 -0.4735,1.3104 1.1458,0.6175 1.3057,1.002 3.0412,1.9429 4.6172,2.3478 1.0869,1.6416 0.5213,3.7049 0.6622,5.5601 -1.2184,-1.4998 -2.9009,-3.8105 -5.1181,-2.6524 -0.9243,0.5971 -4.0452,0.6333 -1.8437,1.3783 0.0877,1.3342 2.2284,2.2065 2.0617,1.6024 1.1013,0.9958 1.0737,1.9958 -0.4309,2.3376 -1.6252,1.2415 -0.635,-2.1581 -2.2298,-1.6773 -2.0222,-0.5697 -1.0971,1.4715 -0.4185,2.5293 1.3273,1.3738 1.6585,3.3449 1.2144,4.9772 1.1068,0.7609 0.9471,2.4368 -0.278,0.7721 -1.1888,-1.415 -3.4529,-3.1339 -3.7327,-0.101 -0.5796,1.8622 -1.3878,-2.234 -2.0766,-2.6155 0.3643,-2.3771 -2.5911,-1.597 -1.9594,0.4769 -0.0246,1.9813 -2.8141,-1.2994 -2.3787,-2.5946 1.6439,-2.8367 -1.2053,-4.825 -3.3495,-6.2131 0.0974,-2.2442 3.1539,-2.439 4.6527,-3.8379 2.1688,-0.9906 3.2794,2.2325 5.508,2.1586 1.357,0.7161 2.7267,1.3796 3.4598,-0.4942 1.8361,-0.6058 -0.5472,-1.2645 -1.4113,-0.9886 -1.1461,0.2143 -1.6023,-2.1864 -2.5582,-1.1431 -0.6797,-1.9663 -1.4747,1.0183 -3,-0.0714 -1.6733,-0.0111 -4.2441,1.3523 -5.6841,-0.4256 -0.0721,-0.7147 -1.274,1.8594 -1.355,-0.0898 -0.3262,-1.3834 -4.85309,-4.077 -1.90875,-4.47 1.14171,0.6327 3.35815,-0.1429 1.43795,-1.1649 C 8.85611,21.4774 7.80221,24.1537 7.72231,23.809 6.66403,22.2812 5.26971,20.9611 4.24501,19.5157 3.83669,18.8019 3.87645,17.5106 2.96538,17.2381 Z M 42.5047,13.9264 c -0.9885,-0.9884 0.9885,-1.9768 0.9885,-0.9884 0.9883,0 -0.9885,0.9884 -0.9885,0.9884 z m 9.8846,28.6659 c -0.9884,-0.9885 1.977,-1.977 2.9656,-1.977 -0.9886,0.9885 -2.9656,0.9885 -2.9656,1.977 z M 6.91933,28.7535 c 0,-0.9884 0,-0.9884 0,-0.9884 v 0.9884 c 0.98845,0.9886 1.97697,0.9886 1.97697,1.9773 -0.98856,0 -2.9654,0 -2.9654,-0.9887 0,0 0,0 0,0.9887 -0.98838,-1.9773 -1e-5,-1.9773 0.98843,-1.9773 z M 27.6774,27.7651 c 0.9885,-1.9768 -2.9654,-3.9537 -3.9539,-2.9652 0,-0.9885 0.9885,-1.9773 1.9769,-1.9773 0.9884,0 0.9884,0.9888 1.977,1.9773 0.9885,0.9884 1.9771,0 3.9539,0.9884 0.9885,0.9884 0,1.9768 0.9885,3.9538 0.9884,0 1.9769,0 1.9769,0.9887 0.9885,1.9768 -0.9885,0 -0.9885,0 -0.9884,-0.9887 -1.9769,-1.9773 -1.9769,-2.9657 -0.9883,0 -2.9654,0.9884 -3.9539,0 z m 5.9308,27.6775 c -1.3179,0 -2.6358,0 -3.9537,0 -0.8491,-0.6443 -1.0265,-2.146 -0.1141,-2.8138 0.4403,-0.0842 1.0751,-0.7 1.0968,-0.8337 0.0755,0.9218 1.2579,1.1358 1.9711,0.8248 0.2783,-0.0426 1.1451,-0.312 0.6392,0.2264 0.1883,0.7987 1.059,1.2616 1.8096,1.3834 0.8631,-0.0186 1.4946,-1.0279 2.3995,-0.7119 1.651,0.2386 3.2321,0.8703 4.9085,0.9473 0.6271,-0.1239 1.3982,-0.4121 1.9489,0.051 0.2876,0.4335 -0.054,1.6032 0.8622,1.2069 0.4929,-0.5152 1.2971,-0.1973 1.9338,-0.2803 0.4418,0 0.8836,0 1.3254,0 0.147,0.7788 -0.0464,2.0212 -1.0795,1.9381 -1.5209,0.0963 -3.0471,0.0112 -4.5702,0.0352 -0.8889,-0.0018 -1.778,0.0015 -2.6664,0.0337 -0.7494,0.5442 -1.775,0.3419 -2.2995,-0.4 -0.3842,-0.7296 -1.0225,-1.1478 -1.8167,-1.2638 -0.7705,-0.249 -1.5834,-0.3948 -2.3949,-0.3432 z m 3.954,-40.5278 c 0.9885,0 1.9769,0 2.9655,0 -0.9886,0 -0.9886,0.9884 -0.9886,0.9884 -0.9884,-0.9884 -2.9653,0.9887 -1.9769,-0.9884 z m 0,19.7696 c 0,-0.9884 -0.9883,-1.9768 -1.9769,-2.9652 0.9886,0 0.9885,0 0.9885,0 0,0.9884 1.9769,0.9884 0.9884,2.9652 z M 41.5161,9.97236 c 0,0.98874 0,0.98874 0,0.98874 -0.9885,0 -0.9884,0 -0.9884,-0.98874 z m 0,30.64294 v -0.9884 c 0,-0.9883 0.9886,-0.9883 0.9886,-0.9883 0.9885,0 -10e-5,1.9767 -0.9886,1.9767 z m 2.9655,1.977 c 0,-0.9885 0.9884,-1.977 1.9769,-1.977 -0.9885,0.9885 -0.9884,0.9885 -1.9769,1.977 z M 45.47,30.7308 c -1.9768,-0.9887 0,-2.9657 -1.9768,-3.9541 1.9768,-1.9768 3.9538,1.9768 1.9768,3.9541 z m 0,4.9422 c 0,-0.9886 1.977,-0.9886 1.977,-0.9886 0,0.9885 -0.9885,0.9886 -1.977,0.9886 z m 1.977,-11.8616 c -0.9885,-0.9888 -0.9885,-0.9888 -1.977,-0.9888 0,-0.9885 0,-0.9885 0.9885,-0.9885 -0.9885,0 -1.9769,0 -1.9769,0 -1.9769,-0.9884 0,-0.9884 0,-0.9884 2.9654,-0.9884 2.9653,0 4.9424,1.9769 -0.9886,0 -1.977,0 -1.977,0.9888 z m 11.8616,24.7118 c 0,1.9773 -0.9884,0 -0.9884,-0.9885 0,-0.9884 1.977,-1.9768 2.9655,-2.9652 0.9886,0.9884 0,1.9768 0,2.9652 -0.9885,0.9885 -0.9886,0 -1.9771,0.9885 z M 2.96538,18.8689 v 0.9884 C 1.97691,19.8573 -2.3796e-5,17.8805 -2.3796e-5,15.9032 2.9654,15.9032 0.988347,18.8689 2.96538,18.8689 Z m 4.94238,5.931 c 0,0 2e-5,1.9768 -0.98843,1.9768 0,-0.9884 -2e-5,-2.9653 0.98843,-1.9768 z M 8.8963,34.6844 C 7.90774,33.696 7.90776,33.696 7.90776,32.7076 c 0.98856,0 1.97699,0.9884 0.98854,1.9768 z M 34.5967,9.97236 c -0.9885,-0.98853 -0.9885,-1.97692 0,-1.97692 0.9885,0 0.9885,1.97692 0,1.97692 z M 51.4009,34.6844 c 0,0 -2.9654,-0.9884 -0.9884,-0.9884 0,-0.9884 0.9884,0 1.9768,0 z" />
            <path
                    id="path159_fill"
                    d="M 0.0395227,2.25951 C 1.87719,2.90303 2.53263,-0.183248 4.53675,0.380998 6.67395,0.119595 8.83097,0.386394 10.9751,0.278437 c 1.627,0.375423 3.2268,-0.161741 4.8593,0.023323 1.8647,-0.206659 3.7105,1.71703 5.4172,0.436427 1.4478,-1.621258 2.9971,-0.237278 4.1078,0.955363 1.5357,1.01829 3.6825,0.29473 5.1293,1.66992 1.1268,1.52782 3.3616,1.79515 4.2375,3.48743 -0.7001,1.41978 1.7131,1.6558 1.465,2.71403 -1.6522,0.40938 -2.8101,1.65287 -4.154,2.63787 -1.9669,0.4997 -0.9298,2.995 -2.0345,4.2292 -0.3176,0.7953 1.3119,0.846 0.1276,1.509 -0.9579,-0.1697 -1.8805,-1.5185 -2.8414,-0.2879 -0.9889,0.9784 -2.4439,1.0957 -3.3367,2.2379 -1.5504,0.8138 -3.2686,0.3944 -4.9068,0.1129 -1.1097,0.2237 -2.404,0.1591 -2.6826,-1.0738 -1.3195,-0.8115 -2.2402,-2.3106 -3.7567,-2.7429 -1.412,0.2748 -2.2817,-1.0125 -1.025,-1.9735 C 12.1626,12.5908 10.1873,10.9052 8.71617,10.7759 6.86483,11.6206 5.22069,10.7291 3.76834,9.58483 2.38273,9.11211 1.53704,8.43344 1.22512,6.95212 0.384152,5.47997 -0.154278,3.98323 0.0395227,2.25943 Z" />
            <path
                    id="path160_fill"
                    d="M 9.21276e-5,7.80891 C 0.561765,6.09769 2.44681,6.66549 3.77132,6.81769 4.76696,6.23125 5.86728,5.56888 6.9174,4.96683 8.21148,4.20154 8.06221,2.24806 9.78444,1.83933 10.9118,1.36232 13.2413,0.268761 13.8388,1.87787 c 1.3214,-0.0149 2.1955,-2.869089 3.4235,-1.512013 0.7468,0.594463 0.1761,1.892023 1.4286,1.512013 0.2415,0.35409 -0.2011,1.33538 0.7446,1.27026 1.594,0.72617 1.8764,-1.76684 3.4367,-1.46933 1.5324,-0.960805 2.2056,1.10102 3.751,0.32071 1.2111,-0.48954 2.6049,-1.671295 3.8929,-0.71157 1.6645,0.69287 3.5107,1.0366 4.9455,2.18063 1.9592,0.49869 1.3503,2.45537 0.3128,3.52749 -0.8022,1.04464 -0.6336,3.64474 -2.2982,3.39744 -1.4569,-0.3284 -2.6384,-1.52647 -4.1486,-1.59627 -0.8796,0 -1.7591,0 -2.6387,0 -1.3805,-1.0313 -3.2177,0.0954 -2.9626,1.79437 -0.8364,1.2005 -2.9489,1.3431 -4.316,1.0083 -1.4408,-0.7383 -3.0006,0.2776 -3.8033,1.4391 -0.8783,0.5229 -3.8419,-0.1414 -2.9222,1.5124 -0.1803,0.4033 -2.0832,0.6137 -2.89274,1.0107 C 8.68347,15.8803 7.64321,14.8034 6.48691,15.6318 5.09789,15.8446 4.65861,13.5736 3.21246,13.5698 2.38487,12.9739 0.928051,12.3505 0.988522,11.1909 0.902082,10.6771 1.17589,10.0209 0.825357,9.61135 0.293118,9.10167 0.68466,8.24675 -2.15765e-5,7.80879 Z" />
            <path
                    id="path161_fill"
                    d="M -3.89034e-6,4.15039e-7 H 0.987693 Z" />
            <path
                    id="path162_fill"
                    d="m 2.96532,13.8387 c 0,0.9884 0.9885,1.9768 1.97708,0.9884 0,-0.9884 -0.98861,-0.9884 -1.97708,-0.9884 z m 0.98854,0 c 0.98858,-0.9884 1.97703,0.9884 2.9654,0.9884 C 5.93089,13.8387 4.94244,12.8503 3.95386,13.8387 Z M 2.587e-5,17.7924 c 0,-1.9769 4.94239413,-0.9885 5.93092413,-0.9885 -0.98853,0.9885 -1.97716,1.9773 -2.96563,0.9885 -0.98855,0 -1.976918,0 -2.96529413,0 z M 3.95386,14.8271 c 0,0.9884 0.98856,1.9768 1.97709,1.9768 0,-0.9884 -0.98851,-0.9884 -1.97709,-0.9884 0.98858,-0.9884 2.96544,0 0.98854,-0.9884 1.9769,0.9884 2.96529,-0.9884 4.94227,-0.9884 0,0 -1.97699,0.9884 -2.96541,0 -0.98837,0 -2.96544,-0.9884 -1.97686,-1.9769 C 6.9193,9.88453 7.90771,7.90774 8.89612,5.93094 9.88469,4.94211 9.88474,3.95358 10.8732,3.95358 c 0.9886,0 2.9654,-0.9884 2.9654,-1.97678 C 15.8156,-1.1104e-6 18.7812,7.73192e-7 21.7464,7.73192e-7 22.735,7.73192e-7 25.7005,1.9768 25.7005,2.96518 24.712,3.95358 24.712,4.94211 24.712,5.93094 c 0,0.98842 -1.977,0 -2.9656,0.98842 0,0.98838 3.954,0.98838 1.977,3.95364 -0.9885,0 -0.9885,0 -0.9885,0 -0.9885,0.9888 -0.6737,0.3151 -0.6737,1.3036 l -3.2801,0.6737 c 0,0.9884 -1.9771,-0.9885 -1.9771,0.9884 0.7606,-0.0285 1.8062,1.0055 1.9771,1.9768 0.3164,1.7984 -0.3736,2.6803 -0.8674,3.8749 0,0 -0.5593,1.5805 -1.1097,2.056 -0.0725,-2.5783 -0.6692,-2.5316 -0.4755,-3.0841 -1.977,-0.9888 -4.4667,-0.8699 -5.4553,-2.8468 0,0.9884 -0.98851,0.9884 -1.97708,0 0,0.9884 -0.98844,0.9884 -1.97686,0 0.98842,1.9769 -1.97682,0.9884 -2.9654,0.9884 -0.98847,0 -1.97709,0 -2.965518,-0.9884 C 1.97677,14.8271 2.96539,14.8271 3.95386,14.8271 Z" />
            <path
                    id="path163_fill"
                    d="M 6.11273e-6,14.2165 C 0.649982,13.0324 3.9703,13.7516 2.59473,11.7455 2.65137,10.23 4.55257,7.90611 3.16428,7.16548 4.39852,7.028 6.46467,8.31883 6.37756,6.0352 6.86315,3.84621 8.84119,4.69642 9.71466,6.05197 c 1.84684,1.27375 4.22894,0.95352 6.26974,0.42549 1.2329,0.1913 1.9819,-0.52153 1.7795,-1.5907 1.6417,-1.14187 4.1323,-0.01304 5.4448,-1.86169 1.8762,0.62276 4.5039,1.39315 5.457,-1.08278 0.4008,-2.407385 2.7013,-2.0143413 4.4582,-1.724505 2.0888,-0.779044 3.0658,1.390435 4.8764,1.805685 1.5684,-0.99339 3.1414,-0.33035 4.3004,1.06536 0.6097,1.46229 3.3349,0.58123 2.4145,2.31861 -0.4804,2.23075 -3.2765,0.74271 -4.0609,2.74028 -1.1199,1.91018 -2.7433,3.49028 -3.5782,5.56738 -0.2466,1.6662 -1.3131,2.3858 -2.2813,3.5099 -0.1568,1.6494 -1.1897,1.9703 -2.6497,2.2195 -1.8156,1.4136 -4.5702,0.4301 -6.8134,0.6623 -1.7527,-1.096 -2.7841,1.8026 -4.6493,1.4842 -2.0921,0.4704 -4.1124,1.1603 -6.0721,1.9684 C 12.4144,23.2586 10.243,22.2259 8.25379,21.351 7.16379,19.6174 5.4658,18.632 3.77976,17.5854 2.47209,16.4537 2.31425,13.9324 6.11273e-6,14.2164 Z" />
            <path
                    id="path164_fill"
                    d="M 0.077871,7.55596 C -0.420257,6.69344 2.39946,6.60294 0.783519,6.58383 -0.791121,6.54482 0.552007,4.49582 0.2175,3.55226 0.732506,2.38165 2.69348,3.26565 3.08534,1.93581 4.44362,1.80913 5.53513,0.362543 6.96902,0.856878 8.15714,0.753596 9.61749,0.96969 10.8038,0.757315 c 0.9345,-0.93586 2.2208,-0.8026122 3.3826,-0.646042 1.5041,0.026175 2.9466,0.642172 4.4574,0.537866 1.3517,0.174464 2.5383,1.352951 3.9658,0.881101 1.9142,-0.2538 3.8878,-0.567802 5.7964,-0.10451 -0.9162,0.40587 -1.9653,1.00049 -1.759,2.1378 -0.8905,1.22518 -2.2809,2.36761 -1.868,4.08054 0.3989,1.10242 0.1372,2.33034 0.2645,3.36263 0.647,0.623 2.1047,0.5288 1.8775,1.7976 1.246,1.3671 -1.1193,1.4129 -1.6386,2.3937 -0.515,0.5802 -0.8303,1.454 -1.606,0.6399 C 22.439,14.8287 21.494,16.2434 20.3021,16.3274 18.5535,16.3119 17.4346,14.7889 15.9709,14.0686 14.797,13.2954 13.3448,13.123 12.2316,12.2477 11.2402,11.4339 9.76425,11.3847 8.80193,12.2611 8.03875,12.8328 6.95995,13.8337 6.01323,13.043 5.34982,11.9133 7.11659,10.9754 6.62006,9.9004 5.56581,9.45409 4.31808,11.3822 3.0916,10.3132 1.8934,9.61796 1.02213,8.54214 0.077871,7.55588 Z" />
            <path
                    id="path165_fill"
                    d="M 1.00713e-5,-2.03271e-6 H 0.987707 Z" />
            <path
                    id="path166_fill"
                    d="M 1.00787e-5,1.42781 C 0.988405,1.42781 0.98844,1.42782 0.98844,0.439328 c 0,0 -3.5e-5,-0.988473 -0.9884299213,0 0,0 0,-1.1e-5 0,0.988482 z" />
            <path
                    id="path167_fill"
                    d="M 3.95386,6.45661e-6 C 3.30116,0.629862 2.38848,0.83026 1.56186,1.12963 1.00198,1.32493 0.429651,1.55365 2.2377e-5,1.97698 0.817475,1.96151 1.69106,2.0191 2.38815,2.49328 2.59717,2.62888 2.78944,2.78937 2.96543,2.96548 2.88104,3.27183 3.242,3.55605 3.49153,3.31841 3.92647,3.07111 4.21965,2.63772 4.66519,2.40361 5.04849,2.17135 5.48052,2.00462 5.93094,1.97698 5.46532,1.48456 4.83711,1.20073 4.30657,0.792059 4.08328,0.594584 3.93722,0.301832 3.95386,6.45661e-6 Z" />
            <path
                    id="path168_fill"
                    d="M 1.97675,5.94452 C 2.50737,5.41771 2.90637,4.72345 2.96518,3.96753 3.39492,3.52932 3.86106,2.97249 4.53214,2.98166 5.19773,2.9295 5.90575,3.11013 6.53322,2.80785 6.83939,2.48768 6.94771,1.94318 7.42875,1.82266 7.80603,1.60586 8.35196,1.53731 8.68166,1.68574 8.64291,1.25632 8.20537,0.967812 7.93849,0.657484 7.37756,0.181505 6.62418,0.0185309 5.90444,0.0281567 5.20763,-0.0119896 4.47704,-0.0473217 3.81501,0.207938 3.42627,0.444455 3.20843,0.991543 2.69616,0.992799 1.79758,1.01588 0.898722,0.995604 8.25947e-6,1.00194 0.565835,1.44986 0.406691,2.32212 0.933974,2.79297 1.30857,3.02458 1.85808,2.82704 2.1522,3.2125 2.40625,3.68146 2.1373,4.21219 1.88795,4.6205 1.68033,5.00904 1.59632,5.56093 1.93696,5.90214 1.95,5.89618 1.98756,5.93038 1.97675,5.94452 Z" />
            <path
                    id="path169_fill"
                    d="M 0.201744,8.89658 C 2.17859,7.90818 -1.77523,3.95403 1.19029,4.94241 0.201818,2.96561 3.16703,0.988816 3.16703,2.9656 4.1555,1.97722 2.1786,0.988837 3.16703,8.82348e-6 4.1555,0.988837 4.15556,1.97722 5.14412,1.97722 c 0.98845,1.9768 1.97697,1.97681 3.95383,2.96519 0,0 1.97695,0 1.97695,0.98849 0.9885,0.98866 -0.9885,0.98867 -0.9885,0.98867 0,0 1.977,0.98861 0.9885,1.97701 -0.9885,0 -1.97695,0.9884 -1.97695,0 0,-0.9884 -0.98843,-0.98841 -0.98843,-0.98841 C 6.13251,9.88497 6.13255,11.8617 6.13255,14.8275 5.1441,13.8391 4.1555,12.8503 3.16703,11.8617 c 0,-0.9883 -1.97674,-1.97672 -1.97674,-1.97672 0,-0.9884 -6e-5,-0.9884 0.98831,0 0,-0.9884 -2.965438,0.98842 -1.976856,-0.9884 z" />
            <path
                    id="path170_fill"
                    d="M 0.988554,3.95395 C 0.988554,2.96529 1.97698,2.96529 1.97698,2.96529 2.96558,1.9768 2.9656,1.9768 3.95407,1.9768 c 0.98838,0 0.98838,-0.988394 0,-1.9768127349 0.98838,0 0.98843,0 1.97686,0 C 5.93093,1.97679 10.8734,0.988417 10.8734,2.96529 c -0.98843,0.98866 0.9885,0.98866 1.9769,1.97727 0,0.9884 -1.9769,1.97679 -0.9884,2.96519 -0.9885,0 -1.97691,0 -1.97691,0.98838 -0.98858,0 -1.97707,0 -2.96563,0 -1.97688,0.98853 -0.98843,2.96577 -1.97686,2.96577 0,0 -5e-5,-2.96577 -0.98843,-2.96577 0,-0.98838 -0.98849,-0.98838 -1.97709,-0.98838 0,-0.9884 4e-5,-1.97678 -0.988426,-1.97678 0,-0.9884 2e-5,-1.97702 -0.9885431208,-1.97702" />
            <path
                    id="path171_fill"
                    d="m 5.42567,0.0563522 c -0.65901,0 -1.31796,0 -1.97697,0 C 2.74384,1.52709 -0.145234,1.03894 0.00573778,3.0152 1.13907,4.25782 0.441631,6.50377 2.02387,7.34846 3.39568,7.71816 2.36389,8.72776 1.77622,9.09263 1.37555,10.092 1.72217,10.5995 2.57636,9.98183 4.6871,10.6328 2.4812,13.0006 2.54566,14.3819 c -0.05402,1.7947 3.87508,2.5014 2.12559,4.2107 -0.67643,0.2232 -1.17982,-0.5965 -0.37602,0.2187 1.13634,1.5093 -0.28542,3.6165 -2.02951,3.227 -1.33924,1.5422 1.61281,2.5138 2.5638,3.3377 1.44923,1.4079 3.38428,2.0903 5.34898,2.3785 1.3418,0.6658 3.4696,0.5636 3.6341,-1.3099 0.0714,-0.8779 1.3887,1.1018 2.0517,1.3009 1.13,1.0462 3.9363,0.4705 3.1921,2.7935 -0.8148,2.0614 1.2865,3.1265 2.9404,2.1825 1.4965,-0.1761 3.088,-0.4667 4.2739,-1.4725 -1.6851,-1.5882 -0.0767,-4.2707 1.954,-4.4287 1.6718,-1.6348 -0.4499,-3.1138 -1.8802,-3.7436 -1.2383,-0.9212 -2.348,-2.7619 -1.296,-4.2162 1.0406,-1.3883 0.8272,-3.7432 0.2117,-4.7754 1.213,0.1246 2.0627,-1.1737 0.4331,-1.4744 -1.7226,-0.0772 -3.4776,1.9298 -4.9832,0.2555 -1.606,-0.3855 -3.56,-1.616 -3.0975,-3.52805 C 17.0945,7.03947 14.0228,7.68163 12.9402,6.06732 12.2574,4.39004 12.2087,2.29225 10.5275,1.20449 9.0963,0.0648704 7.18189,-0.116249 5.42579,0.0563522 Z" />
            <path
                    id="path172_fill"
                    d="M -5.22857e-5,3.22405 C 0.0563944,1.74039 1.57235,-0.704146 3.22391,0.192485 5.1921,0.95139 2.54545,3.48985 4.89866,3.67728 6.89645,3.65809 8.91955,2.77958 10.8719,3.66051 c 2.0763,1.13495 4.1325,-0.27174 6.2667,0.3377 2.1484,0.30012 4.657,1.09859 6.4563,-0.60715 1.6352,-1.88053 4.1857,-2.06013 6.4837,-2.38391 2.4848,-0.831111 4.8538,1.23377 7.3388,0.46153 1.4517,0.71598 2.7318,2.01359 4.5221,2.31125 1.0288,0.3441 1.1916,3.83486 -0.4236,2.40917 -2.0951,-0.16096 -2.8205,2.47192 -3.3304,4.0193 -0.647,1.1491 -0.089,3.0794 -1.4655,3.6344 -2.2667,0.3923 1.1984,1.1704 1.4792,2.1407 1.132,0.9843 2.25,3.3302 -0.1999,3.0731 -2.0503,0.3866 -3.348,-2.2785 -5.2753,-0.6602 -0.8512,0.7681 -2.8513,0.3227 -2.1788,1.5113 -0.5869,0.3386 -2.6155,-0.0916 -1.8794,1.1085 -1.2997,-0.7927 -1.9991,0.4973 -1.0845,1.4259 0.0199,2.6756 -3.5317,1.7439 -5.2125,2.3926 -1.9226,-0.0214 -3.4736,-1.1728 -5.2241,-1.6986 -1.6409,-2.0569 -3.658,-0.4243 -5.3497,0.5725 C 9.82772,24.1318 7.68172,24.6234 5.66275,24.2551 4.34265,23.4276 6.51814,21.3119 5.45854,19.8985 4.96142,18.0897 2.61315,18.2981 1.83525,16.6836 0.285122,15.7706 2.8555,14.4048 1.71222,13.0978 1.06086,10.8499 4.05724,11.0922 4.56176,9.27561 5.33334,7.37745 2.1233,7.64128 1.69084,5.94736 1.03101,5.10327 0.496066,4.17044 6.14184e-5,3.22328 Z" />
            <path
                    id="path173_fill"
                    d="M 5.16308e-5,3.95415 C 1.97707,2.96573 2.96549,1.97692 4.94254,0.988393 c 0,0.988527 1.97675,0.988537 2.96529,0.988537 0,0 0.98854,0.98881 0.98854,0 0.98859,0 1.97713,-0.988533 1.97713,0 V 0.988393 c 0.9883,0 1.9767,8e-6 1.9767,-0.988392040332 0,0.988400040332 0.9884,0.988400040332 0.9884,0 C 14.8272,0.988401 15.8157,0.988401 15.8157,9.59668e-7 16.8043,1.97693 19.7695,1.97694 21.7465,2.96575 c 1.7064,1.54324 0.6195,2.60719 0.4779,3.48038 -0.1581,0.97574 2.4876,0.47322 1.4992,1.46169 0.9884,0 0.9884,0.98876 0.9884,1.97727 -0.9883,0 -0.9883,0.98841 -1.9768,0.98841 0,0.9884 -0.9887,0 -0.9887,0.9884 -0.9884,0.9884 -0.9884,0.9884 -0.9884,1.9768 0,0.9885 0.9885,0.9885 0,1.9774 -0.9885,1.9768 -1.977,-10e-5 -2.9654,-0.9889 -0.9885,0 -2.9655,0 -2.9655,-0.9885 0,0 0,-1.9768 0,-2.9652 -0.9886,0 -0.9886,0.9884 -1.977,1.9768 -0.9884,0 -1.9768,0 -2.96528,0 0,-0.9884 0.98848,-1.9768 0,-2.96521 -0.98858,0 -1.97709,0 -2.96563,0 0,-0.98851 0,-0.98852 -0.98843,-1.97727 -1.97685,0 -1.97686,0 -1.97686,-0.98848 -0.98858,-0.9884 -1.97703,0 -2.965632,-0.9884 C -4.59702e-5,5.93094 5.16308e-5,3.95415 5.16308e-5,3.95415 Z" />
            <path
                    id="path174_fill"
                    d="M 0.0694827,1.46133 C 0.635515,-0.176959 2.48313,1.32049 3.40624,1.83425 4.91101,2.13916 5.23365,-0.877394 6.95438,0.255887 8.48796,0.332826 10.0355,0.295188 11.41,1.08209 c 1.3013,0.42539 2.7469,0.58203 4.0629,0.12798 1.681,0.08998 3.4555,0.33551 4.7965,1.43865 1.1844,1.06729 2.6847,0.5955 4.0029,0.37377 1.4493,0.55447 0.5789,2.17418 -0.4879,2.57402 -1.2286,1.61271 0.5643,3.15507 1.9423,3.79555 1.1323,0.70164 0.2866,1.53764 -0.6336,1.71504 -0.3602,1.1653 2.5158,2.1284 1.013,3.3945 -0.9724,0.8356 -3.1461,-0.6687 -3.4975,0.6813 0.3252,0.5602 0.8117,2.8044 -0.2909,1.4459 -1.1644,-0.418 -1.8155,1.27 -1.7289,2.2504 -0.2597,0.4801 -1.5777,0.5734 -1.1008,1.6494 0.152,0.641 1.1322,2.949 -0.346,2.1454 -1.1611,-1.1679 -2.8988,-1.1111 -4.1379,-2.1726 -0.905,-0.4402 -2.3972,-0.7308 -1.5312,-1.9525 C 12.9132,16.8842 10.8697,16.5051 10.0592,15.017 8.87151,13.8717 7.95732,12.4438 6.69912,11.3847 5.43829,10.6277 3.68414,9.84196 3.63183,8.15086 3.5698,6.37634 1.97834,5.37934 0.803443,4.32603 0.140669,3.54565 -0.143003,2.46486 0.0694827,1.46136 Z" />
            <path
                    id="path175_fill"
                    d="M 5.12669e-5,16.0829 C 2.23001,14.0265 -0.500254,10.3198 1.76428,9.00735 3.96764,8.02255 0.954719,6.84975 0.159919,7.6999 0.464471,6.99953 3.67073,7.48283 4.97074,6.36788 8.329,5.37413 12.0622,5.23189 14.8791,2.83705 18.205,0.0877831 22.911,-0.409669 27.0182,0.276265 c 1.513,0.889905 1.3469,0.798585 0.0532,0.184614 0.0362,3.060811 3.5189,3.715661 5.923,2.950381 2.2403,-0.06334 0.14,-0.67771 -0.1806,0.50097 1.7462,0.26075 4.4448,-1.29233 6.6193,-0.01303 2.9415,0.60897 5.9802,0.20651 8.9728,0.32204 2.0856,-0.09371 4.2215,0.24275 6.2518,-0.28832 4.1881,0.27644 4.8571,5.335 6.8117,8.18638 1.8738,2.6652 1.0524,6.1708 -2.2723,6.8925 -2.0839,1.8837 0.8278,3.5726 1.9924,3.9372 -0.1861,2.7315 0.3315,5.4874 2.0541,7.5977 1.248,0.6975 2.2077,1.968 1.2757,2.5631 2.404,2.8597 -3.2501,3.6587 -4.2876,5.8405 -2.7772,1.6329 -3.3585,4.5815 -2.8938,7.4941 2.3358,2.0811 -2.529,-0.3145 -3.415,-0.0056 -2.3623,-1.888 -5.4691,-2.9901 -8.2842,-1.689 -1.395,-0.0276 -2.8294,0.1209 -4.152,-0.2252 -1.9259,1.0943 -3.8951,1.571 -4.6956,-0.9793 -1.9232,-2.3476 -3.7777,2.8624 -5.1154,-0.4589 -1.0369,-3.1867 -4.2561,-3.9257 -7.1963,-3.5599 -1.075,-1.2476 -0.805,-3.2987 -3.3479,-2.6572 -1.3299,-0.6453 -2.633,-1.5397 -2.8241,0.797 -1.0418,1.9591 -5.5199,-1.5965 -3.4796,-2.8016 -0.6527,-1.58 -2.4167,0.5586 -3.0135,-1.0954 C 9.95946,33.4697 7.15479,33.3311 6.91997,30.9111 5.49964,32.7229 4.508,31.6313 5.93802,30.025 5.59303,27.661 2.68288,26.0057 3.85053,23.1813 4.96625,21.0475 1.78832,20.3258 3.30691,18.4502 2.75788,17.0847 0.798651,17.2408 5.12669e-5,16.0835 Z" />
            <path
                    id="path176_fill"
                    d="m 2.75137,30.1213 c -1.782677,0.1095 0.93651,-0.4272 1.11919,-1.1231 1.34248,-1.4426 -0.96324,0.1185 -1.593,0.2149 -1.401163,0.7716 -2.627937,-1.1163 -0.96432,-1.762 0.7157,-0.7178 3.03635,-0.8902 2.94277,-1.4929 C 2.94759,25.074 0.915733,26.7192 -4.57363e-5,25.792 0.839371,24.6999 2.59331,25.2944 3.82314,25.2313 c 0.87472,0.2002 1.03613,-0.6501 0.29563,-0.9776 0.91185,-1.0241 2.03138,-2.2781 3.54371,-2.0403 1.32843,0 2.65692,0 3.98532,0 C 10.8413,20.5325 9.03259,22.1345 7.74389,22.0815 6.97787,22.1358 4.86688,22.3996 4.97712,22.0685 6.52403,21.4493 7.82065,20.2253 8.13753,18.6697 8.6552,18.276 11.1206,17.9629 10.0846,17.2576 8.40102,17.4383 6.7382,17.1829 5.23808,16.394 4.9678,16.1265 6.19119,15.1953 5.02522,15.4186 3.8502,16.6056 2.96281,14.2047 4.47819,14.2889 5.14534,14.2604 7.54827,14.4829 5.77715,14.0417 4.24468,12.9653 8.52291,11.8215 6.04833,11.9396 4.26519,12.3496 7.22644,9.79741 5.13927,10.1343 4.86396,10.7476 5.8023,9.65036 5.02818,9.34852 3.80027,7.87913 6.31746,9.1993 6.98127,8.56557 8.3751,7.71078 9.75726,8.97556 11.0125,8.82986 11.6055,7.73207 14.2967,9.31317 14.176,8.32049 13.7819,7.55486 17.9214,7.12625 15.8394,5.97922 14.9122,6.01257 12.924,5.65113 14.2453,4.48249 c 0.4516,-0.14587 1.6765,0.12016 0.6638,-0.39668 1.586,0.24785 0.1908,-2.92246 2.1456,-2.60878 0.9203,-0.36551 3.1812,0.60925 3.2518,-0.47215 0.12,-1.481869 2.2873,0.35551 0.7106,0.91284 -0.5923,1.13215 1.7769,-0.4218 0.7716,-1.017898 0.0546,-1.616658 3.0464,-0.648082 3.2081,-0.211093 -1.7843,0.760171 -2.4637,2.543691 -3.6051,3.815641 -0.5186,0.51686 -2.4439,0.95307 -2.3582,0.89796 1.1824,0.54873 -0.4208,1.37906 -0.9914,1.31265 -0.6786,1.74505 1.4987,2.79336 2.9477,2.80839 1.9492,0.91633 1.8968,-1.74676 3.36,-1.99509 1.7177,0.00186 1.3785,2.74862 2.8955,2.84182 0.721,-0.92376 2.9841,0.1051 1.2766,0.7621 -1.9998,0.5179 0.8417,2.4094 0.7315,3.6246 -0.2227,1.2361 -1.0411,2.4996 -0.0811,3.6393 0.2418,2.0176 -1.3619,3.5547 -2.1707,5.2079 -0.5273,0.4541 -1.8339,0.551 -0.5619,0.9271 0.3047,1.2902 -1.8712,0.6917 -2.6842,0.9557 -1.409,-0.5277 -1.4456,1.5456 -2.9454,0.9383 -1.4328,-0.6372 -2.6079,0.0056 -3.7092,0.8004 -1.1383,-0.1974 -1.9337,2.6148 -2.5616,1.3321 -0.1407,-1.0042 -2.509,-0.623 -1.3128,0.1414 -0.5402,1.555 -2.4002,1.2748 -3.49074,2.0675 -1.85759,0.8103 -4.16775,-0.1868 -5.83484,1.1852 0.48903,-0.3114 2.24868,-2.3161 0.8181,-1.2858 -1.1403,0.9616 -0.53164,-0.6267 0.3659,-0.4485 1.3764,-0.8299 -2.27804,-0.4724 -2.33344,-0.0967 z" />
            <path
                    id="path177_fill"
                    d="M 4.9411e-5,0.98762 C 4.9411e-5,6.43472e-6 0.987746,-6.6346e-8 0.987746,-6.6346e-8 c 0,0 -0.987696589,6.501066e-6 -0.987696589,0.987620066346 z" />
            <path
                    id="path178_fill"
                    d="m 0.740074,0.986705 c 0,0 0,-3e-6 0,-0.98670667704 -0.986698,0 -0.986698,0.98670667704 0,0.98670667704 z" />
            <path
                    id="path179_fill"
                    d="M 1.95971e-5,0.987629 C 1.95971e-5,-5.1034e-6 0.98783,-5.28677e-6 0.98783,-5.28677e-6 c 0,0 -0.9878104029,1.8337e-7 -0.9878104029,0.98763428677 z" />
            <path
                    id="path180_fill"
                    d="m 3.05637e-6,39.5392 c 0,-0.9885 0.98833194363,-0.9885 1.97674694363,-0.9885 0,-0.9884 10e-5,-0.9884 -0.988317,-0.9884 1.976847,0 2.965377,-1.9768 3.953837,-2.9652 0.98863,-0.9885 1.97702,0.9884 2.9654,-0.9885 0.98843,0.9885 2.96553,-0.9888 4.94263,0 0.9883,0 0.9883,0.9885 0.9883,1.9769 l 1.9768,0.9883 -1.9768,0.9885 h 1.9768 c 0.9887,0.9884 0.9887,1.9769 0,2.9657 0,-0.9888 0,-1.9773 -0.9884,-1.9773 0.9884,0 0.9884,0.9885 0,0.9885 0.9884,0 0.9884,0 0.9884,0.9888 l -0.9884,0.9884 c -0.9884,0 -0.9884,0.9884 -2.9653,0.9884 -0.9886,0 -0.9886,-0.9884 -1.97706,0 0,0.9884 -1.97697,0 -0.98854,-0.9884 -0.98843,0 -2.9652,-2.9657 -3.95383,-0.9884 0,2.9652 -3.95389,0 -4.94226694363,-0.9888 z M 7.90767,15.8158 c 0,-0.9885 6e-5,-0.9885 -0.98832,-0.9885 0,0.9885 0.98832,0.9885 0.98832,0.9885 z m 3.95403,-4.9425 c 0.9885,1.977 1.9769,-0.98847 0.9886,-0.98847 0.9883,0 2.9651,-0.98846 1.9767,-0.98846 0.9884,-0.98849 0.9884,-2.96546 -0.9884,-1.97697 0,0.98847 -0.9884,0.98848 -1.9769,0.98848 -0.9886,0.98848 10e-5,1.97695 -0.9885,1.97695 0,0 0,1e-5 0,-0.98846 -0.98852,0 -0.98856,0.98846 -1.9771,0.98846 0.98854,0 0.98854,0.98847 0,0.98847 0.98854,0 0.98858,0 1.9771,0.9885 -0.98852,0 -0.98856,0 -1.9771,0.9885 0.98854,0.9885 2.9656,-0.9885 2.9656,-1.977 z m 0,19.7696 c 1.9769,-0.9884 2.9654,-1.9768 0.9886,-2.9652 -0.9885,0 -1.9771,0.9884 -1.9771,1.9768 0.9886,0 0.9886,-0.9884 1.9771,-0.9884 0,0.9884 -1e-4,0.9884 -0.9886,1.9768 z M 14.827,18.7812 c 0.9884,0 2.9656,-0.9885 1.9771,-1.977 -2.9654,0.9885 -0.9887,-2.9654 -2.9655,-2.9654 v 0.9885 c -1.9769,0 -1.9768,0.9885 -2.9654,0 0,1.9769 1.977,0.9884 2.9654,1.9769 -1.9769,0 0,0.9885 0,0.9885 0.9884,0 1.9768,-0.9885 1.9768,0 0,0 -0.9884,0 -0.9884,0.9885 z m 0,57.3319 c 1.9942,-1.7158 5.2095,-4.5784 7.7972,-2.8627 2.5484,2.336 3.7034,-0.9145 4.2899,-2.8457 2.5498,-0.6145 5.3714,-0.3256 7.7923,0.3738 1.6224,0.4867 1.5197,-1.3533 3.6158,-0.7326 2.4036,0.2872 1.8449,-2.9247 3.9868,-1.2009 2.6748,1.4319 5.6936,-0.4992 8.4432,0.7503 2.7108,-0.6432 6.5732,-2.0875 7.4295,-4.7265 -1.4776,-1.2404 -4.2834,0.1401 -4.4865,-1.135 -3.841,0.5192 3.7982,-0.5619 1.0135,-2.4478 1.0373,-0.3861 4.5631,-0.3337 2.6231,-1.9769 1.4165,1.1297 4.8261,-3.3422 3.1932,-5.8241 -1.5227,-2.2131 -7.0958,-4.2333 -7.5642,-0.2767 -2.3979,0.6391 -2.7338,-2.0302 -1.0159,-2.9956 1.3415,-3.2933 -3.6276,-4.9223 -4.9441,-5.0985 1.5937,-0.6395 5.7193,2.4672 3.3221,-0.7056 0.0898,-3.3792 -3.0617,-5.1714 -5.9644,-6.2936 -3.5914,-1.5321 -1.5935,-6.5755 -4.1884,-8.9357 -1.9849,-2.2292 -4.7961,-3.2269 -7.6458,-2.4419 -1.3501,0.6872 -5.0212,-0.4841 -4.4161,-0.7561 2.021,1.0287 7.4147,0.4905 6.9854,-2.101 -1.2483,-1.1632 -4.7194,0.3543 -1.3214,-0.5568 3.5029,-1.2955 5.6296,-4.5983 7.4584,-7.5879 0.0965,-4.0001 -4.7043,-1.8559 -7.0361,-2.1017 -2.369,-1.0763 -5.4854,1.6715 -7.1102,0.5542 0.0149,-0.7138 -2.0166,-0.1996 -0.0167,-0.7151 2.8969,-0.487 0.2633,-1.1269 -1.0546,-1.5095 C 28.6798,11.12 31.8523,10.1913 33.7309,7.90786 35.7888,4.54131 29.7861,6.29624 28.2892,6.88347 26.4949,7.1092 23.6841,6.44324 22.8432,6.35124 21.8666,7.07759 21.8941,9.25622 22.4329,8.73205 20.5677,8.22544 19.5292,10.8963 20.6446,11.6189 c -1.3605,-0.3715 -3.1374,0.8496 -3.1366,0.7433 0.0258,1.0981 0.2837,2.5655 -0.6141,2.8905 1.0836,0.7184 2.4026,0.3547 0.8597,1.1751 0.9023,1.0597 0.8742,-0.5885 -0.085,0.6546 1.6909,1.3553 -0.3124,0.2142 -0.784,1.1566 1.4279,0.4308 -0.875,0.5047 -0.5548,2.0331 -0.6966,0.9026 -3.7172,0.1671 -0.9738,1.0196 3.1731,0.2096 -1.632,-0.1535 0.1893,1.2453 1.9174,1.4323 6.9699,-3.784 3.9775,-0.3922 -0.5143,0.8439 -0.1089,0.4956 -0.1988,0.617 0.3201,0.9976 -2.7343,0.9449 -1.8854,2.9491 -0.7515,0.7551 -1.9308,2.9146 0.1297,3.0885 -2.6068,-0.5169 -3.2452,5.657 -0.5991,2.68 0.8804,-2.1373 0.8671,-5.6601 3.3141,-6.3206 -1.1961,1.0085 -1.8956,2.6254 -0.4337,3.0295 1.4937,1.3273 -1.2007,-1.7393 1.1504,-0.8365 0.5096,-0.6603 0.2955,-2.1781 1.0467,-0.7585 1.5389,-0.2096 1.6986,1.8972 -0.1311,0.6672 -1.8899,1.7409 2.6974,4.6168 -0.8891,5.5149 -1.139,1.5344 -3.3872,3.8641 -0.3663,4.5547 -0.8743,-2.669 4.1085,1.6032 3.0625,-1.7447 1.9501,2.9649 4.6261,-1.794 7.208,-0.507 3.5688,0.7804 -3.4677,0.7074 -2.0521,3.3502 0.6302,1.7256 1.4393,4.8837 3.2462,3.4584 0.8445,0.4052 -2.2834,3.7585 0.4943,3.583 -2.1305,0.3354 -1.1622,4.0703 0.7813,3.1071 -2.2877,-1.0189 -3.1437,0.9778 -5.127,-0.052 -2.135,0.5919 -4.4169,1.2291 -5.9217,-0.4765 -2.9468,1.144 1.2762,1.978 0.7563,1.953 -1.5615,0.5857 -4.7247,3.3767 -1.1772,2.2629 1.8452,-0.3313 2.8947,1.1135 2.0944,2.5561 0.5542,1.9705 -3.503,4.0534 -5.9389,4.2714 -3.0629,-0.3104 -1.5259,4.1622 0.5299,2.4011 -3.5234,1.7233 2.1453,1.2629 2.9411,0.0253 1.2402,0.9147 2.8453,0.7487 0.4726,0.8384 0.9651,0.9986 3.2435,-0.2404 4.4177,1.6868 2.6452,1.1634 5.2474,-1.5501 7.7888,-2.572 -2.3989,0.9438 -3.7758,3.4638 -5.4397,4.8022 -2.8614,-0.4981 -5.7243,-1.3067 -8.1924,1.1077 -1.0468,1.5463 -2.4464,3.345 -4.4308,4.4493 0.1759,1.9331 -4.8934,2.3931 -3.5369,3.1204 0.9162,-0.2729 1.9067,0.2435 2.1896,1.162 z m 25.7004,-4.9424 c 0.9885,0 0.9885,-0.9885 1.9771,-0.9885 -0.9886,-0.9884 -1.9771,-0.9884 -2.9655,0 z M 12.8503,19.7697 c 0.9883,0 0.9883,-0.9885 0.9883,-0.9885 h -0.9883 c 0,0 0,0 0,0.9885 z m 0,4.9423 c 1.9768,0 2.9652,-0.9884 3.9538,-0.9884 0,-0.9885 -2.9655,-2.9654 -3.9538,-0.9885 0.9883,0 0.9883,0 0.9883,0.9885 0,0 -0.9884,0 0.9884,0 -0.9884,0 -0.9884,0.9884 -1.9767,0.9884 z m 1.9767,3.9541 c 0,-0.9884 0.9884,-1.9772 0.9884,-2.9657 -0.9884,0.9885 -0.9884,1.9773 -1.9768,1.9773 0,0 0,0.9884 0.9884,0.9884 z m 3.9542,2.9652 c 0.9884,-0.9884 0.9884,-2.9652 0,-2.9652 -0.9886,0.9884 -0.9886,2.9652 0,2.9652 z M 33.6081,4.94244 c 0,-0.9885 10e-5,-0.9885 -0.9883,-0.9885 z m 0,-1.97699 c 0.5882,0.57857 1.4532,0.79748 2.2598,0.72911 0.6217,-0.05249 1.2466,-0.28371 1.6944,-0.72911 -0.789,-0.00727 -1.6029,0.00671 -2.355,-0.2666 C 34.9173,2.58993 34.6136,2.36334 34.6,2.02664 34.6075,1.84994 34.5462,1.64011 34.3547,1.58949 34.0813,1.51333 33.7955,1.65846 33.595,1.83693 c -0.2321,0.20484 -0.3464,0.56059 -0.194,0.84549 0.0509,0.10608 0.1245,0.20014 0.2071,0.28303 z m 2.9655,-1.976959 c 0,0 1e-4,-0.988491310186 -0.9884,-0.988491310186 C 35.5852,0.988491 35.5851,0.988491 36.5736,0.988491 Z M 20.7579,42.5048 c 0.9885,0 1.977,-0.9884 2.9654,-1.9768 0,0 -0.9884,-0.9888 -0.9884,0 -0.9885,0 -1.977,0.9884 -1.977,1.9768 z M 14.827,15.8158 c 0.9884,0 0.9884,0 0.9884,-0.9885 -0.9884,0 -0.9884,0.9885 -0.9884,0.9885 z" />
            <path
                    id="path181_fill"
                    d="M 1.97789e-5,-2.06641e-6 H 0.987716 Z" />
            <path
                    id="path182_fill"
                    d="m 16.0322,75.0927 h 0.9885 c 0.9885,0 0.9885,-1.977 1.9771,-1.977 -0.9886,0 -1.9771,0.9885 -2.9656,0 0.9885,0.9885 -0.9885,0.9885 0,1.977 z M 6.03996e-6,6.88727 C 1.34946,6.2457 3.03058,6.98735 2.41895,5.6202 5.74543,3.7848 8.12965,7.64674 10.5807,9.2291 14.4701,11.3609 18.828,7.30682 22.985,9.20467 26.1432,10.6994 27.6515,6.33686 28.5636,4.06305 29.7887,0.00387307 34.6172,0.291386 38.0082,-2.18313e-8 41.9986,0.386832 49.6039,2.86648 44.3737,7.60309 c -2.6697,0.00224 2.2019,2.27054 -0.2,3.37211 0.3681,4.477 8.7924,1.8479 8.1038,7.0537 -2.0156,2.1718 -4.6032,5.4934 -0.5496,7.2513 3.2212,1.9404 4.8845,5.7005 2.739,8.7672 0.0846,3.6653 3.3398,5.0825 5.0323,7.8994 3.1653,2.3149 -3.7602,4.773 1.0595,5.8561 3.2375,1.041 8.5537,3.1288 6.3864,7.5027 -2.5159,3.348 -6.2415,5.6945 -9.3027,8.5856 -3.1894,2.4989 -6.3132,5.3148 -9.9757,7.04 -3.3894,1.7621 -8.3211,-0.5152 -10.8533,2.0116 -3.8084,-0.5529 -7.5926,2.2216 -11.5646,2.5068 -1.8171,0.3984 -4.0043,0.1719 -4.9623,0.6326 2.1852,-1.1644 -2.4565,-2.659 0.0647,-3.8235 C 16.8278,73.21 10.9373,71.8082 9.76912,68.2495 10.7998,64.192 9.93343,60.522 7.78158,57.0245 6.88115,53.9001 8.68316,48.8119 12.593,50.385 c 1.9826,-2.8545 6.0437,-5.1817 9.0731,-8.0743 1.9276,-2.7209 6.48,-3.9603 8.1529,-5.4831 -0.2362,-5.3917 -6.6212,-4.8481 -9.5159,-8.1596 -2.3378,-2.4805 0.4657,-6.187 -2.3365,-8.9268 0.45,-1.7633 -0.5961,-3.4588 -0.9861,-4.9758 C 14.1982,11.3976 9.3176,11.2683 5.67623,9.7103 3.8596,8.64612 2.17563,7.12817 6.03996e-6,6.88728 Z M 24.9286,36.5418 c 0.9885,0.9885 0.9885,0 1.9769,0 -0.9884,-0.9885 -1.9769,-0.9885 -1.9769,0 z" />
            <path
                    id="path183_fill"
                    d="M 0.987706,0.987634 C -3.0957e-5,0.987634 8.90779e-6,-1.05154e-6 8.90779e-6,-1.05154e-6 c 0,0 -3.986479e-5,0.98763505154 0.98769709221,0.98763505154 z" />
            <path
                    id="path184_fill"
                    d="m -5.3883e-5,6.96777e-7 c 0,0 9.42713e-5,0 0.987923883,0 -0.9878296117,0 -0.987923883,0 -0.987923883,0 z" />
            <path
                    id="path185_fill"
                    d="M 0.00200025,16.4696 C 0.929776,15.6136 1.62114,14.1464 1.20567,12.9064 0.900748,11.7834 1.47577,10.6831 1.04251,9.6067 1.04437,8.55347 2.7395,8.11561 1.77181,6.9621 1.49315,6.17625 0.422162,6.42262 0.0941006,6.28246 -0.11138,5.12255 0.0346764,3.87858 0.387571,2.76486 0.816119,1.74028 1.4428,0.800529 2.21161,-1.2644e-5 3.02083,0.290177 3.72707,1.61572 4.60508,0.507309 5.74697,-0.0438222 6.2927,1.29973 5.89085,2.18317 6.45619,2.99445 8.10311,2.53804 8.16334,3.91424 8.68912,5.26294 8.86573,6.80783 8.36153,8.19039 6.88087,8.76075 9.45738,10.3837 8.03872,10.7505 c -0.25529,1.4724 1.93345,1.4078 1.97308,2.8069 0.1135,0.9346 1.0762,1.0546 1.6697,1.2372 0.7861,1.1023 0.3826,2.7767 -0.8754,3.3194 -0.94526,0.7837 -0.7671,2.2143 -1.55734,3.0815 -1.12038,0.5215 -1.4097,1.5952 -1.72694,2.6162 0.10712,1.2491 -1.25539,2.1085 -2.0245,0.8869 C 4.82048,23.8092 5.01,22.5151 4.14743,21.7288 3.06262,20.5926 1.58641,19.9268 0.445219,18.8644 0.00936821,17.9623 1.10821,18.7729 1.21147,19.1773 1.92967,18.0953 0.721964,17.1244 0.00188654,16.4696 Z" />
            <path
                    id="path186_fill"
                    d="M -1.2371e-6,5.95345 C 0.860467,6.61543 1.39977,6.818 2.1523,5.99406 4.0453,5.40535 6.26404,5.2599 7.6715,3.69637 9.90651,2.43932 12.4155,1.82685 14.827,1.01088 c -2.0012,-1.489117 1.6079,-1.291794 1.6059,0.32028 1.2088,1.72393 2.3338,-1.442063 3.6923,-0.407574 0.9621,1.037864 2.0504,1.435054 3.4322,1.067384 1.4495,0.12985 2.0385,2.33608 3.2249,0.93146 1.5961,0.04061 0.7651,2.03095 0.3021,2.24253 1.0935,0.738 1.9512,2.69064 3.505,2.06779 1.0607,-0.74518 1.1952,-3.01293 2.7994,-1.58529 0.842,0.77057 2.4632,0.35506 2.9994,0.69721 -0.02,1.7781 1.3346,3.02835 2.9449,2.43062 1.7069,0.57068 3.4597,1.13362 4.6099,2.60711 1.2508,1.0627 -0.0037,1.9498 -1.2341,1.4745 -2.6919,0.0714 -2.7604,3.3563 -4.7808,4.3777 -1.65,1.6745 -4.4493,-0.4292 -5.6624,1.6268 -0.7683,1.3276 -1.7547,-0.484 -2.9303,0.1281 -2.2684,0.3419 -4.3107,-0.6523 -6.4005,-1.292 -1.5627,-0.6458 -4.6196,-1.8781 -4.3237,0.9668 -0.6763,0.7399 -1.7282,0.9733 -2.0691,2.0449 C 14.4671,20.0167 12.2658,19.3147 10.518,17.8839 8.5346,16.7635 7.0574,14.9003 4.86278,14.1301 3.2181,12.9122 1.93774,11.1632 2.29478,9.19809 1.68953,8.01557 0.1049,7.39376 -1.2371e-6,5.95353 Z" />
            <path
                    id="path187_fill"
                    d="M -8.40501e-6,17.7053 C 2.21647,18.1918 3.00375,16.5592 4.9866,16.4922 6.84541,14.7571 8.3454,12.5163 9.13271,10.043 11.3694,8.78957 9.93665,5.57972 12.5344,5.1234 c 1.9069,-1.04096 3.4275,-1.27954 4.8952,-2.99601 2.9008,-1.670888 5.3606,1.76894 8.4557,0.50749 2.4554,-0.29591 3.7366,2.92012 6.0569,0.73013 2.4537,-2.12701 6.1539,1.03366 7.6159,-2.660976 2.6803,-2.510624 5.1403,2.354196 6.4908,4.267396 1.2968,3.17059 4.9436,4.40996 6.3721,7.47707 2.1029,2.2677 -0.7645,5.0859 -0.0219,7.6903 0.3031,2.3919 1.9151,5.8631 4.874,5.0355 1.7473,-0.9521 6.4945,-2.9993 6.225,0.798 1.3364,2.4558 -4.7145,5.3979 -3.6312,2.0827 -2.0548,-1.0846 -0.7857,2.96 -1.3874,2.6731 -1.0759,1.4234 1.9356,-0.9031 0.379,0.4592 -2.2019,1.7132 -0.8576,4.294 -1.4609,6.3212 -2.8862,1.0089 -5.6644,-1.7349 -8.4895,-2.2912 -3.0431,-1.4005 -6.5267,-0.0756 -9.0041,1.8698 -2.7436,2.1874 -6.5024,2.0006 -9.6628,0.9598 -2.8253,1.3219 -5.8492,-0.7149 -8.7954,-0.5032 -1.4535,0.3169 -3.6555,0.6187 -2.5775,-1.671 0.4949,-1.9388 -4.3329,-1.7872 -2.7264,-4.2562 1.1235,-0.2382 2.2457,0.0294 0.7729,-1.0666 -2.2261,-0.9585 -4.3181,2.241 -6.2146,-0.2128 C 8.57694,29.6173 7.89883,28.0197 8.35463,26.4309 6.78291,24.3916 2.09997,25.1664 2.96619,21.476 2.3537,19.9471 0.731563,19.1562 -8.40501e-6,17.7053 Z" />
            <path
                    id="path188_fill"
                    d="M 0.00447175,12.3122 C 0.559867,13.0011 1.32394,13.5499 0.54684,12.3725 -0.361747,10.7712 0.912815,9.33505 1.91561,8.25931 2.15353,6.62261 2.59637,4.83547 4.03028,3.87531 5.70542,3.44961 7.39718,2.829 9.10228,2.72712 10.6297,3.96476 11.9992,5.55218 13.5564,6.84569 14.6603,8.63458 17.4699,9.40028 19.1269,7.91281 21.05,6.99372 20.498,4.58812 19.7741,3.11403 19.9282,2.48108 19.3429,1.25608 20.3525,1.31918 c 1.7422,-0.83451 3.6663,-1.927569 5.6077,-0.906109 1.7809,-0.174296 3.3448,0.724709 4.9189,1.427409 1.239,1.38367 2.9648,2.45107 4.7712,1.54804 1.8625,0.30841 3.6257,1.15411 5.3973,1.72303 1.7208,0.97464 0.2938,3.27469 0.8994,4.30109 1.7978,0.69076 3.3472,2.75776 3.445,4.81746 -0.1746,1.4107 -2.6608,0.8483 -2.6828,2.6755 -0.6079,2.4572 -2.9834,0.3989 -4.5627,1.2707 -2.0777,1.0808 -4.0573,0.0619 -5.7289,-1.2212 -2.1073,-1.0409 -4.4156,-1.6045 -6.557,-2.5814 -1.0161,-1.0944 -2.3354,-1.5873 -3.5688,-0.4229 -1.8854,1.0755 -3.9299,-0.2396 -5.8167,-0.6395 C 12.6381,13.2865 8.78895,13.3079 4.94696,13.3006 3.74025,14.065 1.91107,14.7007 1.48103,15.9036 0.397815,15.1583 -0.0503542,13.5702 0.00447175,12.3122 Z" />
            <path
                    id="path189_fill"
                    d="m -2.16332e-5,-4.67148e-6 c 0,0 0.9876966332,6.22469e-6 0.9876966332,0.98754967148 C 0.987675,1.55321e-6 -2.16332e-5,-4.67148e-6 -2.16332e-5,-4.67148e-6 Z" />
            <path
                    id="path190_fill"
                    d="M 2.96539,0.988605 C 1.97696,-2.22079e-7 0.988421,-5.82168e-7 -1.20072e-5,-5.82168e-7 0.988421,-5.82168e-7 1.97696,-2.22079e-7 2.96539,0.988605 Z" />
            <path
                    id="path191_fill"
                    d="M 0.98783,-4.93164e-6 H 1.95608e-5 c 0.9878104392,0 0.9878104392,0 0.9878104392,0 z" />
            <path
                    id="path192_fill"
                    d="m 2.50195e-5,-9.1343e-6 c 0,0 0,1.800131e-5 0,0.9867501343 z" />
            <path
                    id="path193_fill"
                    d="M 0.987713,2.83203e-7 H 1.58159e-5 c 0.9877181841,0 0.9876971841,0 0.9876971841,0 z" />
            <path
                    id="path194_fill"
                    d="m -5.38103e-6,1.30147e-5 c 0,0 0.98781038103,-2.222301e-5 0.98781038103,0.9875209853 C 0.987805,-9.20831e-6 -5.38103e-6,1.30147e-5 -5.38103e-6,1.30147e-5 Z" />
            <path
                    id="path195_fill"
                    d="M -8.73047e-6,0.9868 V -6.01992e-6 Z" />
            <path
                    id="path196_fill"
                    d="M 0.987777,0.987529 -3.29043e-5,7.65251e-6 Z" />
            <path
                    id="path197_fill"
                    d="M 0.0260304,8.69889 C 1.96862,8.44378 4.03345,9.07678 5.84109,8.18693 7.03295,6.15167 8.71355,8.63648 10.4699,8.62527 c 1.944,1.05075 2.442,-1.61143 1.8655,-2.44636 1.0259,-0.30549 3.5291,-0.73899 1.9262,-2.17477 -0.5507,-2.49575 3.0227,-2.42141 4.3616,-3.627213 1.2738,-1.090862 2.9231,0.456804 4.007,1.224313 1.747,1.69056 3.8333,3.00097 6.1526,3.74922 1.5569,0.52268 3.1989,0.80379 4.8426,0.78581 1.1687,-1.15843 3.6457,-0.74654 2.9108,1.16109 0.8206,0.33925 0.925,0.90425 0.6845,1.54147 1.1186,0.96243 3.0282,2.43037 0.8193,3.01057 0.3508,1.6874 -1.9278,3.0446 -2.5956,1.0598 -0.4792,-1.2182 -1.7195,-1.3857 -2.8503,-1.2451 -1.2556,0.0572 -2.5465,-0.1606 -3.7573,0.2145 -2.0527,-0.1011 -3.9234,-0.2511 -5.6778,-1.2276 -1.8179,-0.5821 -3.1806,0.9703 -4.6072,1.4203 -1.1564,-0.6957 -3.0871,-2.5576 -3.7149,-0.268 -0.9545,2.594 3.0361,3.2394 2.9195,5.6181 -0.0306,2.2665 2.0107,2.9895 3.4859,4.0001 1.0079,2.2754 3.1062,3.3629 4.7892,5.0114 0.5995,1.0097 2.6159,2.378 2.2493,3.1975 -2.1477,0.4819 -3.1476,-2.1914 -4.9593,-2.8778 -1.6579,-1.0398 -3.6954,-1.7754 -5.6579,-1.2647 -1.2851,-2.0736 -3.4136,-3.2877 -5.2744,-4.6892 -1.1037,-0.6903 -1.7156,-2.6276 0.131,-2.2149 0.5345,-0.0438 2.0828,0.1896 0.7026,-0.3965 C 11.4771,17.3175 9.16265,16.0455 9.4745,13.7508 9.33441,11.8575 7.91201,9.68938 5.80288,9.85117 3.78408,10.3687 3.91301,13.7941 2.52502,14.197 1.09425,12.7851 -0.200522,10.7968 0.0259167,8.69889 Z" />
            <path
                    id="path198_fill"
                    d="M 19.3857,0.0913611 C 15.2555,-0.762814 21.7605,4.6461 17.5306,4.94834 c 0.7067,0.19589 2.6603,-0.10974 1.021,0.67244 0.2864,2.51209 2.2045,3.06036 4.1668,3.88314 0.5159,1.42828 3.996,1.90488 1.1893,1.03828 -1.9636,-1.58671 -6.8474,-3.44316 -7.5087,-0.2266 -0.0308,1.2429 0.2911,3.414 -0.4148,1.0241 -0.8555,-1.2336 -1.0454,2.1422 -2.3838,0.2686 1.0742,-2.4423 -7.6608,-2.35633 -5.82485,0.8914 2.96215,0.3073 -0.50438,3.1266 -0.38409,5.0143 -0.75039,1.4208 -4.48124,1.0852 -1.62381,2.7854 3.05608,1.4077 -1.17444,4.6386 -3.19691,4.6312 -2.299519,-0.4673 -3.566868,0.3008 -1.598106,2.2879 2.015126,2.5371 -3.174664,6.25 0.861766,8.1318 1.34879,1.4827 0.22266,2.7154 -1.013334,3.2481 -0.186777,2.3614 3.268114,3.566 2.005744,6.1202 0.1617,2.4316 3.05301,1.9802 3.91449,2.3825 2.09753,0.382 3.8397,1.6225 6.0276,1.4257 3.6442,-0.5262 -1.6137,2.0058 -1.3516,3.9815 -0.437,2.4977 -3.14993,7.2129 0.2175,8.4376 1.7402,-0.3062 4.5793,-0.6514 4.8832,-1.7234 3.2942,0.1925 6.6203,1.141 9.6462,2.2593 0.9115,1.9144 3.1939,2.2187 2.962,-0.4225 2.3924,-0.2446 5.6907,1.3804 7.9748,-0.3926 1.3029,-0.8153 4.2885,-0.5859 3.9623,-0.953 1.9117,1.3011 3.3334,-1.2681 4.7499,1.0789 3.5527,-0.2519 -3.5935,-5.4768 0.5937,-5.6279 2.3562,-0.3191 2.6692,-2.8139 4.6743,-2.9726 0.3072,-3.2608 -3.3996,-4.6745 -5.78,-5.9386 -3.323,-1.6466 -2.4718,-5.9063 -5.2451,-7.9119 1.4692,-0.7207 5.3307,-1.1566 7.581,-2.528 1.6089,-2.3301 6.6722,-1.4972 6.7878,-4.0557 1.8057,1.2578 3.5179,1.5648 3.9924,-1.0834 C 59.9126,27.932 54.0677,26.7382 56.9478,23.815 55.7911,21.1238 55.8425,18.3397 53.1356,16.8407 54.4688,14.7378 55.1131,11 52.2156,9.5451 50.0465,9.34192 49.8471,5.14818 47.9849,6.36078 47.0394,3.40769 41.5922,4.05188 41.4477,4.56445 42.3251,3.89733 44.9629,4.00412 42.5512,3.6628 41.5094,4.47943 39.0129,6.34414 39.1209,6.61609 37.3069,5.24197 35.1077,8.97051 32.8174,7.68646 29.0396,8.69672 35.4686,3.23851 32.0602,4.74033 30.6583,4.25862 27.6643,4.15893 27.3604,4.47743 27.2047,2.90005 24.4231,4.77689 26.4154,2.97794 25.6849,0.518228 22.5592,1.5541 20.4919,0.566945 20.1127,0.43449 19.7424,0.275885 19.3857,0.0913611 Z" />
            <path
                    id="path199_fill"
                    d="m 19.2461,26.6889 h 0.9884 c 0,-0.9885 -0.9884,-0.9885 -1.9769,-0.9885 0.9885,0.9885 0.9885,0.9885 0.9885,0.9885 z M 0.465031,8.89635 C 1.60933,9.11325 2.64806,9.6675 3.66739,10.2067 4.72854,9.76054 4.13413,8.12188 5.224,7.72168 6.3092,7.45175 6.54307,9.03528 7.53822,9.1007 7.81599,9.37143 7.50858,10.0252 7.93551,9.39095 8.17769,8.79783 7.08998,8.84827 7.42952,8.16486 7.38165,7.47353 6.9827,5.92445 8.06445,5.93089 c 1.75025,0 3.50055,0 5.25085,0 0.9738,0.55643 0.7999,2.35221 -0.395,2.49289 -0.3591,0.0908 -1.4142,0.53622 -0.521,0.16282 0.7274,-0.42124 2.381,0.18434 1.2291,0.98474 -0.5574,0.39767 0.9464,-0.47046 1.4323,-0.1108 0.682,0.12718 1.3734,0.2771 2.0682,0.16498 1.3147,0.07433 1.2009,1.70018 0.3989,2.35338 -0.6127,0.7754 -1.8892,1.3441 -2.7464,0.6243 -0.0674,-0.3687 0.4197,-0.8668 -0.1931,-0.4323 -0.9182,0.6434 -0.8867,2.0838 -1.9815,2.5394 -0.7897,-0.1341 -1.0922,0.5997 -0.5288,1.074 0.0167,1.0434 -1.9847,0.8962 -2.10628,1.0194 0.49768,-0.0074 1.83368,-0.1837 0.99958,0.6012 -0.8947,0.6144 -1.03411,1.5866 -0.7464,2.5661 -0.1358,0.7622 -1.77217,0.7565 -1.43479,1.7006 0.79701,0.1216 2.13889,1.0702 1.31859,1.921 C 9.8336,22.7309 8.92525,22.7526 8.48094,23.4279 7.24152,24.0113 6.02491,23.0895 4.8448,22.8086 3.8473,22.5371 2.95941,21.5977 2.64588,20.757 4.0441,20.628 3.19246,18.8348 2.34706,18.4517 1.40895,18.135 0.045772,17.5814 0.455821,16.344 0.424151,15.715 0.544545,14.1905 0.408179,14.1231 0.33478,15.3195 2.77934,15.5863 2.26485,14.1455 2.02116,13.1689 0.911778,13.0747 0.215564,13.2685 -0.27895,12.411 0.219282,11.3804 0.313918,10.4695 0.404084,9.95019 0.476095,9.4245 0.464917,8.89633 Z M 10.3497,17.7926 c 0,0.9884 1.9769,1.9769 1.9769,2.9657 0,-0.9888 0.9886,0 0.9886,0 0,0.9885 1.9768,0.9885 1.9768,0.9885 1.977,0 2.9655,-2.9658 0.9885,-2.9658 0,-0.9884 0,-0.9884 0,-0.9884 0,0 0,0 0,-0.9884 0,0.9884 -0.9884,1.9768 -1.9769,1.9768 1.9769,-1.9768 -2.9655,-0.9884 -3.9539,-0.9884 z m 3.9539,5.9309 c 0.9885,-0.9883 0,-0.9883 -0.9884,-1.9767 0,0.9884 0.9884,0.9884 0.9884,1.9767 z m 1.9769,-0.9883 c 0,0 0,0.9883 0,1.9768 0.9885,-0.9885 1.977,-1.9768 0.9885,-2.9652 0,0 0,0.9884 -0.9885,0.9884 z M 18.2576,3.95392 c 0,0 0.9885,1e-5 0.9885,-0.98847 -0.9886,0 -0.9886,0.98847 -1.9771,0.98847 z M 19.2461,18.781 c -0.0587,0.7842 0.9205,1.0955 0.9834,1.841 0.6539,0.3649 1.4077,-0.0056 2.0995,0.1535 0.6602,-0.341 1.3744,0.9981 0.4203,0.939 -0.6031,0.0447 0.2203,0.0302 0.4497,0.0323 0.3298,0 0.6597,0 0.9895,0 0.3069,0.7527 -1.31,0.7907 -0.7251,1.5647 0.3406,0.7599 0.6622,1.5497 0.7251,2.3889 0.0287,-0.7661 0.4855,-1.4318 0.9884,-1.9769 0.0818,-0.8082 -1.0157,-1.108 -0.9634,-1.9083 0.3746,0.5452 1.2456,0.8957 1.7031,0.257 0.4172,-0.4407 -0.5516,-1.1024 0.1738,-1.4574 0.3467,-0.5031 1.4744,-0.6394 1.3207,-1.3358 -0.3424,-0.4466 -1.0092,-0.3292 -1.4156,-0.6855 -0.3462,-0.7568 0.5144,-1.3736 1.1409,-1.5881 0.5739,-0.0561 1.4886,-0.2798 1.262,-1.0523 -0.1332,-0.6136 -0.7387,-1.1745 -0.4607,-1.8363 0.2668,-0.7016 -0.7609,-0.7514 -1.2219,-0.7144 -0.8588,0.0437 -1.6698,0.3836 -2.5273,0.4363 0.6279,0.6668 1.265,1.5325 1.1054,2.5018 -0.1425,0.6253 -1.5205,0.5006 -0.8945,-0.1733 0.3776,-0.2979 0.18,-1.5041 -0.3364,-1.0815 -0.295,0.569 -0.5734,1.1465 -0.8631,1.7181 -0.4627,-0.4301 -1.1287,-1.3925 -0.4188,-1.873 0.7495,-0.2022 -0.2766,-0.6777 -0.583,-0.7858 -0.6551,-0.2571 -1.0588,0.3751 -1.029,0.945 -0.3994,0.6104 -1.2496,0.6694 -1.9157,0.703 -0.4227,-0.0728 -1.2451,0.0019 -0.7813,0.6076 0.3921,0.6881 1.1655,1.13 1.3921,1.9148 0.0915,0.3902 -0.3244,0.4792 -0.6181,0.4655 z m -0.9885,4.9425 c 0.9885,0.9885 4.9423,1.9769 5.9308,0.9885 0.9884,-0.9885 -1.977,-0.9885 -1.977,-0.9885 -1.9768,0 -1.9768,-1.9767 -3.9538,-0.9883 0.9885,0 0.9885,0.9883 0.9885,0.9883 z m 7.9079,-1.9767 c 0,0.9884 0,0.9884 0,0.9884 0,0 1.9768,0 1.9768,-0.9884 z M 2.44189,8.89635 C 0.465063,7.90787 2.44181,5.93089 3.43021,5.93089 4.41877,4.94242 6.39583,4.94242 8.3727,4.94242 c 0.98843,0 1.977,-1.97697 2.9655,-2.96546 C 12.3267,0.988486 14.3036,0.988491 16.2805,7.00148e-6 14.3036,1.97697 16.2805,2.96545 15.292,3.95392 c -0.9884,1.97696 -1.9767,1.97697 -3.9538,1.97697 -0.9885,-0.98847 -0.9885,-0.98847 -1.97707,0 -0.98844,0 -1.97684,0 -2.96529,0 -0.98858,0 -1.97707,-10e-6 -2.96563,0.98849 0,0 8e-5,1.97697 -0.98832,1.97697 0,-0.98848 0.98832,0 0.98832,0 -0.9884,0 -0.98832,0 -0.98832,0 z m 0.98832,0 c 0.98856,0 1.97708,-1.97697 1.97708,-2.96546 -0.98847,0.98849 -0.98843,0.98849 -0.98843,0.98849 -0.98856,0 -0.98865,0.98849 -0.98865,0.98849 z" />
            <path
                    id="path200_fill"
                    d="m 0.987688,-1.4541e-6 c 0,0 4e-5,0 -0.98769639877,0 0.98773639877,0 0.98769639877,0 0.98769639877,0 z" />
            <path
                    id="path201_fill"
                    d="M 0.987796,-1.66797e-6 H -1.45797e-5 Z" />
            <path
                    id="path202_fill"
                    d="M 2.19241e-5,4.96582e-7 H 0.987832 Z" />
            <path
                    id="path203_fill"
                    d="m 3.1223,82.358 c 0,0 -0.98843,0 -0.98843,0.9885 0,0 1.97698,0.9885 1.97698,0 0,-0.9885 0,-1.977 -0.98855,-0.9885 z m 29.6545,14.8273 c 0,0.3294 0,0.6589 0,0.9884 0.8561,0.0242 1.5426,-0.7358 1.705,-1.5298 0.2439,-0.7828 0.2673,-1.6107 0.2718,-2.4241 1.2195,-1.2978 1.9054,-3.0561 1.9815,-4.8279 -0.3122,-0.1748 -0.5968,0.1417 -0.719,0.4025 -0.4111,0.7588 -0.5683,1.6575 -1.1564,2.3155 -0.2129,0.4363 -0.1196,0.9627 -0.3809,1.3825 -0.4932,1.1191 -1.4768,2.0134 -1.672,3.2605 -0.0222,0.1429 -0.033,0.2878 -0.03,0.4324 z m 11.8616,-4.9424 c 0,-0.9885 2.9655,-2.9655 2.9655,-3.954 -1.9769,0 3.9539,-3.9539 -0.9885,-2.9654 -0.9885,0 -1.977,0.9885 -2.9654,1.977 -0.9886,0.9884 0,3.9539 0.9884,3.9539 -0.9884,0.9885 -0.9884,0.9885 -0.9884,1.977 0.9884,0 0.9884,0 0.9884,-0.9885 z M 0.157015,75.4386 C 3.11357,78.9135 4.07888,72.7092 4.92178,72.1261 7.27749,68.6709 8.77866,64.8387 9.02207,61.3477 8.87695,57.9529 9.96202,58.2407 8.07378,55.9827 6.54105,51.4644 6.03609,46.0795 6.93935,41.307 c 3.25735,-3.7962 6.13935,-2.7475 9.33135,-5.5727 0.1043,-3.1105 1.6058,-3.2338 0.9501,-6.1886 1.1864,-2.0237 2.4784,-5.8386 6.0619,-8.3362 1.8502,-2.9853 6.2891,-5.0759 5.8665,-8.8508 C 31.5531,9.54166 34.5595,7.73594 38.2805,7.22416 37.2058,0.127464 45.3702,7.43104 48.7082,4.34863 51.1634,2.80704 47.7456,-1.37824 52.0835,0.456662 56.57,2.73039 61.0062,5.00451 66.575,6.21855 c 3.0091,1.79129 3.7645,6.62015 3.2533,7.24385 1.8013,0.9731 1.5139,5.2573 1.5043,6.9682 4.0402,4.9086 -4.0293,4.7859 -7.0809,3.7578 -1.0894,0.8546 0.3854,2.3125 -2.2571,2.0933 -2.2502,0.7008 -3.4885,0.683 -2.0515,2.6792 -1.0294,1.4259 -3.8047,2.6589 -1.719,3.3156 0.1064,1.4404 3.2821,2.4998 -0.0214,2.9542 -2.8594,5.4736 -9.6339,6.0976 -14.6097,8.5934 -1.1867,1.7396 -3.3211,4.7676 -4.6823,1.3895 2.3157,2.5366 -3.3581,4.7261 -1.0318,6.1989 -1.7506,0.5993 0.4285,5.4304 -2.1368,3.268 -0.6181,3.7398 0.133,9.5093 4.8624,9.6547 2.7852,1.2679 9.6018,5.2194 4.9056,7.7502 -3.6802,0.4787 -0.6527,2.198 -0.7944,2.3431 -1.1799,1.0488 -4.1789,3.9776 -5.0194,1.0101 0.9774,2.7961 -3.7619,3.5691 -5.1607,4.0032 -4.656,-0.877 3.4582,1.1536 -0.6715,1.1755 -1.7974,-0.4322 3.1,3.6881 -0.1569,4.9201 1.0014,3.2195 0.1569,11.574 -5.055,13.1692 -4.0765,0.345 -9.6389,1.2036 -9.3085,6.2294 -2.2455,0.502 -6.168,0.576 -7.7851,-0.312 2.0993,-3.417 -4.33387,-4.8219 -1.0097,-8.407 C 9.03656,92.4264 3.53984,89.0366 4.57408,83.8517 6.96671,80.8074 1.59524,83.0506 3.0011,80.6166 0.965139,84.3358 -0.494729,77.4575 0.157128,76.3698 Z M 24.8689,107.07 c -0.9885,-0.989 -2.9655,0 -1.9771,0.989 1.977,0.988 2.9657,-0.989 1.9771,-0.989 z M 52.5464,67.5308 c 0.4006,0.0266 0.8143,-0.2385 0.9223,-0.6318 0.0689,-0.0801 0.0092,-0.3198 0.1057,-0.3206 0.2021,0.1842 0.4283,0.3806 0.713,0.4046 0.1671,-0.0258 0.2515,-0.2178 0.2251,-0.3714 0.0719,-0.07 0.2856,-0.1627 0.0927,-0.2397 -0.391,-0.2173 -0.8137,-0.3693 -1.2309,-0.5273 -0.2585,-0.094 -0.5187,-0.1833 -0.7781,-0.2747 -0.1028,0.0519 -0.0323,0.1847 -0.0498,0.2736 0,0.2329 0,0.4658 0,0.6988 -0.2153,-0.1956 -0.4497,-0.4161 -0.7548,-0.4404 -0.1792,0.0306 -0.2469,0.2385 -0.2318,0.3985 -0.0149,0.4021 0.2107,0.8361 0.6066,0.9702 0.1215,0.0432 0.252,0.0621 0.3799,0.0602 z" />
            <path
                    id="path204_fill"
                    d="M 0.204766,14.8091 C -0.881116,12.4587 2.65065,11.0928 3.78417,13.2242 4.2244,15.0087 5.9842,15.0003 5.91862,13.026 c 0.45257,-1.7644 2.04017,0.1614 3.06865,-0.8659 0.55433,1.8658 3.76223,0.2105 5.22013,-0.2471 1.3593,-1.1052 3.6591,0.3456 4.3053,-0.9016 1.4613,0.2611 3.5294,-0.5026 4.0449,1.4444 1.7437,0.5885 0.6917,-1.7925 0.4743,-2.3607 -0.1854,-1.30538 -2.1716,-2.89934 0.0533,-3.64006 2.4249,0.05644 2.3211,-2.90833 4.5657,-2.95923 0.7268,-1.73409 2.3213,-1.23483 3.2142,0.11681 1.1831,1.01081 1.9111,-1.98321 2.9072,-0.00745 C 34.516,2.68505 35.6311,0.720501 36.6074,-8.35047e-6 39.2556,0.227009 41.631,1.75869 44.2125,2.10458 c 2.1493,-0.85771 4.9907,-0.40638 5.3176,2.27634 -0.4208,2.03947 1.8228,4.27373 -0.096,5.92518 -0.7581,1.0808 -3.593,-0.49586 -2.5467,1.5372 0.755,1.2235 -1.7848,1.6928 -0.8855,3.2629 0.3741,1.1189 0.4968,1.842 -0.8641,1.9233 -1.3686,1.1161 -1.9805,3.2356 -4.1828,2.534 -2.4989,-0.1789 -4.8976,-0.1561 -6.7882,1.6705 -1.8124,0.9273 -3.4891,-0.7614 -5.3436,-0.7475 -3.1951,-0.6402 -6.7694,0.4261 -9.6088,-1.5936 -1.1488,-0.678 -1.8309,-1.7317 -1.7144,-3.0127 -1.9277,1.1719 -4.2521,0.9021 -6.4218,0.9055 -0.2017,2.787 -3.82445,1.6305 -4.99664,0.263 C 4.53379,17.6333 2.19481,18.9989 1.90999,16.3021 0.927665,15.6827 0.535233,15.8519 0.20488,14.8091 Z" />
            <path
                    id="path205_fill"
                    d="m 36.5739,87.9103 v -0.9885 c 0,0 0.9884,0 0,0.9885 z M 2.43054e-5,16.7395 C 3.99535,16.6259 2.96014,12.6325 0.988454,10.8087 3.27656,8.64021 6.8139,10.8471 9.26702,9.20229 9.21393,6.95125 12.5331,4.16517 12.8503,7.84324 c 1.8247,0.13376 2.1691,3.00626 3.3979,2.64116 -0.109,-2.32032 1.7561,-3.76823 2.0387,-5.73009 0.7637,3.15203 3.2739,0.09539 4.7822,2.72021 2.002,0.55637 -2.1296,-3.70522 1.2414,-3.43081 3.2311,3.19034 -0.0885,-4.266253 3.4751,-1.83801 1.9005,1.4908 2.9313,-2.51635 5.5782,-1.281818 1.9716,-0.101344 4.8437,-2.419512 3.6946,0.696928 1.3316,4.25351 7.7714,1.42937 9.2457,3.8441 -2.5849,2.02372 2.8885,1.96141 0.0309,3.73738 0.8684,1.01061 1.021,1.56671 2.2416,3.21861 -1.0735,0.7538 -1.4596,-1.5893 -3.1915,-0.9074 -1.9527,-0.2698 -5.0558,2.455 -6.3691,1.8398 1.7209,-0.3621 -2.8265,0.2169 -1.2993,2.1352 1.6016,1.5411 2.7734,3.4833 0.3683,3.958 -1.7656,4.6604 4.1459,7.3282 7.3851,9.2784 4.5058,2.1026 2.4373,8.3108 6.5402,10.6984 2.8072,2.5606 6.3886,4.5375 10.3103,4.021 3.7964,-0.4019 2.717,1.9937 0.7434,3.5676 3.4114,2.5799 8.1571,3.139 11.5663,6.0544 3.0371,1.4221 7.8208,3.1356 6.4252,7.3117 -0.8083,2.6518 -4.0272,-1.1891 -4.3557,-2.7861 -1.3362,-0.5629 -3.9755,0.0688 -3.5522,-2.3015 -3.8003,0.4253 -5.56,4.6915 -4.6953,7.7845 3.3439,0.3453 5.9861,5.9311 1.2646,6.5003 -2.3375,1.7003 -0.5178,5.2558 -3.9831,6.4735 -1.4839,2.4511 -5.3459,1.4941 -2.8418,-1.3593 2.4237,-1.0559 -0.275,-4.6731 3.2512,-4.2858 -1.0923,-3.6551 -1.9723,-8.2009 -4.8575,-10.9121 -3.8136,2.422 -3.0215,-4.323 -6.0544,-4.8189 -2.588,0.1281 -2.64,1.1864 -2.3882,-1.4286 -3.4707,1.1552 -2.5382,-4.3965 -6.0138,-3.5986 -2.5958,-0.1367 -4.7679,-1.2185 -6.9195,-2.9231 -2.8567,-2.4041 -4.994,-5.8186 -8.371,-7.4946 -1.4226,0.1637 -2.1274,-4.3997 -4.8498,-4.6955 -1.7549,-3.3958 -1.4671,-8.8784 -6.344,-9.4068 -2.5794,-1.1438 -6.3116,-4.2402 -8.4831,-0.4777 -1.3787,1.1608 -6.0157,5.553 -5.94631,1.6679 C 8.62698,23.2459 -0.0995621,25.6432 1.45578,21.431 4.43764,19.0328 0.861889,18.8445 2.43054e-5,16.7395 Z M 10.8734,56.2792 c 0.3953,-0.9251 -1.40977,-0.9571 -0.98862,-1.9434 0,-0.6702 0,-1.3405 0,-2.0107 0.83272,0.988 2.43762,0.7337 3.28502,-0.1014 1.1847,-0.8617 2.3512,-1.7581 3.5384,-2.6093 0.8992,-0.5234 1.6498,0.2089 1.9664,0.9425 0.3825,0.2885 1.1101,-0.3156 0.7631,0.3783 0.2221,0.5442 -0.1729,0.9055 -0.3722,1.2709 0.4522,0.5549 1.4433,0.5236 1.6638,1.3878 0.6858,1.1797 0.4606,2.8116 -0.5809,3.7106 -0.5485,0.8969 0.1349,1.8589 0.3361,2.7483 0.1649,1.0236 -0.0931,2.0714 -0.585,2.9674 -0.33,1.209 0.6998,2.4156 0.1741,3.5985 -0.4428,0.7755 -1.432,0.4257 -2.0658,0.1188 -0.6743,-0.3811 -2.1456,-0.9256 -2.2998,0.2612 0.1369,0.9701 -0.5059,2.0481 -1.5394,2.1288 -1.0326,0.2845 -1.7624,-0.5731 -2.5701,-0.9557 -0.7541,-0.1256 0.4395,-0.6071 0.2295,-1.1376 0.1317,-0.9726 -0.0755,-1.9566 0.0624,-2.9297 -0.0261,-0.6977 -0.388,-2.2077 0.7945,-1.8927 0.3262,-0.0844 0.0969,-0.5864 0.1653,-0.8648 -0.6558,-0.3719 -1.2599,-1.2712 -1.0387,-2.1741 0.3874,-1.0572 -0.5309,-1.885 -0.9175,-2.755 l -0.0205,-0.1393 v 6e-4 z M 42.5047,80.991 c -0.9886,0 -1.977,-0.9886 -2.9655,-0.9886 -0.9884,-1.9768 1.9769,-2.9652 1.9769,-3.9536 0.9886,0.9884 1.9771,0 2.9654,0 1.977,-1.9773 2.9655,0.9884 5.9309,0.9884 0.9885,0 1.9769,0 2.9655,0 0.9884,-0.9884 2.9655,-1.977 3.9539,-1.977 0.9885,0 0.9884,0.9886 1.977,0 0,0 1.9769,-0.9887 2.9655,0 -0.9886,0.9886 -1.977,1.977 -2.9655,2.9654 0,0.9884 -0.9886,2.9653 -0.9886,3.9541 0,0.9885 1.9771,1.9769 0.9886,2.9653 0,0.9883 -0.9886,1.9768 0,2.9653 -1.977,0 -2.9654,0 -3.9539,0 -1.977,-0.9885 -1.977,-1.977 -2.9656,-2.9653 C 50.4124,83.9566 49.4241,83.9566 47.447,82.9682 45.47,81.9797 44.4815,80.991 42.5047,80.991 Z" />
            <path
                    id="path206_fill"
                    d="M -3.09275e-5,6.72852 C 0.303626,6.03281 0.106321,4.82989 1.07186,4.65773 1.78286,4.51857 1.98984,3.5991 2.32203,3.03389 2.61982,2.41483 3.19721,1.51874 4.00292,1.83729 4.63,2.36183 5.81347,3.00667 6.03948,1.75809 6.23128,0.89121 7.22723,0.512911 7.97961,0.936916 8.83225,1.18873 9.71059,0.797933 10.53,0.577268 c 0.7656,-0.377227 1.8877,-1.050067 2.5263,-0.06612 0.5497,1.082642 1.409,1.970862 2.3639,2.706142 0.7263,0.63865 1.3627,1.52838 1.2786,2.54247 0.0888,0.9427 0.6654,1.85657 0.3807,2.81771 -0.719,0.80446 -1.8002,1.14624 -2.5815,1.87223 -0.9441,0.4501 -2.0056,0.1658 -3.0049,0.2292 -0.9335,-0.1643 -1.3607,0.9694 -2.19475,1.1913 -1.50817,0.7882 -3.25819,0.8818 -4.9235,0.771 C 3.47349,12.7979 2.06399,12.7659 2.072,11.5292 1.97829,10.437 0.783232,10.0147 0.594983,8.99639 0.434585,8.23441 0.429728,7.40624 -3.09275e-5,6.72841 Z" />
            <path
                    id="path207_fill"
                    d="M 0.0352318,13.8447 C -0.112685,13.1421 0.237947,12.6506 0.469695,12.0571 -0.782342,10.678 1.25005,10.2678 1.91465,9.36694 2.33517,8.15652 3.67186,7.43544 4.48334,6.43111 5.17333,5.62692 6.56575,4.58564 6.79199,3.93802 5.93889,3.04275 7.77348,2.15243 8.31391,3.21265 9.2241,3.51584 10.4388,1.64141 10.7791,2.14567 c 0.7064,0.6679 2.2525,-0.07003 3.2668,-0.07823 1.2206,-0.16077 1.1081,0.06837 2.2867,-0.55951 -0.2285,0.10693 -0.2105,0.19918 0.1052,-0.791586 0.1474,-1.255676 1.8624,-0.7017241 1.4125,0.440886 1.0211,0.83592 2.499,-0.660342 3.6844,-0.00932 0.9635,0.68357 2.6462,0.49712 2.6097,1.9999 0.1975,1.13037 -0.6113,2.07072 -1.3741,2.78818 1.3664,-0.10414 2.5388,0.65975 3.5174,1.51832 1.1019,0.9849 2.2907,0.12462 3.2277,-0.5188 1.4693,0.01993 -0.5067,1.84749 0.4348,2.59133 0.7237,1.02776 -0.5184,1.95056 -1.249,0.85726 -0.8651,-1.57017 -2.5249,1.215 -1.6507,1.4848 1.0477,-0.2021 0.7613,1.7765 -0.1371,0.6737 -0.9411,-1.5925 -2.2212,0.4177 -3.4156,-0.0385 -0.7934,-0.1116 -1.2014,-2.2765 -1.716,-1.6255 0.1451,1.2061 -0.1289,2.4199 -1.1518,3.1718 -0.427,0.6695 -0.2897,3.0107 -1.3317,1.466 -0.5202,-1.0771 -2.0677,-0.606 -2.622,-1.8579 -0.6661,-0.6679 0.0586,-2.711 -0.9996,-2.5948 -0.6181,0.5629 -0.8005,1.7811 -1.8028,1.7917 0.7653,1.0559 -0.4432,2.2682 -1.3427,2.7763 -1.1492,0.3225 -2.4023,0.3188 -3.59965,0.4362 C 6.91795,16.1532 4.81583,14.4085 4.96453,12.3125 4.83338,10.7014 2.83086,11.8512 2.07406,12.3255 1.41695,12.8357 0.924575,13.732 0.0352318,13.8438 Z" />
            <path
                    id="path208_fill"
                    d="M 2.15765e-5,31.3692 C 1.16402,28.7938 5.97477,27.2205 3.80729,23.7743 2.44702,22.0702 -0.443462,17.5886 3.58341,17.6004 c 2.52726,-0.1796 5.83171,0.164 7.26599,-2.4489 1.1819,-1.0936 4.9118,1.2825 3.3069,-1.7318 -0.2851,-3.1571 2.8918,-4.84791 5.1354,-6.3369 0.5351,-0.95848 -0.9594,-4.10282 1.6718,-4.13784 3.5274,0.17027 6.0599,-3.879316 9.6742,-2.743781 3.0954,0.449976 5.8978,2.534121 9.0639,2.297791 2.6966,-0.63677 6.1535,0.30574 7.0944,3.1021 -0.1172,2.94261 0.3027,5.80413 2.5427,7.94053 2.2241,1.7766 4.0483,4.2499 6.7417,5.2164 2.5285,0.1886 5.6152,3.8832 2.0874,5.2612 -1.8394,1.3507 -5.5006,-2.3586 -5.786,1.2252 0.9727,1.9428 1.6142,4.0266 2.1558,6.1786 0.0701,1.3414 -3.4285,0.9439 -4.6153,2.2125 -2.5621,0.8192 -0.7122,4.0863 -2.2185,5.0047 -2.3978,-1.9226 -5.5672,0.0902 -8.101,-1.4606 -1.3051,-1.4619 -4.0166,1.8521 -5.6835,-0.4845 -3.2042,-0.3047 -6.7155,0.4865 -9.4401,-1.7174 C 21.2793,33.8762 17.7946,34.7955 14.5511,33.8089 11.7434,32.9477 9.18628,34.5275 6.7935,35.7661 4.96083,37.1014 1.95361,37.253 2.62784,34.1539 2.80724,32.3908 1.82213,31.2116 2.15765e-5,31.3692 Z" />
            <path
                    id="path209_fill"
                    d="M 2.43054e-5,0.988483 C 2.43054e-5,-3.10911e-6 0.988416,0.988491 1.977,5.27317e-6 0.988416,0.988491 2.43054e-5,0.988483 2.43054e-5,0.988483 Z" />
            <path
                    id="path210_fill"
                    d="m -2.49603e-5,-1.25806e-6 c 0.9884699603,0 0.9884829603,0 1.9768549603,0 -0.988372,0 -1.9768549603,0 -1.9768549603,0 z" />
            <path
                    id="path211_fill"
                    d="M -1.19982e-5,1.61108e-6 H 0.987685 Z" />
            <path
                    id="path212_fill"
                    d="m 0.988446,6.41846e-7 c 0.988544,0 0.988544,0 0.988544,0 -0.988545,0 -0.988523,0 -1.9769741724,0 0.9884511724,0 0.9884301724,0 0.9884301724,0 z" />
            <path
                    id="path213_fill"
                    d="M -2.77414e-5,-3.30322e-7 H 0.987669 Z" />
            <path
                    id="path214_fill"
                    d="M 5.12289e-5,1.66675e-6 H 0.987634 c -0.9876617392,0 -0.9875827711,0 -0.9875827711,0 z" />
            <path
                    id="path215_fill"
                    d="m -1.22255e-5,5.6958e-7 c 0.9885812255,0 0.9886172255,0 1.9770922255,0 -0.988475,0 -0.988511,0 -1.9770922255,0 z" />
            <path
                    id="path216_fill"
                    d="m 0.987857,-2.20215e-7 c -0.987810842,0 -0.9878101341,0 -0.9878101341,0 0,0 -7.079e-7,0 0.9878101341,0 z" />
            <path
                    id="path217_fill"
                    d="m 0.987709,-2.20215e-7 c 0,0 -3.5e-5,0 -0.9876967836,0 0.9876617836,0 0.9876967836,0 0.9876967836,0 z" />
            <path
                    id="path218_fill"
                    d="m -1.0144e-5,-4.99776e-6 c 0,0.98764199776 3.46655e-5,0.98764199776 0.987697144,0 -0.9876624785,0 -0.987697144,0 -0.987697144,0 z" />
            <path
                    id="path219_fill"
                    d="M -6.25363e-6,-6.87988e-7 H 0.987804 c 0,0 -5.5e-5,0 -0.98781025363,0 z" />
            <path
                    id="path220_fill"
                    d="M 0.987884,-3.52344e-6 H -3.94488e-5 Z" />
            <path
                    id="path221_fill"
                    d="M 0.987704,3.23682e-6 H 7.45346e-6 c 0,0 3.459914e-5,0 0.98769654654,0 z" />
            <path
                    id="path222_fill"
                    d="M 0.987716,3.70605e-7 H 1.97426e-5 c 0.9877362574,0 0.9876962574,0 0.9876962574,0 z" />
            <path
                    id="path223_fill"
                    d="m 0.987868,2.87207e-6 c 0,0 -7.6e-5,0 -0.9879239918,0 0.9878479918,0 0.9879239918,0 0.9879239918,0 z" />
            <path
                    id="path224_fill"
                    d="m 2.42874e-5,-2.125e-6 c 0.9876987126,0 0.9876967126,0 0.9876967126,0 0,0 2e-6,0 -0.9876967126,0 z" />
            <path
                    id="path225_fill"
                    d="M 0.987721,-2.125e-6 H 2.42874e-5 Z" />
            <path
                    id="path226_fill"
                    d="M 0.828806,0.423673 C 3.65966,0.912994 0.740884,-0.711533 1.61187e-5,0.393715 L 0.361254,0.473767 Z" />
            <path
                    id="path227_fill"
                    d="m 0.779843,4.3396e-7 c -1.193427,0 -0.8738123,0 0,0 z" />
            <path
                    id="path228_fill"
                    d="m 1.3856,0.819652 c 0.16934,-2.282382 -3.07967,1.037298 -0.16953,0 h 0.16419 0.00557 z" />
            <path
                    id="path229_fill"
                    d="m 1.97686,87.9751 c -0.988451,0.9884 -0.988451,1.9769 0,1.9769 0,-0.9885 0,-1.9769 0,-1.9769 z M 2.9654,83.0326 c -0.98854,0.9885 -0.98854,1.977 0,1.977 0.98847,0 0,-1.977 0,-1.977 z M 16.8041,60.2975 c 0,0 0,0 0.9884,-0.9885 -0.9884,0 -0.9884,0 -0.9884,0 0,0 0,0.9885 -0.9885,0 0,0.9885 0,0.9885 0.9885,0.9885 z m 2.9655,-2.9654 c 0,-0.9885 -0.9885,-0.9885 -1.9771,0 0.9886,0 1.9771,0 1.9771,0 z m 0.9884,-0.9885 c 0.9884,0.9885 3.954,0 4.9424,-0.9885 -0.9884,-0.9885 -0.9884,-0.9885 -1.977,0 -0.9884,0 -1.9769,0 -0.9884,0 0,0 -0.9886,0 -1.977,0.9885 z M 35.5852,45.4703 c 0.9885,0 1.977,0.9885 2.9655,0 -0.9885,-0.9885 -1.977,0 -2.9655,0 z m 5.9309,-1.977 c -0.9885,0 -1.977,0 -1.977,0.9885 0.9885,0 0.9885,0 1.977,-0.9885 z m 18.781,-25.7006 c 0.3295,0 0.659,0 0.9885,0 -0.5088,-0.0708 -1.0764,0.0648 -1.4245,0.4618 -0.3506,0.1549 -0.3247,0.6175 -0.2034,0.9186 0.1153,0.2062 -0.332,0.7828 0.1121,0.6978 0.3089,-0.2027 0.6312,-0.3985 0.891,-0.6604 0.2606,-0.2529 0.6607,0.1213 0.3038,0.3221 -0.2653,0.2925 0.0709,0.6417 0.3914,0.6447 0.421,0.0682 0.893,-0.2048 0.9578,-0.6451 0.0799,-0.3043 0.3316,-0.835 0.7202,-0.6309 0.2488,0.1693 0.3294,0.6309 0.7016,0.5762 0.3964,-0.0909 0.3915,-0.5707 0.5487,-0.8626 0.2335,-0.3176 0.7142,-0.2923 1.0022,-0.0653 0.4575,0.3215 1.2087,0.3226 1.55,-0.1699 0.2919,-0.4635 0.1572,-1.1642 -0.3285,-1.4424 -0.2602,-0.2659 -0.3586,-0.7225 -0.7624,-0.8207 -0.4704,0.0471 -0.5176,0.6979 -0.9729,0.7749 -0.8365,0.2327 -1.4707,0.8669 -2.0535,1.4765 -0.4396,0.1542 -0.3525,-0.5784 -0.0488,-0.6883 0.2155,-0.2585 0.4511,-0.5127 0.599,-0.8175 0.1345,-0.3254 0.0581,-0.6979 -0.0528,-1.0183 -0.0961,-0.2993 -0.4354,-0.3801 -0.7019,-0.2721 -0.2773,0.1035 -0.5467,0.2528 -0.7664,0.4513 -0.26,0.2766 -0.3064,0.7565 -0.0321,1.0402 0.187,0.374 -0.2489,-0.0288 -0.427,0.0374 -0.3185,0.002 -0.5998,0.2082 -0.7642,0.4696 -0.0717,0.0782 -0.1451,0.1561 -0.2279,0.2224 z m 8.8964,-4.9424 c 0.3295,0 0.659,0 0.9885,0 -0.4008,-0.1139 -0.8348,0.3233 -0.7065,0.723 0.3195,0.1341 -0.1873,0.5551 -0.3118,0.2655 -0.2721,0.0601 -0.6757,-0.1119 -0.8638,0.0762 0.1349,0.2534 0.4244,0.3741 0.6696,0.4982 0.6078,0.2537 1.3881,0.1889 1.8627,-0.2992 0.2479,-0.2231 0.5918,-0.342 0.9225,-0.2752 0.7934,0 1.5869,0 2.3804,0 -0.2712,0.2482 -0.7394,-0.1796 -0.5267,-0.4746 0.2489,-0.3178 0.6156,-0.5528 1.0196,-0.6051 0.3208,-0.1596 0.2792,-0.711 -0.0606,-0.8225 -0.6016,-0.4239 -1.1922,-0.8632 -1.8031,-1.2737 -0.3299,-0.1289 -0.6703,0.3582 -0.419,0.6167 0.1535,0.3314 -0.3397,0.6778 -0.6069,0.4388 -0.3402,-0.0943 -0.6911,-0.2473 -1.0504,-0.1662 -0.2556,0.2102 0.384,0.6516 -0.1307,0.7216 -0.4207,0.1333 -0.8715,0.0209 -1.2961,0.1261 -0.2323,0.0224 -0.5568,-0.0982 -0.6955,0.1573 -0.1518,0.4323 0.3927,0.2754 0.6278,0.2931 z m 9.8847,-2.96547 c 0.3295,0 0.659,0 0.9885,0 C 79.5406,9.3532 78.8453,8.95624 78.0898,8.89635 78.3335,8.79229 78.6348,9.11019 78.4808,9.34076 78.3607,9.53743 78.2721,9.79545 78.0314,9.87341 77.5899,9.88385 77.1752,9.529 77.1098,9.09355 77.031,9.32966 76.944,9.58784 76.7315,9.73794 c 0.1086,0.13802 0.2227,0.34766 -0.0423,0.37216 -0.2389,0.1222 -0.4739,0.2572 -0.6774,0.4335 -0.1981,0.0361 -0.0428,0.4402 -0.3186,0.332 -0.1569,0.0137 -0.4206,-0.0348 -0.5107,0.0188 0.1755,0.2291 0.4641,0.3193 0.7157,0.4369 0.7437,0.2699 1.5987,0.2666 2.3232,-0.062 0.4846,-0.2436 0.858,-0.7448 0.8549,-1.30032 0.0274,0.0095 -0.0247,-0.09417 0.0019,-0.08415 z M 78.3344,7.78554 c -0.0186,0.44744 0.1472,0.96148 0.5745,1.17055 0.5266,0.24972 1.1299,0.13897 1.6713,0.00261 C 81.5161,8.71321 82.3898,8.28223 83.232,7.81395 82.9605,7.73994 82.6783,7.81575 82.4025,7.78453 82.1062,7.78024 81.7988,7.80799 81.5124,7.72213 81.2856,7.58101 81.2756,7.27273 81.3241,7.03759 81.3521,6.7814 81.0586,6.74503 80.8911,6.85038 80.0004,7.05767 79.2751,7.75793 78.3344,7.78554 Z m 8.6517,-0.86618 c 0,0.9885 1.977,0.98849 1.977,-0.98846 -0.9886,0 -0.9885,0.98846 -1.977,0.98846 z M 99.8363,5.9309 h 0.9887 C 99.8363,4.94239 98.8477,4.9424 97.8593,4.9424 c 0,0.9885 0.9884,0.9885 1.977,0.9885 z M 103.79,3.95394 c -0.988,0.98846 -2.965,0 -3.9537,0.98846 0.9887,0.9885 1.9767,-1e-5 1.9767,0.9885 0.989,0 2.966,-0.9885 1.977,-1.97696 z m 1.977,0 c 0.989,-0.9885 0,-0.98851 -0.988,-0.98851 -1.977,0 0,1.97697 0.988,0.98851 z m -0.988,-2.965461 c 0.988,0 0.988,0.988501 1.977,0 0,0 -0.989,-0.98848073584 -1.977,0 z m 11.861,0 c -0.988,0 0,1e-6 0,-0.988479 -0.988,0 -0.988,0 -1.976,0 0,0 -0.989,0 -1.977,0 0.988,0 0.988,0.988479 0.988,0.988479 0.989,0.988501 1.977,0 2.965,0 z M 0.98843,72.1593 C 3.34317,72.2365 4.5403,70.631 1.72284,69.7598 3.85811,68.0703 10.0181,68.9423 4.16043,68.3144 1.5935,65.73 9.72721,65.6876 11.6656,65.3445 c 3.2306,0.9865 -3.93584,-3.1868 1.1312,-2.7909 2.7347,0.6872 7.3158,-0.6837 1.9287,-1.2808 -0.3679,-1.8509 6.5346,0.6391 7.31,-2.9985 3.9352,-3.4685 15.3805,0.3296 14.9063,-5.7657 -0.2275,5.2041 -10.5644,2.7048 -5.573,-1.7121 2.768,-2.3184 10.2363,-2.5424 10.3115,-5.1645 -7.4164,-0.8251 8.1322,-1.1849 2.0023,-3.8821 3.833,-2.4573 2.9516,-6.6818 7.3828,-6.449 -3.8171,0.5284 -1.0517,-3.566 -0.4308,-3.1589 3.9521,-1.2529 -2.0585,-2.3789 2.0491,-2.5184 3.154,-0.4329 8.0512,-1.1926 5.3968,-3.1465 5.3735,0.1489 2.6804,-2.6575 1.1189,-2.8866 2.2117,-0.4572 3.7769,-0.6192 2.3883,-2.0951 1.5198,-0.6769 7.0477,2.7294 4.5627,-1.2058 3.1164,-1.5085 7.1544,0.1568 2.1944,-1.7491 4.2359,-2.3357 6.7887,-6.9459 12.3941,-6.4601 0.2424,-3.53887 3.2944,-1.1365 5.9512,-2.10492 -0.4607,5.34602 5.0907,-4.10369 8.7514,-1.45783 -6.1809,-3.72155 4.5905,-2.27627 5.7145,-0.87258 4.535,-1.32839 8.155,-9.68825 13.317,-5.07374 -3.837,2.81616 0.017,4.29652 2.043,0.80142 3.502,-2.381444 4.832,3.63403 7.414,-1.14859 1.842,-3.60215 5.52,-0.61704 3.554,1.31891 2.76,0.67157 8.793,-3.5279668 12.876,0.55454 6.96,3.80814 -5.785,2.41699 -5.597,3.99548 1.708,1.24279 11.858,1.49253 5.286,3.53321 -2.712,2.3822 -3.446,1.674 -4.602,-0.8558 -7.127,-5.36877 -18.035,-3.786 -19.059,4.511 -2.99,4.576 -2.809,-0.6656 -10.116,1.6207 -3.266,1.0221 -4.762,1.2814 -9.6885,-3.0552 -3.7104,-2.004 -10.6857,0.0132 -10.4798,5.4117 -6.9848,-1.5273 -14.6539,1.4712 -19.2498,6.8317 -1.5552,7.2188 -9.9148,10.0147 -12.2167,16.9285 -0.6116,4.2753 -1.0694,9.7364 -6.7207,9.0248 -8.6977,4.6393 -4.0593,15.1984 -1.6037,21.7956 -0.1505,6.3798 -3.6737,11.2823 -6.7025,16.6674 -2.3763,0.7048 -6.6516,-9.6242 -6.646,-1.657 -6.5157,2.1579 -10.7315,9.0608 -17.6967,9.8707 C 11.2946,99.4067 2.56449,95.1677 5.83495,91.2865 10.8554,92.3541 3.61105,88.5158 9.00639,88.2318 7.85305,88.4705 7.42268,86.2625 4.71076,87.5426 -0.814591,88.6385 7.64765,82.7439 8.7775,81.4107 16.9572,76.5021 -1.4064,85.6994 4.21365,78.4614 2.61889,78.7835 0.0619882,77.474 3.21009,77.221 1.78671,70.1462 15.333,78.1775 15.1263,73.1658 10.2579,72.9904 5.15979,76.8316 0.98843,72.1593 Z M 20.758,58.3206 h 0.9884 c 0,-0.9885 -0.9884,-0.9885 -0.9884,0 z M 1.97686,68.2054 c 0,0 0,0 0.98854,0.9885 -0.98854,0 -1.977024,0 -2.9654,-0.9885 0.988376,0 0.988409,0 1.97686,0 z" />
            <path
                    id="path230_fill"
                    d="M 0.297825,7.44586 C -1.75574,3.3974 7.51829,3.58964 6.52802,2.31382 c 2.09339,-3.55036 6.20148,-2.508675 8.87668,-0.2543 2.8358,-1.586176 6.4299,-0.19846 9.6051,-0.54456 4.2766,1.7974 8.9406,1.18207 13.3864,1.11698 3.7471,1.58085 6.8564,-0.52448 10.6503,0.88863 3.9872,-0.12463 5.6355,2.36447 9.1893,3.64748 2.5573,1.0783 7.1344,2.81286 9.2882,1.15259 3.3014,-2.08075 5.4592,4.18566 9.1609,3.01026 2.7498,1.4352 7.3647,-2.19113 8.1518,1.7305 0.1366,3.971 -4.1466,5.0842 -6.5498,7.1313 -3.1407,1.9636 -8.2886,0.5914 -10.3053,4.9349 -2.2411,4.3991 -8.3725,6.4783 -8.4116,12.0172 -1.6478,2.9204 6.2152,6.091 0.6726,7.3259 -3.8863,0.6179 -3.9778,6.9487 -4.6713,7.4402 -1.9849,1.8463 -6.5671,0.5923 -7.7208,4.4234 -0.823,2.0588 -1.2091,3.482 -3.6229,2.5423 -4.2807,1.9623 -9.3276,0.4444 -13.9794,1.038 -2.8737,1.1691 -6.3489,2.4197 -7.9018,5.4136 -4.2349,1.4895 -7.0149,-3.3769 -6.1115,-6.4429 1.207,-1.6761 -2.0497,0.8299 -2.3254,-1.5551 -0.8861,-1.8841 -2.2899,-2.5755 -3.8239,-1.3301 -4.60685,-2.2814 0.3738,-6.5355 2.0741,-9.0148 -5.25098,-1.2709 3.2771,-7.4572 -1.5128,-9.8697 -3.56031,-3.3691 3.4902,-0.6532 3.0014,-4.4091 -0.9382,-3.3516 3.2454,-5.276 1.0023,-8.6357 -0.4071,-2.2659 7.6736,-4.3232 3.9589,-6.5962 -1.9395,-0.1673 -1.1341,-3.4709 -3.912,-2.235 -2.5512,0.54 -6.77354,2.3015 -8.31355,-0.0261 1.39984,-3.8376 -6.930505,2.5372 -4.27527,-1.6313 0.54785,-0.5566 1.953,-2.749 0.16623,-1.194 C 3.50398,11.0381 1.19921,11.0997 2.87538,9.65255 0.168624,10.6553 1.42317,8.8903 1.69559,8.33179 1.0007,8.53498 0.340635,8.14316 0.297825,7.44583 Z M 71.4683,42.0431 c -1.9768,-0.9885 -0.9884,-1.9773 0,-1.9773 0,-0.9885 0.9886,-0.9885 0.9886,0 0.9884,0 -0.9886,0.9888 -0.9886,1.9773 z m 12.8502,-4.9426 c -0.9884,0.9884 -0.9884,0 -1.9768,0 -1.9769,0 -0.9884,-1.9768 -2.9655,-0.9884 -1.977,0.9884 0,-0.9884 0,-1.977 1.9771,-0.9887 2.9654,-0.9887 4.9423,-1.9771 -0.9884,0 -0.9884,0.9884 0,1.9771 0,0 0.9886,-0.9887 1.9771,0 0,0 -1.9771,1.977 -1.9771,2.9654 z m 3.9541,-4.9425 c 0.9884,-1.9768 3.9539,-0.9885 3.9539,0.9884 -0.9885,0 -2.9655,0 -3.9539,-0.9884 z" />
            <path
                    id="path231_fill"
                    d="M 1.31187,24.2884 C 1.6526,22.5742 3.98242,22.1009 4.08535,20.1733 5.11599,18.0051 5.69492,15.6579 6.31849,13.3588 7.21624,12.6006 7.13148,11.4726 6.58695,11.6845 7.68056,9.59135 7.18532,7.21454 6.88554,4.99403 6.8725,4.1971 7.12408,3.68108 6.52816,3.25594 7.11927,1.53444 9.14091,1.11615 10.4696,0.118545 12.1678,-0.462672 11.6608,1.2486 10.808,1.89205 c 0.5406,1.67344 3.1534,-0.87054 4.5526,-0.07916 1.3289,1.2075 2.7205,0.62292 3.8433,-0.4955 1.3033,-0.23028 3.9419,0.11422 2.9935,1.94981 0.7407,0.89095 2.9604,1.55814 1.3086,2.93273 -0.875,1.87359 -4.5396,2.16406 -3.7205,4.52127 0.2601,1.6139 0.8578,3.5078 -0.2314,4.9457 -1.6581,-0.0997 -1.4779,1.7418 -0.7403,2.6047 0.0747,2.2414 -3.2015,2.8217 -4.18,3.2723 1.2923,1.3016 1.8405,3.2078 2.6191,4.8739 -0.3966,1.9695 -3.1705,3.6151 -1.6171,5.9123 0.9914,0.7442 1.9794,1.8726 0.451,2.7584 -1.4378,1.3187 -3.3808,2.7148 -2.6459,4.9724 0.6372,2.1335 -1.7254,3.5426 -3.58894,3.3567 C 8.13144,43.4251 6.75966,41.9358 4.98656,42.3302 3.9913,42.2505 1.63113,43.67 3.06394,41.9148 4.3986,39.7346 4.72299,37.2764 4.33595,34.8593 4.65894,33.8431 4.61508,32.0442 4.48047,31.4977 5.52427,31.5439 5.283,29.6783 4.46057,30.8947 3.21425,31.4527 0.733535,31.5069 2.35682,29.7855 2.79188,28.6359 5.02476,29.6542 3.94583,27.9834 2.39042,26.1776 2.35284,30.4669 0.415318,29.0863 -0.753465,27.9476 0.89283,26.3767 1.1121,25.0862 1.19835,24.8258 1.26886,24.5595 1.31187,24.2884 Z" />
            <path
                    id="path232_fill"
                    d="M 4.71554e-5,24.9946 C 1.58162,25.8329 3.6126,23.6602 1.21691,23.0173 4.53428,23.7347 2.3356,21.6283 0.267934,22.1837 0.55775,17.9571 7.52385,21.6714 9.64602,18.3764 c 2.65608,0.7598 5.03628,3.7026 7.66858,1.7991 2.6947,0.0308 5.8683,0.3948 4.2459,-3.0507 -0.0397,-2.5281 -4.211,-6.3457 0.8496,-6.0141 2.4317,0.7521 1.3286,3.8891 4.6357,3.0896 1.9444,0.3681 7.8101,0.1889 7.0463,-0.9889 -3.4475,-1.7238 2.4115,-4.01723 4.2299,-3.47133 4.0518,-0.60775 5.0011,-4.31104 4.8811,-7.56414 3.2097,-4.91586 7.6079,-0.24523 10.6957,1.7586 1.2443,1.92567 5.2004,2.01313 5.4654,3.10667 -0.4164,4.6728 6.035,-1.18422 5.5501,3.2927 2.2389,3.6929 6.8835,1.6754 9.9188,3.6754 2.5584,2.6339 6.3713,1.4941 9.4766,2.733 2.7066,1.7081 -2.6334,4.4503 -2.0911,7.3898 -0.3261,3.3606 -1.5735,5.704 -4.7285,6.5542 -0.7249,3.6164 -6.9319,5.2064 -5.8803,9.6385 1.6159,-4.9351 6.7981,-0.7875 5.4884,2.9076 -0.4152,2.6386 2.7789,5.5656 -1.4276,6.5051 -0.3564,1.5876 2.981,2.8471 1.0953,5.0297 -1.6944,4.5247 8.2876,1.25 3.7168,5.8414 -2.5505,1.9085 -5.3529,4.0198 -7.5287,5.7248 -3.594,1.5162 -7.8511,-1.9787 -9.4894,-3.0465 -0.7098,1.18 -2.3577,-1.4873 -2.1221,0.8562 -3.3386,-2.4484 -7.8469,-0.5632 -10.5188,2.024 -1.1574,2.5317 0.9083,7.8844 -3.9993,6.4208 -4.726,1.066 -9.4973,-5.7068 -13.4703,-2.4327 -4.3252,-0.1188 -8.807,-1.8648 -13.1471,-3.0392 -0.1791,-1.5985 -2.3969,-2.5857 -2.442,-2.7436 2.3184,-3.7557 3.2424,-8.3126 4.154,-12.5246 -1.2771,-3.3163 1.8952,-7.941 3.6146,-2.786 1.1969,2.9408 1.1433,1.479 0.2179,-0.6587 -1.0819,-1.9788 -4.6947,-3.6004 -2.2445,-5.334 -0.6364,-4.3329 -7.3876,-5.1293 -6.8194,-9.7894 -0.979,-2.3681 4.8952,-1.6794 0.3609,-1.7065 -2.8,1.046 -1.7448,-1.4656 -2.2723,-1.9411 -2.0095,-1.0873 -2.9855,-0.2953 -4.4159,-0.45 C 9.09889,25.7753 4.67167,27.4578 1.75939,26.0988 1.10098,25.8674 0.486458,25.4961 4.71554e-5,24.9946 Z M 87.9746,72.4416 c 0.7603,0.1129 0.8597,-0.8447 1.306,-1.2292 1.0291,-0.7655 2.4382,-0.7699 3.4505,-1.5757 0.6772,-0.2422 0.7725,-0.9416 0.6761,-1.5897 -0.15,-0.6101 0.8468,-0.4969 0.5259,0.0457 0.1745,2.1301 0.9092,4.181 0.9608,6.3254 -0.7812,2.3889 -1.824,4.6831 -2.9653,6.9194 -0.2596,-0.7851 -1.1372,-1.0137 -1.7241,-1.4851 -0.6581,-0.2043 -0.9724,-0.9856 -0.5078,-1.4368 -0.3212,-0.085 -1.0439,0.0296 -0.6339,-0.5269 0.2217,-0.462 1.3965,-1.2119 0.5109,-1.559 -0.4741,-0.0891 -1.2006,-0.4003 -0.82,-0.954 -0.5047,-0.2765 -0.6862,-0.8628 -0.4583,-1.3997 0.0056,-0.3519 0.8582,-0.6298 0.2068,-0.5016 -0.4492,-0.0749 -0.6735,-0.6351 -0.5276,-1.0328 z" />
        </defs>
    </svg>

</div>

<?php get_footer(); ?>
