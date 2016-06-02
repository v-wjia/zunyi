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

<div class="footer clearfix">
    <div class="con">
        <p class="footer_con1">Copyright 2015 www.cq.gov.cn All Rights Reserved.</p>
        <p class="footer_con2">CP备案：渝ICP备05003300号</p>
        <p class="footer_con3">国际联网备案：渝公网备500000012-00013</p>
        <div class="footer_con4">
            <span>汇川区政府官网</span><img src="images/footer1.png" alt=""><img src="images/footer1.png" alt="">
        </div>
        <div class="footer_con5 clearfix">
            <ul>
                <li class="li1"><a href="">遵义市政府</a></li>
                <li class="li2"><a href="">Microsoft亚太云生态</a></li>
                <li class="li3"><a href="">Microsoft云科技</a></li>
            </ul>
        </div>
    </div>
</div>