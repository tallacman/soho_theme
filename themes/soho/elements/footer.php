  </div> <!--  end ccm-page wrapper   -->

<?php        defined('C5_EXECUTE') or die("Access Denied."); ?>
<!--  theme javascripts     -->

<!--   bootstrap 4 interferes with the toolbar so disabled if in Edit Mode  -->
<?php
  if (!$c->isEditMode()) { ?>
  <!--      
<script src="<?php    //   echo $this->getThemePath()?>/js/bootstrap.js"> </script>
<?php } ?>

<script src="<?php   //    echo $this->getThemePath()?>/js/popper.js"> </script>
    --> 

<script src="<?php       echo $this->getThemePath()?>/js/slicknav.js"> </script>

<script>
  $('#menu').slicknav({
  label: '',
  duration: 200,
  easingOpen: 'swing',
  easingClose: 'swing',
  closedSymbol: '▼',
  openedSymbol: '▲',
  prependTo: '#slicknav',
  appendTo: '',
  parentTag: 'a',
  closeOnClick: false,
  allowParentLinks: true,
  nestedParentLinks: true,
  showChildren: false,
  removeIds: true,
  removeClasses: false,
  removeStyles: false,
  // inserts sitename into slicknav on mobile screens
  // brand:''
  brand: '<a href="<?php echo DIR_REL?>/"><?php echo h(Config::get('concrete.site')); ?></a>'
  });
</script>

<?php        View::element('footer_required'); ?>

</body>
</html>
