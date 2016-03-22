jQuery(document).ready(function($){
	
	$(document).on('click','.my-load-more', function(){
		
		var that = $(this);
		var page = that.data('page');
		var newPage = page + 1;
		var ajaxurl = that.data('url');
		//console.log(ajaxurl);
		$.ajax({
					url:ajaxurl,
					type: 'post',
					data:{
					page:page,
					action: 'our_load_more_function'
						
					},
			
			error: function(response){
				console.log(response);
			},
			success: function(response){
				that.data('page', newPage);
				$('.my-posts-container').append(response);
			}
			
			
			
		});
		
		
		
	});
	
	
	
	
	
	
});