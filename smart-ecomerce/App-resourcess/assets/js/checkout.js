$(document).ready(function(){

var x=$('#divCheckbox').text();
var x=$.trim(x);
////alert(x);
//checklogin();
	$("#mycheckout").click(function(){
		 $.ajax({
 		    type:"post",
	 		url: "../cart-submit/cart_ajax.php",
	
	 		data:{
				
	 			//"saleinfo":myArray,
	 			//"user-session":x

				
				
			},
			success:function(msg){
			 if(msg==0){
			 	$('#popup-cart').hide();
			 	 $('#ModalLogin').modal();
			 	  checklogin();

							
 			 ////alert(msg);
 			    }else{
 			    	////alert(x);
 			    	//success(x);
 			    	alert(msg);
 			    	window.location = '../cart-submit/';
 			    }

	 			}	
				
				
			
      });


	});


	function checklogin(){

		 $(".login_btn_page").click(function(){
	

	//var saleinfo= $("#divForm").text();

	var u_name=$("#username_page").val();

	var password=$("#password_page").val();

	if(u_name=='' || password==''){
		$("#top").html("<p style='color:red'>please enter all the fields</p>");

	
	}else{
	
	$.ajax({
			type:"post",
			url: "../App-roots/App-config/App-models/models/m_log_reg.php",
			data:{
				
				"u-name":u_name,
				"password":password,
				//"saleinfo":saleinfo,
				
				"op":"verify_user"
			},
			success:function(msg){
				//alert(msg);
				if(msg==1){
					////alert(msg);
					 $('#ModalLogin').hide();
					 window.location = '../cart-submit/';

				  }else{
				  	
					$("#top").html("<p style='color:red'>please enter correct information</p>");

					$('#ModalLogin').show();
					 
					  //success();
					//window.location = '../buy-from-us/';
				}
				
				
			},
		
		});
}
});

	}



});