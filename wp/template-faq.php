<?php /* Template Name: Faq */ ?>
<?php get_header(); ?>

	<!-- start section faq -->
	<section class="faq content__page">
		<div class="content__container">

			<h1 class="content__title"><?php the_title(); ?></h1>
			<h2 class="faq__title">Часто задаваемые вопросы</h2>
			<div class="faq__tabs" data-tabs>
				<button class="faq__tab is-active" data-tab>Настройка раздела FAQ</button>
				<button class="faq__tab" data-tab>Общее</button>
			</div>
			<div class="faq__contents" data-tab-contents>
				<div class="faq__content is-active" data-tab-content>
					<div class="faq__items">
						<div class="faq__item">
							<div class="faq__head" data-accordion-trigger>
								<span>Как добавить вопросы и ответы?</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="arrowUp" d="M8.14644661,14.858836 C7.95118446,14.6635739 7.95118446,14.3469914 8.14644661,14.1517292 L12.4989857,9.79289322 L16.8573469,14.1517292 C17.052609,14.3469914 17.052609,14.6635739 16.8573469,14.858836 C16.6620847,15.0540981 16.3455022,15.0540981 16.1502401,14.858836 L12.4989857,11.2071068 L8.85355339,14.858836 C8.65829124,15.0540981 8.34170876,15.0540981 8.14644661,14.858836 Z"></path></svg>
							</div>
							<div class="faq__body content" data-accordion-target>
								<p>An FAQ section can be used to quickly answer common questions about you or your business, such as “Where do you ship to?”, “What are your opening hours?” or “How can I book a service?” <br>It’s a great way to help people navigate your site and can even boost your site’s SEO.</p>
								<p><img src="/wp-content/themes/storefront-child/img/hero-img-1.jpg" alt=""></p>
								<div class="faq__links">
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Facebook</title><g><path d="M20 12a8 8 0 10-9.25 7.903v-5.59H8.719V12h2.031v-1.762c0-2.005 1.194-3.113 3.022-3.113.875 0 1.79.156 1.79.156V9.25h-1.008c-.994 0-1.304.617-1.304 1.25V12h2.219l-.355 2.313H13.25v5.59A8.002 8.002 0 0020 12" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Twitter</title><g><path d="M18.123 7.081a3.34 3.34 0 001.44-1.838 6.556 6.556 0 01-2.08.808 3.259 3.259 0 00-3.605-.818 3.331 3.331 0 00-2.08 3.094c0 .254.03.508.085.757A9.277 9.277 0 015.12 5.607a3.3 3.3 0 00-.448 1.672 3.153 3.153 0 001.205 2.77 9.994 9.994 0 01-1.738-.416v.042c.113 1.63 1.304 2.973 2.89 3.262a2.461 2.461 0 01-1.29.056 3.319 3.319 0 003.093 2.311A6.464 6.464 0 014 16.681a9.23 9.23 0 009.52.334c2.995-1.66 4.858-4.844 4.859-8.304 0-.144-.011-.288-.011-.433A6.679 6.679 0 0020 6.558c-.596.27-1.23.446-1.877.523z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Linkedin</title><g><path d="M17.635 17.634h-2.372V13.92c0-.885-.016-2.024-1.234-2.024-1.235 0-1.423.965-1.423 1.96v3.778h-2.372V9.998h2.276v1.044h.033c.316-.6 1.09-1.233 2.245-1.233 2.403 0 2.847 1.58 2.847 3.637v4.188zM7.558 8.955a1.376 1.376 0 11.001-2.751 1.376 1.376 0 01-.001 2.751zm-1.187 8.679h2.374V9.998H6.371v7.636zM18.817 4H5.18C4.53 4 4 4.517 4 5.154v13.692C4 19.483 4.53 20 5.18 20h13.637c.652 0 1.183-.517 1.183-1.154V5.154C20 4.517 19.47 4 18.817 4z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Copy Question Link</title><g><path id="prefix__b" d="M13.095 10.287l.137.142c1.505 1.63 1.678 4.01.282 5.406l-2.093 2.093-.137.13c-1.472 1.35-3.537 1.325-5.075-.213-1.59-1.59-1.593-3.774-.12-5.248l1.685-1.683.942.942-1.684 1.683-.106.112c-.845.944-.804 2.223.225 3.252 1.06 1.061 2.364 1.047 3.328.083l2.093-2.093.09-.097c.773-.895.595-2.463-.509-3.567l.942-.942zm-.38-4.31c1.473-1.348 3.538-1.324 5.076.214 1.59 1.59 1.593 3.774.12 5.248l-1.685 1.684-.942-.942 1.684-1.684.106-.112c.845-.944.804-2.223-.225-3.252-1.06-1.06-2.364-1.047-3.328-.083l-2.093 2.093-.09.097c-.773.895-.595 2.463.509 3.567l-.942.942-.137-.142c-1.505-1.63-1.678-4.01-.282-5.406l2.093-2.093z"></path></g></svg>
									</a>
								</div>
							</div>
						</div>
						<div class="faq__item">
							<div class="faq__head" data-accordion-trigger>
								<span>Как добавить вопросы и ответы?</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="arrowUp" d="M8.14644661,14.858836 C7.95118446,14.6635739 7.95118446,14.3469914 8.14644661,14.1517292 L12.4989857,9.79289322 L16.8573469,14.1517292 C17.052609,14.3469914 17.052609,14.6635739 16.8573469,14.858836 C16.6620847,15.0540981 16.3455022,15.0540981 16.1502401,14.858836 L12.4989857,11.2071068 L8.85355339,14.858836 C8.65829124,15.0540981 8.34170876,15.0540981 8.14644661,14.858836 Z"></path></svg>
							</div>
							<div class="faq__body content" data-accordion-target>
								<p>Yes. To add media follow these steps:</p>
								<ol>
									<li>Enter the app’s Settings</li>
									<li>Click on the “Manage FAQs” button</li>
									<li>Select the question you would like to add media to</li>
									<li>When editing your answer click on the camera, video, or GIF icon</li>
									<li>Add media from your library.</li>
								</ol>
								<div class="faq__links">
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Facebook</title><g><path d="M20 12a8 8 0 10-9.25 7.903v-5.59H8.719V12h2.031v-1.762c0-2.005 1.194-3.113 3.022-3.113.875 0 1.79.156 1.79.156V9.25h-1.008c-.994 0-1.304.617-1.304 1.25V12h2.219l-.355 2.313H13.25v5.59A8.002 8.002 0 0020 12" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Twitter</title><g><path d="M18.123 7.081a3.34 3.34 0 001.44-1.838 6.556 6.556 0 01-2.08.808 3.259 3.259 0 00-3.605-.818 3.331 3.331 0 00-2.08 3.094c0 .254.03.508.085.757A9.277 9.277 0 015.12 5.607a3.3 3.3 0 00-.448 1.672 3.153 3.153 0 001.205 2.77 9.994 9.994 0 01-1.738-.416v.042c.113 1.63 1.304 2.973 2.89 3.262a2.461 2.461 0 01-1.29.056 3.319 3.319 0 003.093 2.311A6.464 6.464 0 014 16.681a9.23 9.23 0 009.52.334c2.995-1.66 4.858-4.844 4.859-8.304 0-.144-.011-.288-.011-.433A6.679 6.679 0 0020 6.558c-.596.27-1.23.446-1.877.523z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Linkedin</title><g><path d="M17.635 17.634h-2.372V13.92c0-.885-.016-2.024-1.234-2.024-1.235 0-1.423.965-1.423 1.96v3.778h-2.372V9.998h2.276v1.044h.033c.316-.6 1.09-1.233 2.245-1.233 2.403 0 2.847 1.58 2.847 3.637v4.188zM7.558 8.955a1.376 1.376 0 11.001-2.751 1.376 1.376 0 01-.001 2.751zm-1.187 8.679h2.374V9.998H6.371v7.636zM18.817 4H5.18C4.53 4 4 4.517 4 5.154v13.692C4 19.483 4.53 20 5.18 20h13.637c.652 0 1.183-.517 1.183-1.154V5.154C20 4.517 19.47 4 18.817 4z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Copy Question Link</title><g><path id="prefix__b" d="M13.095 10.287l.137.142c1.505 1.63 1.678 4.01.282 5.406l-2.093 2.093-.137.13c-1.472 1.35-3.537 1.325-5.075-.213-1.59-1.59-1.593-3.774-.12-5.248l1.685-1.683.942.942-1.684 1.683-.106.112c-.845.944-.804 2.223.225 3.252 1.06 1.061 2.364 1.047 3.328.083l2.093-2.093.09-.097c.773-.895.595-2.463-.509-3.567l.942-.942zm-.38-4.31c1.473-1.348 3.538-1.324 5.076.214 1.59 1.59 1.593 3.774.12 5.248l-1.685 1.684-.942-.942 1.684-1.684.106-.112c.845-.944.804-2.223-.225-3.252-1.06-1.06-2.364-1.047-3.328-.083l-2.093 2.093-.09.097c-.773.895-.595 2.463.509 3.567l-.942.942-.137-.142c-1.505-1.63-1.678-4.01-.282-5.406l2.093-2.093z"></path></g></svg>
									</a>
								</div>
							</div>
						</div>
						<div class="faq__item">
							<div class="faq__head" data-accordion-trigger>
								<span>Как отредактировать или удалить заголовок раздела FAQ?</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="arrowUp" d="M8.14644661,14.858836 C7.95118446,14.6635739 7.95118446,14.3469914 8.14644661,14.1517292 L12.4989857,9.79289322 L16.8573469,14.1517292 C17.052609,14.3469914 17.052609,14.6635739 16.8573469,14.858836 C16.6620847,15.0540981 16.3455022,15.0540981 16.1502401,14.858836 L12.4989857,11.2071068 L8.85355339,14.858836 C8.65829124,15.0540981 8.34170876,15.0540981 8.14644661,14.858836 Z"></path></svg>
							</div>
							<div class="faq__body content" data-accordion-target>
								<p>An FAQ section can be used to quickly answer common questions about you or your business, such as “Where do you ship to?”, “What are your opening hours?” or “How can I book a service?” <br>It’s a great way to help people navigate your site and can even boost your site’s SEO.</p>
								<div class="faq__links">
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Facebook</title><g><path d="M20 12a8 8 0 10-9.25 7.903v-5.59H8.719V12h2.031v-1.762c0-2.005 1.194-3.113 3.022-3.113.875 0 1.79.156 1.79.156V9.25h-1.008c-.994 0-1.304.617-1.304 1.25V12h2.219l-.355 2.313H13.25v5.59A8.002 8.002 0 0020 12" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Twitter</title><g><path d="M18.123 7.081a3.34 3.34 0 001.44-1.838 6.556 6.556 0 01-2.08.808 3.259 3.259 0 00-3.605-.818 3.331 3.331 0 00-2.08 3.094c0 .254.03.508.085.757A9.277 9.277 0 015.12 5.607a3.3 3.3 0 00-.448 1.672 3.153 3.153 0 001.205 2.77 9.994 9.994 0 01-1.738-.416v.042c.113 1.63 1.304 2.973 2.89 3.262a2.461 2.461 0 01-1.29.056 3.319 3.319 0 003.093 2.311A6.464 6.464 0 014 16.681a9.23 9.23 0 009.52.334c2.995-1.66 4.858-4.844 4.859-8.304 0-.144-.011-.288-.011-.433A6.679 6.679 0 0020 6.558c-.596.27-1.23.446-1.877.523z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Linkedin</title><g><path d="M17.635 17.634h-2.372V13.92c0-.885-.016-2.024-1.234-2.024-1.235 0-1.423.965-1.423 1.96v3.778h-2.372V9.998h2.276v1.044h.033c.316-.6 1.09-1.233 2.245-1.233 2.403 0 2.847 1.58 2.847 3.637v4.188zM7.558 8.955a1.376 1.376 0 11.001-2.751 1.376 1.376 0 01-.001 2.751zm-1.187 8.679h2.374V9.998H6.371v7.636zM18.817 4H5.18C4.53 4 4 4.517 4 5.154v13.692C4 19.483 4.53 20 5.18 20h13.637c.652 0 1.183-.517 1.183-1.154V5.154C20 4.517 19.47 4 18.817 4z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Copy Question Link</title><g><path id="prefix__b" d="M13.095 10.287l.137.142c1.505 1.63 1.678 4.01.282 5.406l-2.093 2.093-.137.13c-1.472 1.35-3.537 1.325-5.075-.213-1.59-1.59-1.593-3.774-.12-5.248l1.685-1.683.942.942-1.684 1.683-.106.112c-.845.944-.804 2.223.225 3.252 1.06 1.061 2.364 1.047 3.328.083l2.093-2.093.09-.097c.773-.895.595-2.463-.509-3.567l.942-.942zm-.38-4.31c1.473-1.348 3.538-1.324 5.076.214 1.59 1.59 1.593 3.774.12 5.248l-1.685 1.684-.942-.942 1.684-1.684.106-.112c.845-.944.804-2.223-.225-3.252-1.06-1.06-2.364-1.047-3.328-.083l-2.093 2.093-.09.097c-.773.895-.595 2.463.509 3.567l-.942.942-.137-.142c-1.505-1.63-1.678-4.01-.282-5.406l2.093-2.093z"></path></g></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="faq__content" data-tab-content>
					<div class="faq__items">
						<div class="faq__item">
							<div class="faq__head" data-accordion-trigger>
								<span>Как добавить вопросы и ответы?</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="arrowUp" d="M8.14644661,14.858836 C7.95118446,14.6635739 7.95118446,14.3469914 8.14644661,14.1517292 L12.4989857,9.79289322 L16.8573469,14.1517292 C17.052609,14.3469914 17.052609,14.6635739 16.8573469,14.858836 C16.6620847,15.0540981 16.3455022,15.0540981 16.1502401,14.858836 L12.4989857,11.2071068 L8.85355339,14.858836 C8.65829124,15.0540981 8.34170876,15.0540981 8.14644661,14.858836 Z"></path></svg>
							</div>
							<div class="faq__body content" data-accordion-target>
								<p>An FAQ section can be used to quickly answer common questions about you or your business, such as “Where do you ship to?”, “What are your opening hours?” or “How can I book a service?” <br>It’s a great way to help people navigate your site and can even boost your site’s SEO.</p>
								<p><img src="img/hero-img-1.jpg" alt=""></p>
								<div class="faq__links">
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Facebook</title><g><path d="M20 12a8 8 0 10-9.25 7.903v-5.59H8.719V12h2.031v-1.762c0-2.005 1.194-3.113 3.022-3.113.875 0 1.79.156 1.79.156V9.25h-1.008c-.994 0-1.304.617-1.304 1.25V12h2.219l-.355 2.313H13.25v5.59A8.002 8.002 0 0020 12" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Twitter</title><g><path d="M18.123 7.081a3.34 3.34 0 001.44-1.838 6.556 6.556 0 01-2.08.808 3.259 3.259 0 00-3.605-.818 3.331 3.331 0 00-2.08 3.094c0 .254.03.508.085.757A9.277 9.277 0 015.12 5.607a3.3 3.3 0 00-.448 1.672 3.153 3.153 0 001.205 2.77 9.994 9.994 0 01-1.738-.416v.042c.113 1.63 1.304 2.973 2.89 3.262a2.461 2.461 0 01-1.29.056 3.319 3.319 0 003.093 2.311A6.464 6.464 0 014 16.681a9.23 9.23 0 009.52.334c2.995-1.66 4.858-4.844 4.859-8.304 0-.144-.011-.288-.011-.433A6.679 6.679 0 0020 6.558c-.596.27-1.23.446-1.877.523z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Linkedin</title><g><path d="M17.635 17.634h-2.372V13.92c0-.885-.016-2.024-1.234-2.024-1.235 0-1.423.965-1.423 1.96v3.778h-2.372V9.998h2.276v1.044h.033c.316-.6 1.09-1.233 2.245-1.233 2.403 0 2.847 1.58 2.847 3.637v4.188zM7.558 8.955a1.376 1.376 0 11.001-2.751 1.376 1.376 0 01-.001 2.751zm-1.187 8.679h2.374V9.998H6.371v7.636zM18.817 4H5.18C4.53 4 4 4.517 4 5.154v13.692C4 19.483 4.53 20 5.18 20h13.637c.652 0 1.183-.517 1.183-1.154V5.154C20 4.517 19.47 4 18.817 4z" fill-rule="evenodd"></path></g></svg>
									</a>
									<a href="#" class="faq__link">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-labelledby="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60"><title id="svgc6ea9dbb-2bc5-437a-9ec6-368466c9cc60">Copy Question Link</title><g><path id="prefix__b" d="M13.095 10.287l.137.142c1.505 1.63 1.678 4.01.282 5.406l-2.093 2.093-.137.13c-1.472 1.35-3.537 1.325-5.075-.213-1.59-1.59-1.593-3.774-.12-5.248l1.685-1.683.942.942-1.684 1.683-.106.112c-.845.944-.804 2.223.225 3.252 1.06 1.061 2.364 1.047 3.328.083l2.093-2.093.09-.097c.773-.895.595-2.463-.509-3.567l.942-.942zm-.38-4.31c1.473-1.348 3.538-1.324 5.076.214 1.59 1.59 1.593 3.774.12 5.248l-1.685 1.684-.942-.942 1.684-1.684.106-.112c.845-.944.804-2.223-.225-3.252-1.06-1.06-2.364-1.047-3.328-.083l-2.093 2.093-.09.097c-.773.895-.595 2.463.509 3.567l-.942.942-.137-.142c-1.505-1.63-1.678-4.01-.282-5.406l2.093-2.093z"></path></g></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- end section faq -->

<?php
get_footer(); ?>