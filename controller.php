<?php
namespace Concrete\Package\SohoTheme;

use Concrete\Core\Package\Package;
use Concrete\Core\Support\Facade\Facade;
use Concrete\Theme\Concrete\PageTheme;
use Concrete\Core\Page\Template as PageTemplate;
use Concrete\Package\SohoTheme\Src\Bootstrap4;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{

    protected $pkgHandle = 'soho_theme';
    protected $appVersionRequired = '8.2';
    protected $pkgVersion = '0.9';
    protected $pkgAutoloaderRegistries = array(
        'src' => '\Concrete\Package\SohoTheme\Src'
    );
    public function getPackageName() {
        return t("Soho Theme by tallacman");
    }

    public function getPackageDescription() {
        return t("A space for artists.");
    }

    public function on_start(){
    $manager = $this->app->make('manager/grid_framework');
    $manager->extend('Bootstrap4', function($app) {
        return new Bootstrap4();
   	});
   }

    public function install() {
    $pkg = parent::install();

  if(!PageTemplate::getByHandle('left_sidebar')) {
    PageTemplate::add('left_sidebar', 'Left Sidebar', 'left_sidebar.png', $pkg);
  }
  if(!PageTemplate::getByHandle('right_sidebar')) {
    PageTemplate::add('right_sidebar', 'Right Sidebar', 'right_sidebar.png', $pkg);
  }
  if(!PageTemplate::getByHandle('blank')) {
    PageTemplate::add('blank', 'Blank', 'full.png', $pkg);
  }
  if(!PageTemplate::getByHandle('edge_to_edge')) {
    PageTemplate::add('edge_to_edge', 'Edge to Edge', 'full.png', $pkg);
  }
  if(!PageTemplate::getByHandle('blog_entry')) {
    PageTemplate::add('blog_entry', 'Blog Entry', 'left_sidebar.png', $pkg);
  }
  if(!PageTemplate::getByHandle('special')) {
    PageTemplate::add('special', 'Special', 'full.png', $pkg);
  }

	PageTheme::add('soho', $pkg);
	}

}
