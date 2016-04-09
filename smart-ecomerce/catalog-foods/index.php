<?php
    include('../App-roots/App-config/init.php'); 
   
    //var_dump($_SESSION['cart']);
    $Template->set_data('build_left_rails_menu', $Menue->create_left_rail_navigation());

    if($_GET['pid']){
    $Template->set_data('display_all_items',$Products->create_item_for_sub($_GET['pid']));
    //$Template->set_data('display_top_items',$Top_Items->create_display_top_item());
    }
    include('view/v_index.php');


    
?>