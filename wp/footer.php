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
			
			const colorParent = $('#pa_czvet').parents('tr');
			const colorSelect = colorParent.find('select');
			const colorLabel = colorParent.find('.label').clone();
			colorParent.hide();
			colorParent.after(`<tr class="color-switcher"></tr>`);
			const colorSwitcher = $('.color-switcher');
			colorSwitcher.append(colorLabel);
			colorSwitcher.append('<td class="value"><div class="color-switcher-list"></div></td>');
			const colorSwitcherList = colorSwitcher.find('.color-switcher-list');
			colorSelect.find('option:not(:first-child)').each(function() {
				let color = $(this).attr('value');
				let name = $(this).text();
				colorSwitcherList.append(`
					<div class="color-switcher-item" style="background-color: #${color}" data-name="${name}" data-value="${color}"></div>
				`);
			});

			$(document).on('click', '.color-switcher-item:not(.is-active)', function(e) {
				e.preventDefault();
				$('.color-switcher-item').removeClass('is-active');
				$(this).addClass('is-active');
				let value = $(this).data('value');
				colorSelect.val(value);
				colorSelect.trigger('change');
			})

			$('.variations select').select2({
				minimumResultsForSearch: -1
			});
			$('.woocommerce-checkout select').select2({
				minimumResultsForSearch: -1
			});
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
