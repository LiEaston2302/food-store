<div class="section mcb-section" style="padding-top:50px;padding-bottom:30px;background-color:">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one-fourth valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_image">
                    <div class="image_frame image_item no_link scale-with-grid no_border">
                        <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo URLROOT; ?>/images/footer-logo.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap one-third valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        <p>
                            Studio 132 Everystreet
                            <br> Manhatthan
                            <br> NY 1234 USA
                        </p>
                        <p>
                            Monday — Saturday: 8AM — 4PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap mcb-wrap  two-fifth valign-top clearfix">
            <div class="mcb-wrap-inner">
                <div class="column mcb-column one column_column">
                    <div class="column_attr clearfix">
                        <h3><sup>+44</sup> 333 014 4501</h3>
                        <hr class="no_line" style="margin:0 auto 10px" />

                        <p>
                            Email <span style="margin-right:10px;"></span><a href="#"><u><span>liam.easton@notarealemail.com</span></u></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
<footer id="Footer" class="clearfix">
    <div class="footer_copy">
        <div class="container">
            <div class="column one">
                <div class="copyright">
                    &copy; <?php echo CURRENTYEAR; ?> <?php echo SITENAME; ?></a>
                </div>
                <ul class="social">
                    <li class="facebook">
                        <a href=" https://www.facebook.com/kirkwoodcommunitycollege" title="Facebook"><i class="icon-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/KirkwoodCC" title="Twitter"><i class="icon-twitter"></i></a>
                    </li>
                    <li class="instagram">
                        <a href="https://www.instagram.com/kirkwoodlife/" title="Instagram"><i class="icon-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>



<!-- JS -->
<script src="<?php echo URLROOT; ?>/js/jquery-2.1.4.min.js"></script>

<script src="<?php echo URLROOT; ?>/js/mfn.menu.js"></script>
<script src="<?php echo URLROOT; ?>/js/jquery.plugins.js"></script>
<script src="<?php echo URLROOT; ?>/js/jquery.jplayer.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/animations.js"></script>
<script src="<?php echo URLROOT; ?>/js/translate3d.js"></script>
<script src="<?php echo URLROOT; ?>/js/scripts.js"></script>

<script src="<?php echo URLROOT; ?>/plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
<script src="<?php echo URLROOT; ?>/plugins/rs-plugin-6.custom/js/rs6.min.js"></script>

<script>
    var revapi1, tpj;
    jQuery(function() {
        tpj = jQuery;
        if (tpj("#rev_slider_1_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        } else {
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1024,778,480",
                gridwidth: 1240,
                gridheight: 800,
                spinner: "spinner9",
                spinnerclr: "#11181a",
                editorheight: "800,768,960,720",
                responsiveLevels: "1240,1024,778,480",
                disableProgressBar: "on",
                navigation: {
                    onHoverStop: false
                },
                parallax: {
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 0
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });
        }

    });
</script>

</body>

</html>