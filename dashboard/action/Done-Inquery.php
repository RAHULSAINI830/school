<?php

include('../../config.php');

$id = $_GET['id'];
$status = "Done";

$Update_Sql = "UPDATE contactqueries set Id = '$id', Con_Status = '$status' WHERE Id = '$id' ";

$result = mysqli_query($conn, $Update_Sql);

if($result){
    echo "
        <script>
            window.location.href='../Inquery.php';
            alert('Inquery Updated Successfully.');
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