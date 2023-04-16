<?php
session_start();
include('../../config.php');

$Heading = $_POST['blog_heading']; 
$Tags = $_POST['blog_tags']; 
$Date = $_POST['blog_date']; 
$Publisher = $_SESSION['UserName'];
$Details = $_POST['blog_details']; 


$file_name = $_FILES["image"]["name"];
$file_size = $_FILES["image"]["size"];
$file_tmp = $_FILES["image"]["tmp_name"];
$file_type = $_FILES["image"]["type"];

$img_path = "images/BlogImage/";

$imagename = $img_path . $file_name;

$Insert_Sql = "INSERT INTO blog (Blog_Heading, Blog_Tag, Blog_Date, Blog_Publisher, Blog_Text, Blog_Image) VALUES('$Heading', '$Tags', '$Date', '$Publisher', '$Details', '$imagename')";

$result = mysqli_query($conn, $Insert_Sql);

if($result){
    move_uploaded_file($file_tmp, "../images/BlogImage/". $file_name);
    echo "
        <script>
            alert('Item  Added');
            window.location.href='../View-Blogs.php';
        </script>
    ";
    
}else{
    echo "
        <script>
            alert(Some Error Found. Please Try Again Later.);
        </script>
    ";
}

?>