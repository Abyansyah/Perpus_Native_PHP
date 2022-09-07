<?php
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    $nama_walikelas=$_POST['nama_walikelas'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";

    } elseif(empty($kelompok)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } elseif(empty($nama_walikelas)){
        echo "<script>alert('nama walikelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, kelompok, nama_walikelas) value ('".$nama_kelas."','".$kelompok."','".$nama_walikelas."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='tambah_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
        }
    }
}
?>
