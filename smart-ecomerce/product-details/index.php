<?php
    include('../App-roots/App-config/init.php'); 
   $book_name=  $_REQUEST['book-name'];
   //$book_id=  $_REQUEST['id'];
    
    //$sql="SELECT `products`.*, `product_additional_information`.* FROM products, product_Additional_Information where  product_name='".$book_name."' ";
     
     $sql="SELECT * FROM products where  product_name='".$book_name."' ";
     
    $result =  $Database->query($sql);
 
    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        $id=$row["product_id"];
        $name=$row["product_name"];
        $img=$row["image"];
        $description=$row["product_description"];
        $price=$row["product_price"];
        
        } 

     } else {
           echo "0 results";
       }

        $Template->set_data('display_related_items',$Featured_Items->create_display_related_item());
    //$Template->set_data('display_top_items',$Top_Items->create_display_top_item());
    
    include('view/v_index.php');


    
?>