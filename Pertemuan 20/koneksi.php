<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//add mahasiswa
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $insert = mysqli_query($conn, "insert into tblmhs (nim,nama,email,jurusan,alamat) values('$nim','$nama','$email','$jurusan','$alamat')");
    if ($insert) {
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }
}

//update mahasiswa
if (isset($_POST['updatemhs'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $idu = $_POST['id'];
    $queryupdate = mysqli_query($conn, "update tblmhs set nim = '$nim', nama='$nama', email ='$email', jurusan ='$jurusan', alamat ='$alamat' where id ='$idu'");

    if ($queryupdate) {
        //if berhasil
        header('location:index.php');
    } else {
        //kalau gagal
        header('location:index.php');
    }
}

//Delete mahasiswa
if (isset($_POST['deletemhs'])) {
    $idu = $_POST['id'];

    $queryupdate = mysqli_query($conn, "delete from tblmhs where id = '$idu'");

    if ($queryupdate) {
        //if berhasil
        header('location:index.php');
    } else {
        //kalau gagal
        header('location:index.php');
    }
}

//searching
if (isset($_POST['cari'])) {
    $cari = cari($_POST["keyword"]);
}


?>