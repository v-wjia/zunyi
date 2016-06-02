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

<div class="footer-container">
    <div class="footer">
        <div class="footer-logo">
            <img src="/<?php echo cqtheme160301_get_path(); ?>/img/chinacqlogo_1.png" alt=""/>
            <img src="/<?php echo cqtheme160301_get_path(); ?>/img/MSFT_logo_rgb.png" alt=""/>
        </div>
        <div class="copy-info">
            <p>Copyright 2015 www.cq.gov.cn All Rights Reserved.</p>
            <p>重庆市人民政府版权所有 重庆市人民政府办公厅主办</p>
            <p>ICP备案：渝ICP备05003300号</p>
            <p>国际联网备案：渝公网备500000012-00013</p>
        </div>
        <div class="wecode">
            <ul>
                <li>
                    <img src="/<?php echo cqtheme160301_get_path(); ?>/img/2-D_1.png" alt=""/>
                    <p>重庆市政府网<br/>新浪微博</p>
                </li>
                <li>
                    <img src="/<?php echo cqtheme160301_get_path(); ?>/img/2-D_2.png" alt=""/>
                    <p>重庆市政府网<br/>腾讯微博</p>
                </li>
                <li>
                    <img src="/<?php echo cqtheme160301_get_path(); ?>/img/2-D_3.png" alt=""/>
                    <p>Microsoft云科技<br/>官方微信</p>
                </li>
                <li>
                    <img src="/<?php echo cqtheme160301_get_path(); ?>/img/2-D_4.png" alt=""/>
                    <p>Microsoft<br/>亚太云生态</p>
                </li>
            </ul>
        </div>
    </div>
</div>