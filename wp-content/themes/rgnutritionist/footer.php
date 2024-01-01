<script>
	var main_slider = new Swiper(".main_slider", {
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		navigation: {
			nextEl: ".main_slider_next",
			prevEl: ".main_slider_prev",
		}
	});
</script>

<?php wp_footer(); ?>

</body>
</html>