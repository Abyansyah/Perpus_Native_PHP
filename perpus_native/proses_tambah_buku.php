<?php 
include 'koneksi.php';
$nama_buku = $_POST['nama_buku'];
$deskripsi = $_POST['deskripsi'];
$pengarang = $_POST['pengarang'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_buku.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'foto_produk/'.$rand.'_'.$filename);
		mysqli_query($conn, "INSERT INTO buku VALUES(NULL,'$nama_buku','$deskripsi','$pengarang','$xx')");
		echo "<script>alert('Sukses menambahkan produk');location.href='tambah_buku.php';</script>";
	}else{
		echo "<script>alert('Gagal menambahkan produk');location.href='tambah_buku.php';</script>";
	}
}
?>

