<?php
    session_start();
    include('koneksi/koneksi.php');
    if(isset($_GET['logout']))
        {   session_destroy(); header('Location: index.php');}
    if (isset($_SESSION['level']))
                {
                    if ($_SESSION['level'] == "admin")
                   {

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin :: Kelurahan Caturharjo</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/timeline.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <?php 
        if(isset($_SESSION['id_user']) &&
            isset($_SESSION['username'])) {
            include('menuatas.php');
            if(isset($_GET['pos']))
            {
                include($_GET['pos'].'.php');
            }
            else
            {
                include('content.php');
            }
        }
       
        ?>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php }else if ($_SESSION['level'] == "petugas")
   {
       header('location:petugas.php');
   }
}
if (!isset($_SESSION['level']))
{
  header('location:../index.php');
}

 ?>
