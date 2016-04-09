<?php
    require 'index.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of function
 *
 * @author DELL
 */
class connection {
    function __construct(){
        $database=new Dbconnect();
    }
public function  registerUser($USERNAME,$password,$NAME, $Email, $web){
    global $pdo;
    
    $query = $pdo->prepare("SELECT * FROM registration UserName= ? AND Email= ? ");
    $query->execute(array($USERNAME,$Email));
    $num=$query->rowCount();

    if($num==0){
        $query=$pdo->prepare("INSERT INTO registration (UserName,Password,Name,Email,Website) VALUES(?,?,?,?,?)");
        $query->execute(array($USERNAME,$password,$NAME, $Email, $web));
        //var_dump($query);die;
        return true;
        
    }
    else 
        return print"wrong!!!!!";
           
    
}
      
    
//put your code here
}
?>