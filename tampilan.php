<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>DAFTAR CUTI</title>
  </head>
  <body>
    <h1>DAFTAR CUTI</h1>

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

?>
<table class="table table-success">
    <tr class="table-success">
        <td class="text-dark font-weight-bold"> NIP </td>
        <td class="text-dark font-weight-bold"> NAMA </td>
        <td class="text-dark font-weight-bold"> JABATAN </td>
		<td class="text-dark font-weight-bold"> BAGIAN </td>
		<td class="text-dark font-weight-bold"> PENGAJUAN CUTI </td>
		<td class="text-dark font-weight-bold"> SISA CUTI </td>
    </tr>
    <?php 
        $query=mysqli_query($koneksi,"SELECT * FROM cuti");
        while ($cuti_karyawan=mysqli_fetch_array($query))
        {
        ?>
    <tr class="table-secondary">
		<td><?php echo $cuti_karyawan['nip'];?></td>
        <td><?php echo $cuti_karyawan['nama'];?></td>
		<td><?php echo $cuti_karyawan['jabatan'];?></td>
		<td><?php echo $cuti_karyawan['bagian'];?></td>
		<td><?php echo $cuti_karyawan['pengajuan_cuti'];?></td>
        <td><?php echo $cuti_karyawan['sisa_cuti'];?></td>
    </tr>

        <?php } ?>
		
</table>
	<tr>
	<td><a class="btn btn-primary" href="input.php" role="button">kembali</a><td>
	</tr>
</html>