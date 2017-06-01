<?php 
	$judul_profil = $_POST['judul_profil'];
	$deskripsi = $_POST['editor1'];

	if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
		$fileName = $_FILES['gambar']['name'];
		$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);

	if ($move) {
		$query = mysql_query("INSERT into profil values('','$judul_profil',NOW(),'$deskripsi','$fileName')");
		# code...
	}

		# code...
	}else{
		$query = mysql_query("INSERT into profil values('','$judul_profil',NOW(),'$deskripsi','')");
		# code...
	}
	if ($query) {
		echo "<script> alert('Terimakasih Data Berhasil Di Inputkan');
		location.href='index.php?pos=daftarprofil' </script>";exit;
		# code...
	}else{
		echo "<script> alert('Data Gagal Masuk!!');
		location.href='index.php?pos=tambah_profil' </script>";exit;

	}
	
 ?>