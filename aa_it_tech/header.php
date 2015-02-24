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
if($slug=='home' || $slug==''){?><body <?php body_class($class); ?>><?php }
else { 
	if($slug=='hysterectomy-morcellation' || $slug=='power-morcellation-surgeries' || $slug=='morcellator-lawsuit-settlements'){?><body <?php body_class('sidebar3'); ?>> <?php } 
	else {?><body <?php body_class('sidebar2'); ?>> <?php }
}?>

<div id="wrapper_main">
	<div id="div_menu">
		<div id="wrapper">
			<nav class="main-navigation">
                <?php  wp_nav_menu( array( 'theme_location' => 'menu') ); ?>
                <?php /* shailan_dropdown_menu( ); */?>
            </nav>
		</div>
	</div>
