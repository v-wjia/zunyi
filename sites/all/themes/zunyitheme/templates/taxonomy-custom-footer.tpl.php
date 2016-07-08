<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <?php $footer_col = ( 12 / ( (bool) $page['footer_first'] + (bool) $page['footer_second'] + (bool) $page['footer_third'] + (bool) $page['footer_fourth'] ) ); ?>
    <div id="bottom">

        <div class="row">
            <?php if ($page['footer_first']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
                <?php print render($page['footer_first']); ?>
                </div><?php endif; ?>
            <?php if ($page['footer_second']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
                <?php print render($page['footer_second']); ?>
                </div><?php endif; ?>
            <?php if ($page['footer_third']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
                <?php print render($page['footer_third']); ?>
                </div><?php endif; ?>
            <?php if ($page['footer_fourth']): ?><div class="footer-block col-sm-<?php print $footer_col; ?>">
                <?php print render($page['footer_fourth']); ?>
                </div><?php endif; ?>
        </div>

    </div>
<?php endif; ?>

<div class="hc_footer clearfix">
    <div class="con">
        <!--<p class="footer_con1">Copyright 2016 www.zyhc.gov.cn All Rights Reserved.</p>-->
        <!--<p class="footer_con2">CP备案：黔ICP备05001044号</p>-->
        <!--<p class="footer_con3">国际联网备案：黔ICP备05001044号</p>-->
        <!--        <div class="footer_con4">
                    <span><a href="http://www.zyhc.gov.cn/" target="_blank">汇川区政府官网</a></span>
                </div>-->
        <div class="footer-logo">
            <img alt="" src="/<?php echo path_to_theme(); ?>/images/chinacqlogo_1.png"><img alt="" src="/<?php echo path_to_theme(); ?>/images/MSFT_logo_rgb.png">
        </div>
        <div class="copy-info">
            <p>Copyright 2015 www.zyhc.gov.cn All Rights Reserved.</p>
            <p>遵义市汇川区人民政府版权所有</p> 
            <p>ICP备案：黔ICP备05001044号</p>
        </div>
        <div class="footer_con5 clearfix">
            <ul>
                <li class="li1"><a href="">聚焦汇川</a></li>
                <li class="li2"><a href="">Microsoft亚太云生态</a></li>
                <li class="li3"><a href="">Microsoft云科技</a></li>
            </ul>
        </div>
    </div>
</div>