<!--
    Copyright (C) 2009 - 2021 RiDi Cage Productions, Inc.
    Amersfoort, Utrecht, The Netherlands

    Licensed under MIT ( https://www.ridis.nl/index.php?p=license )
-->

<?php
    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    if ($url == 'ridis.net/')
    {
        header('Location: http://ridis.net/index.php?p=home');
        exit();
    }

    include_once('./layout/import.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <meta name="google" content="notranslate">

        <!-- Required Meta Thema -->
        <meta name="theme-color" content="#730000">
        <meta name="apple-mobile-web-app-status-bar-style" content="#730000" />
        <meta name="msapplication-navbutton-color" content="#730000" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <!-- Required Link Tags -->
        <link rel="icon" href="./img/icons/icon.svg" type="image/svg" sizes="any" />
        <link rel="shortcut icon" href="./img/icons/icon.svg" type="image/x-icon" sizes="any" />
        <link rel="apple-touch-icon-precomposed" href="./img/icons/icon.svg" sizes="any" />
        <link rel="apple-touch-icon" href="./img/icons/icon.svg" sizes="144x144" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
        <link rel="stylesheet" href="./css/style.css" />

        <!-- Required Script Tags -->
        <script type="text/javascript" src="./js/menu.js"></script>
        <script type="text/javascript" src="./js/klok.js"></script>

        <!-- Title Page Tag -->
        <title>&copy; <?php if ( isset($_GET["p"])) { echo "RiDi's - " . ucfirst($_GET["p"]); } else { echo ucfirst("RiDi Cage Productions"); } ?></title>
    </head>

    <body>
        <?php
            echo '<header>';
                require_once("./layout/navbar.php");
            echo '</header>';

            echo '<content>';
                if (isset($_GET["p"]))
                {
                    require_once("./page/".$_GET['p'].".php");
                } 
                else
                {
                    require_once("./page/home.php");
                }
            echo '</content>';

            echo '<footer>';
                require_once("./layout/footer.php");
            echo '</footer>';

            die();
        ?>
    </body>
</html>