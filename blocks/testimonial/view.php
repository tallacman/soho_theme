<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="ccm-block-testimonial-wrapper">

    <div class="ccm-block-testimonial row py-2 align-items-center">
        <?php if ($image): ?>
            <div class="ccm-block-testimonial-image col-12 col-sm-5"><?=$image?></div>
        <?php endif; ?>

        <div class="ccm-block-testimonial-text col-12 col-sm-7">

              <div class="ccm-block-testimonial-name h5">
                  <?=h($name)?>
              </div>

          <?php if ($position && $company && $companyURL): ?>
              <div class="ccm-block-testimonial-position small italic">
                  <?=t('%s, <a href="%s">%s</a>', h($position), $companyURL, h($company))?>
              </div>
          <?php endif; ?>

          <?php if ($position && !$company && $companyURL): ?>
              <div class="ccm-block-testimonial-position small italic">
                  <?=t('<a href="%s">%s</a>', $companyURL, h($position))?>
              </div>
          <?php endif; ?>

          <?php if ($position && $company && !$companyURL): ?>
              <div class="ccm-block-testimonial-position small italic">
                  <?=t('%s, %s', h($position), h($company))?>
              </div>
          <?php endif; ?>

          <?php if ($position && !$company && !$companyURL): ?>
              <div class="ccm-block-testimonial-position small italic">
                  <?=h($position)?>
              </div>
          <?php endif; ?>
        </div>
    </div>

    <div class="row">
      <?php if ($paragraph): ?>
          <div class="ccm-block-testimonial-paragraph col-12"><?=h($paragraph)?></div>
      <?php endif; ?>
    </div>
</div>
