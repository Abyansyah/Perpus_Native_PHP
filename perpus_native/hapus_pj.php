<?php
    if($_GET['id_peminjaman_buku']){
        include "koneksi.php";
        $hapus="delete from peminjaman_buku where id_peminjaman_buku='".$_GET['id_peminjaman_buku']."'";
        $hapus1="delete from detail_peminjaman_buku where id_peminjaman_buku='".$_GET['id_peminjaman_buku']."'";
        $hapus2="delete from pengembalian_buku where id_peminjaman_buku='".$_GET['id_peminjaman_buku']."'";

        $qry_hapus=mysqli_query($conn,$hapus);
        $qry_hapus1=mysqli_query($conn,$hapus1);
        $qry_hapus2=mysqli_query($conn,$hapus2);



    if($qry_hapus && $qry_hapus1 && $qry_hapus2){
        echo "<script>alert('Sukses hapus history buku');location.href='histori_peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus siswa');location.href='histori_peminjaman.php';</script>";
}
}
?>