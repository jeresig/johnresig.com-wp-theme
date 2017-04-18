<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?= get_stylesheet_uri() ?>" media="screen" rel="stylesheet" type="text/css"/>
    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://feeds.feedburner.com/JohnResig" />
    <link rel="icon" href="/files/jeresig-2016.32.png" type="image/png"/>
</head>
<body>
<div id="wrapper">
    <div id="head" class="other">
        <div class="wrap">
            <div class="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog/">Blog</a></li>
                    <li><a href="/research/">Research</a></li>
                    <li><a rel="author" href="/about/">About</a></li>
                </ul>
            </div>
            <div class="side">
                <a href="/about/"><img src="/files/jeresig-2016.48.jpg" class="logo" alt="John Resig" width="48" height="48"/></a>
                <div class="text">
                    <span class="name"><strong>John</strong> Resig</span><br/>
                    <a rel="author" href="/about/">Contact</a>,
                    <a href="/subscribe/">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
    <div id="wrap">
        <div id="body">
            <div class="wrap">
