<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">

	<div class="footer-logo">
		<img alt="header" class="img-header"
			src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo.png" />
	</div>
	<div class="footer-contact">
		<div class="footer-contact-item">
			<span class="ai-font-phone"></span>
			<?php echo do_shortcode('[ai_phone href="+1.205.308.2835"] 205.308.2835[/ai_phone]')?>
		</div>
		<div class="footer-contact-item">
			<span class="ai-font-envelope-f"></span>
			<?php echo do_shortcode('[mail_to email="info@seluxuryliving.com"] info@seluxuryliving.com[/mail_to]')?>
		</div>
		<div class="footer-contact-item">
			<span class="ai-font-location-c"></span>
			<span class="location">100 Chase Park South, Suite 128 Birmingham, AL 35244</span>
		</div>
	</div>
	<p class="footer-outro">
		Southeast Luxury Living is committed to providing an accessible website. If you have difficulty accessing
		content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us
		at
		<?php echo do_shortcode('[ai_phone
		href="+1.205.308.2835"] 205.308.2835[/ai_phone]')?> to specify the nature of the accessibility issue and any
		assistive technology you use. We strive
		to provide the content you need in the format you require.
	</p>
	<p class="copyright">Copyright ©
		<?php echo do_shortcode('[currentYear]')?> <span class="sitename">Southeast Luxury Living.</span>All rights
		reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a>.
		<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
	</p>
	<div class="mls">
		<em class="ai-font-eho" title="MLS"></em>
		<em class="ai-font-realtor-mls" title="MLS"></em>
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>