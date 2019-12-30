jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "menu" link is shown
	var offset = 300;

	var navigationContainer = $('#cd-nav'),
		mainNavigation = navigationContainer.find('#cd-main-nav ul');

	//hide or show the "menu" link
	checkMenu();
	$(window).scroll(function(){
		checkMenu();
	});

	//open or close the menu clicking on the bottom "menu" link
	$('.cd-nav-trigger').on('click', function(){
		$(this).toggleClass('menu-is-open');
		//we need to remove the transitionEnd event handler (we add it when scolling up with the menu open)
		mainNavigation.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend').toggleClass('is-visible');

	});

	function checkMenu() {
		if( $(window).scrollTop() > offset && !navigationContainer.hasClass('is-fixed')) {
			navigationContainer.addClass('is-fixed').find('.cd-nav-trigger').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				mainNavigation.addClass('has-transitions');
			});
		} else if ($(window).scrollTop() <= offset) {
			//check if the menu is open when scrolling up
			if( mainNavigation.hasClass('is-visible')  && !$('html').hasClass('no-csstransitions') ) {
				//close the menu with animation
				mainNavigation.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					//wait for the menu to be closed and do the rest
					mainNavigation.removeClass('is-visible is-hidden has-transitions');
					navigationContainer.removeClass('is-fixed');
					$('.cd-nav-trigger').removeClass('menu-is-open');
				});
			//check if the menu is open when scrolling up - fallback if transitions are not supported
			} else if( mainNavigation.hasClass('is-visible')  && $('html').hasClass('no-csstransitions') ) {
					mainNavigation.removeClass('is-visible has-transitions');
					navigationContainer.removeClass('is-fixed');
					$('.cd-nav-trigger').removeClass('menu-is-open');
			//scrolling up with menu closed
			} else {
				navigationContainer.removeClass('is-fixed');
				mainNavigation.removeClass('has-transitions');
			}
		}
	}
});

// function readURL(input) {
// 			if (input.files && input.files[0]) {
// 					var reader = new FileReader();
//
// 					reader.onload = function (e) {
// 							$('#profile-img-tag').attr('src', e.target.result);
// 					}
// 					reader.readAsDataURL(input.files[0]);
// 			}
// 	}
// 	$("#profile-img").change(function(){
// 			readURL(this);
// 	});
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			$('#profile-img-tag').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
$("#profile-img").change(function(){
	readURL(this);
});

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

// REGISTER VALIDATION

// const registerForm = document.getElementById('registerForm');


registerForm.addEventListener('submit', (event) => {

	const username = document.getElementById('username').value;
	const name = document.getElementById('name').value;
	const email = document.getElementById('email').value;
	const age = document.getElementById('age').value;
	const password = document.getElementById('password').value;
	const password_confirmation = document.getElementById('password_confirmation').value;


	if(username === "" || username.length < 4) showErrorMessage("error_username", event);
	if(name === "" || name.length < 4) showErrorMessage("error_name", event);
	if(email === "") showErrorMessage("error_email", event);
	if(age < 7 || age > 100) showErrorMessage("error_age", event);
	if(password === "") showErrorMessage("error_password", event);
	if(password_confirmation === "" || password !== password_confirmation) showErrorMessage("error_confirm_password", event);



});


function showErrorMessage(elementErrorMessage, e){

	document.getElementById(elementErrorMessage).style.display = 'block';
	e.preventDefault();

}
