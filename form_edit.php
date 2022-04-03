<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Form Tambah Mahasiswa</title>
</head>
<body style="background-color:LightCoral;">
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_149 where id_mhs=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1>Form Tambah Mahasiswa</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="post" action="update.php">
        <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']?>">
        Nama Mahasiswa : <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs']?>"><br/>
        NIM Mahasiswa : <input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs']?>"><br/>
        Alamat Mahasiswa : <input type="text" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>"><br/>
        <button type="submit">Update</button>
    </form>
<?php }?>
<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>