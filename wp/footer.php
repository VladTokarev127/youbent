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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script>
		document.addEventListener('DOMContentLoaded',function() {

			$(document).on('click', '.xoo-qv-images .thumbnails a', function(e) {
				e.preventDefault();
				let parent = $(this).parents('.xoo-qv-images .images');
				let src = $(this).attr('href');
				let imgLink = parent.children('a');
				let img = parent.children('a').find('img');
				img.removeAttr('srcset');
				img.attr('src', src);
				imgLink.attr('href', src);
			})

			$('.woocommerce-product-gallery__image a').magnificPopup({
				type: 'image',
				fixedContentPos: false,
				gallery: {
					enabled:true
				}
			});

			$(document).on('change', '.header__cart-dropdown-list input.qty', function( event ){
				console.log(1);
				<?php  $admin_url = get_admin_url(); ?>
				let key = $(this).parents('.header__cart-dropdown-item').data('key');
				let qty = $(this).val();
				$.ajax({
					url: '<?php echo $admin_url; ?>' + 'admin-ajax.php',
					type: "post",
					data: {
						action: 'set_qty',
						qty: qty,
						key: key
					},
					beforeSend: function() {

					},
					success: function (html) {
						console.log(html);
						location.reload();
					},
					error: function() {
						
					},
					complete: function() {

					}
				});
			});

			$(document).on('click', '.single_add_to_cart_button', function() {
				$('.header__cart-dropdown-outer').addClass('is-active');
			})

			$(document).on('click', '.header__cart', function(e) {
				e.preventDefault();
				$('.header__cart-dropdown-outer').toggleClass('is-active');
			});

			$(document).on('click', '.header__cart-dropdown-title', function(e) {
				e.preventDefault();
				$('.header__cart-dropdown-outer').toggleClass('is-active');
			});

			$('.xoo-qv-button').click(function(e) {
				e.preventDefault();
				let timer = setInterval(function() {
					if ($('.xoo-qv-summary *').is('.color-switcher')) {
						clearInterval(timer);
					} else {
						$('.xoo-qv-images .images > a').magnificPopup({
							type: 'image',
							fixedContentPos: false,
							gallery: {
								enabled:true
							}
						});
						$('.variations select').select2({
							minimumResultsForSearch: -1
						});
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
						});
					}
				}, 100);
			});
			
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
