<?php
    echo "<title>Admin | Edit-Blog</title>";
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
                Edit Blog
            </li>
        </ul>
    </div>


<!-- add news code start  here -->

    <?php
        $id = $_GET['id'];
        $blog_data = "SELECT * FROM blog WHERE Id = '$id'";
        $blog_res = mysqli_query($conn, $blog_data);

        $blog_row_data = mysqli_fetch_array($blog_res);

    ?>

    <div class="container">
        <div class="form_div">
            <h3>Edit Blog</h3>
            <form action="action/Update-Blog.php?id=<?php echo $blog_row_data['Id']; ?>" method="post" enctype="multipart/form-data">
                
                <div class="row">
                
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="blog_image_views">
                            <img src="<?php echo $blog_row_data['Blog_Image'] ?>" alt="Image" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Blog Heading</label>
                            <input type="text" class="form-control" name="blog_heading" value="<?php echo $blog_row_data['Blog_Heading']; ?>" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Blog Tags</label>
                            <input type="text" class="form-control" name="blog_tags" value="<?php echo $blog_row_data['Blog_Tag']; ?>" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="">Date</label>
                            <input type="Date" class="form-control" name="blog_date" value="<?php echo $blog_row_data['Blog_Date']; ?>">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="">Related Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="">Blog Details</label>
                        <textarea name="blog_details" id="" cols="30" rows="10" class="form-control" required><?php echo $blog_row_data['Blog_Text']; ?>
                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                    <input type="submit" name="submit" value="Update Blog" class="form-control">
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
