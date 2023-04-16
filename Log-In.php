<?php
    session_start();
    if(isset($_SESSION['Username'])){
        header('location: dashboard/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin |Gomati Devi Vidya Mandir School</title>

    <!-- bootstrap added -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style sheet add -->
    <link href="css/indexstyle.css" rel="stylesheet">
    <link href="css/responsivestyle.css" rel="stylesheet">

    <!-- font-awasome version 5 -->
    <script src="https://kit.fontawesome.com/3defd9afa9.js" crossorigin="anonymous"></script>

    <!-- fonts added -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

<div class="admin_page">
    <div class="container admin_cs">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="inner_admin_div">
                <img src="images/log.png" alt="Gomati Devi Vidya Mandir School">
                <form action="login.php" method="post">
                    <?php
                        if(isset($_GET['Error'])){ ?>
                        <p class="error_msg"> <?php echo $_GET['Error'] ?> </p>
                    <?php  } ?>
                    <input type="text" placeholder="User Name" class="form-control" name="username">
                    <input type="password" placeholder="Password" class="form-control" name="password" >
                    <input type="submit" value="Log In" class="btn" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>