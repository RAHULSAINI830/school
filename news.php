<?php
    include("header.php");
?>

<div class="overlaygradiant_div">
<div class="about_braudcumb_section">
    <div class="container">
        <h4>Some Important News</h4>
        <h2>News</h2>
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
                News
            </li>
        </ul>
    </div>
</div>


<div class="download_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="download_section">
                    
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th>Date</th>
                            <th>Topic</th>
                            <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                include("config.php");

                                $limit = 8;

                               

                                if(isset($_GET['page'])){
                                    $page = $_GET['page'];
                                }else{
                                    $page = 1;
                                }

                                $offset = ($page - 1) * $limit;

                                $sql = "SELECT * FROM dailynews ORDER BY Id DESC LIMIT {$offset}, {$limit}";

                                $query = mysqli_query($conn, $sql);

                                while($result = mysqli_fetch_array($query)){

                            ?>
                            <tr>
                                <td> <?php echo $result['Date']; ?> </td>
                                <td><?php echo $result['Topic']; ?></td>
                                <td><?php echo $result['Details']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>

                </div>

                <?php
                
                    $sql1 = "SELECT * FROM dailynews";
                    $result1 = mysqli_query($conn, $sql1) or die('query failed.');
                    if(mysqli_num_rows($result1) > 0){
                        $total_record = mysqli_num_rows($result1);
                        $total_page = ceil($total_record/$limit);

                        echo '<ul class="pagination admin-pagination">';
                        if($page>1){
                            echo '<li><a href="news.php?page='.($page - 1).'">Prew</a></li>';
                        }
                        for($i = 1; $i <= $total_page; $i++){
                            if($i == $page){
                                $active = "active";
                            }else{
                                $active = "";
                            }
                                echo '<li class="'.$active.'"><a href="news.php?page='.$i.'">'.$i.'</a></li>';
                        }
                        if($total_page>$page){
                            echo '<li><a href="news.php?page='.($page + 1).'">Next</a></li>';
                        }
                        
                        echo '</ul>';

                    }
                                    
                ?>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="download_menu_section">
                    <ul>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">Downloads</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">Educational Tours</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">Co-Curricular Activities</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">Games and Sports</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">Houses</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="">News</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>