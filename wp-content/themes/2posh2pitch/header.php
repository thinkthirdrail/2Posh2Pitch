<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php title_tag(); ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/cjd4mgc.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.svg" alt="logo" width="150" id="main-logo" />
    <div class="burger-wrap">
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <p class="burger-close">Close</p>
        </div>
    </div>
</header>

<nav class="main-nav">
<?php wp_nav_menu(); ?>
</nav>
