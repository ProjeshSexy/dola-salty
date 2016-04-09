<?php

include('../App-roots/App-config/init.php'); 




$op=$_REQUEST['op'];
if($op=='delete'){
	$delete_id=$id=$_REQUEST['cart-id'];
	$sql="DELETE FROM cart_items WHERE cart_items_id = '".$delete_id."'";
	$Database->query($sql);
}else{

$qty=$_REQUEST['qty'];
$id=$_REQUEST['id'];
$price=$_REQUEST['price'];
$total=0;
if($qty>0){

		$sql = "SELECT unit_price FROM cart_items WHERE cart_items_session='".$_SESSION['cart']."'";
        $result=$Database->query($sql);

       if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) 
       {
			$price=$row["unit_price"];
			
						

         }
		$total=($qty*$price);

	}
}
//var_dump($qty);
  $sql = "UPDATE cart_items SET cart_items_quantity='".$qty."', cart_items_price='".$total."'  WHERE cart_items_session='".$_SESSION['cart']."' AND cart_items_id='".$id."'";
  $Database->query($sql);
  echo $sql;

}
?>