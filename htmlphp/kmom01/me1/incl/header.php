<?php

// Get the page title
$title = basename($_SERVER['PHP_SELF']);

// Discard teh extension(.php) and capitalize the first character of the word
$title = ucwords(explode('.', $title)[0]);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <title>Me-sida | <?php echo $title?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header class="site-header">
    <img src="img/logo.jpg" alt="logo"/>
    <span class="site-title">Personal page of Bernard Longho</span>
    <span class="site-slogan">Learning web programming for life</span>
</header>

<nav class="navbar">
    <a href="me.php" class="selected">Home</a>
    <a href="report.php">Reports</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
</nav>
