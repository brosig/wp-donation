// Scripts

(function($){
	// Change event for integration type select
	$('#ps-api-modo-autenticacao').on('change', function(e){
		if(this.value === "ps-api-modo-vendedor") {
			$('#ps-api-modo-app').hide();
			$('#ps-api-modo-vendedor').show();
		} else if (this.value === "ps-api-modo-app") {
			$('#ps-api-modo-vendedor').hide();
			$('#ps-api-modo-app').show();
		}
	});
})(jQuery);