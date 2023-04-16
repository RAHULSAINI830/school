<?php
    echo "<title>Admin | Gallery</title>";
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
                Add Gallery
            </li>
        </ul>
    </div>


<!-- Add Gallery section code start  here -->

<?php
    if(isset($_POST['submitimage'])){
        
        $captions = $_POST['category']; 

        $file_name = $_FILES["image_gall"]["name"];
        $file_size = $_FILES["image_gall"]["size"];
        $file_tmp = $_FILES["image_gall"]["tmp_name"];
        $file_type = $_FILES["image_gall"]["type"];

        $img_path = "images/Gallery/";

        $imagename = $img_path . $file_name;

        $img_sql = "INSERT INTO gallery (category, Picture) VALUES('$captions', '$imagename')";

        
        if(move_uploaded_file($file_tmp, "images/Gallery/". $file_name)){
            if($result = mysqli_query($conn, $img_sql)){
                echo "
                    <script>
                        alert('Image Added Succesfully');
                    </script>
                ";
            }else{
                echo "
                    <script>
                        alert(Some Error Found. Please Try Again Later.);
                    </script>
                ";
            }
        }else{
            echo "
            <script>
                alert(Please Choose A Valid Image.);
            </script>
        ";
        }


    }
?>

<div class="row">

<?php 
    if(isset($_POST['submitcate'])){
        $cetogary = $_POST["Image_Category"];
        $sql = "INSERT INTO imagecategory (category) VALUES ('$cetogary')";
        $result = $conn->query($sql);
        if($result){
            echo "
                <script>
                    alert('Category Added Succesfully');
                    window.location.href='Gallery.php';
                </script>
            ";
        }else{
            echo "failed";
        }
    }
?>
    
    <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="form_div">
            <h3>Add Image category</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label for="">Category</label>
                    <input type="text" placeholder="Image Category" name="Image_Category" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add Category" name='submitcate'>
                </div>
            </form>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="form_div">
            <h3>Image Gallery Section</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" id="" class="form-control">
                        <?php
                            $cate_sql = "SELECT * FROM imagecategory";
                            $cate_result = mysqli_query($conn, $cate_sql);
                            while($cate_row = mysqli_fetch_array($cate_result)){
                        ?>

                        <option value="<?php echo $cate_row['category']; ?>">
                            <?php echo $cate_row['category']; ?>
                        </option>
                                        
                        <?php } ?>
                                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Choose Image</label>
                    <input type="file" class="form-control" name="image_gall" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add Image" name='submitimage'>
                </div>
            </form>
        </div>
    </div>



</div>

<!-- add gallery section code end here -->

        
</div>


</body>
</html>
