<?php


session_start();
include('../../config.php');
$id = $_GET['id'];

$sql1 = "SELECT * FROM users WHERE Id = '$id'";
$query1 = mysqli_query($conn, $sql1);
$result1 = mysqli_fetch_array($query1);


$name = $_POST['username']; 
$gmail = $_POST['usergmail']; 
$phone = $_POST['userphone']; 
$passwd = $_POST['passwd']; 

$file_name = $_FILES["userimage"]["name"];
$file_size = $_FILES["userimage"]["size"];
$file_tmp = $_FILES["userimage"]["tmp_name"];
$file_type = $_FILES["userimage"]["type"];

$img_path = "images/UserImage/";

// image code


if($file_name === ""){
    $imagename = $result1['Pic'];
}else{
    $filename = $result1["Pic"];
    $file_pa = "../";
    $file_path_del = $file_pa . $filename;
    unlink($file_path_del);
    $imagename = $img_path . $file_name;
}

if($passwd === ''){
    $new_passwd = $result1['Passwd'];
}else{
    $new_passwd = $passwd;
}


$Update_Sql = "UPDATE users set Id = '$id', Username = '$name', Passwd = '$new_passwd', Email = '$gmail', Phone = '$phone', Pic = '$imagename' WHERE Id = '$id'";

$result = mysqli_query($conn, $Update_Sql);

if($result){
    move_uploaded_file($file_tmp, "../images/UserImage/". $file_name);
    echo "
        <script>
            window.location.href='../User.php';
            alert('User Updated Successfully.');
            </script>
    ";

    $_SESSION['Username'] = $_POST['username'];
    
}else{
    echo "
        <script>
            alert(Some Error Found. Please Try Again Later.);
        </script>
    ";
}

?>