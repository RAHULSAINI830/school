<?php
    echo "<title>Admin | Edit-News</title>";
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
                Edit News
            </li>
        </ul>
    </div>


<!-- edit news code start  here -->


<?php
    $id = $_GET['id'];
    $news_data = "SELECT * FROM dailynews WHERE Id = '$id'";
    $news_res = mysqli_query($conn, $news_data);
    $news_row_data = mysqli_fetch_array($news_res);
?>


<div class="container">
    <div class="form_div">
        <h3>Edit News</h3>
        <form action="action/Update-News.php?id=<?php echo $news_row_data['Id']; ?>" method="post" enctype="multipart/form-data">
            
            <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">News Topic</label>
                        <input type="text" class="form-control" name="news_topic" value="<?php echo $news_row_data['Topic'];?>" >
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="">News Date</label>
                    <input type="Date" value="<?php echo $news_row_data['Date'];?>" class="form-control" name="news_date" >
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <label for="">News Details</label>
                    <textarea name="news_details" id="" cols="30" rows="5" class="form-control"><?php echo $news_row_data['Details'];?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                   <input type="submit" value="Update News" name="submit" class="form-control">
                </div>
            </div>

        </form>
    </div>
</div>

<!-- add news code end here -->

        
</div>


</body>
</html>
