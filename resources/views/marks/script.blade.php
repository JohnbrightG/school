<link rel="stylesheet" href="{{ asset('assets/assets/css/iziToast.min.css') }}">
<script src="{{ asset('assets/assets/js/iziToast.min.js') }}"></script>
<script>
	
	
	
   
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

              'url':"{{route('student.getMarks')}}",
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
                 { data: 's_name' },
                 { data: 'c_name' },
                 
				 
             ],
			 
    });

    $('.search').keyup(function(){
         dataTable.draw();
    });
	
	
    
});

	


	
	
	
	
</script>




