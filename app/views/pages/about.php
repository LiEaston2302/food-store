<?php require APPROOT . "/views/inc/header.php"; ?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section" style="padding-top:0px;padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner"></div>
                </div>
                <div class="section mcb-section" style="padding-top:100px;padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column five-sixth column_column">
                                    <div class="column_attr clearfix">
                                        <h1>1990</h1>
                                        <hr class="no_line" style="margin:0 auto 20px" />

                                        <h4 class="themecolor">Year Founded</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column five-sixth column_column">
                                    <div class="column_attr clearfix">
                                        <h1><?php print_r($data["employee-count"]) ?></h1>
                                        <hr class="no_line" style="margin:0 auto 20px" />

                                        <h4 class="themecolor">Employed farmers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column five-sixth column_column">
                                    <div class="column_attr clearfix">
                                        <h1><?php print_r($data["product-count"]) ?></h1>
                                        <hr class="no_line" style="margin:0 auto 20px" />

                                        <h4 class="themecolor">Different products</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_divider">
                                    <hr class="no_line" style="margin:0 auto 70px" />
                                </div>
                                <div class="column mcb-column one column_divider">
                                    <hr style="margin:0 auto 75px;background-color:#f1f1ef" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:0px;padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix align_center">
                                        <h2>Our team</h2>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count = 0;
                        $end = 3;
                        foreach ($data['employees'] as $employee) : ?>
                            <?php $count++; ?>
                            <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:0 1%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid no_border">
                                            <div class="image_wrapper"><img class="scale-with-grid" src="<?php echo URLROOT; ?>/images/<?php echo strtolower($employee->first_name . "-" . $employee->last_name) ?>.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column mcb-column five-sixth column_column">
                                        <div class="column_attr clearfix">
                                            <h4 style="margin-bottom:5px;">
                                                <?php echo ($employee->first_name . " " . $employee->last_name) ?>
                                            </h4>
                                            <p class="themecolor">
                                                <?php echo ($employee->job_title) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($count == $end) {
                                break;
                            } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php require APPROOT . "/views/inc/footer.php"; ?>