<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php
$title = h($title);
if ($linkURL) {
    $title = '<a href="' . $linkURL . '">' . $title . '</a>';
}
?>
<div class="ccm-block-feature-item tallacman-icon-left row py-3 no-gutters">
  <div class="col-auto">
    <h3 class="text-centered"><i class="fa fa-<?=$icon?>"></i></h3>
  </div>
  <div class="col">
      <h4 class="col-12"></i> <?=$title?></h4>
      <?php
      if ($paragraph) {
        echo '<div class="col-12">';
          echo $paragraph;
          echo "</div>";
      }
      ?>
  </div>

</div>
