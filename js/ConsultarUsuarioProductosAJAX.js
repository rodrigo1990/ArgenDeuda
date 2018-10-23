function ConsultarUsuarioProductosAJAX(){

	var documento = $("input[name=documento]").val();

	$.ajax({
		url:'ajax/ConsultarUsuarioProductos.php',
		data:{documento:documento},
		type:'POST',
		timeout: 300000,


		success:function(response){
		console.log(response);

		},
		 error: function (jqXHR, exception) {
		 	alert("NO FUNCIONO");
	        var msg = '';
	        if (jqXHR.status === 0) {
	            msg = 'Not connect.\n Verify Network.';
	        } else if (jqXHR.status == 404) {
	            msg = 'Requested page not found. [404]';
	        } else if (jqXHR.status == 500) {
	            msg = 'Internal Server Error [500].';
	        } else if (exception === 'parsererror') {
	            msg = 'Requested JSON parse failed.';
	        } else if (exception === 'timeout') {
	            msg = 'Time out error.';
	        } else if (exception === 'abort') {
	            msg = 'Ajax request aborted.';
	        } else {
	            msg = 'Uncaught Error.\n' + jqXHR.responseText;
	        }
	        $('#post').html(msg);
    	},
		});


}