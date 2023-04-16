<?php
session_start();
include('../../config.php');

$topic = $_POST['newstopic']; 
$Date = $_POST['newsdate']; 
$Publisher = $_SESSION['Username'];
$details = $_POST['news_details'];
$Insert_Sql = "INSERT INTO dailynews (Date, Topic, Details, NewsPublisher) VALUES('$topic', '$Date', '$details',  '$Publisher')";

$result = mysqli_query($conn, $Insert_Sql);

if($result){
    echo "
        <script>
            alert('News Updated Successfully');
            window.location.href='../View-News.php';
        </script>
    ";
    
}else{
    echo "
        <script>
            alert('Some Error Found. Please Try Again Later');
            window.location.href='../Add-News.php';
        </script>
    ";
}

?>