(function($){
	"use strict";

	function get_cart() {
		$.post({
			url: wc_add_to_cart_params.ajax_url,
			dataType: 'JSON',
			data: {action: 'woomenucart_ajax'},
			success: function(data, textStatus, XMLHttpRequest) {
				$('.uncode-cart-dropdown').html(data.cart);
				if (data != '') {
					if ($('.uncode-cart .badge').length) {
						$('.uncode-cart .badge').html(data.articles);
						$('.uncode-cart .badge').show();
					} else $('.uncode-cart .cart-icon-container').append('<span class="badge">'+data.articles+'</span>'); //$('.uncode-cart .badge').html(data.articles);
				}
			}
		});
	}

	$(document).ready(function() {
		$('body').bind("added_to_cart", get_cart);
	});

})(jQuery);