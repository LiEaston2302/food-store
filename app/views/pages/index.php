<?php require APPROOT . "/views/inc/header.php"; ?>
<!-- mfn_hook_content_before -->
<div id="Content">
    <div class="content_wrapper clearfix">

        <div class="sections_group">

            <div class="entry-content">

                <div class="section mcb-section" style="padding-top:120px;padding-bottom:20px;background-color:#fafaf9">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-sixth column_placeholder">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="column mcb-column two-third column_column column-margin-50px">
                                    <div class="column_attr clearfix align_center">
                                        <h1>Food categories</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth valign-top clearfix" style="padding:0 5px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <a href="<?php echo URLROOT; ?>/pages/products">
                                        <div class="column_attr clearfix align_center" style="background-color:#fff;padding:50px 5% 30px;border-radius:20px;"><img src="<?php echo URLROOT; ?>/images/icon1.png" />
                                            <hr class="no_line" style="margin:0 auto 15px" />

                                            <h4>Fruits</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth valign-top clearfix" style="padding:0 5px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <a href="<?php echo URLROOT; ?>/pages/products">
                                        <div class="column_attr clearfix align_center" style="background-color:#fff;padding:50px 5% 30px;border-radius:20px;"><img src="<?php echo URLROOT; ?>/images/icon2.png" />
                                            <hr class="no_line" style="margin:0 auto 15px" />

                                            <h4>Vegetables</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth valign-top clearfix" style="padding:0 5px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <a href="<?php echo URLROOT; ?>/pages/products">
                                        <div class="column_attr clearfix align_center" style="background-color:#fff;padding:50px 5% 30px;border-radius:20px;"><img src="<?php echo URLROOT; ?>/images/icon3.png" />
                                            <hr class="no_line" style="margin:0 auto 15px" />

                                            <h4>Dairy</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth valign-top clearfix" style="padding:0 5px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <a href="<?php echo URLROOT; ?>/pages/products">
                                        <div class="column_attr clearfix align_center" style="background-color:#fff;padding:50px 5% 30px;border-radius:20px;"><img src="<?php echo URLROOT; ?>/images/icon4.png" />
                                            <hr class="no_line" style="margin:0 auto 15px" />

                                            <h4>Meat</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-fifth valign-top clearfix" style="padding:0 5px">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <a href="<?php echo URLROOT; ?>/pages/products">
                                        <div class="column_attr clearfix align_center" style="background-color:#fff;padding:50px 5% 30px;border-radius:20px;"><img src="<?php echo URLROOT; ?>/images/icon5.png" />
                                            <hr class="no_line" style="margin:0 auto 15px" />

                                            <h4>Herbs</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="section mcb-section" style="padding-top:30px;padding-bottom:85px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_center">
                                        <h1>Featured products</h1>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line" style="margin:0 auto 40px" />
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <div class="woocommerce columns-4">
                                            <div class="products_wrapper isotope_wrapper">
                                                <ul class="products">
<?php
$count = 0;
$end = 12;
foreach ($data['products'] as $product) :
    $count++; ?>
    <li class="isotope-item product type-product first instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">

        <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
            <div class="image_wrapper">
                <a href="<?php echo URLROOT; ?>/pages/product">
                    <div class="mask"></div><img src="<?php echo URLROOT; ?>/images/products/<?php echo ($product->name) ?>.jpg" class="scale-with-grid wp-post-image" />
                </a>
                <div class="image_links double">
                    <a rel="nofollow" href="index20d3.html?add-to-cart=" 117" data-quantity="1" data-product_id="117" class="add_to_cart_button ajax_add_to_cart product_type_simple"><i class="icon-basket"></i></a><a class="link" href="<?php echo URLROOT; ?>/pages/product"><i class="icon-link"></i></a>
                </div>
            </div><a href="<?php echo URLROOT; ?>/pages/product">><span class="product-loading-icon added-cart"></span></a>
        </div>
        <div class="desc">

            <h4><a href="<?php echo URLROOT; ?>/pages/product">
                    <?php echo ucwords($product->name) ?>
                </a></h4>

            <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&dollar;</span>
                    <?php echo ($product->price) ?>
                </span></span>

        </div>

    </li>
    <?php if ($count == $end) {
        break;
    } ?>
<?php endforeach; ?>
                                            </div>

                                            </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section mcb-section no-margin-v bg-cover" style="padding-top:140px;padding-bottom:140px;background-image:url(<?php echo URLROOT; ?>/images/home-food.jpg);background-repeat:no-repeat;background-position:center;background-attachment:fixed;background-size:cover;-webkit-background-size:cover">
                <div class="section_wrapper mcb-section-inner">
                    <div class="wrap mcb-wrap one valign-top clearfix">
                        <div class="mcb-wrap-inner">
                            <div class="column mcb-column two-third column_column">
                                <div class="column_attr clearfix">
                                    <h2>Fresh products with
                                        <br> great taste
                                    </h2>
                                </div>
                            </div>
                            <div class="column mcb-column one column_divider">
                                <hr class="no_line" style="margin:0 auto 0px" />
                            </div>
                            <div class="column mcb-column two-fifth column_image">
                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                    <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo URLROOT; ?>/images/home-logos.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require APPROOT . "/views/inc/footer.php"; ?>