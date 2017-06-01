<?php 
if(isset($_POST['login']))
{

 $username = $_POST['username'];
 $password = $_POST['password'];
 $no = 0;
 $sql="SELECT * from user where username = '$username' and password = '$password' ";
 $result = mysql_query($sql);
 while($log=mysql_fetch_array($result))
 {
    $id_user = $log['id_user'];
    $username = $log['username'];
    $password = $log['password'];
    $no++;
 }
 if($no>0)
 {
    $_SESSION['id_user'] = $id_user;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo "<script> alert('Login sukses'); location.href='index.php' </script>";exit;

 }
else
{
    echo "login gagal";
    header('Location: index.php?pos=login&wrong=1');
}
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

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <center>
                            <img src="images/logo.png" width="150" height="200">
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
