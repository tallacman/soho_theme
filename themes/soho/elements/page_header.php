<?php        defined('C5_EXECUTE') or die("Access Denied."); ?>
<header class="page-header pt-5">
  <div class="container site-name-header">
      <div class="row justify-content-center py-2 py-sm-3 py-md-4">
        <div class="col-auto sitename">
            <?php
            $a = new GlobalArea('Header Site Title');
            $a->display();
            ?>
        </div>
    </div>
    <nav class="row justify-content-center">
        <?php
        $a = new GlobalArea('Header Navigation');
        $a->setCustomTemplate('autonav', 'responsive_header_navigation');
        $a->display();
        ?>
&nbsp;
 		<?php
        $a = new Area('Button Area');
        $a->display($c);
        ?>

    </nav>
  </div>
</header>
