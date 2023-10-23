<?php        defined('C5_EXECUTE') or die("Access Denied."); ?>
<footer class="top-footer pt-5 mt-5">
	<div class="container py-5">
    <div class="row">
			<div class="col-12 col-sm-6 col-md-3">
				<?php
				$a = new GlobalArea('Footer Site Title');
				$a->display();
				?>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<?php
				$a = new GlobalArea('Footer Social');
				$a->display();
				?>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<?php
				$a = new GlobalArea('Footer Contact');
				$a->display();
				?>
			</div>
			<div class="col-12 col-sm-6 col-md-3">
				<?php
				$a = new GlobalArea('Footer Navigation');
				$a->display();
				?>
			</div>
	</div>
	<div class="row py-3 py-sm-5 justify-content-between">
			<div class="col-12 col-sm-auto">
				<?php
				$a = new GlobalArea('Footer Legal');
				$a->display();
				?>
			</div>
			<div class="col-12 col-sm-auto">
				<?php
				$a = new GlobalArea('Footer Right');
				$a->display();
				?>
			</div>
		</div>
	</div>
</footer>
