<?php        defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="header full lead-image">
  <?php
  $a = new Area('Lead');
  $a->enableGridContainer(); 
  $a->setAreaGridMaximumColumns(12);
  $a->display($c);
  ?>
</div>
