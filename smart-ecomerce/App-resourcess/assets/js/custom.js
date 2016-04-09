$(document).ready(function(){

var x=$('#divCheckbox').text();
var x=$.trim(x);
////alert(x);

cart_auto_refresh_function();
		////alert(x);

	$("#add-to-cart").click(function(){
		var book_name= $(this).data("book-name");
		var book_id= $(this).data("book-id");
		var quantity= $("#exampleSelect1").val();
		var true_false=1;
		var price=$(".product-price").html().substring(1,$(".product-price").html().length);
			////alert(x);
		//console.log(x);
		$.ajax({
			type:"post",
			url: "../root-directory/cart.php",
			data:{
				"user_session":x,
				"book-name": book_name,
				"book-id": book_id,
				"quantity": quantity,
				"rate": price,
				
				"op":"add-to-cart"

			},
			beforeSend: function(){
				//TODO: dont know what to do yet
			},
			success:function(msg){
				////alert(msg);
				if($.trim(msg)=="true"){
					////alert(msg);
					$('#mycheckout').css('visibility', 'visible');
					cart_auto_refresh_function(true_false);


				}
				else{
					console.log("Something went");
				}
				
			},
			error: function(){
				//Handle errors
			}

		});

			});




$(".qty_box").change(function(){
	
	var q=$(this).val();
	var i=$(this).data("id");
	var p=$(this).data("price");
	//alert(p);


		 $.ajax({
 		    type:"post",
	 		url: "../cart-submit/cart_update.php",
	
	 		data:{
				
	 			//"saleinfo":myArray,
	 			"qty":q,
	 			"id":i,
	 			"price":p

				
				
			},
			success:function(msg){
			 //alert(msg);
			 //$.getScript( "../assets/js/custom.js" );
			 cart_auto_refresh_function();
			 //cart_auto_refresh_function();
			 //$.getScript( "../assets/js/checkout.js" );

			 window.location.reload(true);

	 			}	
				
				
			
});

});


$("#delete-qty").click(function(){
		var cart_id=$(this).data("id");
		//alert(cart_id);


		 $.ajax({
 		    type:"post",
	 		url: "../cart-submit/cart_update.php",
	
	 		data:{
				
	 			"op":"delete",
	 			"cart-id":cart_id
	 		
			},
			success:function(msg){
			 //alert(msg);
			 //$.getScript( "../assets/js/custom.js" );
			 cart_auto_refresh_function();
			 //cart_auto_refresh_function();
			 //$.getScript( "../assets/js/checkout.js" );
			 window.location.reload(true);

	 			}

		});
		});

	function cart_auto_refresh_function(true_false){
		
		$.ajax({
			type:"post",
			url: "../root-directory/cart.php",
			data:{
				"user_session":x,
				"op":"refresh-cart",
			},
			success:function(msg){
				$("#media-id").html(msg);
				
				//$('#cart-info').html("<span class='hidden-xs'> 0 item(s) - $0.00 </span>");
				$.getScript( "../App-resourcess/assets/js/checkout.js");

				//if(true_false==1){
				var item=$('#sub-total').html().substring(9,$("#sub-total").html().length);
				var qty_t=$('#total-qty').html().substring(10,$("#total-qty").html().length);;
				//alert(item);
				//alert(qty_t);
				$("#cart-info").html("<span class='hidden-xs' id='cart-info'> "+qty_t+" item(s) - "+item+" </span>");
				//true_false=1;
				//}
				/*
					TODO: refresh the cart data with msg
					the msg will be in table format
					so just insert it inside cart div

				*/
			}
		});
	}

});