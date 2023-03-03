<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php the_field('favicon', 'options'); ?>" type="image/x-icon">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-rim-auto-match" content="none">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

	<header class="header">
		<div class="container">

			<a href="/" class="header__logo">
				<div class="header__logo-icon">
					<svg preserveAspectRatio="xMidYMid meet" data-bbox="20.5 20.5 159 159" viewBox="20.5 20.5 159 159" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-labelledby="svgcid--q1s3aerl9mjl"><title id="svgcid--q1s3aerl9mjl"></title>
						<g>
							<path d="M100 132c-17.673 0-32-14.327-32-32s14.327-32 32-32V20.5c-43.907 0-79.5 35.593-79.5 79.5s35.593 79.5 79.5 79.5 79.5-35.593 79.5-79.5H132c0 17.673-14.327 32-32 32z"></path>
						</g>
					</svg>
				</div>
				<div class="header__logo-text">YOUВЕНТ</div>
			</a>

			<div class="header__nav">
				<nav>
					<?php 
						wp_nav_menu([
							'menu'            => 'header_menu',
							'container'       => false,
						]);
					?>
				</nav>
			</div>

			<div class="header__login">
				<?php if(is_user_logged_in()) :?>
					<a href="/my-account/">
						<div class="header__login-icon">
							<svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><g><path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path></g></svg>
						</div>
						<div class="header__login-text">Кабинет</div>
					</a>
				<?php else: ?>
					<a href="/login">
						<div class="header__login-icon">
							<svg data-bbox="0 0 50 50" data-type="shape" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><g><path d="M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0"></path></g></svg>
						</div>
						<div class="header__login-text">Войти</div>
					</a>
				<?php endif; ?>
			</div>

			<a href="/cart" class="header__cart">
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%" viewBox="221.4 359.3 267 123" data-hook="svg-icon-8"><rect x="221.4" y="403.7" width="152.4" height="6"></rect><path d="M345.9 482.3h-96.4c-1.2 0-2.4-1.2-3-2.4l-19.6-70.8 6-1.8 19.1 68.5h92.3l19-68.5 6 1.8 -19.6 70.8C348.2 481.1 347 482.3 345.9 482.3z"></path><rect x="259" y="380.1" transform="matrix(-0.527 -0.8498 0.8498 -0.527 109.9867 827.3946)" width="52.4" height="6"></rect><rect x="292.3" y="424.5" width="10.7" height="10.7"></rect><rect x="315.5" y="424.5" width="10.7" height="10.7"></rect><rect x="269.1" y="424.5" width="10.7" height="10.7"></rect><rect x="292.3" y="447.7" width="10.7" height="10.7"></rect><rect x="315.5" y="447.7" width="10.7" height="10.7"></rect><rect x="269.1" y="447.7" width="10.7" height="10.7"></rect><text x="390" y="474" text-anchor="start" class="bGBBgJ jDuYHa" data-hook="items-count">1</text></svg>
			</a>
			<button class="header__menu"><span></span></button>

		</div>
	</header>

	<main class="main">