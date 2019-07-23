	</main><!-- #main -->

	<footer id="site-footer">
		<?php get_sidebar( 'footer' ); ?>
	</footer>

	<?php wp_footer(); ?>
	<script>
		var acc = document.getElementsByClassName("accordion");
		for ( var i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
			/* Toggle between adding and removing the "active" class,
			to highlight the button that controls the panel */
			this.classList.toggle("active");

			/* Toggle between hiding and showing the active panel */
			var panel = this.parentElement.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
		}
	</script>
	<script>
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script>
		var pageTracker = _gat._getTracker("UA-3941204-1");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>
	<script>
		function init(){
			imgs = document.images;
			for(i=0;i<imgs.length;i++){
				imgs[i].alt="Alt text";

			}
		}
	</script>
	<script type="text/javascript" src="https://e2eg.co.uk/3146.js"></script>
</body>
</html>

