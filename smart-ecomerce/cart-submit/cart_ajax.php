<?php 
	
include('../App-roots/App-config/init.php');  



//var_dump($user_session);

          if ($auth->check_login_status() == TRUE)
           {

           echo 1;
           }else{
           	echo 0;
           		//echo $sql;
           }