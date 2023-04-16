<?php
    include("header.php");
?>

<div class="overlaygradiant_div">
<div class="about_braudcumb_section">
    <div class="container">
        <h4>Daily Blogs</h4>
        <h2>OUR BLOG SECTION</h2>
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
                Blog's
            </li>
            <li>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </li>
            <li>
               View-Blog
            </li>
        </ul>
    </div>
</div>


<div class="blog_page_section">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-12">

                <?php
                    include("config.php");
                    $PageId = $_GET['id'];

                    $sql = "SELECT * FROM blog WHERE Id = '$PageId'";
                    $query = mysqli_query($conn, $sql);
                    while($result = mysqli_fetch_array($query)){

                    $blogtext = $result['Blog_Text'];
                    $blog_txt = str_replace("||","<br><br>","$blogtext");

                ?>
                <div class="blog_div_section ">
                    <img src="<?php  echo 'dashboard/' . $result['Blog_Image']; ?>" alt="">
                    <div class="short_view">
                        <h4 class="date"> <?php echo $result['Blog_Date'] . ' ' . '/' . ' ' . $result['Blog_Publisher']; ?> </h4>
                        <h3> <?php echo $result['Blog_Heading']; ?> </h3>
                        <p> <?php echo  $blog_txt; ?> </p>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="widgets_section">
                    <div class="widget_div">
                        <h3>Text Widget</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, eligendi ut? Adipisci accusantium sapiente labore sequi suscipit inventore ullam aliquid?</p>
                    </div>
                        <br>
                        <br>
                    <div class="widget_div">
                        <h3>Daily News</h3>
                        <ul>
                            <?php
                                $new_sql = "SELECT * FROM dailynews ORDER BY Id DESC LIMIT 4";
                                $new_query = mysqli_query($conn, $new_sql);
                                while($new_res = mysqli_fetch_array($new_query)){
                            ?>
                            <li><?php echo $new_res['Topic']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <br>
                        <br>
                    <div class="widget_div">
                        <h3>Latest Images</h3>
                        <div class="row">
                            <?php 
                                $img_sql = "SELECT * FROM gallery ORDER BY Id DESC LIMIT 6";
                                $img_query = $conn->query($img_sql);
                                while($img_res = mysqli_fetch_array($img_query)){
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <img src="<?php echo 'dashboard/' . $img_res['Picture']; ?>" alt="" class="img-thumbnail">
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<?php
    include("footer.php");
?>