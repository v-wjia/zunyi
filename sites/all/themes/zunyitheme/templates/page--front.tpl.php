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
    <div class="menuheader">
        <div class="con">
            <span class="logo"><a href="/"><img src="/<?php echo path_to_theme(); ?>/images/logo.png" alt=""></a></span>
            <?php
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
            print drupal_render($main_menu_tree);
            ?>

            <div class="nav_btn_wrapper">
                <span class="nav_btn"><a href="http://odata-zyhc.chinacloudapp.cn" target="_blank">开放数据开台</a></span>
                <div class="yy"></div>
            </div>
            <div class="login"><span><a href="/user/login">登录</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="/user/register">注册</a></span></div>
            <div class="search">
                <?php if ($page['search']) : ?>
                <?php print render($page['search']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
        
    <div class="hc_con1">
        
            <div id="slidebox" class="flexslider">
            	<div class="con">
                <ul class="slides">
                    <li>
                        <div class="con1_con">
                            <p class="con1_con1">BIG DATA MATCH</p>
                            <p class="con1_con2">开放数据创新应用大赛</p>
                            <p class="con1_con3">发掘数据之智，引领巅峰对决，梦想之战一触即发。<br><br></p>
                            <!--<img id="microsoftlogo" style="width:131px;height:27px" src="/<?php echo path_to_theme(); ?>/images/microsoft.png">-->
                        </div>
                        <span class="cm"><img alt=""  src="/<?php echo path_to_theme(); ?>/images/c1-1.gif"></span>
                    </li>
                    <li>
                        <div class="con1_con">
                            <p class="con1_con1">应用</p>
                            <p class="con1_con2">大数据时代</p>
                            <p class="con1_con3">
                                随着大数据的来临，政府部门通过监测和分析实时数据，再通过大数据简洁、<br>
                                直观的图形化界面展示出来，让大数据成为政府转型的科技动力
                                <br></p>
                            <!--<img id="microsoftlogo" style="width:131px;height:27px" src="/<?php echo path_to_theme(); ?>/images/microsoft.png">-->
                        </div>
                        <span class="cm"><img alt=""  src="/<?php echo path_to_theme(); ?>/images/c1-1.gif"></span>
                    </li>
                    <li>
                        <div class="con1_con">
                            <p class="con1_con1">签约</p>
                            <p class="con1_con2">汇川区政府携手微软共建大数据平台</p>
                            <p class="con1_con3">汇川区政府与微软（中国）有限公司签署战略合作备忘录，<br>双方将在大数据平台、大数据交易、创新孵化加速器平台、<br>大数据体验中心领域方面展开全面合作。</p>
                            <!--<img id="microsoftlogo" style="width:131px;height:27px" src="/<?php echo path_to_theme(); ?>/images/microsoft.png">-->
                        </div>
                        <span class="cm"><img alt=""  src="/<?php echo path_to_theme(); ?>/images/c1-1.gif"></span>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>        


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

    </div>

<?php require_once 'taxonomy-custom-footer.tpl.php';?>
