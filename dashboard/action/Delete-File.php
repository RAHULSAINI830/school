<?php

    include('../../config.php');
    $id = $_GET['id'];
    
    $sql1 = "SELECT * FROM download WHERE Id = '$id'";
    $query = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_array($query);
    $filename = $result["Material"];

    $file_pa = "../";
    $filepath = $file_pa . $filename;

    unlink($filepath);

    $sql = "DELETE FROM download WHERE Id = $id";

    if(mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('File Removed Successfully.');
                window.location.href='../View-Files.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Some Error Found Please Try Again Later.');
                window.location.href='../View-Files.php';
            </script>
        ";
    }



?>