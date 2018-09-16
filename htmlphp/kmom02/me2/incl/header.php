<?php

// Get the page title
$title = basename($_SERVER['PHP_SELF']);

// Discard the extension(.php) and capitalize the first character of the word
$title = ucwords(explode('.', $title)[0]);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <title>Me-sida | <?= $title?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header class="site-header">
    <img src="img/logo.jpg" alt="logo"/>
    <span class="site-title">Personal page of Bernard Longho</span>
    <span class="site-slogan">Learning web programming for life</span>
</header>

<nav class="navbar" id="main-navbar">
    <a href="me.php" class='<?= basename($_SERVER['PHP_SELF']) === 'me.php'? "selected":"";
    ?>'>Home</a>
    <a href="report.php" class='<?= basename($_SERVER['PHP_SELF']) === 'report.php'? "selected":"";
    ?>'>Reports</a>
    <a href="about.php" class='<?= basename($_SERVER['PHP_SELF']) === 'about.php'? "selected":"";
    ?>'>About</a>
    <a href="contact.php" class='<?= basename($_SERVER['PHP_SELF']) ==='contact.php'? "selected":"";
    ?>'>Contact</a>
</nav>
