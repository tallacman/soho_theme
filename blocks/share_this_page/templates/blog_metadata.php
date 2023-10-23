<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<div class="ccm-block-share-this-page">
<h5 class='all-caps'><?php echo t("Share this page"); ?></h5>
    <ul class="list-inline row">
    <?php foreach ($selected as $service) { ?>
        <li class="col-auto">
            <a href="<?php echo h($service->getServiceLink()) ?>" target="_blank" aria-label="<?php echo h($service->getDisplayName()) ?>"><?php echo $service->getServiceIconHTML()?></a>
        </li>
    <?php } ?>
    </ul>
</div>
