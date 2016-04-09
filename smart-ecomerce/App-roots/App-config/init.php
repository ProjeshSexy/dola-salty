<?php

/*
	INIT
	Basic configuration settings
*/

// connect to database
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'smart_ecommerce2';
$Database = new mysqli($server, $user, $pass, $db);

// $server = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'qsb_db';
// $Database = new mysqli($server, $user, $pass, $db);

// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);



// include objects

include('App-models/models/m_template.php');
include('App-models/models/m_categories.php');
include('App-models/models/m_products.php');
include('App-models/models/m_featured_items.php');
//include('App-models/models/m_cart.php');
include('App-models/models/m_top_rated_items.php');
include('App-models/models/m_menu_items.php');

// My code Projesh  
include('App-models/models/m_menu.php');
//include('App-models/models/m_feature_products.php');
include('App-models/models/m_generate_number.php');
include('App-models/models/m_auth.php');
// create objects
$Template = new Template();
$Menu_item = new Menu_item();
$Categories = new Categories();
$Products = new Products();
$Featured_Items = new Featured_Items();
$Menue = new Menue();
//$Cart = new Cart();
//$feature_items=new feature_products();
$Top_Items=new Top_Items();
$random=new Random();
$auth=new Auth();

//session_set_cookie_params(0);
session_start();
//if()
if(isset($_SESSION['cart'])){
	if($_SESSION['cart'] ==null){
	$_SESSION['cart']=rand(1,100000);
}
}
else{
	$_SESSION['cart']=rand(1,100000);	
}


//unset($_SESSION['cart']);
//var_dump($_SESSION['cart']);
// global
//$Template->set_data('cart_total_items', $Cart->get_total_items());
//$Template->set_data('cart_total_cost', $Cart->get_total_cost());

?>

