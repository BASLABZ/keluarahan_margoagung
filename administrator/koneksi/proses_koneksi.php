<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

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
    $_SESSION['nama_user'] = $data['nama_user'];
    //Penggunaan Meta Header HTTP
    if ($data['level']=='admin'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/index.php">';    
    }else if($data['level']=='petugas'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../petugas/index.php">';    
    }
    exit;
}
else 
echo "<script> alert('Proses Login Gagal Silahkan Melakukan Login Lagi');</script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';    
    exit;
?>