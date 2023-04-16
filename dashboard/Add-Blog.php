<?php
    echo "<title>Admin | Add-Blog</title>";
    include('header.php');
?>

<?php include('side-bar.php'); ?>

<div class="data_section db_sec">
        
    <div class="page_name">
        <ul class="list-inline text-white">
            <li class="list-inline-item">
                <a href="index.php">Home</a>
            </li>
            <li class="list-inline-item">|</li>
            <li class="list-inline-item">
                Add Events
            </li>
        </ul>
    </div>


<!-- add news code start  here -->

<div class="container">
    <div class="form_div">
        <h3>Add Event</h3>
        <form action="action/Add-Blog.php" method="post" enctype='multipart/form-data'>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Blog Heading</label>
                    <input type="text" class="form-control" name="blog_heading" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Blog Tags</label>
                    <input type="text" class="form-control" name="blog_tags">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Date</label>
                    <input type="Date" class="form-control" name="blog_date" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Related Image</label>
                    <input type="file" class="form-control" name='image' required>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="">Blog Details</label>
                    <textarea name="blog_details" id="" cols="30" rows="5" class="form-control" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                   <input type="submit" name="submit" value="Add Blog" class="form-control">
                </div>
            </div>

        </form>
    </div>
</div>

<!-- add news code end here -->

        
</div>


</body>
</html>
