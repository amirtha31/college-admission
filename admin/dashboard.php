<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(strlen($_SESSION['aid'])==0){
header('location:logout.php');
} else {
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
   <?php include_once('includes/header.php');?>
 <?php include_once('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                   <a href="manage-course.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
$sql =mysqli_query($con ,"SELECT ID from tblcourse");
$cntcourse=mysqli_num_rows($sql);

?>
 <h3 class="info"><?php echo $cntcourse;?></h3>
                      <h6>Listed Courses</h6>
                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="user-detail.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
$wer =mysqli_query($con ,"SELECT ID from tbluser");
$cntuser=mysqli_num_rows($wer);
 ?>
 <h3 class="warning"><?php echo $cntuser;?></h3>
                      <h6>Register Users</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                 <a href="all-application.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
$ter =mysqli_query($con ,"SELECT ID from tbladmapplications");
$cntapp=mysqli_num_rows($ter);
?>

<h3 class="success"><?php echo $cntapp ;?></h3>
                      <h6>Total Applications</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
          </div>
      <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                   <a href="pending-application.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
$rtp =mysqli_query($con ,"SELECT ID from tbladmapplications where AdminStatus is null");
$penapp=mysqli_num_rows($rtp);
?>
 <h3 class="info"><?php echo $penapp;?></h3>
                      <h6>Pending Applications</h6>
                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="selected-application.php">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
$yui =mysqli_query($con ,"SELECT ID from tbladmapplications where AdminStatus='1'");
$selapp=mysqli_num_rows($yui);
 ?>
 <h3 class="warning"><?php echo $selapp;?></h3>
                      <h6>Selected Application</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <a href="rejected-application.php"> 
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
$poi =mysqli_query($con ,"SELECT ID from tbladmapplications where AdminStatus='2'");
$rejapp=mysqli_num_rows($poi);
?>
<h3 class="success"><?php echo $rejapp ;?></h3>
                      <h6>Rejected Application</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>


          <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                  
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
<?php 
         $koi =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='B.Tech'");
        while ($row = mysqli_fetch_object($koi)) {
            $totlal=mysqli_num_rows($koi );
        }
    ?>

<h3 class="success"><?php echo $totlal ;?></h3>
                      <h6>B.Tech</h6>
                    </div>
                    <div>
         <i class="icon-file success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
             
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $aoi =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Agriculture'");
        while ($row = mysqli_fetch_object($aoi)) {
            $totlal2=mysqli_num_rows($aoi );
        }
    ?>
 <h3 class="warning"><?php echo $totlal2;?></h3>
                      <h6>Agriculture</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
              
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $zoi =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='MCA'");
        while ($row = mysqli_fetch_object($zoi)) {
            $totlal3=mysqli_num_rows($zoi );
        }
    ?>
 <h3 class="warning"><?php echo $totlal3;?></h3>
                      <h6>MCA</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              </div>
            </div>
          </div>












          
          
          
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
          
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $msc =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='MSC'");
        while ($row = mysqli_fetch_object($msc)) {
            $totlal4=mysqli_num_rows($msc);
        }
    ?>
 <h3 class="warning"><?php echo $totlal4;?></h3>
                      <h6>MSC</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
         
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $civ =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Civil Engineering'");
        while ($row = mysqli_fetch_object($civ)) {
            $totlal5=mysqli_num_rows($civ);
        }
    ?>
 <h3 class="warning"><?php echo $totlal5;?></h3>
                      <h6>Civil Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
            
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $mec =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Mechanical Engineering'");
        while ($row = mysqli_fetch_object($mec)) {
            $totlal6=mysqli_num_rows($mec);
        }
    ?>
 <h3 class="warning"><?php echo $totlal6;?></h3>
                      <h6>Mechanical Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
             
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $meca =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Mechatronics Engineering'");
        while ($row = mysqli_fetch_object($meca)) {
            $totlal7=mysqli_num_rows($meca);
        }
    ?>
 <h3 class="warning"><?php echo $totlal7;?></h3>
                      <h6>Mechatronics Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
             
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $aut =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Automobile Engineering'");
        while ($row = mysqli_fetch_object($aut)) {
            $totlal8=mysqli_num_rows($aut);
        }
    ?>
 <h3 class="warning"><?php echo $totlal8;?></h3>
                      <h6>Automobile Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
            
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $che =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Chemical Engineering'");
        while ($row = mysqli_fetch_object($che)) {
            $totlal9=mysqli_num_rows($che);
        }
    ?>
 <h3 class="warning"><?php echo $totlal9;?></h3>
                      <h6>Chemical Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $fd =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Food Technology'");
        while ($row = mysqli_fetch_object($fd)) {
            $totlal10=mysqli_num_rows($fd);
        }
    ?>
 <h3 class="warning"><?php echo $totlal10;?></h3>
                      <h6>Food Technology</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $ece =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Electronics and Communication Engineering'");
        while ($row = mysqli_fetch_object($ece)) {
            $totlal11=mysqli_num_rows($ece);
        }
    ?>
 <h3 class="warning"><?php echo $totlal11;?></h3>
                      <h6>Electronics and Communication Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $cs =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Computer Science & Engineering'");
        while ($row = mysqli_fetch_object($cs)) {
            $totlal12=mysqli_num_rows($cs);
        }
    ?>
 <h3 class="warning"><?php echo $totlal12;?></h3>
                      <h6>Computer Science & Engineering</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $it =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='Information Technology'");
        while ($row = mysqli_fetch_object($it)) {
            $totlal13=mysqli_num_rows($it);
        }
    ?>
 <h3 class="warning"><?php echo $totlal13;?></h3>
                      <h6>Information Technology</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $bsc =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='B.Sc'");
        while ($row = mysqli_fetch_object($bsc)) {
            $totlal14=mysqli_num_rows($bsc);
        }
    ?>
 <h3 class="warning"><?php echo $totlal14;?></h3>
                      <h6>B.Sc</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                    <?php 
         $mba =mysqli_query($con ,"SELECT * from tbladmapplications WHERE CourseApplied='MBA'");
        while ($row = mysqli_fetch_object($mba)) {
            $totlal15=mysqli_num_rows($mba);
        }
    ?>
 <h3 class="warning"><?php echo $totlal15;?></h3>
                      <h6>MBA</h6>
                    </div>
                    <div>
    <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-text-danger" role="progressbar" style="width: 100%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                </a>
              </div>
            </div>
          </div>


          <!--count of each course applied-->
          
          <!--end count of each course applied-->

          </div>
        </div>
        </div></div></div>
       

</body>
</html>
<?php } ?>