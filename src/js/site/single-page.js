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

function projectView(){
	$('.ajax-link').magnificPopup({
		type: 'ajax',
		midClick: true,
		removalDelay: 600,
		mainClass: 'mfp-slideup fs-grid',
		alignTop: true,
		//fixedContentPos: false,
		overflow: 'scroll',
		callbacks: {
		  parseAjax: function(mfpResponse) {
		    mfpResponse.data = $(mfpResponse.data).find('#page-content');
		  },
		  ajaxContentAdded: function() {
		  	$slide.addClass('is-viewing');
		  	var mp 		= $.magnificPopup.instance,
		  			src 	= this.currItem.src,
		  			t 		= $(mp.currItem.el[0]),
		  			title = t.data('title');
		  	//History.pushState(null, title, src);
		  },
		  beforeClose: function() {
		  	$slide.removeClass('is-viewing');	
		  	//History.back();
		  },
		}
	});
}

$(document).on('click', '.popup-modal-dismiss', function (e) {
	e.preventDefault();
	$.magnificPopup.close();
});

$(document).ready(function(){
	projectView();
	setTimeout(isAnimating, 0);
	setTimeout(isLoading, 2000);
	setTimeout(isLoaded,  4000);
});

SmartAjax_load('/assets/js/', function(){
	projectView();
	SmartAjax.setOptions({
		cache: false,
		reload: false,
		containers:
		[
			{selector: '#page-content__inner'}
		],

		before: function()
		{
			//$('#ajax-loader').show();
			SmartAjax.proceed();
		},
		success: function()
		{
			$('#page-content').addClass('is-paginating');
			SmartAjax.proceed();
		},
		done: function()
		{
			//$('#ajax-loader').hide();
			$('#page-content').removeClass('is-paginating');
			projectView();
		}
	});

	SmartAjax.bind('#page-nav a');
	SmartAjax.bindForms('form');
}, true);
