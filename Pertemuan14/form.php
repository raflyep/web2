<?php
//koneksidatabase
include'koneksi.php';
?>
<html>
<body>
<h2>Tabel1</h2>
<table style=>
<tr>
<th>kode</th>
<th>namabarang</th>
<th>jumlah</th>
</tr>
<?php
$tabel1=mysqli_query($koneksi,"select* from tabel_1");
While($dataku=mysqli_fetch_row($tabel1))
echo"<tr>
<td>$dataku[0]</td>
<td>$dataku[1]</td>
<td>$dataku[2]</td>
</tr>";
?>
</table>
<h2>Tabel2</h2>
<table style=>
<tr>
<th>kode</th>
<th>namabarang</th>
<th>jumlah</th>
</tr>

<?php
$tabel2=mysqli_query($koneksi,"select* from tabel_2");
While($data2=mysqli_fetch_row($tabel2))
echo"<tr>
<td>$data2[0]</td>
<td>$data2[1]</td>
<td>$data2[2]</td>
</tr>";
?>
</table>
<h2>kirimbarang</h2>
<form action="aksiform.php"method="post">
<label>kode barang:</label>
<select name="kode">
<?php
$tabel1=mysqli_query($koneksi,"select *from tabel_2");
While($data1=mysqli_fetch_row($tabel1))
echo'<optionvalue="'.$data1[0].'">'.$data1[0].'/'.$data1[1].'</option>';
?>
</select><br>
<label>jumlah:</label>
<input type="number"name="jumlah"></br>
<input type="submit"value="kirim">
</form>
</body>
</html>
