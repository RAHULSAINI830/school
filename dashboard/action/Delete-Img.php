<?php

    include('../../config.php');
    $id = $_GET['id'];
    
    $sql1 = "SELECT * FROM gallery WHERE Id = '$id'";
    $query = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_array($query);
    $filename = $result["Picture"];

    $file_pa = "../";
    $filepath = $file_pa . $filename;

    unlink($filepath);

    $sql = "DELETE FROM gallery WHERE Id = $id";

    if(mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('Image Removed Successfully.');
                window.location.href='../Images-Section.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Some Error Found Please Try Again Later.');
                window.location.href='../Images-Section.php';
            </script>
        ";
    }



?>