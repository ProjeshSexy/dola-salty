$(document).ready(function(){

var x=$('#divCheckbox').text();
var x=$.trim(x);
////alert(x);

cart_auto_refresh_function();
		////alert(x);

	$("#add-to-cart").click(function(){
		var book_name= $(this).data("book-id");
		var quantity= $("#exampleSelect1").val();
		var price=$(".product-price").html().substring(1,$(".product-price").html().length);
			////alert(x);
		//console.log(x);
		$.ajax({
			type:"post",
			url: "../index/cart.php",
			data:{
				"user_session":x,
				"book-name": book_name,
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
					cart_auto_refresh_function();

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

	function cart_auto_refresh_function(){
		$.ajax({
			type:"post",
			url: "../index/cart.php",
			data:{
				"user_session":x,
				"op":"refresh-cart",
			},
			success:function(msg){
				$("#media-id").html(msg);
				$.getScript( "../assets/js/checkout.js");
				/*
					TODO: refresh the cart data with msg
					the msg will be in table format
					so just insert it inside cart div

				*/
			}
		});
	}



		      $(".delete").on('click', function() {
					$('.case:checkbox:checked').parents("tr").remove();
				    $('.check_all').prop("checked", false); 
					check();
				
				});

		      var i=$('table tr').length;
				
				$(".addmore").on('click',function(){
					count=$('table tr').length;
					
				    var data="<tr><td><input type='checkbox' class='case'/></td><td><span id='snum"+i+"'>"+count+".</span></td>";
				    
				    data +="<td><input type='text' id='qty"+i+"' name='qty"+i+"'/></td> \n\
                                            <td><input type='text' id='piece"+i+"' name='piece"+i+"'/></td>\n\
                                            <td><input type='text' id='piece"+i+"' name='piece"+i+"'/></td>\n\
                                            <td><input type='text' id='piece"+i+"' name='piece"+i+"'/></td>\n\
                                            <td><input type='text' id='info"+i+"' name='info"+i+"'/></td></tr>";
					$('table').append(data);
					row = i ;
				
			      
					i++;
				});
});