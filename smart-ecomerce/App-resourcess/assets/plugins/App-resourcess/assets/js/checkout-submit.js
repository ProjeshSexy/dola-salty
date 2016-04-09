// $(document).ready(function(){

$("#cart-inform").validate({
	rules:{
		"fname":{
			required: true,

		},
		"lname":{
			required: true,

		},
		"uaddress":{
			required: true,

		},
		"ucountry":{
			required: true,

		},
		"ucity":{
			required: true,

		},
		
		"uzip":{
			required: true,

		},
		"uemail":{
			required: true,
			email:true

		},
		"uphone":{
			required: true,

		},


		
	}


});
$("#place-order").click(function(event){



if($("#cart-inform").valid()){

 var fname=$("#fname").val();
 var lname=$("#lname").val();
 var address=$("#uaddress").val();
 var country=$("#ucountry").val();
 var city=$("#ucity").val();
 var zip=$("#uzip").val();
 var phone=$("#uphone").val();
 var email=$("#uemail").val();
 var message=$("#umessage").val();
 var qty=$("#qty").val();
 var product_name=$.trim($("#name-product").text());
 var unit_cost =$("#unit-cost").text();

 var sub_total=$("#sub-total").html();

 var shiping_cost=$("#s-cost").html();
 var total= $("#total-cost").html();
 var product_details={"name":product_name, "cost":unit_cost,"Qty":qty,"sub":sub_total,"shiping":shiping_cost,"total_cost":total};
 //console.log(product_details);
 var product_details_json=JSON.stringify(product_details);



//alert(product_details_json);

   $.ajax({

        type:"post",
        url:"../checkout/m_checkout.php",
        data:{
        	"first-name":fname,
        	"last-name":fname,
        	"address":address,
        	"country":country,
        	"city":city,
        	"phone":phone,
        	"zip":zip,
        	"email":email,
        	"message":message,
        	"product-details":product_details_json,
        	"op":"insert"

        },

        success:function(msg){
        	if(msg==1){
        	alert("success");
        	sendmail();
        }else{
        	alert("wrong");
        }

        },

         });
 //product_name

function sendmail(){



   $.ajax({

        type:"post",
        url:"../checkout/m_checkout.php",
        data:{
        	"first-name":fname,
        	"last-name":fname,
        	"address":address,
        	"country":country,
        	"city":city,
        	"phone":phone,
        	"zip":zip,
        	"email":email,
        	"message":message,
        	"product-details":product_details_json,
        	"op":"email"

        },

        success:function(msg){
        	if(msg==1){
        	//alert("success");
        	window.location = '../success/success.php';
        }else{
        	//alert("wrong");
        }

        },

         });
	
	}


}



});

// });