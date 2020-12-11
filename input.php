<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MASUKAN DATA</title>
  </head>
  <body>
    <h1>MASUKAN DATA</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
<?php
include "koneksi.php";
if (isset ($_POST['save'])) {
	$NIP=$_POST['NIP'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
	$bagian=$_POST['bagian'];
	$pengajuan_cuti=$_POST['pengajuan_cuti'];
	$sisa_cuti=$_POST['sisa_cuti'];
$query=mysqli_query($koneksi, "insert into cuti (NIP,nama,jabatan,bagian,pengajuan_cuti,sisa_cuti)
value('$NIP','$nama','$jabatan','$bagian','$pengajuan_cuti','$sisa_cuti')");
if ($query){
    header("location:tampilan.php");
}else{
    echo mysqli_error ($koneksi);
}
}
?>
<form method="POST" action="">
<table class="table table-$red-500">
	<tr>
        <td>NIP</td>
	<td><input type="varchar" name="NIP"></td>
    </tr>
    <tr>
        <td>Nama</td>
	<td><input type="varchar" name="nama"></td>
    </tr>
	<tr>
        <td>Jabatan</td>
	<td><input type="varchar" name="jabatan"></td>
    </tr>
	<tr>
        <td>Bagian</td>
	<td><input type="varchar" name="bagian"></td>
    </tr>
	<tr>
        <td>Pengajuan Cuti</td>
	<td><input type="int" name="pengajuan_cuti"></td>
    </tr>
	<tr>
        <td>Sisa Cuti</td>
	<td><input type="int" name="sisa_cuti"></td>
    </tr>
	<tr>
        <td><input class="btn btn-secondary" type="submit" name="save" value="simpan"></td> 
	</tr>


</table>
</form>
</html>