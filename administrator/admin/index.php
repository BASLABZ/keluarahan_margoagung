<?php 
    error_reporting(0);
      include '../koneksi/koneksi.php';
      session_start();
      if (isset($_GET['logout'])) {
          session_destroy();
             echo "<script> alert('Anda Yakin Ingin Keluar'); location.href='../index.php' </script>";exit;}
            if (isset($_SESSION['level']))
            { if ($_SESSION['level'] == "admin")
               { ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">
  <title>Admin Kelurahan Margoagung</title>
  <link href="../assets_admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="../assets_admin/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="../assets_admin/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="../assets_admin/js/iCheck/skins/square/blue.css" rel="stylesheet">
  <link href="../assets_admin/css/clndr.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets_admin/js/morris-chart/morris.css">
  <link href="../assets_admin/css/style.css" rel="stylesheet">
  <link href="../assets_admin/css/style-responsive.css" rel="stylesheet">
  <link href="../assets_admin/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="../assets_admin/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets_admin/js/data-tables/DT_bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../assets_admin/jjs/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
</head>
<body class="sticky-header">
<section>
    <!-- menu kiri -->
   <?php include 'menukiri.php'; ?>
    <div class="main-content" >
    <!-- menu atas -->
        <?php include 'menuatas.php'; ?>
        <div class="wrapper">
        <!-- main kontent tengah -->
        <?php 
          if(empty( $_GET['pos']) ||  $_GET['pos'] ==""){
          $_GET['pos'] = "kontentengah.php";
          }
          if(file_exists( $_GET['pos'].".php")){
          include  $_GET['pos'].".php";
          }else {
          include"kontentengah.php";
          }   
        ?> 
        </div>
        <footer>
            <?php echo date('Y'); ?> &copy; Admin Kelurahan Margoagung Sleman
        </footer>
    </div>
</section>
<script src="../assets_admin/js/jquery-1.10.2.min.js"></script>
<script src="../assets_admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../assets_admin/js/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets_admin/js/bootstrap.min.js"></script>
<script src="../assets_admin/js/modernizr.min.js"></script>
<script src="../assets_admin/js/jquery.nicescroll.js"></script>
<script src="../assets_admin/js/easypiechart/jquery.easypiechart.js"></script>
<script src="../assets_admin/js/easypiechart/easypiechart-init.js"></script>
<script src="../assets_admin/js/sparkline/jquery.sparkline.js"></script>
<script src="../assets_admin/js/sparkline/sparkline-init.js"></script>
<script src="../assets_admin/js/iCheck/jquery.icheck.js"></script>
<script src="../assets_admin/js/icheck-init.js"></script>
<script src="../assets_admin/js/flot-chart/jquery.flot.js"></script>
<script src="../assets_admin/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="../assets_admin/js/flot-chart/jquery.flot.resize.js"></script>
<script src="../assets_admin/js/morris-chart/morris.js"></script>
<script src="../assets_admin/js/morris-chart/raphael-min.js"></script>
<script src="../assets_admin/js/calendar/clndr.js"></script>
<script src="../assets_admin/js/calendar/evnt.calendar.init.js"></script>
<script src="../assets_admin/js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="../assets_admin/js/scripts.js"></script>
<script src="../assets_admin/js/dashboard-chart-init.js"></script>
<script type="text/javascript" language="javascript" src="../assets_admin/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../assets_admin/js/data-tables/DT_bootstrap.js"></script>
<script src="../assets_admin/js/dynamic_table_init.js"></script>
<script type="text/javascript" src="../assets_admin/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../assets_admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../assets_admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<!-- <script src="../assets_admin/js/scripts.js"></script> -->
<script>
  jQuery(document).ready(function(){
         $('.wysihtml5').wysihtml5();
    });
</script>
</body>
</html>

<?php
}else if ($_SESSION['level'] == "petugas")
   {
       header('location:../petugas');
   }
}
if (!isset($_SESSION['level']))
{
  header('location:../index.php');
}
?>