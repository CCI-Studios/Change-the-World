(function($){

$(function(){

		$('#fb').click(function(e){

			e.preventDefault();
			$('#twitter-timeline').hide();
			$('#fb-timeline').show();

		});
		$('#twitter').click(function(e){

			e.preventDefault();
			$('#fb-timeline').hide();
			$('#twitter-timeline').show();

		});
});

})(jQuery);
