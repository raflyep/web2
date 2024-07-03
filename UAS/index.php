<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Klasemen Piala EURO 2024</h2>
<table id="datatablesSimple" class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Tim</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>
        </tr>
    </thead>
    <?php

$i = 1;
$result = mysqli_query($conn, "select * from tblMhs");
while ($row = mysqli_fetch_assoc($result)) {
    $tim = $row['tim'];
    $menang = $row['menang'];
    $seri = $row['seri'];
    $kalah = $row['kalah'];
    $point = $row['point'];
    ?>
    <tbody id="myTable">
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $tim; ?></td>
            <td><?= $menang; ?></td>
            <td><?= $seri; ?></td>
            <td><?= $kalah; ?></td>
            <td><?= $poin; ?></td>
         
    </tbody>
    </table>
    <?
};
?>
</body>
</html>
