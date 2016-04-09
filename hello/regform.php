<?php 

require_once 'function.php';
$user= new connection();
?>
<html>
    <body>
    <li> <a href="index.php">Home</a></li>
    <li> <a href="profile.php">Show Profile</a></li>
   <li> <a href="password.php">Change Password</a></li>
    <li> <a href="logout.php">LogOut</a></li>
    <li> <a href="login.php">LogIn</a></li>

    <li> <a href="register.php">Register</a></li>
    <?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $USERNAME=$_POST['UserName'];
        $password=$_POST['Password'];
        $NAME=$_POST['Name'];
        $Email=$_POST['Email'];
        $web=$_POST['Website'];
        if(empty($USERNAME)or empty($Email)or empty($NAME)or empty($password) or empty($web)){
            echo "Field Must be empty ";
        }
      else {
          $password=  md5($password);
        $register= $user->registerUser($USERNAME,$password,$NAME, $Email, $web);
        if($register){
            echo "registration done!!";
        }
      
      }
        
        
    }
    
    
    ?>
    
    <form action="" method="post">
        <table>
            <tr>
                <td>UserName: </td>
                <td> <input type="text" name="UserName" placeholder="Please give your user name: "/> 
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td> <input type="text" name="Password" placeholder="Please give your user name: "/> 
                </td>
            </tr>
            <tr>
                <td>Name: </td>
                <td> <input type="text" name="Name" placeholder="Please give your user name: "/> 
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td> <input type="text" name="Email" placeholder="Please give your user name: "/> 
                </td>
            </tr>
            <tr>
                <td>WebSite: </td>
                <td> <input type="text" name="Website" placeholder="Please give your user name: "/> 
                </td>
            </tr>
            
            <tr>
                
                <td> <input type="submit" name="Register" value="register"/> 
                </td>
            </tr>
        </table>
        
    </form>
</body>
</html>


<?php

?>