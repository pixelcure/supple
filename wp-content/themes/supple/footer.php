          <?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Sandbox
 * @since Sandbox 2.0
 */
?>

		<footer class="outer-wrapper">
			<section class="footer-inner inner-wrapper">
				
				<div class="left-content span_6">
					<div class="logo-container">
						<a href="/" title="Supple">
							<img src="<?php bloginfo(template_directory); ?>/images/logo-footer.jpg" alt="Supple" />
						</a>
					</div><!-- / end logo -->
					<div class="address">
						<span class="street">1245 Massachusetts Avenue</span>
						<span class="town">Cambridge, MA</span>
						<span class="number">(617) 945-0509</span>
					</div><!-- / end address -->
				</div><!-- / end left content -->

				<div class="footer-nav-container span_6">
					<div class="nav">
						<?php wp_nav_menu('footer-nav'); ?>
					</div><!-- / end nav -->
					<div class="social">
						<ul>
							<li class="facebook">
								<a href="#" class="fb">
									<span class="icon-fb"></span>
								</a>
							</li>
							<li class="twitter">
								<a href="#" class="twitter">
									<span class="icon-twitter"></span>
								</a>
							</li>
							<li>
								<a href="#" class="linked-in">
									<span class="icon-linkedin"></span>
								</a>
							</li>
							<li class="yelp">
								<a href="#" class="yelp">
									<span class="icon-yelp"></span>
								</a>
							</li>
						</ul>
					</div><!-- / end social media -->
				</div><!-- / end footer nav container -->
				
			</section><!-- / end footer inner -->	
		</footer><!-- / end footer -->

		<script data-main="<?php bloginfo('template_url'); ?>/app/scripts/main.js" src="<?php bloginfo('template_url'); ?>/app/bower_components/requirejs/require.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/app/scripts/require.config.js"></script>


		<?php wp_footer(); ?>
	</section><!-- /end outer wrapper -->
</body>
</html>
