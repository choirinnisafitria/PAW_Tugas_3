<body style="background-color:LightCoral;">
<?php
include "koneksi.php";
$id = $_POST['id_mhs'];
$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "UPDATE tbl_149 set nama_mhs = '$nama', nim_mhs='$nim', alamat_mhs='$alamat' where id_mhs=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data mahasiswa gagal";
}else{
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}

?>
</body>