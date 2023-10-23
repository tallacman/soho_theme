<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php
$title = h($title);
if ($linkURL) {
    $title = '<a href="' . $linkURL . '">' . $title . '</a>';
    $open_tag = '<a href="' . $linkURL . '">';
    $close_tag = '</a>';

}
?>
<div class="row tallacman-iconic py-3 py-sm-4 py-md-4 text-center">
    <?php if ($title) {
    ?>
    <?php echo $open_tag; ?>
    <div class="icon-wrapper">
        <div class="icon-inner">
            <div class="icon">
            <i class="fa fa-<?=$icon?>"></i>
            </div>
        </div>
    </div>
    <div class='col-12 h3 mb-2 mb-md-4'><?php echo $title; ?></div>
    <?php
} ?>
<?php echo $close_tag; ?>

    <?php
    if ($paragraph) {
      echo '<div class="col-12 para">';
        echo $paragraph;
        echo "</div>";
    }
    ?>
</div>
