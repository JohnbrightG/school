<link rel="stylesheet" href="{{ asset('assets/assets/css/iziToast.min.css') }}">
<script src="{{ asset('assets/assets/js/iziToast.min.js') }}"></script>
<script>
	jQuery(document).ready(function($){
		
		$("#btn-update").click(function (e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});
			e.preventDefault();
			
			var name       		  = jQuery('#name').val();
			var description       = jQuery('#description').text();
			
			
			if(name == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the name',
					position: 'topRight',
				});
			}else if(description == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the description',
					position: 'topRight',
				});
			
			}else{
				
				
				var type = "POST";
				var ajaxurl = "{{ url('Pages/update') }}";
				$.ajax({
					type: type,
					url: ajaxurl,
					data: $('#updatenavigation').serialize(),
					dataType: 'json',
					success: function (response) {
						
						
						
						if(response.status == 1){
							
							iziToast.success({
								//title: 'Success',
								message: response.message,
								position: 'bottomRight',
							});
							
							setTimeout(function() { 
								window.location.href = "{{ url('Pages/manage') }}";
							}, 2000);
							
						}else if(response.status == 0){
							iziToast.error({
								//title: 'Error',
								message: response.message,
								position: 'bottomRight',
							});
						}
					}
				});
			}
			
		});
		
	});
	
	
	
   
    

	


	
	
	
	
</script>




