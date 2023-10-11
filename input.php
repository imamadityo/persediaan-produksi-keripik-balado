<a href="<?php echo "?p=input"; ?>"><button type="button" class="btn btn-dis btn btn-add">PRODUKSI</button></a>
&raquo;
<a href="<?php echo "?p=inputdata"; ?>"><button type="button" class="btn btn-add">TAMBAH PRODUKSI</button></a>

<h4 align="center">	

<?php  echo "<table align='center' class='table1'>
  <tr>
    <th>NO</th>
    <th>TANGGAL</th>
    <th>PERMINTAAN</th>
    <th>PERSEDIAAN</th>
    <th>P.LayakJual</th>
    <th>PRODUKSI</th>
    <th>AKSI</th>
  </tr>";
$sqlt = mysqli_query($kon, "select * from produksi"); 
$no = 1;
while($rt = mysqli_fetch_array($sqlt)){
  echo "<tr>
    <td align='center'>$no</td>
    
    <td align='center'>
		$rt[tanggal]
	</td>

	<td align='center'>
		$rt[permintaan]
	</td>

	<td align='center'>
		$rt[persediaan]
	</td>

	<td align='center'>
		$rt[kondisilayak]
	</td>

	<td align='center'>
	    $rt[produksi]
	</td>
    
     <td align='center'>
	<div class='kakicard'>
				<a href='?p=detail&id=$rt[id]'><button type='button' class='btn btn-add2'>DETAIL</button></a>
				
			</div></td>
			<tr>
			<th colspan='7'>
			</tr>
  </tr>";
  $no++;
} 
echo "</table>";
?> 
