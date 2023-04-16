<?php

session_start();
include('../../config.php');

$id = $_GET['id'];

$name = $_POST['Teacher_Name']; 
$subject = $_POST['Teacher_Subject']; 
$phone = $_POST['Teacher_Phone']; 
$email = $_POST['Teacher_Email'];


$file_name = $_FILES["image"]["name"];
$file_size = $_FILES["image"]["size"];
$file_tmp = $_FILES["image"]["tmp_name"];
$file_type = $_FILES["image"]["type"];

$img_path = "images/teacherimg/";

// image code
$sql1 = "SELECT * FROM teacher WHERE teacher_id = '$id'";
$query1 = mysqli_query($conn, $sql1);
$result1 = mysqli_fetch_array($query1);

if($file_name === ""){
    $imagename = $result1['teacher_img'];
}else{
    $filename = $result1["teacher_img"];
    $file_pa = "../";
    $file_path_del = $file_pa . $filename;
    unlink($file_path_del);
    $imagename = $img_path . $file_name;
}	
$Update_Sql = "UPDATE teacher set teacher_id = '$id', teacher_name = '$name', teacher_img = '$imagename', teacher_subject = '$subject', teacher_phone = '$phone', teacher_email = '$email' WHERE teacher_id = '$id' ";

$result = mysqli_query($conn, $Update_Sql);

if($result){
    move_uploaded_file($file_tmp, "../images/teacherimg/". $file_name);
    echo "
        <script>
            window.location.href='../View-Teachers.php';
            alert('Teacher Updated Successfully.');
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