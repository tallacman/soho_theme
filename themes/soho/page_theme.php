<?php
namespace Concrete\Package\SohoTheme\Theme\Soho;
use Concrete\Core\Page\Theme\Theme;
class PageTheme extends Theme {


	protected $pThemeGridFrameworkHandle = 'Bootstrap4';

	public function registerAssets() {

		//		$this->providesAsset('css', 'font-awesome');
    //    $this->providesAsset('css', 'blocks/social_links');
    //    $this->providesAsset('css', 'blocks/share_this_page');
        	$this->providesAsset('css', 'blocks/page_list');
    //    $this->providesAsset('css', 'blocks/testimonial');
    //    $this->providesAsset('css', 'blocks/date_navigation');
    //    $this->providesAsset('css', 'blocks/topic_list');
    //    $this->providesAsset('css', 'blocks/calendar');
    //    $this->providesAsset('css', 'blocks/tags');
    //    $this->providesAsset('css', 'core/frontend/*');
          $this->providesAsset('css', 'blocks/feature/templates/hover_description');

    //    $this->providesAsset('css', 'blocks/event_list');

      	$this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript-conditional', 'html5-shiv');
        $this->requireAsset('javascript-conditional', 'respond');
	}

	public function getThemeBlockClasses()
	{
			return [
					'feature' => [
						'pt-1',
						'pt-2',
						'pt-3',
						'pt-4',
						'pt-5',

						'pb-1',
						'pb-2',
						'pb-3',
						'pt-4',
						'pb-4',
						'pb-5',

						'pt-md-1',
						'pt-md-2',
						'pt-md-3',
						'pt-md-4',
						'pt-md-5',

						'pb-md-1',
						'pb-md-2',
						'pb-md-3',
						'pb-md-4',
						'pb-md-5',
					],
					'page_title' => [
						'white-text',
						'font-weight-bold',
						'display',
						'pt-1',
						'pt-2',
						'pt-3',
						'pt-4',
						'pt-5',

						'pb-1',
						'pb-2',
						'pb-3',
						'pt-4',
						'pb-4',
						'pb-5',

						'pt-md-1',
						'pt-md-2',
						'pt-md-3',
						'pt-md-4',
						'pt-md-5',

						'pb-md-1',
						'pb-md-2',
						'pb-md-3',
						'pb-md-4',
						'pb-md-5',
					],
					'page_list' => [
						'pt-1',
						'pt-2',
						'pt-3',
						'pt-4',
						'pt-5',

						'pb-1',
						'pb-2',
						'pb-3',
						'pt-4',
						'pb-4',
						'pb-5',

						'pt-md-1',
						'pt-md-2',
						'pt-md-3',
						'pt-md-4',
						'pt-md-5',

						'pb-md-1',
						'pb-md-2',
						'pb-md-3',
						'pb-md-4',
						'pb-md-5',
						'recent-blog-entry',
						'blog-entry-list',
						'page-list-with-buttons',
						'block-sidebar-wrapped',
					],
					'content' => [
						'display',
						'pt-1',
						'pt-2',
						'pt-3',
						'pt-4',
						'pt-5',

						'pb-1',
						'pb-2',
						'pb-3',
						'pt-4',
						'pb-4',
						'pb-5',

						'pt-md-1',
						'pt-md-2',
						'pt-md-3',
						'pt-md-4',
						'pt-md-5',

						'pb-md-1',
						'pb-md-2',
						'pb-md-3',
						'pb-md-4',
						'pb-md-5',
						'drop-cap-small',
					],
			];
	}

    public function getThemeResponsiveImageMap() { // conform to defaults.less preset
        return array(
            'xlarge' 	=> '1200px',
            'large' 	=> '992px',
            'medium' 	=> '768px',
            'small' 	=> '576px',
						'xsmall' 	=> '0'

        );
    }
}
