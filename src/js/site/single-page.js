$page = $('#single-page');
$slide = $('#single-page').find('.slide');

var isAnimating = function() {
	$slide.addClass('is-animating');
};

var isLoading = function() {
	$slide.addClass('is-loading');
	$slide.removeClass('is-animating');
};

var isLoaded = function() {
	$slide.addClass('is-loaded');
	$slide.removeClass('is-loading');
}

$(document).ready(function(){
	setTimeout(isAnimating, 0);
	setTimeout(isLoading, 2000);
	setTimeout(isLoaded,  4000);
});


$('.ajax-link').magnificPopup({
	type: 'ajax',
	midClick: true,
	removalDelay: 600,
	mainClass: 'mfp-slideup fs-grid',
	alignTop: true,
	fixedContentPos: false,
	callbacks: {
	  parseAjax: function(mfpResponse) {
	    mfpResponse.data = $(mfpResponse.data).find('#page-content');
	  },
	  ajaxContentAdded: function() {
	  	$slide.addClass('is-viewing');
	  	var url = this.currItem.src;
	  	console.log(url);
	  	History.pushState(null, null, url);
	  },
	  beforeClose: function() {
	  	$slide.removeClass('is-viewing');	
	  	History.back();
	  },
	  markupParse: function(template, values, item) {
    // Triggers each time when content of popup changes
    console.log('Parsing:', template, values, item);
  	},
	}
});

$(document).on('click', '.popup-modal-dismiss', function (e) {
	e.preventDefault();
	$.magnificPopup.close();
});
