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
                <!--<input type="text" placeholder="输入关键词"><button></button>-->
                <?php if ($page['search']) : ?>
                <?php print render($page['search']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



  <?php if ($is_front): ?>
  <?php if (theme_get_setting('slideshow_display','cqtheme160301')): ?>
  <?php 
    $slide1_head = check_plain(theme_get_setting('slide1_head','cqtheme160301'));   $slide1_desc = check_markup(theme_get_setting('slide1_desc','cqtheme160301'), 'full_html'); $slide1_url = check_plain(theme_get_setting('slide1_url','cqtheme160301'));
    $slide2_head = check_plain(theme_get_setting('slide2_head','cqtheme160301'));   $slide2_desc = check_markup(theme_get_setting('slide2_desc','cqtheme160301'), 'full_html'); $slide2_url = check_plain(theme_get_setting('slide2_url','cqtheme160301'));
    $slide3_head = check_plain(theme_get_setting('slide3_head','cqtheme160301'));   $slide3_desc = check_markup(theme_get_setting('slide3_desc','cqtheme160301'), 'full_html'); $slide3_url = check_plain(theme_get_setting('slide3_url','cqtheme160301'));
  ?>
  <div id="slidebox" class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'cqtheme160301') . '/images/slide-image-1.jpg'; ?>"/>
        <?php if($slide1_head || $slide1_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide1_head; ?></h2><?php print $slide1_desc; ?>
            <a class="frmore" href="<?php print url($slide1_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'cqtheme160301') . '/images/slide-image-2.jpg'; ?>"/>
        <?php if($slide2_head || $slide2_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide2_head; ?></h2><?php print $slide2_desc; ?>
            <a class="frmore" href="<?php print url($slide2_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'cqtheme160301') . '/images/slide-image-3.jpg'; ?>"/>
        <?php if($slide3_head || $slide3_desc) : ?>
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




  <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']) : ?>
    <?php $preface_col = ( 12 / ( (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_last'] ) ); ?>
    <div id="preface-area">
      <div class="container">
        <div class="row">
          <?php if($page['preface_first']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_first']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_middle']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_middle']); ?>
          </div><?php endif; ?>
          <?php if($page['preface_last']): ?><div class="preface-block col-sm-<?php print $preface_col; ?>">
            <?php print render ($page['preface_last']); ?>
          </div><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


  <?php if($page['header']) : ?>
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

    <div class="row listbg">
    	<div class="con_mbx">
        <div class="con">
		<!--面包屑-->
		<?php if (theme_get_setting('breadcrumbs') && !isset($node)): ?><?php if ($breadcrumb): ?><div class="cd_content_list"><div id="breadcrumbs"><?php print $breadcrumb; ?></div></div><?php endif; ?><?php endif; ?>
        <!--面包屑-->
        </div>
        </div>
        <div class="con condetailbg">
            <div style="height:0px; overflow:hidden;">&nbsp;</div>
            <div class="con condetailbg">
            <div style="height:0px; overflow:hidden;">&nbsp;</div>
            <div class="condetail">
                <div style="height:0px; overflow:hidden;">&nbsp;</div>
                

                
                                    <div class="cd_nav">
                        <div class="region region-sidebar-first">
  <div id="block-featured-display-left-nav" class="block block-featured-display">

      
  <div class="content">
    <ul><li><ul><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E7%BB%8F%E6%B5%8E%E5%BB%BA%E8%AE%BE">经济建设</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E6%B0%91%E7%94%9F%E6%9C%8D%E5%8A%A1">民生服务</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E9%81%93%E8%B7%AF%E4%BA%A4%E9%80%9A">道路交通</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E7%8E%AF%E5%A2%83%E8%B5%84%E6%BA%90">环境资源</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E6%96%87%E5%8C%96%E6%97%85%E6%B8%B8">文化旅游</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E5%8C%BB%E7%96%97%E5%81%A5%E5%BA%B7">医疗健康</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E7%A7%91%E6%8A%80%E6%95%99%E8%82%B2">科技教育</a></span></li><li><span class="field-content"><a href="http://bigdata-zyhc.chinacloudsites.cn/%E6%95%B0%E6%8D%AE%E8%B5%84%E6%BA%90/%E6%9C%BA%E6%9E%84%E5%9B%A2%E4%BD%93">机构团体</a></span></li></ul></li></ul>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                    </div>
                    
                <div style="width:1100px;" class="content-area col-sm-8" id="primary">
                                                                    <div id="content-wrap">
                                                                                                <div class="cd_content">
                            <div class="region region-content">
  <div class="block block-system" id="block-system-main">

      
  <div class="content">
    <div class="view view-taxonomy-term view-id-taxonomy_term view-display-id-page view-dom-id-3b6ce5360dc8fdca71cffa6f046b2a53">
        
  
  
      <div class="view-content">
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
    <div typeof="sioc:Item foaf:Document" about="/content/%E5%8C%BB%E8%8D%AF%E5%AE%9D" id="node-19" class="cd_content_list">


     


    <div style="margin-top:1px;" class="cd_content_listp">
        <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div property="content:encoded" style="font-size:13.6px;text-align:justify; padding-left:7px; padding-right:7px;line-height:24.7px;"class="field-item even"><p>遵义经济技术开发区于1992年7月经贵州省人民政府批准成立，是全省首批成立的3个省级经济技术开发区之一，1998年遵义经济技术开发区党工委、管委会调整为市委、市政府的正县级派出机构，2010年升级为国家级经济技术开发区。2003年12月26日，遵义经济技术开发区经国务院正式批复设立遵义市汇川区，并于2004年6月18日正式挂牌成立，是贵州省最年轻的县级行政区，也是贵州省列经济强县（区）。全区总面积695平方公里，辖6镇3办，常住人口43万。</p>
<p>汇川区作为遵义市的中心城区和国家级经济技术开发区，既肩负着建设新兴经济强区的任务，也承担着改革开放“窗口”和“试验田”的重任。建区以来，在市委、市政府的正确领导下，我们以邓小平理论和“三个代表”重要思想为指导，全面贯彻落实科学发展观，紧紧围绕发展主题，按照“工业强区、环境立区、三产活区、开放兴区”的战略部署，着力打造“实力汇川、宜居汇川、文化汇川、平安汇川、和谐汇川”。</p>
<p>“十一五”期间，全区累计完成投资182.2亿元，年均增长15.7%；社会消费品零售总额实现49.4亿元，年均增长25.4%；财政总收入完成9.1亿元，年均增长27.2%；一般预算收入完成5.3亿元，年均增长27.1%；城镇居民人均可支配收入15279元，年均增长13.5%；农民人均纯收入5876元，年均增长12.8%。</p><p>“十二五”期间，汇川区将大力实施工业强区战略，加快推进新型工业化；大力实施城市立区战略，加快推进城镇化进程；大力实施三产活区战略，加速发展现代服务业；大力实施开放兴区战略，增强发展动力和活力；统筹城乡发展，加快社会主义新农村建设；加快科技教育发展和人才开发，提升人力资源素质和科技创新能力；积极推进生态文明建设，促进经济社会发展和人口、资源、环境相协调；着力保障和改善民生，推进社会主义和谐社会建设。</p>


</div></div></div>       
    </div> <!-- /.node -->
  </div>
    </div>
  
  
  
  
  
  
</div>  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
                        </div>
                    </div>

                </div>
            </div>

  

  </div>
</div>

  <?php if($page['footer']) : ?>
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
</div>
    
<?php require_once 'taxonomy-custom-footer.tpl.php';?>    



