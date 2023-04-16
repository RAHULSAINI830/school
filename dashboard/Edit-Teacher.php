<?php
    echo "<title>Admin | Edit-Teacher</title>";
    include('header.php');
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
                Edit Teacher
            </li>
        </ul>
    </div>


<!-- add news code start  here -->

    <?php
        $id = $_GET['id'];
        $blog_data = "SELECT * FROM teacher WHERE teacher_id = '$id'";
        $blog_res = mysqli_query($conn, $blog_data);

        $blog_row_data = mysqli_fetch_array($blog_res);

    ?>

    <div class="container">
        <div class="form_div">
            <h3>Edit Teacher Details</h3>
            <form action="action/Update-Teacher.php?id=<?php echo $blog_row_data['teacher_id']; ?>" method="post" enctype="multipart/form-data">
                
                <div class="row">





                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="blog_image_views">
                            <img src="<?php echo $blog_row_data['teacher_img'] ?>" alt="Image" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="Teacher_Name" value="<?php echo $blog_row_data['teacher_name']; ?>" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" name="Teacher_Subject" value="<?php echo $blog_row_data['teacher_subject']; ?>" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="Teacher_Phone" value="<?php echo $blog_row_data['teacher_phone']; ?>">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Related Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>    

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="Teacher_Email" value="<?php echo $blog_row_data['teacher_email']; ?>">
                        </div>

                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                    <input type="submit" name="submit" value="Update Teacher" class="form-control">
                    </div>
                </div>

            </form>
        </div>
    </div>

<!-- add news code end here -->

        
</div>
</div>

</body>
</html>
