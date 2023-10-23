<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
$this->inc('elements/slicknav.php');
$this->inc('elements/page_header.php');
$this->inc('elements/page_title.php');
$this->inc('elements/lead.php');
?>

<main class="pt-4">
  <div class="container">
    <div class="row">
        <article class="col-12 col-sm-8 order-1 order-sm-2">
          <?php
          $a = new Area('Main');
          $a->setAreaGridMaximumColumns(12);
          $a->display($c);
          ?>
      </article>
      <aside class="col-12 col-sm-4 order-2 order-sm-1">
        <?php
        $a = new Area('Sidebar');
        $a->display($c);
        ?>
      </aside>
    </div>
  </div>
</main>


<?php
$this->inc('elements/top_footer.php');
$this->inc('elements/footer.php');
?>
