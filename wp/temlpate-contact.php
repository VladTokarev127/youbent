<?php /* Template Name: Контакты */ ?>
<?php get_header(); ?>

	<div class="page-content">

		<!-- start section shop__header -->
		<section class="shop__header">
			<div class="shop__header-content">
				<h1 class="shop__header-title"><?php the_title(); ?></h1>
			</div>
			<div class="shop__header-img"><img src="<?php the_field('img'); ?>" alt="<?php the_title(); ?>"></div>
		</section>
		<!-- end section shop__header -->

		<!-- start section contact -->
		<section class="contact">
			<div class="contact__container">

				<div class="contact__left">
					<div class="contact__arrow">
						<svg preserveAspectRatio="xMidYMid meet" data-bbox="1.95 9.05 56.15 42" xmlns="http://www.w3.org/2000/svg" viewBox="1.95 9.05 56.15 42" role="presentation" aria-hidden="true">
							<path d="M56.5 27.6H10.4l14.7-14.7c.6-.6.6-1.6 0-2.2L24 9.5c-.6-.6-1.6-.6-2.2 0L2.4 28.9c-.6.6-.6 1.6 0 2.2l1.2 1.2 18.3 18.3c.6.6 1.6.6 2.2 0l1.2-1.2c.6-.6.6-1.6 0-2.2L10.4 32.4h46.1c.9 0 1.6-.7 1.6-1.6v-1.7c0-.8-.7-1.5-1.6-1.5z"></path>
						</svg>
					</div>
					<div class="contact__title"><?php the_field('title'); ?></div>
					<div class="contact__img"><img src="<?php the_field('contact_img'); ?>" alt=""></div>
					<div class="contact__angle">
						<svg preserveAspectRatio="xMidYMid meet" data-bbox="10.305 4.552 131.804 131.5" xmlns="http://www.w3.org/2000/svg" viewBox="10.305 4.552 131.804 131.5" role="presentation" aria-hidden="true">
							<path d="M142.109 136.052H10.305V4.552l131.804 131.5z"></path>
						</svg>
					</div>
				</div>
				<div class="contact__form">
					<div class="contact__form-title"><?php the_field('title_2'); ?></div>
					<div class="contact__rows">
						<div class="contact__item">
							<div class="contact__item-icon">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="38.999 39 122.001 122" viewBox="38.999 39 122.001 122" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--vs3su5-p8ii4p"><defs><style>#comp-l6z5ys80 svg [data-color="1"] {fill: #BB2423;}</style></defs><title id="svgcid--vs3su5-p8ii4p"></title>
									<path d="M66.248 47.383c2.234 0 4.783.813 6.746 3.742 5.289 7.88 10.39 15.304 13.215 20.359.956 1.715 1.884 6.569-1.238 10.083-2.696 3.029-5.074 3.772-6.511 5.984-.985 1.524-2.11 4.931-.259 8.848 2.213 4.678 4.913 8.52 10.838 14.54 6.018 5.917 9.859 8.615 14.546 10.829 1.53.722 2.984.99 4.276.99 2.019 0 3.647-.651 4.573-1.249 2.213-1.434 2.958-3.812 5.989-6.507 1.827-1.621 4.014-2.15 5.935-2.15 1.779 0 3.33.454 4.152.916 5.057 2.82 12.484 7.919 20.372 13.203 5.532 3.707 3.515 9.499 2.736 11.32-.783 1.821-4.788 7.847-13.4 12.352-2.37 1.239-5.497 1.974-9.288 1.974-11.935 0-30.424-7.304-52.356-29.225-28.895-28.88-32.402-51.787-27.261-61.607 4.506-8.61 10.536-12.613 12.36-13.392.854-.368 2.589-1.01 4.575-1.01zm0-8.383c-3.278 0-6.106.923-7.9 1.699C54.8 42.211 47.294 47.555 41.88 57.9c-6.765 12.922-3.295 39.381 28.762 71.419C98.22 156.883 118.998 161 128.929 161c5.024 0 9.457-.987 13.175-2.93 10.331-5.404 15.687-12.899 17.222-16.475 3.579-8.37 1.312-16.839-5.772-21.589-1.216-.813-2.421-1.623-3.606-2.42-6.566-4.414-12.769-8.585-17.35-11.141-2.239-1.252-5.244-1.975-8.238-1.977-4.382 0-8.36 1.473-11.504 4.264-2.088 1.855-3.389 3.574-4.34 4.827-.196.259-.44.582-.628.813h-.027c-.197 0-.43-.062-.694-.187-3.482-1.644-6.597-3.675-12.199-9.178-5.508-5.6-7.54-8.714-9.185-12.193-.152-.321-.191-.558-.189-.718.231-.188.557-.433.817-.63 1.255-.95 2.973-2.249 4.826-4.33 5.306-5.974 5.143-14.623 2.3-19.731-2.579-4.614-6.782-10.857-11.234-17.465-.772-1.148-1.557-2.312-2.346-3.487C76.736 41.648 71.866 39 66.248 39z" fill="#2F54DD" data-color="1"></path>
								</svg>
							</div>
							<div class="contact__item-text"><?php the_field('tel'); ?></div>
						</div>
						<div class="contact__item">
							<div class="contact__item-icon">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="35 56 130 88" viewBox="35 56 130 88" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-o8jne4tbxgor"><defs><style>#comp-l6z5zfix svg [data-color="1"] {fill: #BB2423;}</style></defs><title id="svgcid-o8jne4tbxgor"></title>
									<path d="M35 56v88h130V56H35zm64.879 58.87L49.15 64.499h101.455L99.879 114.87zM72.191 99.311l-28.755 30.025V70.757l28.755 28.554zm6.009 5.967l21.679 21.525 21.677-21.525 28.93 30.224H49.254L78.2 105.278zm49.364-5.967l29-28.796v59.092l-29-30.296z" fill="#2F54DD" data-color="1"></path>
								</svg>
							</div>
							<div class="contact__item-text"><?php the_field('mail'); ?></div>
						</div>
						<div class="contact__item">
							<div class="contact__item-icon">
								<svg preserveAspectRatio="xMidYMid meet" data-bbox="53.5 36.5 93 127" viewBox="53.5 36.5 93 127" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-t2y4on1vr8x4"><defs><style>#comp-l6z5yfek svg [data-color="1"] {fill: #BB2423;}</style></defs><title id="svgcid-t2y4on1vr8x4"></title>
									<path d="M99.999 163.5l-3.25-3.895C94.986 157.487 53.5 107.468 53.5 82.916 53.5 57.323 74.359 36.5 99.999 36.5c25.644 0 46.501 20.823 46.501 46.416 0 24.551-41.483 74.571-43.252 76.688l-3.249 3.896zm0-118.56c-20.978 0-38.046 17.036-38.046 37.977 0 16.359 25.019 51.015 38.046 67.305 13.029-16.29 38.048-50.946 38.048-67.305 0-20.942-17.068-37.977-38.048-37.977z" fill="#2F54DD" data-color="1"></path>
									<path d="M99.999 101.658c-10.351 0-18.775-8.407-18.775-18.741 0-10.335 8.424-18.743 18.775-18.743 10.353 0 18.777 8.408 18.777 18.743 0 10.333-8.424 18.741-18.777 18.741zm0-29.046c-5.69 0-10.32 4.621-10.32 10.304 0 5.68 4.63 10.303 10.32 10.303 5.692 0 10.324-4.622 10.324-10.303 0-5.682-4.632-10.304-10.324-10.304z" fill="#2F54DD" data-color="1"></path>
								</svg>
							</div>
							<div class="contact__item-text"><?php the_field('address'); ?></div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- end section contact -->

		<!-- start section message -->
		<section class="message">
			<div class="message__container">

				<div class="message__wrapper">
					<div class="message__title"><?php the_field('title_3'); ?></div>
					<form action="" class="message__form">
						<div class="message__input message__input_col">
							<label for="name" class="message__label">First Name</label>
							<input type="text" id="name" name="name">
						</div>
						<div class="message__input message__input_col">
							<label for="name-2" class="message__label">Last Name</label>
							<input type="text" id="name-2" name="name-2">
						</div>
						<div class="message__input">
							<label for="email" class="message__label">Email *</label>
							<input type="email" id="email" name="email" require>
						</div>
						<div class="message__input">
							<label for="message" class="message__label">Message</label>
							<textarea name="message" id="message"></textarea>
						</div>
						<button type="submit" class="message__btn btn">Send</button>
					</form>
				</div>
				
				<div class="message__map" id="map"><?php the_field('map'); ?></div>

			</div>
		</section>
		<!-- end section message -->

<?php get_footer(); ?>