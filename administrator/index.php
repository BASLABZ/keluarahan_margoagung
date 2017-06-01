
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/png">
    <title>Login SIM Keluarahan Margoagung</title>
    <link href="assets_admin/css/style.css" rel="stylesheet">
    <link href="assets_admin/css/style-responsive.css" rel="stylesheet">
</head>
<body class="login-body">
<div class="container">
    <form class="form-signin" action="koneksi/proses_koneksi.php" method="POST">
        <div class="form-signin-heading text-center">
            <center><img src="logo/logo.png" class="img-responsive" style="width:150px; " /></center>
        </div>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Username" autofocus name="username">
            <input type="password" class="form-control" placeholder="Password" name="password">

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i> Masuk
            </button>
        </div>
    </form>
</div>
<script src="assets_admin/js/jquery-1.10.2.min.js"></script>
<script src="assets_admin/js/bootstrap.min.js"></script>
<script src="assets_admin/js/modernizr.min.js"></script>
</body>
</html>
