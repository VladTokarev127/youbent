<?php

	add_action('wp_enqueue_scripts', 'youbent_media');

	add_action('after_setup_theme', 'youbent_after_setup');

	/**
	 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
	 * 
	 * @param string      $handle    Name of the script. Should be unique.
	 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
	 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
	 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
	 *                               Default 'false'.
	 */
	function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
		wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
	}
	
	/**
	 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
	 *
	 * @param string      $handle Name of the stylesheet. Should be unique.
	 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
	 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
	 * @param string      $media  Optional. The media for which this stylesheet has been defined.
	 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
	 *                            '(orientation: portrait)' and '(max-width: 640px)'.
	 */
	function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
		wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
	}

	function youbent_media() {
		enqueue_versioned_style('test-main', '/style.css');
		enqueue_versioned_script('test-main', '/js/main.min.js', array( 'jquery'), false);
	}

	function youbent_after_setup() {
		register_nav_menu('menu', 'Menu');

		add_theme_support('post-thumbnails');
	}

	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title'   => 'Основные настройки',
			'menu_title'  => 'Настройки темы',
			'menu_slug'   => 'theme-general-settings',
			'capability'  => 'edit_posts',
			'redirect'    => false
		));
	}

	add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
	function custom_override_checkout_fields( $fields ) {
		unset($fields['billing']['billing_company']);
		return $fields;
	}

	add_action('woocommerce_before_shop_loop_item_title', 'addWarranty', 10 );
	function addWarranty() {
		global $product;
		$warranty = get_field( 'warranty', $product->get_id() );
		if (!empty($warranty)) {
			echo '<div class="product__warranty">'. $warranty .'</div>';
		}
	}

	add_action('woocommerce_before_single_product', 'addBreadcrumbs', 10 );
	function addBreadcrumbs() {
		global $product;
		$title = $product->get_title();
		$prev = get_previous_post_link('%link', '<svg viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill="currentColor" d="M11.519 13.934c0.214 0.217 0.214 0.566 0 0.783s-0.561 0.217-0.775 0l-6.264-6.326c-0.214-0.217-0.214-0.567 0-0.783l6.264-6.326c0.214-0.217 0.561-0.217 0.775 0s0.214 0.566 0 0.783l-5.712 5.934 5.712 5.934z"></path></svg>Назад') ? get_previous_post_link('%link', '<svg viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill="currentColor" d="M11.519 13.934c0.214 0.217 0.214 0.566 0 0.783s-0.561 0.217-0.775 0l-6.264-6.326c-0.214-0.217-0.214-0.567 0-0.783l6.264-6.326c0.214-0.217 0.561-0.217 0.775 0s0.214 0.566 0 0.783l-5.712 5.934 5.712 5.934z"></path></svg>Назад') : '<div class="empty"><svg viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill="currentColor" d="M11.519 13.934c0.214 0.217 0.214 0.566 0 0.783s-0.561 0.217-0.775 0l-6.264-6.326c-0.214-0.217-0.214-0.567 0-0.783l6.264-6.326c0.214-0.217 0.561-0.217 0.775 0s0.214 0.566 0 0.783l-5.712 5.934 5.712 5.934z"></path></svg>Назад</div>';
		$next = get_next_post_link('%link', 'Вперед<svg viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill="currentColor" d="M4.48 13.934c-0.214 0.217-0.214 0.566 0 0.783s0.561 0.217 0.775 0l6.264-6.326c0.214-0.217 0.214-0.567 0-0.783l-6.264-6.326c-0.214-0.217-0.561-0.217-0.775 0s-0.214 0.566 0 0.783l5.712 5.934-5.712 5.934z"></path></svg>') ? get_next_post_link('%link', 'Вперед<svg viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill="currentColor" d="M4.48 13.934c-0.214 0.217-0.214 0.566 0 0.783s0.561 0.217 0.775 0l6.264-6.326c0.214-0.217 0.214-0.567 0-0.783l-6.264-6.326c-0.214-0.217-0.561-0.217-0.775 0s-0.214 0.566 0 0.783l5.712 5.934-5.712 5.934z"></path></svg>') : '<div class="empty">Вперед<svg viewBox="0 0 16 16" fill="currentColor" width="16" height="16"><path fill="currentColor" d="M4.48 13.934c-0.214 0.217-0.214 0.566 0 0.783s0.561 0.217 0.775 0l6.264-6.326c0.214-0.217 0.214-0.567 0-0.783l-6.264-6.326c-0.214-0.217-0.561-0.217-0.775 0s-0.214 0.566 0 0.783l5.712 5.934-5.712 5.934z"></path></svg></div>';
		print_r('<div class="single__header"><div class="breadcrumbs"><a href="/">Главная</a> / <a href="/magazin/" aria-disabled="false">Магазин</a> / <a aria-disabled="true">'. $title .'</a></div><div class="single__nav">'. $prev .''. $next .'</div></div>');
	}

	add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
	function woo_rename_tabs( $tabs ) {
		$tabs['additional_information']['title'] = 'ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ';
		return $tabs;
	}

	add_filter('woocommerce_add_to_cart_fragments', 'ta_header_add_to_cart_fragment');
	function ta_header_add_to_cart_fragment($fragments)
	{
		global $woocommerce;

		ob_start();

	?>
		<?php if ($woocommerce->cart->get_cart_contents_count() > 0) : ?>
			<a href="/cart" class="header__cart"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="221.4 359.3 267 123" data-hook="svg-icon-8"><rect x="221.4" y="403.7" width="152.4" height="6"></rect><path d="M345.9 482.3h-96.4c-1.2 0-2.4-1.2-3-2.4l-19.6-70.8 6-1.8 19.1 68.5h92.3l19-68.5 6 1.8 -19.6 70.8C348.2 481.1 347 482.3 345.9 482.3z"></path><rect x="259" y="380.1" transform="matrix(-0.527 -0.8498 0.8498 -0.527 109.9867 827.3946)" width="52.4" height="6"></rect><rect x="292.3" y="424.5" width="10.7" height="10.7"></rect><rect x="315.5" y="424.5" width="10.7" height="10.7"></rect><rect x="269.1" y="424.5" width="10.7" height="10.7"></rect><rect x="292.3" y="447.7" width="10.7" height="10.7"></rect><rect x="315.5" y="447.7" width="10.7" height="10.7"></rect><rect x="269.1" y="447.7" width="10.7" height="10.7"></rect><text x="390" y="474" text-anchor="start" class="bGBBgJ jDuYHa" data-hook="items-count"><?php echo $woocommerce->cart->get_cart_contents_count(); ?></text></svg></a>
		<?php else : ?>
			<a href="/cart" class="header__cart"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="221.4 359.3 267 123" data-hook="svg-icon-8"><rect x="221.4" y="403.7" width="152.4" height="6"></rect><path d="M345.9 482.3h-96.4c-1.2 0-2.4-1.2-3-2.4l-19.6-70.8 6-1.8 19.1 68.5h92.3l19-68.5 6 1.8 -19.6 70.8C348.2 481.1 347 482.3 345.9 482.3z"></path><rect x="259" y="380.1" transform="matrix(-0.527 -0.8498 0.8498 -0.527 109.9867 827.3946)" width="52.4" height="6"></rect><rect x="292.3" y="424.5" width="10.7" height="10.7"></rect><rect x="315.5" y="424.5" width="10.7" height="10.7"></rect><rect x="269.1" y="424.5" width="10.7" height="10.7"></rect><rect x="292.3" y="447.7" width="10.7" height="10.7"></rect><rect x="315.5" y="447.7" width="10.7" height="10.7"></rect><rect x="269.1" y="447.7" width="10.7" height="10.7"></rect><text x="390" y="474" text-anchor="start" class="bGBBgJ jDuYHa" data-hook="items-count">0</text></svg></a>
		<?php endif; ?>
	<?php

		$fragments['a.header__cart'] = ob_get_clean();

		return $fragments;
	}

	add_filter('woocommerce_add_to_cart_fragments', 'total_header_add_to_cart_fragment');
	function total_header_add_to_cart_fragment($fragments)
	{
		global $woocommerce;

		ob_start();

	?>
		<?php if ($woocommerce->cart->get_cart_contents_count() > 0) : ?>
			<a href="/cart" class="header__cart"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="221.4 359.3 267 123" data-hook="svg-icon-8"><rect x="221.4" y="403.7" width="152.4" height="6"></rect><path d="M345.9 482.3h-96.4c-1.2 0-2.4-1.2-3-2.4l-19.6-70.8 6-1.8 19.1 68.5h92.3l19-68.5 6 1.8 -19.6 70.8C348.2 481.1 347 482.3 345.9 482.3z"></path><rect x="259" y="380.1" transform="matrix(-0.527 -0.8498 0.8498 -0.527 109.9867 827.3946)" width="52.4" height="6"></rect><rect x="292.3" y="424.5" width="10.7" height="10.7"></rect><rect x="315.5" y="424.5" width="10.7" height="10.7"></rect><rect x="269.1" y="424.5" width="10.7" height="10.7"></rect><rect x="292.3" y="447.7" width="10.7" height="10.7"></rect><rect x="315.5" y="447.7" width="10.7" height="10.7"></rect><rect x="269.1" y="447.7" width="10.7" height="10.7"></rect><text x="390" y="474" text-anchor="start" class="bGBBgJ jDuYHa" data-hook="items-count"><?php echo $woocommerce->cart->get_cart_contents_count(); ?></text></svg></a>
		<?php else : ?>
			<a href="/cart" class="header__cart"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="221.4 359.3 267 123" data-hook="svg-icon-8"><rect x="221.4" y="403.7" width="152.4" height="6"></rect><path d="M345.9 482.3h-96.4c-1.2 0-2.4-1.2-3-2.4l-19.6-70.8 6-1.8 19.1 68.5h92.3l19-68.5 6 1.8 -19.6 70.8C348.2 481.1 347 482.3 345.9 482.3z"></path><rect x="259" y="380.1" transform="matrix(-0.527 -0.8498 0.8498 -0.527 109.9867 827.3946)" width="52.4" height="6"></rect><rect x="292.3" y="424.5" width="10.7" height="10.7"></rect><rect x="315.5" y="424.5" width="10.7" height="10.7"></rect><rect x="269.1" y="424.5" width="10.7" height="10.7"></rect><rect x="292.3" y="447.7" width="10.7" height="10.7"></rect><rect x="315.5" y="447.7" width="10.7" height="10.7"></rect><rect x="269.1" y="447.7" width="10.7" height="10.7"></rect><text x="390" y="474" text-anchor="start" class="bGBBgJ jDuYHa" data-hook="items-count">0</text></svg></a>
		<?php endif; ?>
	<?php

		$fragments['a.header__cart'] = ob_get_clean();

		return $fragments;
	}

	add_filter( 'woocommerce_account_menu_items', 'remove_my_account_links' );
	function remove_my_account_links( $menu_links ){
		unset( $menu_links[ 'downloads' ] );
		return $menu_links;
	}

	add_filter('woocommerce_add_to_cart_fragments', 'drop_header_add_to_cart_fragment');
	function drop_header_add_to_cart_fragment($fragments)
	{
		global $woocommerce;

		ob_start();

	?>
		<div class="header__cart-dropdown">
			<div class="header__cart-dropdown-wrapper">
				<div class="header__cart-dropdown-title">Корзина</div>
				<div class="header__cart-dropdown-list">
					<?php
					global $woocommerce;
					foreach ($woocommerce->cart->get_cart() as $key => $item) :
						$removeUrl = $woocommerce->cart->get_remove_url($item['product_id']);
						$myMeta = wc_get_product($item['product_id']);
						$myPrice = $myMeta->price;
						$myImg = get_the_post_thumbnail_url($item['product_id'], 'full');
					?>
						<div class="header__cart-dropdown-item" data-key="<?php echo $key; ?>">
							<a href="<?php echo get_permalink($item['product_id']); ?>" class="header__cart-dropdown-img"><img src="<?php echo $myImg; ?>" alt=""></a>
							<div class="header__cart-dropdown-content">
								<a href="<?php echo get_permalink($item['product_id']); ?>" class="header__cart-dropdown-item-title"><?php echo $myMeta->get_title(); ?></a>
								<div class="header__cart-dropdown-price"><?php echo number_format($myPrice, 2, ',', ' '); ?> ₽ x <?php echo $item['quantity'] ?></div>
								<?php woocommerce_quantity_input(array('input_value' => $item['quantity']), $myMeta); ?>
							</div>
							<a href="<?php echo $removeUrl; ?>" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="<?php echo $item['product_id']; ?>" data-cart_item_key="<?php echo $item['key'] ?>" data-product_sku="">×</a>
						</div>
					<?php endforeach;
					?>
				</div>
				<div class="header__cart-dropdown-total">
					<div class="header__cart-dropdown-total-title">Сумма</div>
					<div class="header__cart-dropdown-total-val"><?php echo number_format($woocommerce->cart->total, 2, ',', ' '); ?> ₽</div>
				</div>
				<div class="header__cart-dropdown-btn-wrapper">
					<a href="/cart" class="header__cart-dropdown-btn btn">Корзина</a>
				</div>
			</div>
		</div>
	<?php

		$fragments['div.header__cart-dropdown'] = ob_get_clean();

		return $fragments;
	}


	add_action('wp_ajax_set_qty', 'set_qty');
	add_action('wp_ajax_nopriv_set_qty', 'set_qty');
	function set_qty() {
		$qty = $_POST['qty'];
		$key = $_POST['key'];
		print_r($key);
		print_r($qty);
		WC()->cart->set_quantity( $key, $qty, false );
		WC()->cart->calculate_totals();
	}