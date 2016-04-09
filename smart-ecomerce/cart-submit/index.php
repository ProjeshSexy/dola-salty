<?php
include('../App-roots/App-config/init.php'); 
	

$sql = "SELECT * FROM cart_items WHERE cart_items_session='".$_SESSION['cart']."'";
        $result=$Database->query($sql);
   	$data= array('hello');
   	$subtotal=0;
   	$payment_total=0;
    //var_dump($result->num_rows);die;
    if ($result->num_rows < 0) {
    	
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	 $data[]= array(					
						'id' => $row["cart_items_id"],
						'name'=>$row["cart_items_book_name"],
						'price'=>$row["cart_items_price"],
						'qty'=>$row["cart_items_quantity"]
						);
        
                       }
                            
                            foreach ($data as $cart) {
                            //var_dump($cart);
                                # code...

                                if($cart['price'])
                                {
                                	$payment_total=0;
                                  $subtotal=$cart['price']+$subtotal;
                                 // $payment_total=25+$subtotal;
                                }

	                          }
	                          $payment_total=25+$subtotal;
	                      }
    include('shopping-cart.php');
?>