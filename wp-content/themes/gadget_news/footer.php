<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gadget_news
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">onlinegadgetnews.com</a>				
			</div><!-- .site-info -->
			<ul class="footer-links">
				<li><a href="#"><span>|</span> about us <span>|</span></a></li>
				<li><a href="#">contact us <span>|</span></a></li>
				<li><a href="#">privacy <span>|</span></a></li>
				<li><a href="#">site map <span>|</span></a></li>
				<li><a href="#">terms and conditions <span>|</span></a></li>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
