<?php
@session_start();
$mail=$_SESSION['use'];
include "connection.php";

$path = "images/user/";

$valid_formats = array("jpg","jpeg", "png", "gif", "bmp");

if(isset($_FILES['image']))

        {  
            $name = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];


if(strlen($name))
    {
    list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
    {
if($size<(2048*2048))
    {
        $actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
        $tmp = $_FILES['image']['tmp_name'];

if(move_uploaded_file($tmp, $path.$actual_image_name))
    {

        $query="UPDATE korisnici SET slika='".$actual_image_name."' WHERE email='".$mail."'";
        if ($mysqli->query($query))
        {
            echo "Product successfully added.";
            header("Location:user.php"); 
        } 
        else {
            echo "<p>There was an error. Please try again later.</p>" . $mysqli->error;
        }

        $mysqli->close();
                                
    }else
        echo die(mysql_error());

    }else

        echo "exceed the file size";        

    }else
        echo "Not a valid format";      


    }else
        echo "no file is selected";     


        }


?>