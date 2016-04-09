$(document).ready(function(){

$(".login_btn_page").click(function(){
	

	var saleinfo= $("#divForm").text();
	alert(saleinfo);

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
				"saleinfo":saleinfo,
				
				"op":"verify_user"
			},
			success:function(msg){
				//alert(msg);
				if(msg==1){
					////alert(msg);
					 $('#ModalLogin').hide();
					 window.location.reload(true);
					  //$('#link').load();
					  //$("#login_status").html("Logout");

				  }else{
				  	
					$("#top").html("<p style='color:red'>please enter correct information</p>");

					$('#ModalLogin').show();
					//$("#login_status").html("Login");
					

					  //success();
					//window.location = '../buy-from-us/';
				}
				
				
			},
		
		});
}
});




$("#reg-submit").click(function(){

	var saleinfo= $("#divForm").text();

	var u_name=$("#id-username-p").val();
	var email=$("#id-email-p").val();
	var re_password=$("#id-re-password-p").val();

	var password=$("#id-password-p").val();

	////alert(u_name);
	if(u_name=='' || password=='' || email=='' || re_password=='' ){

		$("#top-reg").html("<p style='color:red'>please enter all the fields</p>");

	
	}else{


	$.ajax({
			type:"post",
			url: "../App-roots/App-config/App-models/models/m_log_reg.php",
			data:{
				
				"u-name":u_name,
				"password":password,
				"email":email,
				"re-password":re_password,
				
				"op":"reg_user"
			},
			success:function(msg){

				if(msg==1){
					//alert(msg);
					$("#top-reg").html("<p style='color:red'>Registration successful. please login.</p>");

					$('#ModalLogin').show();
				}
			},
		});
}

});



});