
$user= new Dbconnect();

        <?php
        class Dbconnect{
        // put your code here
            public function __construct() {

               global $pdo;

               try{ 
              $pdo = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
               //echo "<p>Hello</p>";
               }
               catch(PDOException $e){
                   exit('Database Error');
               }
            }
         
       }
        ?>


