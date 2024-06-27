<?php

session_start();
require 'koneksi.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form - Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .container-fluid {
            width: 100%;
            max-width: 1000px;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #ffffff, #f1f1f1);
        }

        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            text-align: justify;
            font-weight: bold;
        }

        .table thead {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
        }

        .btn-info {
            margin-right: 10px;
        }
    </style>

<body>
    <div class="container-fluid px-5">
        <div class="card mb-5">
            <div class="card-header">

                <h2>Form - Mahasiswa</h2>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                    Input Data Mahasiswa
                </button>
                <a href="logout.php" class="btn btn-danger">logout</a><br><br>
                <input class="form-control" id="myInput" type="text" placeholder="Search.." >

            </div>
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama Mahasiswa</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <?php

                $i = 1;
                $result = mysqli_query($conn, "select * from tblMhs");
                while ($row = mysqli_fetch_assoc($result)) {
                    $idu = $row['id'];
                    $nim = $row['nim'];
                    $nama = $row['nama'];
                    $email = $row['email'];
                    $jurusan = $row['jurusan'];
                    $alamat = $row['alamat'];
                    ?>
                    <tbody id="myTable">
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $nim; ?></td>
                            <td><?= $nama; ?></td>
                            <td><?= $email; ?></td>
                            <td><?= $jurusan; ?></td>
                            <td><?= $alamat; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#edit<?= $idu; ?>">
                                    Edit
                                </button>

                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete<?= $idu; ?>">
                                    Delete
                                </button>

                            </td>
                    </tbody>

            </div>
            <script>
                $(document).ready(function () {
                    $("#myInput").on("keyup", function () {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").filter(function () {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>
            <!-- Edit Modal -->
            <div class="modal fade" id="edit<?= $idu ?>">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data Mahasiswa </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <form method="post">
                            <div class="modal-body">
                                <input type="text" name="nim" value="<?= $nim; ?>" class="form-control" placeholder="nim">
                                <br>
                                <input type="text" name="nama" value="<?= $nama; ?>" class="form-control"
                                    placeholder="Nama Mahasiswa">
                                <br>
                                <input type="email" name="email" value="<?= $email; ?>" class="form-control"
                                    placeholder="email">
                                <br>
                                <input type="jurusan" name="jurusan" value="<?= $jurusan; ?>" class="form-control"
                                    placeholder="Jurusan">
                                <br>
                                <input type="alamat" name="alamat" value="<?= $alamat; ?>" class="form-control"
                                    placeholder="null">
                                <br>
                                <input type="hidden" name="id" value="<?= $idu; ?>">
                                <br>
                                <button type="Submit" class="btn btn-primary" name="updatemhs">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="delete<?= $idu ?>">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Hapus Data Mahasiswa </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <form method="post">
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus <?= $nama; ?> ?
                                <input type="hidden" name="id" value="<?= $idu; ?>">
                                <br>
                                <br>
                                <button type="Submit" class="btn btn-danger" name="deletemhs">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                }
                ;

                ?>
</body>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Input Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" name="nim" placeholder="Masukkan Nim" class="form-control">
                    <br>
                    <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
                    <br>
                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control">
                    <br>
                    <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan">
                    <br>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
                    <br>
                    <button type="Submit" class="btn btn-info" name="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

</html>