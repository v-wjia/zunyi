<div id="page">

    <div class="header-container">
        <div class="header">
            <div class="header-logo"><a href="/index.php">
                    <img src="/<?php echo cqtheme160301_get_path() ?>/img/logo_cq.png"/>
                    <img src="/<?php echo cqtheme160301_get_path() ?>/img/logo_bigdata.png" alt="" /></a>
            </div>
            <div class="header-nav">
                <div class="header-list">
                    <?php
                    $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                    print drupal_render($main_menu_tree);
                    ?>
                </div>

            </div>
            <div class="login-info">

                <?php if ($page['front_side']): ?>
                    <?php print render($page['front_side']); ?>
<?php endif; ?>
            </div>
        </div>
    </div>

<?php if ($page['search']) : ?>
        <div class="search-container">
            <div class="search">
                <div class="search-input">
    <?php print render($page['search']); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>




<?php if ($is_front): ?>
    <?php if (theme_get_setting('slideshow_display', 'cqtheme160301')): ?>
        <?php
        $slide1_head = check_plain(theme_get_setting('slide1_head', 'cqtheme160301'));
        $slide1_desc = check_markup(theme_get_setting('slide1_desc', 'cqtheme160301'), 'full_html');
        $slide1_url = check_plain(theme_get_setting('slide1_url', 'cqtheme160301'));
        $slide2_head = check_plain(theme_get_setting('slide2_head', 'cqtheme160301'));
        $slide2_desc = check_markup(theme_get_setting('slide2_desc', 'cqtheme160301'), 'full_html');
        $slide2_url = check_plain(theme_get_setting('slide2_url', 'cqtheme160301'));
        $slide3_head = check_plain(theme_get_setting('slide3_head', 'cqtheme160301'));
        $slide3_desc = check_markup(theme_get_setting('slide3_desc', 'cqtheme160301'), 'full_html');
        $slide3_url = check_plain(theme_get_setting('slide3_url', 'cqtheme160301'));
        ?>
        <div id="slidebox" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php print base_path() . drupal_get_path('theme', 'cqtheme160301') . '/images/slide-image-1.jpg'; ?>"/>
        <?php if ($slide1_head || $slide1_desc) : ?>
                        <div class="flex-caption">
                            <h2><?php print $slide1_head; ?></h2><?php print $slide1_desc; ?>
                            <a class="frmore" href="<?php print url($slide1_url); ?>"> <?php print t('READ MORE'); ?> </a>
                        </div>
        <?php endif; ?>
                </li>
                <li>
                    <img src="<?php print base_path() . drupal_get_path('theme', 'cqtheme160301') . '/images/slide-image-2.jpg'; ?>"/>
        <?php if ($slide2_head || $slide2_desc) : ?>
                        <div class="flex-caption">
                            <h2><?php print $slide2_head; ?></h2><?php print $slide2_desc; ?>
                            <a class="frmore" href="<?php print url($slide2_url); ?>"> <?php print t('READ MORE'); ?> </a>
                        </div>
        <?php endif; ?>
                </li>
                <li>
                    <img src="<?php print base_path() . drupal_get_path('theme', 'cqtheme160301') . '/images/slide-image-3.jpg'; ?>"/>
        <?php if ($slide3_head || $slide3_desc) : ?>
                        <div class="flex-caption">
                            <h2><?php print $slide3_head; ?></h2><?php print $slide3_desc; ?>
                            <a class="frmore" href="<?php print url($slide3_url); ?>"> <?php print t('READ MORE'); ?> </a>
                        </div>
        <?php endif; ?>
                </li>
            </ul><!-- /slides -->
            <div class="doverlay"></div>
        </div>
    <?php endif; ?>
<?php endif; ?>




            <?php if ($page['preface_first'] || $page['preface_middle'] || $page['preface_last']) : ?>
                <?php $preface_col = ( 12 / ( (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_last'] ) ); ?>
    <div id="preface-area">
        <div class="container">
            <div class="row">
                <?php if ($page['preface_first']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
        <?php print render($page['preface_first']); ?>
                    </div><?php endif; ?>
    <?php if ($page['preface_middle']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
        <?php print render($page['preface_middle']); ?>
                    </div><?php endif; ?>
    <?php if ($page['preface_last']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
        <?php print render($page['preface_last']); ?>
                    </div><?php endif; ?>
            </div>
        </div>
    </div>
                <?php endif; ?>


<?php if ($page['header']) : ?>
    <div id="header-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
    <?php print render($page['header']); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>