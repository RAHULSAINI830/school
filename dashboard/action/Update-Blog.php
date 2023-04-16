<?php

session_start();
include('../../config.php');

$id = $_GET['id'];

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

// image code
$sql1 = "SELECT * FROM blog WHERE Id = '$id'";
$query1 = mysqli_query($conn, $sql1);
$result1 = mysqli_fetch_array($query1);

if($file_name === ""){
    $imagename = $result1['Blog_Image'];
}else{
    $filename = $result1["Blog_Image"];
    $file_pa = "../";
    $file_path_del = $file_pa . $filename;
    unlink($file_path_del);
    $imagename = $img_path . $file_name;
}

$Update_Sql = "UPDATE blog set Id = '$id', Blog_Heading = '$Heading', Blog_Tag = '$Tags', Blog_Date = '$Date', Blog_Publisher = '$Publisher', Blog_Text = '$Details', Blog_Image = '$imagename' WHERE Id = '$id' ";

$result = mysqli_query($conn, $Update_Sql);

if($result){
    move_uploaded_file($file_tmp, "../images/BlogImage/". $file_name);
    echo "
        <script>
            window.location.href='../View-Blogs.php';
            alert('Blog Updated Successfully.');
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