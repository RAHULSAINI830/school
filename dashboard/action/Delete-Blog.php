<?php

    include('../../config.php');
    $id = $_GET['id'];
    
    $sql1 = "SELECT * FROM blog WHERE Id = '$id'";
    $query = mysqli_query($conn, $sql1);
    $result = mysqli_fetch_array($query);
    $filename = $result["Blog_Image"];

    $file_pa = "../";
    $filepath = $file_pa . $filename;
    echo $filepath;

    unlink($filepath);

    $sql = "DELETE FROM blog WHERE Id = $id";

    if(mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('Blog Removed Successfully.');
                window.location.href='../View-Blogs.php';
            </script>
        ";
    }else{
        echo "Failed";
    }



?>