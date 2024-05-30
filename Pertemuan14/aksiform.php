<?php
//koneksidenganbasisdata
include'koneksi.php';
//menampungdatayangdikirimoleh form
echo$kode=$_POST['kode'];
echo$jumlah=$_POST['jumlah'];
//menginputdatakedatabase
mysqli_query($koneksi,"callupdate_datatable('$kode','$jumlah')");
//mengalihkanhalamankembalikeindex.php
header("location:form.php");
?>