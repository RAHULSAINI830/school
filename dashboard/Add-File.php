<?php
    echo "<title>Admin | Download Files</title>";
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
                Downloadable File
            </li>
        </ul>
    </div>


<!-- Add Gallery section code start  here -->

<?php
    if(isset($_POST['submitfile'])){
        
        $filename = $_POST['filename']; 
        $file_name = $_FILES["fileimage"]["name"];
        $file_size = $_FILES["fileimage"]["size"];
        $file_tmp = $_FILES["fileimage"]["tmp_name"];
        $file_type = $_FILES["fileimage"]["type"];

        $img_path = "images/Download/";

        $imagename = $img_path . $file_name;

        $img_sql = "INSERT INTO download (Topic, Material) VALUES('$filename', '$imagename')";

        
        if(move_uploaded_file($file_tmp, "images/Download/". $file_name)){
            if($result = mysqli_query($conn, $img_sql)){
                echo "
                    <script>
                        alert('File Added Succesfully');
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
                alert(Please Choose A Valid File.);
            </script>
        ";
        }


    }
?>

<div class="row">

    <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="form_div">
            <h3>Add Download File</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">File Name</label>
                    <input type="text" class="form-control" placeholder="File Name" name="filename">
                </div>
                <div class="form-group">
                    <label for="">Choose File</label>
                    <input type="file" class="form-control" name="fileimage" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add File" name='submitfile'>
                </div>
            </form>
        </div>
    </div>



</div>

<!-- add gallery section code end here -->

        
</div>


</body>
</html>
