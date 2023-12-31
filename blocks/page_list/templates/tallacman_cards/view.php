<?php
defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();

/** @var \Concrete\Core\Utility\Service\Text $th */
$th = Core::make('helper/text');
/** @var \Concrete\Core\Localization\Service\Date $dh */
$dh = Core::make('helper/date');

if ($c->isEditMode() && $controller->isBlockEmpty()) {
    ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.') ?></div>
    <?php
} else {
    ?>

    <div class="ccm-block-page-list-wrapper tallacman-cards-page-list"> <!--   the big warpper  -->

        <?php if (isset($pageListTitle) && $pageListTitle) {
            ?>
            <div class="ccm-block-page-list-header">
                <h4><?php echo h($pageListTitle) ?></h4>
            </div>
            <?php
        } ?>

        <?php if (isset($rssUrl) && $rssUrl) {
            ?>
            <a href="<?php echo $rssUrl ?>" target="_blank" class="ccm-block-page-list-rss-feed">
                <i class="fa fa-rss"></i>
            </a>
            <?php
        } ?>

        <div class="ccm-block-page-list-pages"> <!--   inner wrappper sans header if any  -->

            <?php

            $includeEntryText = false;
            if (
                (isset($includeName) && $includeName)
                ||
                (isset($includeDescription) && $includeDescription)
                ||
                (isset($useButtonForLink) && $useButtonForLink)
            ) {
                $includeEntryText = true;
            }

            foreach ($pages as $page) {

                // Prepare data for each page being listed...
                $buttonClasses = 'ccm-block-page-list-read-more';
                $entryClasses = 'ccm-block-page-list-page-entry';
                $title = $page->getCollectionName();
                if ($page->getCollectionPointerExternalLink() != '') {
                    $url = $page->getCollectionPointerExternalLink();
                    if ($page->openCollectionPointerExternalLinkInNewWindow()) {
                        $target = '_blank';
                    }
                } else {
                    $url = $page->getCollectionLink();
                    $target = $page->getAttribute('nav_target');
                }
                $target = empty($target) ? '_self' : $target;
                $description = $page->getCollectionDescription();
                $description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
                $thumbnail = false;
                if ($displayThumbnail) {
                    $thumbnail = $page->getAttribute('thumbnail');
                }
                if (is_object($thumbnail) && $includeEntryText) {
                    $entryClasses = 'ccm-block-page-list-page-entry-horizontal'; /*   the entry super wrapper    */

                }

                $date = $dh->formatDateTime($page->getCollectionDatePublic(), true);

                //Other useful page data...

                //$last_edited_by = $page->getVersionObject()->getVersionAuthorUserName();

                /* DISPLAY PAGE OWNER NAME
                 * $page_owner = UserInfo::getByID($page->getCollectionUserID());
                 * if (is_object($page_owner)) {
                 *     echo $page_owner->getUserDisplayName();
                 * }
                 */

                /* CUSTOM ATTRIBUTE EXAMPLES:
                 * $example_value = $page->getAttribute('example_attribute_handle', 'display');
                 *
                 * When you need the raw attribute value or object:
                 * $example_value = $page->getAttribute('example_attribute_handle');
                 */

                /* End data preparation. */

                /* The HTML from here through "endforeach" is repeated for every item in the list... */ ?>

                <div class="card">

                    <?php if (is_object($thumbnail)) {
                        ?>

                      <!--   added here as well as the title/or button  -->
                      <a href="<?php echo h($url) ?>"
                         target="<?php echo h($target) ?>">

                        <div class="ccm-block-page-list-page-entry-thumbnail"> <!--   the iamge wrapper  -->
                            <?php
                            $img = Core::make('html/image', array($thumbnail));
                            $tag = $img->getTag();
                            $tag->addClass('img-responsive card-img-top');
                            echo $tag; ?>
                        </div>
                      </a> <!--   closes link  -->
                        <?php
                    } ?>

                    <?php if ($includeEntryText) {
                        ?>
                        <div class="ccm-block-page-list-page-entry-text card-body"> <!--   teh text wrapper  -->

                            <?php if (isset($includeName) && $includeName) {
                                ?>
                                <div class="ccm-block-page-list-title h4 card-title">
                                    <?php if (isset($useButtonForLink) && $useButtonForLink) {
                                        ?>
                                        <?php echo h($title); ?>
                                        <?php

                                    } else {
                                        ?>
                                        <a href="<?php echo h($url) ?>"
                                           target="<?php echo h($target) ?>"><?php echo h($title) ?></a>
                                        <?php

                                    } ?>
                                </div>
                                <?php
                            } ?>

                            <?php if (isset($includeDate) && $includeDate) {
                                ?>
                                <div class="ccm-block-page-list-date"><?php echo h($date) ?></div>
                                <?php
                            } ?>

                            <?php if (isset($includeDescription) && $includeDescription) {
                                ?>
                                <div class="ccm-block-page-list-description"><?php echo h($description) ?></div>
                                <?php
                            } ?>

                            <?php if (isset($useButtonForLink) && $useButtonForLink) {
                                ?>
                                <div class="ccm-block-page-list-page-entry-read-more">
                                    <a href="<?php echo h($url) ?>" target="<?php echo h($target) ?>"
                                       class="<?php echo h($buttonClasses) ?>"><?php echo h($buttonLinkText) ?></a>
                                </div>
                                <?php
                            } ?>

                        </div>
                        <?php
                    } ?>
                </div>

                <?php
            } ?>
        </div><!-- end .ccm-block-page-list-pages -->

        <?php if (count($pages) == 0) { ?>
            <div class="ccm-block-page-list-no-pages"><?php echo h($noResultsMessage) ?></div>
        <?php } ?>

    </div><!-- end .ccm-block-page-list-wrapper -->


    <?php if ($showPagination) { ?>
        <?php echo $pagination; ?>
    <?php } ?>

    <?php

} ?>
