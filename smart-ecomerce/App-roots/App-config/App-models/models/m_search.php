<?php

//include('../init.php');

$search=$_GET['q'];
//'$search_op=$_GET['op'];
 //$x=LOWER($search_op);
 $string = preg_replace('/\s+/', '', $_GET['op']);
//var_dump(strtolower($string));
$search_op=strtolower($string);


$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'qsb_db';
$Database = new mysqli($server, $user, $pass, $db);
//$result;

//$sql = "SELECT * FROM products WHERE product_name='".$search."'";
if($search!=''){


	$result =  $Database->query("SELECT * FROM products WHERE LOWER(product_name) like LOWER('$search%') ");

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $name=$row["product_name"];
        echo '<a href="#"><p style="background:green;">'.$name.'</p> </a>';
    }
    
   }else{
   	echo "not found";
   }
   }


   

