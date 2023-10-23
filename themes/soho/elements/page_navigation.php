<?php        defined('C5_EXECUTE') or die("Access Denied."); ?>
<footer class="page-navigation container-fluid">
  <div class="row">
    <div class="col-12">
      <?php
        $a = new Area('Page Navigation');
        $a->setCustomTemplate('next_previous', 'simple_edge_to_edge');
        $a->display($c);
        ?>
    </div>
  </div>
</footer>
