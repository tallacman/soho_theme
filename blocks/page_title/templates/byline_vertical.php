<?php  defined('C5_EXECUTE') or die("Access Denied.");

$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
$page = Page::getCurrentPage();
$date = $dh->formatDate($page->getCollectionDatePublic(), true);
$user = UserInfo::getByID($page->getCollectionUserID());
?>
<div class="ccm-block-page-title-byline pb-2 pb-sm-5">
    <h1 class="page-title"><?=h($title)?></h1>


<div class="blog-date-user row mt-3">
  <div class="col-auto">


      <span class="page-date small"><i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
        <?php echo $date; ?>
      </span>

        <?php if (is_object($user)): ?><br>
      <span class="page-author small"><i class="fa fa-user" aria-hidden="true"></i></i>&nbsp;
        <?php echo $user->getUserDisplayName(); ?>
      </span>
    </div>
  </div>

    <?php endif; ?>
</div>
