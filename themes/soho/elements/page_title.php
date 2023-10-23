<?php        defined('C5_EXECUTE') or die("Access Denied.");  ?>

<header class="page-title pt-2 pt-sm-5">

  <?php
  $a = new Area('Full');
  $a->enableGridContainer();
  $a->setAreaGridMaximumColumns(12);
  $a->display($c);
  ?>

</header>
