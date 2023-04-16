<?php

session_start();
include('../../config.php');

$id = $_GET['id'];
 
$topic = $_POST['news_topic']; 
$Date = $_POST['news_date']; 
$details = $_POST['news_details']; 
$Publisher = $_SESSION['UserName'];


$Update_Sql = "UPDATE dailynews set Id = '$id', Topic = '$topic', Date = '$Date', Details = '$details' WHERE Id = '$id' ";

$result = mysqli_query($conn, $Update_Sql);

if($result){
    echo "
        <script>
            window.location.href='../View-News.php';
            alert('News Updated Successfully.');
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