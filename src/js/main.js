$(function() {

	$('.header__menu').click(function() {
		$(this).toggleClass('is-active');
		$('body').toggleClass('is-fixed');
		$('.header__nav').slideToggle(300);
	});

	$(document).on('click','.bapf_head',function(e) {
		e.preventDefault();
		$(this)
			.toggleClass('is-active')
			.next()
			.slideToggle(300);
	});

	$('[data-accordion-trigger]').click(function(e) {
		e.preventDefault();
		$(this)
			.toggleClass('is-active')
			.next('[data-accordion-target]')
			.slideToggle(700);
	});

	$('[data-tab-content]').hide();
	$('[data-tab-content]:nth-child(1)').show();
	$(document).on('click','[data-tab]:not(.is-active)',function(e) {
		e.preventDefault();
		let index = $(this).index();
		let parent = $(this).parents('[data-tabs]');
		let contents = parent.next('[data-tab-contents]');
		let currentContent = contents.find('[data-tab-content]:eq('+ index +')');
		currentContent.find('.form_type').val($(this).text());
		parent.find('[data-tab]').removeClass('is-active');
		contents.find('[data-tab-content]').removeClass('is-active').fadeOut(300);
		setTimeout(() => {
			currentContent.fadeIn(300).addClass('is-active');
		}, 300)
		$(this).addClass('is-active');
	});

});
