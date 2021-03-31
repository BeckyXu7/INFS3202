/*
// initialize masonry
var $grid = $('#galleryContainer').masonry({
	itemSelector: '.grid-item',
	columnWidth: '.grid-sizer',
	percentPosition: true,
	gutter: 10
});

// save masonry data into a variable
var msnry = $grid.data('masonry');

// initialize infinite scrolling
$('#galleryContainer').infiniteScroll({
	path: '.pagination__next',
	append: '.grid-item',
	outlayer: msnry,
	history: false,
	scrollThreshold: 0,
	loadOnScroll: true,
	status: '.page-load-status',
	checkLastPage: '.pagination__next'
});

// function that check if no more images to load
$('#galleryContainer').on( 'last.infiniteScroll', function( event, response, path ) {
	$('.photo-gallery').append('<h3 class="no-images">No more images to load</h3>');
});*/
//masonry library

$(document).ready(function(){
	var options = {
		data: ["blue", "green", "pink", "red", "yellow"]
	};
	$("#searchItem").easyAutocomplete(options);
})

/*
var $grid = $('.grid').masonry({
  itemSelector: '.gridItem',
  percentPosition: true,
  columnWidth: '.gridSizer'
});

$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});*/




//w3school, form popup
var modal = document.getElementById('login');

var modal = document.getElementById('signUp');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//check password
function checkPass(){
	var password = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/;
	var email =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var inputPass = document.form_2.password_1.value;
	var inputPass_2 = document.form_2.password_2.value;
	var inputEmail = document.form_2.email.value;

	if (!inputEmail.match(email)) {
		alert("Please check your email style.");
		return false;
	}
	if (!inputPass.match(password)) {
		alert("Your password must contain 9-21 characters mixed of numbers and letters");
		return false;
	} 
	if (inputPass!=inputPass_2) {
		alert("Please confirm two passwords are same.");
		return false;
	}
	else{
		return true;
	}
}



/*https://github.com/MuYunyun/waterfall*/

window.onload = function() {
	const waterfall = new Waterfall({
		number: 6,
	})

	waterfall.on("load", function () {
		setTimeout(function () {
			const $waterfall = document.getElementById('waterfall')
			const fragment = document.createDocumentFragment()
			for (let i = 0; i < 20; i++) {
				const img = document.createElement('img')
				img.setAttribute('src', `images/${i + 1}.png`)
				img.setAttribute('class', 'waterfall-box')
				fragment.appendChild(img)
			}
			$waterfall.appendChild(fragment)
			waterfall.done()
		}, 1000)
	})
}

