$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function add_product()
{
	$("#productModal").modal("show");
	var name 	 = $("#name").val('');
	var price 	 = $("#price").val('');
	var quantity 	 = $("#quantity").val('');

	document.getElementById("name_error").innerHTML = '';
	document.getElementById("price_error").innerHTML = '';
	document.getElementById("quantity_error").innerHTML = '';
	document.getElementById("bands_error").innerHTML = '';
	document.getElementById("category_error").innerHTML = '';
}
function save_product()
{

	var name 	 = $("#name").val();
	var price 	 = $("#price").val();
	var quantity = $("#quantity").val();
	var bands    = $("#bands").val();
	var category = $("#category").val();

	var color = $("input[type=checkbox]");
	var color_ids = Array();
	for(var i = 0; i < color.length; i++){
        if(color[i].checked == true && color[i].disabled == false && color[i].name == 'color[]'){
           color_ids.push(color[i].value);
       }
   }
     //console.log(color_ids);exit();

	 var error_status = false;

	if (name == "") {
        document.getElementById("name_error").innerHTML = '<span>Empty Name.</span>';
        error_status = true;
    } else {
        document.getElementById("name_error").innerHTML = '';

    }

    if (price == "") {
        document.getElementById("price_error").innerHTML = '<span> Empty price.</span>';
        error_status = true;
    } else {
        document.getElementById("price_error").innerHTML = '';

    }
    if (quantity == "") {
        document.getElementById("quantity_error").innerHTML = '<span> Empty price.</span>';
        error_status = true;
    } else {
        document.getElementById("quantity_error").innerHTML = '';

    }

    if (bands == "") {
        document.getElementById("bands_error").innerHTML = '<span> Empty price.</span>';
        error_status = true;
    } else {
        document.getElementById("bands_error").innerHTML = '';

    }
    if (category == "") {
        document.getElementById("category_error").innerHTML = '<span> Empty price.</span>';
        error_status = true;
    } else {
        document.getElementById("category_error").innerHTML = '';

    }
	
	if (error_status == false) {

             swal({
				  title: "Are you sure?",
				  text: "Product add Confirm",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				    swal("Successfully Added!", {
				      icon: "success",
				    });
				        $.ajax({
				             url: "save-product",
				             type: "POST",
				             dataType: "JSON",
				             data: {
				                 name: name,
				                 price: price,
				                 quantity: quantity,
				                 color_ids:color_ids
				             },

							 success: function(response) {
			                 if (response.status == 'success') {
			                   
			                     $("#productModal").modal("hide");
			                 }
			             }
				         });

				  } else {
				    swal("Cencel !");
				  }
				});
             
    } 
}


// $('#createProductsForm').submit(function (e) {
//     e.preventDefault();

//      //console.log( $( this ).serialize() );
//     let msg = $('#createMessage');

    
   // Form data
    // let input = $('#createProductsForm input[name="name"]');
    // let formData = {
    //     name: $(input).val(),
    //     price : $(input).val()
    // }
    // console.log(formData);
    //  $.ajax({
    //     type: 'POST',
    //     url: 'save-product',
    //     data: $( this ).serialize(),
    //     success: function (data) {
    //         // reqest message clear
    //         $(msg).html('');
    //          $('#modal-product').modal('hide')	
  		//     $(msg).append('<div class="alert alert-success"> Task Created Successfully </div>');		
    //     }
    //     });

    // });