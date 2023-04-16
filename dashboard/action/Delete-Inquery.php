<?php

    include('../../config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM messages WHERE Id = $id";

    if(mysqli_query($conn, $sql)){
        echo "
            <script>
                alert('Inquery Removed Successfully.');
                window.location.href='../Inquery.php';
            </script>
        ";
    }else{
        echo "Failed";
    }

?>