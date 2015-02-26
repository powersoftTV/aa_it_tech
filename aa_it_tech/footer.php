<footer>
<div id="footer">
 <div id="div_menu">
		<div id="wrapper">
			<nav class="main-navigation">
                <?php  wp_nav_menu( array( 'theme_location' => 'bottom-menu') ); ?>
            </nav>
		</div>
	</div>   
</div>
</footer>
</div>
<?php wp_footer();?>
<script>
  jQuery(".str1").fitText(1.5, { minFontSize: '12px', maxFontSize: '38px' });
  jQuery(".str2").fitText(1.6, { minFontSize: '12px', maxFontSize: '38px' });
</script>
</body>
</html>