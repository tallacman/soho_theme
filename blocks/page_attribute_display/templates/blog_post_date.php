<?php

defined('C5_EXECUTE') or die('Access Denied.');
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
echo $this->controller->getOpenTag();
echo '<h5 class="all-caps">';
echo $this->controller->getTitle();
echo "</h5>";
echo "<p class='small'>";
try {
    if ($this->controller->dateFormat) {
        echo $dh->formatCustom($dateFormat, $this->controller->getContent());
    } else {
        echo $dh->formatDateTime($this->controller->getContent());
    }
} catch (Exception $e) {
    echo $this->controller->getContent();
}
echo $this->controller->getCloseTag();
echo "</p>";
