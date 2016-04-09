<?php 
	
//include('../includes/init.php'); 


$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'smart_ecommerce2';
$Database = new mysqli($server, $user, $pass, $db);
	$op=$_REQUEST['op'];
	//$user_session;

	if($op=="add-to-cart"){

   
	$user_session=$_REQUEST["user_session"];
	$book_name= $_REQUEST["book-name"];
	$quantity=$_REQUEST["quantity"];
	$rate=$_REQUEST["rate"];
	$qty=$_REQUEST["quantity"];
    $total=0;
    $item=null;
	if($qty>0){


		$sql = "SELECT * FROM cart_items WHERE cart_items_session='".$user_session."' ";
        $result=$Database->query($sql);

       if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) 
       {
			$price=$row["unit_price"];
			$item=$row["cart_items_book_name"];
			$id=$row["cart_items_id"];
			
						

         }
		$total=($qty*$price);

	}
	else{
		$total=($qty*$rate);
	}
}
if($item !=null && $book_name==$item){
$sql = "UPDATE cart_items SET cart_items_quantity='".$qty."', cart_items_price='".$total."'  WHERE cart_items_session='".$user_session."' AND cart_items_id='".$id."'";
  $Database->query($sql);
}else{

		$sql ="INSERT INTO cart_items (cart_items_session,cart_items_book_name, unit_price, cart_items_quantity,cart_items_price)
		VALUES (".$user_session.", '".$book_name."',".$rate.", ".$qty.",".$total.")";
		//ho $sql;
         $Database->query($sql);
     }
		//echo $sql;
        //mysqli_query($Database,$sql);
	
echo "true";
	
		
	/*TODO: Store these values to a db table
		then echo "1" if insert was true
		otherwise echo "0";
	*/		
	}
	else if($op=="refresh-cart"){
		/*
			get all data from cart_items table where cart_items_session= $user_session
			echo out the result in table format


		*/
		$subtotal=0;
		$t_qty=null;
		$user_session=$_REQUEST["user_session"];

		$sql = "SELECT cart_items_id,cart_items_book_name, cart_items_quantity, cart_items_price FROM cart_items WHERE cart_items_session='".$user_session."' ";
        $result =  $Database->query($sql);
   

    if ($result->num_rows > 0) {
    // output data of each row

     while($row = $result->fetch_assoc()) {
    	$data[] = array(					
						'id' => $row["cart_items_id"],
						'name'=>$row["cart_items_book_name"],
						'price'=>$row["cart_items_price"],
						'qty'=>$row["cart_items_quantity"]
						);

       }
        foreach ($data as $cart) {

        	if($cart['price']){
        		$subtotal=$cart['price']+$subtotal;
        		$t_qty=$cart['qty']+$t_qty;
        	}
    
       
                  echo '
			            <a class="pull-left" href="#"><img class="media-object item-image" src="" alt=""></a>
			            <p class="pull-right item-price">price:$'.$cart['price'].'</p>
			            <div class="media-body">
			            	<h4 class="media-heading item-title"><a href="#">'.$cart['name'].'</a></h4>
			            	<p class="item-desc">Qty: '.$cart['qty'].'</p>
			            
			            </div>
		           
		           ';
		          }				
		echo '   <div class="media-body-2" style="padding-top:20px;">
			            	
			            	<p class="item-desc" id="sub-total">subtotal: $ '.$subtotal.'</p>
			            
			            	<p class="item-desc" id="total-qty">Total Qty:'.$t_qty.'</p>
			            
			            </div>
			           
			            	

			            <div class="mediadd" style="padding-top:30px;">
                            <div class="media-bodyddd">
                                <div>
                                    <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                    --><button type="button" id="mycheckout"  class="btn btn-theme btn-theme-transparent btn-call-checkout mycheck">Checkout</button>
                                </div>
                            </div>
                        </div>
			            ';

     
} else {
   				 echo '
			            
			            <div class="media-body">
			            	<h4 class="media-heading item-title"><a href="#"></a></h4>
			            	<p class="item-desc">Empty(cart)</p>
			            	<p class="item-desc"></p>
			            </div>
			          <div class="mediadd" style="padding-top:30px;">
                            <div class="media-bodyddd">
                                <div>
                                    <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                    
                                </div>
                            </div>
                        </div>   
		           
		           ';
 }

			
	}
	

?>