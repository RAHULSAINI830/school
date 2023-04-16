<?php
    echo "<title>Admin | Add-Teacher</title>";
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
                Add Teacher
            </li>
        </ul>
    </div>


<!-- add news code start  here -->

<div class="container">
    <div class="form_div">
        <h3>Add Teacher Details</h3>
        <form action="action/Add-Teacher.php" method="post" enctype='multipart/form-data'>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Teacher Name</label>
                    <input type="text" class="form-control" name="Teacher_Name" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Teacher Image</label>
                    <input type="file" class="form-control" name='image' required>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Subject</label>
                    <input type="Text" class="form-control" name="Teacher_Subject" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="Teacher_Phone">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="Teacher_Email">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <label for="">Click Me</label>
                   <input type="submit" name="submit" value="Add Teacher" class="form-control mt-0">
                </div>
            </div>

        </form>
    </div>
</div>

<!-- add news code end here -->

        
</div>


</body>
</html>
