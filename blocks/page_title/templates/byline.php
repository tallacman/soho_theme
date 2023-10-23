<?php  defined('C5_EXECUTE') or die("Access Denied.");
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
$page = Page::getCurrentPage();
$date = $dh->formatDate($page->getCollectionDatePublic(), true);
$user = UserInfo::getByID($page->getCollectionUserID());
?>
<div class="ccm-block-page-title-byline row">
  <div class="col-12">


    <h1> <?=h($title)?></h1>

    <span class="page-date small"><i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;
    <?php echo $date; ?>
    </span>

    <?php if (is_object($user)): ?>
    <span class="page-author small"> &nbsp;&nbsp;<i class="fa fa-user" aria-hidden="true"></i></i>&nbsp;
    <?php echo $user->getUserDisplayName(); ?>
    </span>
    <?php endif; ?>
  </div>
</div>
