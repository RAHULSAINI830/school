<?php
    include("header.php");
?>


<div class="overlaygradiant_div">
<div class="about_braudcumb_section">
    <div class="container">
        <h4>Some Memorie's</h4>
        <h2>Our School Gallery</h2>
    </div>
</div>
</div>
<div class="menu_list_section">
    <div class="container">
        <ul>
            <li>
                Gomati Devi Vidya Mandir School
            </li>
            <li>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </li>
            <li>
                Gallery
            </li>
        </ul>
    </div>
</div>



<div class="gallery_page_section">
    <div class="container">
        <div class="row">

                        <?php
                            $categ = $_GET['category'];
                            include('config.php');
                            $sql = "SELECT * FROM gallery WHERE category='$categ' ";
                            $query = mysqli_query($conn, $sql);
                            while($result = mysqli_fetch_array($query)){

                        ?>

                    <div class="col-lg-3 col-md-4 col-sm-12 mt-4">
                            <a href="<?php echo 'dashboard/' . $result['Picture']; ?>" target="_blank"> <div class="dashimg01">
                                <img src="<?php echo 'dashboard/' . $result['Picture']; ?>" class="img-thumbnail" alt="">
                                <h3> <?php echo $result['Caption'] ?> </h3>
                            </div></a>
                    </div>

                    <?php } ?>

        </div>
    </div>
</div>


<?php
    include("footer.php");
?>