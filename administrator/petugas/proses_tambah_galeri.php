<?php 
	$nama_galeri = $_POST['nama_galeri'];
	

	if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
		$fileName = $_FILES['gambar']['name'];
		$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);

	if ($move) {
		$query = mysql_query("INSERT into galeri values('','$nama_galeri','$fileName')");
		# code...
	}

		# code...
	}else{
		$query = mysql_query("INSERT into galeri values('','$nama_galeri','')");
		# code...
	}
	if ($query) {
		echo "<script> alert('Terimakasih Data Berhasil Di Inputkan');
		location.href='index.php?pos=daftargaleri' </script>";exit;
		# code...
	}else{
		echo "<script> alert('Data Gagal Masuk!!');
		location.href='index.php?pos=tambah_galeri' </script>";exit;

	}
	
 ?>