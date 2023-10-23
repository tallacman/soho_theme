<?php        defined('C5_EXECUTE') or die("Access Denied."); ?>

<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $html->css($view->getStylesheet('main.less'))?>

<link rel="stylesheet" href="<?php      echo $this->getThemePath()?>/css/styles.css">

</head>
<body>
    <div class="<?php       echo $c->getPageWrapperClass()?> full-height">
