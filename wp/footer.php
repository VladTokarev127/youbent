</main>

		<footer class="footer">
			<div class="footer__top">
				<div class="container">

					<div class="footer__logo"><a href="/">МАГАЗИН <br>YOUВЕНТ</a></div>
					<div class="footer__content">
						<div class="footer__nav">
							<?php 
								wp_nav_menu([
									'menu'            => 'footer_menu',
									'container'       => false,
								]);
							?>
						</div>
						<div class="footer__form">
							<input type="email" name="email" placeholder="Введите свой E-mail*" required class="footer__input">
							<button type="submit" class="footer__btn btn">Подпишись на нас</button>
						</div>
					</div>

				</div>
			</div>

			<div class="footer__bottom">
				<div class="container">

					<div class="footer__copyright">© 2022 by YOUВЕНТ</div>
					
				</div>
			</div>
		</footer>
		
	</div>

	<?php wp_footer(); ?>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded',function() {
			setInterval(function() {
				if (!$('.woocommerce-ordering *').is('.select2')) {
					$('.orderby').select2({
						minimumResultsForSearch: -1
					});
				}
			}, 100);
			$(document).on('change', '.orderby', function(){
				$('.woocommerce-ordering').trigger('submit')
			});
		});
	</script>

</body>
</html>
