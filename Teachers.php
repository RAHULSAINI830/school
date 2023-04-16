<?php
    include("header.php");
?>


<div class="overlaygradiant_div">
<div class="about_braudcumb_section">
    <div class="container">
        <h4>Our Pround Teacher's</h4>
        <h2>Teacher's</h2>
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
                Teacher's
            </li>
        </ul>
    </div>
</div>


<!-- teacher section start here  -->

<div class="teacher_section">
    <div class="container">
        <div class="row">

            <?php
                include('config.php');
                $teacher_sql = "SELECT * FROM teacher";
                $teacher_result = mysqli_query($conn, $teacher_sql);
                while($teacher_row = mysqli_fetch_array($teacher_result)){
            ?>

            <div class="col-lg-3 col-md-4 col-sm-12 mt-3 mb-3">
                <div class="inner_teacher_details">
                    <a href="<?php  echo 'dashboard/' . $teacher_row['teacher_img']; ?>" target="_blank"><img src="<?php  echo 'dashboard/' . $teacher_row['teacher_img']; ?>" alt="" class="img-thumbnail"></a>
                    <h3> <?php echo $teacher_row['teacher_name']; ?> </h3>
                    <p><?php echo $teacher_row['teacher_subject']; ?></p>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</div>

<!-- teacher section end here  -->


<?php
    include("footer.php");
?>