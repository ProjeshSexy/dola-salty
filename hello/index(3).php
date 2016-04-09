<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        class Dbconnect{
        // put your code here
            public function _construct() {

global $pdo;
               try{ 
        $pdo = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
        echo hello;
               }
               catch(PDOException $e){
                   exit('Database Error');
               }
            }
         
       }
        ?>


