<?php
    echo "<title>Admin | Add-News</title>";
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
                Add News
            </li>
        </ul>
    </div>


<!-- add news code start  here -->

<div class="container">
    <div class="form_div">
        <h3>Add News</h3>
        <form action="action/Add-News.php" method="post" enctype="multipart/form-data">
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">News Topic</label>
                    <input type="text" class="form-control" name="newstopic" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">News Date</label>
                    <input type="date" class="form-control" name="newsdate" required>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="">News Details</label>
                    <textarea name="news_details" id="" cols="30" rows="5" class="form-control" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                   <input type="submit" value="Add News" class="form-control">
                </div>
            </div>

        </form>
    </div>
</div>

<!-- add news code end here -->

        
</div>


</body>
</html>
