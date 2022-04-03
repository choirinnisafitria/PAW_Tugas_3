<body style="background-color:LightCoral;">
<?php
include "koneksi.php";

$nama = $_POST['nama_mhs'];
$nim = $_POST['nim_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_149 VALUES(null,'$nama','$nim','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data mahasiswa gagal";
}else{
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href='data_mhs.php'>Show data</a>";
}

?>
</body>