<link rel="stylesheet" href="{{ asset('assets/assets/css/iziToast.min.css') }}">
<script src="{{ asset('assets/assets/js/iziToast.min.js') }}"></script>
<script>
	jQuery(document).ready(function($){
		$("#btn-create").click(function (e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});
			e.preventDefault();
			
			var name       = jQuery('#name').val();
			var icon       = jQuery('#icon').val();
			var parent     = jQuery('#parent').val();
			var order      = jQuery('#order').val();
			var href       = jQuery('#href').val();
			var controls   = jQuery('#controls').val();
			var status     = $('#status_1').find(":selected").val();
			var type       = $('#type').find(":selected").val();
			
			if(name == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the name',
					position: 'topRight',
				});
			}else if(icon == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the icon',
					position: 'topRight',
				});
			}else if(parent == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please select the parent ',
					position: 'topRight',
				});
			}else if(order == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the  order',
					position: 'topRight',
				});
			}else if(href == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the  href',
					position: 'topRight',
				});
			}else if(status == 0){
				iziToast.error({
					//title: 'Error',
					message: 'Please select the  status',
					position: 'topRight',
				});
			}else if(type == 0){
				iziToast.error({
					//title: 'Error',
					message: 'Please select the  type',
					position: 'topRight',
				});
			}
			else{
				
				
				var type = "POST";
				var ajaxurl = "{{ url('navigation/store') }}";
				$.ajax({
					type: type,
					url: ajaxurl,
					data: $('#createnavigation').serialize(),
					dataType: 'json',
					success: function (response) {
						
						
						
						if(response.status == 1){
							
							iziToast.success({
								//title: 'Success',
								message: response.message,
								position: 'bottomRight',
							});
							
							setTimeout(function() { 
								window.location.href = "{{ url('navigation/manage') }}";
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
		$("#btn-update").click(function (e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});
			e.preventDefault();
			
			var name       = jQuery('#name').val();
			var icon       = jQuery('#icon').val();
			var parent     = jQuery('#parent').val();
			var order      = jQuery('#order').val();
			var href       = jQuery('#href').val();
			var controls   = jQuery('#controls').val();
			var status     = $('#status_1').find(":selected").val();
			var type       = $('#type').find(":selected").val();
			
			if(name == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the name',
					position: 'topRight',
				});
			}else if(icon == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the icon',
					position: 'topRight',
				});
			}else if(parent == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please select the parent ',
					position: 'topRight',
				});
			}else if(order == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the  order',
					position: 'topRight',
				});
			}else if(href == ''){
				iziToast.error({
					//title: 'Error',
					message: 'Please enter the  href',
					position: 'topRight',
				});
			}else if(status == 0){
				iziToast.error({
					//title: 'Error',
					message: 'Please select the  status',
					position: 'topRight',
				});
			}else if(type == 0){
				iziToast.error({
					//title: 'Error',
					message: 'Please select the  type',
					position: 'topRight',
				});
			}else{
				
				
				var type = "POST";
				var ajaxurl = "{{ url('navigation/update') }}";
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
								window.location.href = "{{ url('navigation/manage') }}";
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
	$(document).ready(function() {
		$('.parent').select2();
		
		
		
		
			
		$(document).on ("click", ".delete", function () {
			
			var modal = $('#deletenav');
			modal.find('input[name=id]').val($(this).data('id'))
			modal.modal('show');
		});
	});
	
	
   
    $(document).ready(function(){
		  
		  $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		  
		var dataTable = $('#naviTable').DataTable({
         'processing': true,
         'serverSide': true,
         'serverMethod': 'post',
         //'searching': false, // Remove default Search Control
         'ajax': {
			      //"_token": "{{ csrf_token() }}",

              'url':"{{route('navigation.getNavigation')}}",
              'data': function(data){
                    // Read values
                    //var date = $('#datepicker-range').val();
                    var name = $('.search').val();

                    // Append to data
                    //data.created_at = date;
                    data.searchByName = name;
              }
         },
		 searching: false,
		"bLengthChange" : false,
         columns: [
		 
		 
                 { data: 'id' },
                 { data: 'name' },
                 { data: 'parent' },
                 { data: 'order' },
				 { data: 'status' },
				
				
				 { data: "encrypted", render: function (data, type, full, row) {
					  
					 //console.log(full.encrypted);
					return  '<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit"><a class="edit-item-btn" href="{{route("navigation.edit",  '' )}}/'+full.encrypted+'" ><i class="fas fa-edit"></i></a></li>	  <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Delete"><a class="remove-item-btn" data-delete = "'+full.encrypted+'" style="cursor:pointer;"><i class="fas fa-trash-alt"></i></a></li>'
					}
				},
             ],
			 
    });

    $('.search').keyup(function(){
         dataTable.draw();
    });
	
	
    
});

	

$(document).on('click', '.remove-item-btn', function(event){
	
		event.preventDefault(); 
		var id = $(this).data("delete")
		
		var modal = $('#deleteRecordModal');
		 modal.find('input[name=delid]').val(id)
		 modal.modal('show');
	});
	
	$("#delete-record").click(function (e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});
			e.preventDefault();
			
			var delid       = jQuery('#delid').val();
			
			
			
				
				
				var type = "post";
				var ajaxurl = "{{ url('navigation/destroy') }}";
				$.ajax({
					type: type,
					url: ajaxurl,
					data: {id:delid},
					
					success: function (response) {
						
						
						
						if(response.status == 1){
							
							iziToast.success({
								//title: 'Success',
								message: response.message,
								position: 'bottomRight',
							});
							
							setTimeout(function() { 
								window.location.href = "{{ url('navigation/manage') }}";
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
			
			
		});
	
	
</script>




