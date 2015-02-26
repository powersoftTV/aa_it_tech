<!doctype html>
<html>
<head>
<title><?php wp_title("|",'true','right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<?php  global $post; $slug=$post->post_name;
?>

<div id="wrapper_main">
<div id="top_h">
	<div class="logo" >
		<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
	</div>
    <div class="adv">
    	<ul>
        	<li>FREE SHIPPING to Lower 48 States on Web Orders</li>
            <li id="col_blue">Questions? Call: (818) 616-3509</li>
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
