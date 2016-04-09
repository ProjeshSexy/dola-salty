<?php
   include('../App-roots/App-config/init.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image=$_FILES["fileToUpload"]["name"];

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image


 
if(isset($_POST["insert"])) {

    //$cat_id=$_REQUEST['cat-id'];
    $cat_name=$_REQUEST['cat-name'];
    $cat_url=$_REQUEST['cat-url'];
    $menu_id=$_REQUEST['menu-name'];
    $menu_url=$_REQUEST['menu-url'];
    $name=$_REQUEST['name-id'];
    $price=$_REQUEST['price-id'];
    $desc_id=$_REQUEST['desc-id'];
    $details_id=$_REQUEST['details-id'];

           if($stmt =$Database->prepare("INSERT INTO products(product_name,product_price,product_description,product_other_details,image) VALUES(?,?,?,?,?)"))
            {
            $stmt->bind_param("sdsss", $name,$price, $desc_id,$details_id,$image);
            $stmt->execute();
                $last_id=$stmt->insert_id;
            //var_dump($last_id);die;
                if($stmt =$Database->prepare("INSERT INTO categories(category_name,url,product_id) VALUES(?,?,?)"))
                {
                $stmt->bind_param("ssi", $cat_name,$cat_url,$last_id);
                $stmt->execute();
                }

                if($stmt =$Database->prepare("INSERT INTO menu(name,item_url,product_id) VALUES(?,?,?)"))
                {
                $stmt->bind_param("ssi", $name,$menu_url,$last_id);
                $stmt->execute();
                }
            

            
            }else{
                echo "couldn't connect";
            }
            $stmt->close();




    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        //echo $check;

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists


?> 