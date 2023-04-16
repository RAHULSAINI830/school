<?php
session_start();
include('../../config.php');

$name = $_POST['Teacher_Name']; 
$subject = $_POST['Teacher_Subject']; 
$phone = $_POST['Teacher_Phone']; 
$email = $_POST['Teacher_Email'];


$file_name = $_FILES["image"]["name"];
$file_size = $_FILES["image"]["size"];
$file_tmp = $_FILES["image"]["tmp_name"];
$file_type = $_FILES["image"]["type"];

$img_path = "images/teacherimg/";

$imagename = $img_path . $file_name;

$Insert_Sql = "INSERT INTO teacher (teacher_name, teacher_img, teacher_subject, teacher_phone, teacher_email) VALUES('$name', '$imagename', '$subject', '$phone', '$email')";

$result = mysqli_query($conn, $Insert_Sql);

if($result){
    move_uploaded_file($file_tmp, "../images/teacherimg/". $file_name);
    echo "
        <script>
            alert('Teacher Added Successfully');
            window.location.href='../Add-Teacher.php';
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