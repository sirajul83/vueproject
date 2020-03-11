$.ajaxSetup({
      headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });

//  $(document).ready(function(){
	 
//  	$("#submit").click(function(e){
//        let loc = $('meta[name=path]').attr("content");
//         e.preventDefault();
//        var name = $('#name').val();
//        var status = $('#status').val();
      
//         $.ajax({
//            type:'POST',
//            url:loc+'/save-bands',
//            //dataType: 'JSON',
//            data:{name:name, status:status},
//            success:function(data){


// 	            		$("#msg").html(data.msg);
// 	            		$('#modal-default').modal('hide');
//                		//$('#example1').data.reload();
//                		setInterval( function () {
// 			    table.ajax.reload();
// 			}, 30000 );
             
              
//            }

//         });

  

// 	});
// });
