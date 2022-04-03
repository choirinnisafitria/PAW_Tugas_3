<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Daftar Mahasiswa</title>
</head>
<body  style="background-color:LightCoral;">
<h1>Data Mahasiswa </h1>
<a href="form_mhs.php">Tambah data</a>
<table width="90%" border="5" cellspacing="10">
    <tr style="background-color: brown;">
        <td>ID Mahasiswa</td>
        <td>Nama Mahasiswa</td>
        <td>NIM Mahasiswa</td>
        <td>Alamat Mahasiswa</td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_149";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_mhs'];?></td>
            <td><?=$row['nama_mhs'];?></td>
            <td><?=$row['nim_mhs'];?></td>
            <td><?=$row['alamat_mhs'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_mhs']?>"> Edit</a> | <a href="delete.php?id=<?=$row['id_mhs']?>"> Delete</td>
        </tr>
        <?php }
        ?> 
</table>
<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
</body>
</html>
