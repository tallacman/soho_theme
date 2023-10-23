<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
// $this->inc('elements/slicknav.php');
// $this->inc('elements/page_header.php');
// $this->inc('elements/page_title.php');
// $this->inc('elements/lead.php');
?>


<main>

    <?php
    $a = new Area('Main');
    $a->enableGridContainer(); // allows cutom template to use full width or containered
    $a->setAreaGridMaximumColumns(12);
    $a->display($c);
    ?>

</main>

<?php
// $this->inc('elements/top_footer.php');
$this->inc('elements/footer.php');
?>
