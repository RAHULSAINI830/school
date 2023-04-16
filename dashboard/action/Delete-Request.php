<?php



    include("../../config.php");
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM library WHERE Id = '$id'";
    $query = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_array($query);
    $filename = $result["lib_img"];
    $file_pa = "../";
    $filepath = $file_pa . $filename;
    echo $filepath;
    unlink($filepath);

    $sql = "DELETE FROM library WHERE Id = $id";

    if(mysqli_query($conn, $sql)){
        echo "done";
        header('Location:../Library-Requests.php');
    }else{
        echo "Failed";
    }




?>