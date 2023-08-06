<?php
include_once("/var/www/php/common.php");
include_once("assets.php");
?>

<head>
    <title>Bram Deraeve</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    $url = dynamic_asset("/assets/css/style.css");
    echo <<<HTML
        <!-- Link custom CSS -->
        <link rel="stylesheet" href="{$url}">
HTML;
    ?>
</head>