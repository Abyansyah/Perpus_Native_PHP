<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        h3{
            text-align: center;
            margin-top: 30px;
        }
    </style>

</head>
<body>

    <h3>
        Tampil Siswa
    </h3>
    
        <div class="container">
        <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA SISWA</th><th>TANGGAL LAHIR</th>
                <th>ALAMAT</th><th>GENDER</th>
                <th>USERNAME</th><th>KELAS</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;?>
<tr>              <td><?=$no?></td><td><?=$data_siswa['nama_siswa']?></td> <td><?=$data_siswa['tanggal_lahir']?></td> <td><?=$data_siswa['alamat']?></td><td><?=$data_siswa['gender']?></td> <td><?=$data_siswa['username']?></td> <td><?=$data_siswa['nama_kelas']?></td> <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a> | <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
        </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>