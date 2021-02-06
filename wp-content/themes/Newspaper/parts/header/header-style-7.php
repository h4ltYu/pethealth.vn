<!--
Header style 7
-->

<div class="nef-hd-01 td_stretch_content_1200">
    <div class="td-container td-header-top">
        <div class="d_flex">
            <div class="head1_col1">
                Thời gian làm việc: <b>8h00 - 22h00</b> từ <b>Thứ 2</b> đến <b>Chủ nhật</b>
            </div>
            <div class="head1_col2">
                <span>Hotline : <a>024 2242 8882</a></span>
                <!--<span>Cấp cứu: <a>0904 428 882</a></span>-->
            </div>
<!--            <div class="head1_col3">-->
<!---->
<!--            </div>-->
        </div>
    </div>
</div>
<style>

</style>
<?php
$header_bg_img_class = '';
if (!td_util::get_option('tds_header_background_image') == '') {
    $header_bg_img_class = 'td-header-background-image';
}
?>

<div class="td-header-wrap td-header-style-7 <?php echo $header_bg_img_class ?>">
    <?php if (!td_util::get_option('tds_header_background_image') == '') { ?>
        <div class="td-header-bg td-container-wrap <?php echo td_util::get_option('td_full_header_background'); ?>"></div>
    <?php } ?>

    <?php if (td_util::get_option('tds_top_bar') != 'hide_top_bar') { ?>
        <div class="td-header-top-menu-full td-container-wrap <?php echo td_util::get_option('td_full_top_bar'); ?>">
            <div class="td-container td-header-row td-header-top-menu">
                <?php td_api_top_bar_template::_helper_show_top_bar() ?>
            </div>
        </div>
    <?php } ?>

    <div class="td-header-menu-wrap-full td-container-wrap <?php echo td_util::get_option('td_full_menu'); ?>">
        <?php
        $menuSearchClass = '';
        if (!td_util::get_option('tds_search_placement') == '')
            $menuSearchClass = 'td-header-menu-no-search';
        ?>

        <div class="td-header-menu-wrap td-header-gradient <?php echo $menuSearchClass ?>">
            <div class="td-container td-header-row td-header-main-menu">
                <div class="td-header-sp-logo">
                    <?php locate_template('parts/header/logo-h1.php', true); ?>
                </div>
                <?php locate_template('parts/header/header-menu-2.php', true); ?>
            </div>
        </div>
    </div>

    <?php if (td_util::is_ad_spot_enabled('header')) { ?>
        <div class="td-banner-wrap-full td-container-wrap <?php echo td_util::get_option('td_full_header'); ?>">
            <div class="td-container-header td-header-row td-header-header">
                <div class="td-header-sp-recs">
                    <?php locate_template('parts/header/ads.php', true); ?>
                </div>
            </div>
        </div>
    <?php } ?>

</div>