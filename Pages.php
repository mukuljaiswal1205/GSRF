<?php 
include('Admin/db_connection.php');
include('Header.php'); ?>

<?php
                      
$id = $_GET['id'];
include('db_connection.php');
$sql = "SELECT * FROM Pages where Id = '".$id."'";
$data = mysqli_query($con,$sql);
$row =  mysqli_fetch_assoc($data)
 
?>
  <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"> <?php echo $row['Title'];  ?></div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li><?php echo $row['Title'];  ?> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->
    


    <!-- about-style-mission -->
    <section class="about-style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                 <?php echo $row['Description'];  ?>
                </div>  
            </div>
        </div>
    </section>
    <!-- about-style-mission end -->

<?php include('Footer.php'); ?>