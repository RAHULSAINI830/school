<?php

    include('../../config.php');
    $id = $_GET['id'];
    
    $sql1 = "SELECT * FROM teacher WHERE teacher_id = '$id'";
    $query = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_array($query);
    $filename = $result["teacher_img"];

    $file_pa = "../";
    $filepath = $file_pa . $filename;
    unlink($filepath);

    $sql = "DELETE FROM teacher WHERE teacher_id = $id";

    if(mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('Teacher Removed Successfully.');
                window.location.href='../View-Teachers.php';
            </script>
        ";
    }else{
        echo "Failed";
    }



?>