<?php 
if(isset($_POST['login']))
{

session_start();
include 'admin/koneksi/koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);


$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

if ($password == $data['password'])
{
echo "<script> alert('Login Sukses');</script>";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['id_user'] = $data['id_user'];

    //Penggunaan Meta Header HTTP
    if ($data['level']=='admin'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin/index.php">';    
    }else if($data['level']=='petugas'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=petugas/index.php">';    
    }
    exit;
}
else 
echo "<script> alert('Proses Login Gagal Silahkan Melakukan Login Lagi');</script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';    
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login User</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br><br><br><br>
                <center><h4>
                    <b>
                    Silahkan Login Dibawah ini</b></h4>
                </center>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <center>
                            <img src="admin/images/logo.png" width="150" height="200">
                        </center>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                             <button class="btn btn-primary" name="login">Login</button>
                             <button class="btn btn-warning" type="reset">Batal</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
