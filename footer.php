<!-- Begin Footer -->
<div id="footer">

    <!-- Begin Footer Logo -->
    <div id="footer-logo">
    	<a href="http://www.realself.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-realselffooter.png" alt="RealSelf"></a>
    </div>
    <!-- End Footer Logo -->

	<!-- Begin Footer Menu -->
   <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'div','container_id' => 'footer-menu', 'items_wrap' => '<ul id="footer-menu-items" class="%2$s">%3$s</ul>', ) ); ?>
    <!-- Begin Footer Menu -->
    
    <!-- Begin Footer Social -->
    <div id="footer-social">
    <ul id="footer-social-items">
    <li><a href="https://www.facebook.com/Realself" target="_blank" class="flaticon-facebook3"></a></li>
    <li><a href="https://twitter.com/RealSelf" target="_blank" class="flaticon-social71"></a></li>
    <li><a href="https://www.linkedin.com/company/realself.com" target="_blank" class="flaticon-linkedin1"></a></li>
    </ul>
    </div>
    <!-- End Footer Social -->

</div>
<!-- End Footer -->

<!-- Begin WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->


</body>
</html>