<?php

$koneksi=mysqli_connect("localhost","root","","dbnhs");
$hasil=mysqli_query($koneksi,"select*from customers order by
customer Number desc");//menampilkandaribesarkekecil
echo"<table>
<tr>
<th>customer Number</th>
<th>customer Name</th>
<th>phone</th>
<th>addressLine1</th>
<th>city</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
echo"<tr>
<td>".$data['customerNumber']."</td>
<td>".$data['customerName']."</td>
<td>".$data['phone']."</td>
<td>".$data['addressLine1']."</td>
<td>".$data['city']."</td>
</tr>
</body>
</html>";
}
?>