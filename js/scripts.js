var app = {};
app.init = function() {
	app.grids();
	app.nav();
};
app.grids = function() {
	$('.grid').isotope({
  		itemSelector: '.grid-item',
  		masonry: {
  			columnWidth: 20,
  			gutter: 5
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

$(function(){
	app.init();
	console.log("It's working");
});



