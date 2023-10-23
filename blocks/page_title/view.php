<?php  defined('C5_EXECUTE') or die('Access Denied.');

if ($useFilterTitle) {
    if (is_object($currentTopic) && $useFilterTopic) {
        $title = $controller->formatPageTitle($currentTopic->getTreeNodeDisplayName(), $topicTextFormat);
    }
    if ($tag && $useFilterTag) {
        $title = $controller->formatPageTitle($tag, $tagTextFormat);
    }
    if ($year && $month && $useFilterDate) {
      // from Core::make via tallacman January 18, 2019
        $srv = $this->app->make('helper/date');
        $date = strtotime("$year-$month-01");
        $title = $srv->date($filterDateFormat ? $filterDateFormat : 'F Y', $date);

        $title = $controller->formatPageTitle($title, $dateTextFormat);
    }
}

if ($title) {
    echo "<$formatting  class=\"page-title soho-headline\">" . h($title) . "</$formatting>";
}
