<?php

    include('../../config.php');
    $id = $_GET['id'];
    
    $sql = "DELETE FROM dailynews WHERE Id = $id";

    if(mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('News Removed Successfully.');
                window.location.href='../View-News.php';
            </script>
        ";
    }else{
        echo "Failed";
    }



?>