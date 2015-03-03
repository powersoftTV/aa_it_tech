<!doctype html>
<html>
<head>
<title><?php wp_title("|",'true','right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link href='http://fonts.googleapis.com/css?family=Roboto%7COpen+Sans%7CRoboto+Condensed%7COswald' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper_main">
<header>
<div class="top_h">
	<div class="logo" >
		<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
	</div>
    <div class="adv">
    	<ul>
        	<li id="li1">FREE SHIPPING to Lower 48 States on Web Orders</li>
            <li id="col_blue">QUESTIONS? Call: (818) 616-3509</li>
        </ul>
    </div>
</div>
	<div id="div_menu">
		<div id="wrapper">
			<nav class="main-navigation">
                <?php  wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
            </nav>
		</div>
	</div>
</header>