<?php

    echo "<title>Admin | Edit-User</title>";
    
    include('header.php');

    $id = $_GET['id'];
    $sql1 = "SELECT * FROM users WHERE Id = '$id'";
    $query1 = mysqli_query($conn, $sql1);
    $result1 = mysqli_fetch_array($query1);
    $currentname = $result1['Username'];

    if($_SESSION['Username'] != $currentname){
        echo "
        <script>
            alert('Not Permission To Edit This User.');
            window.location.href='User.php';
            </script>
        ";
    }


?>
<div class="div_data">
<?php include('side-bar.php'); ?>

<div class="data_section db_sec">
        
    <div class="page_name">
        <ul class="list-inline text-white">
            <li class="list-inline-item">
                <a href="index.php">Home</a>
            </li>
            <li class="list-inline-item">|</li>
            <li class="list-inline-item">
                Edit User
            </li>
        </ul>
    </div>


<!-- edit user code start  here -->

    <?php
        $id = $_GET['id'];
        $user_data = "SELECT * FROM users WHERE Id = '$id'";
        $user_res = mysqli_query($conn, $user_data);

        $user_row_data = mysqli_fetch_array($user_res);

    ?>

    <div class="container">
        <div class="form_div">
            <h3>Edit User</h3>
            <form action="action/Update-User.php?id=<?php echo $user_row_data['Id']; ?>" method="post" enctype="multipart/form-data">
                
                <div class="row">
                
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="blog_image_views">
                            <img src="<?php echo $user_row_data['Pic'] ?>" alt="Image" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $user_row_data['Username']; ?>" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Gmail</label>
                            <input type="text" class="form-control" name="usergmail" value="<?php echo $user_row_data['Email']; ?>" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="userphone" value="<?php echo $user_row_data['Phone']; ?>">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Related Image</label>
                        <input type="file" class="form-control" name="userimage">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">New Password</label>
                        <input type="password" class="form-control" name="passwd">
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                    <input type="submit" name="submit" value="Update User" class="form-control">
                    </div>
                </div>

            </form>
        </div>
    </div>

<!-- edit user code end here -->

        
</div>
</div>

</body>
</html>
