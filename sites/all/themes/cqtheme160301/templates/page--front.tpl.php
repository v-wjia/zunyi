<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
    <div id="page">

    <div class="header-container">
        <div class="header">
            <div class="header-logo"><a href="/index.php">
                    <img src="<?php echo cqtheme160301_get_path() ?>/img/logo_cq.png"/>
                    <img src="<?php echo cqtheme160301_get_path() ?>/img/logo_bigdata.png" alt=""/></a>
            </div>
            <div class="header-nav">
                <div class="header-list">
                    <?php
                    $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                    print drupal_render($main_menu_tree); ?>
                </div>
            </div>
            <div class="login-info">

                <?php if ($page['front_side']): ?>
                    <?php print render($page['front_side']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div id="slidebox" class="flexslider">
        <ul class="slides">
            <li>
                <div class="banner-container" style="background: #0076DB url(<?php echo cqtheme160301_get_path(); ?>/images/banner_1.png) no-repeat center center">
                    <div class="banner">
                        <h3>BIG DATA MATCH</h3>
                        <h4>重庆开放数据创新应用大赛</h4>
                        <p>发掘数据之智，引领巅峰对决，梦想之战一触即发。</p>
                        <button class="index-btn" style="top:260px;">查看详情&nbsp;&nbsp;&nbsp;&gt;</button>
                    </div>
                </div>

            </li>
            <li>
                <div class="banner-container" style="background:#222258 url(<?php echo cqtheme160301_get_path(); ?>/images/banner_2.jpg) no-repeat center center">
                    <div class="banner">
                        <h3>应用</h3>
                        <h4>交通大数据</h4>
                        <p>大数据时代，政府部门通过监测和分析实时交通数据，再通过交通大数据简洁、<br />直观的图形化界面展示出来，便可轻松、即时地获知优化交通的一切可能，<br />并及时制定相应的疏通、导流方案。</p>
                        <button  class="index-btn">查看详情&nbsp;&nbsp;&nbsp;&gt;</button>
                    </div>
                </div>

            </li>
            <li>
                <div class="banner-container" style="background:#EA3D32 url(<?php echo cqtheme160301_get_path(); ?>/images/banner_3.jpg) no-repeat center center">
                    <div class="banner">
                        <h3>签约</h3>
                        <h4>渝北区政府携手微软共建重庆大数据平台</h4>
                        <p>渝北区政府与微软（中国）有限公司、微软亚太科技有限公司签署战略合作备忘录，<br />三方将在大数据平台、大数据学院、创新孵化加速器平台、<br />大数据体验中心领域方面展开全面合作。</p>
                        <button  class="index-btn">查看详情&nbsp;&nbsp;&nbsp;&gt;</button>
                    </div>
                </div>

            </li>
        </ul>
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


<?php if ($page['data_resource']) : ?>
    <?php print render($page['data_resource']); ?>
<?php endif; ?>

<?php if ($page['data_application']) : ?>
    <?php print render($page['data_application']); ?>
<?php endif; ?>

<?php if ($page['data_trade']) : ?>
    <?php print render($page['data_trade']); ?>
<?php endif; ?>

<?php if ($page['data_perception']) : ?>
    <?php print render($page['data_perception']); ?>
<?php endif; ?>


<?php if ($page['footer']) : ?>
    <div id="footer-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php print render($page['footer']); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <?php $footer_col = (12 / ((bool)$page['footer_first'] + (bool)$page['footer_second'] + (bool)$page['footer_third'] + (bool)$page['footer_fourth'])); ?>
    <div id="bottom">
        <div class="container">
            <div class="row">
                <?php if ($page['footer_first']): ?>
                    <div class="footer-block col-sm-<?php print $footer_col; ?>">
                    <?php print render($page['footer_first']); ?>
                    </div><?php endif; ?>
                <?php if ($page['footer_second']): ?>
                    <div class="footer-block col-sm-<?php print $footer_col; ?>">
                    <?php print render($page['footer_second']); ?>
                    </div><?php endif; ?>
                <?php if ($page['footer_third']): ?>
                    <div class="footer-block col-sm-<?php print $footer_col; ?>">
                    <?php print render($page['footer_third']); ?>
                    </div><?php endif; ?>
                <?php if ($page['footer_fourth']): ?>
                    <div class="footer-block col-sm-<?php print $footer_col; ?>">
                    <?php print render($page['footer_fourth']); ?>
                    </div><?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
    </div>

<?php require_once 'taxonomy-custom-footer.tpl.php';?>
