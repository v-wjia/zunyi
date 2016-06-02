<?php require_once 'taxonomy-custom-header.tpl.php';?>

      <div class="row">

        <div class="con condetailbg">

          <div style="height:0px; overflow:hidden;">&nbsp;</div>
          <div class="condetail">
              <div style="height:0px; overflow:hidden;">&nbsp;</div>

              <?php if ($page['sidebar_first']) {
                  $primary_col = 8;
              } else {
                  $primary_col = 12;
              } ?>
            <?php if ($page['sidebar_first']): ?>

                  <div class="cd_nav">
                  <?php print render($page['sidebar_first']); ?>
                  </div>


                  <?php endif; ?>
              <div id="primary" class="content-area col-sm-<?php print $primary_col; ?>">

                      <?php print $messages; ?>
                      <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
                  <div id="content-wrap">
                          <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
                          <?php print render($page['help']); ?>
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                      <div class="cd_content">
                          <?php if (theme_get_setting('breadcrumbs') && !isset($node)): ?>
                              <?php if ($breadcrumb): ?>
                                  <div class="cd_content_list">
                                      <div id="breadcrumbs"><?php print $breadcrumb; ?></div>
                                  </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php print render($page['content']); ?>
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

    <?php require_once 'taxonomy-custom-footer.tpl.php';?>
  </div>
</div>



