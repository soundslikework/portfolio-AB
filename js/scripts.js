var app = {};
app.init = function() {
	app.grids();
	app.nav();
	app.navScroll();
};
app.grids = function() {
	$('.grid').isotope({
		percentPosition: true,
  		itemSelector: '.grid-item',
  		masonry: {
  			columnWidth: '.grid-sizer',
  			gutter: '.gutter-sizer'
  		}	
  	});
	$('.filter-button-group').on('click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$('.grid').isotope({
			filter: filterValue
		})
	});
};
app.nav = function() {
	$('.hamburger').click(function(e) {
  		$(this).toggleClass('close');
  		$('aside').toggleClass('open');
	});
};
app.navScroll = function() {
	$('aside a').on('click', function() {
		$('aside a').smoothScroll();
  		$('.hamburger').toggleClass('close');
		$('aside').toggleClass('open');
	})
}
$(function(){
	app.init();
	console.log("It's working");
});



