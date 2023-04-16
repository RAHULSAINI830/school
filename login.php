<?php

    session_start();
    include('config.php');

    if(isset($_POST['username']) AND isset($_POST['password']) ){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username === ""){
            header('location: Log-In.php?Error=Username is required');
            exit();
        }else if($password === ""){
            header('location: Log-In.php?Error=Password is required');
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE UserName = '$username' AND Passwd = '$password'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Username'] = $row['Username'];
                
                header('location: dashboard/index.php');
            }else{
                header("location: Log-In.php?Error=Username and Password is not correct");
                exit();
            }
        }

    }else{
        echo "failed";
        exit();
    }
?>