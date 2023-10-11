<?php
$sqlt = mysqli_query($kon, "select * from produksi where id='$_GET[id]'");
$rt = mysqli_fetch_array($sqlt);
?>
<a href="<?php echo "?p=input"; ?>"><button type="button" class="btn btn-add">KEMBALI</button></a>
&raquo;
<button type="button" class="btn btn-dis">PRODUKSI BESOK</button>

 <br>
 <br>
 <br>
 <?php
 echo "<table align='center' class='table1'>
  <tr>
    <th colspan='2'><h2>PRODUKSI PADA TANGGAL '$rt[tanggal]'</h2></th>
  </tr>
  <tr>
    
	<td><pre><h4>
				PERMINTAAN	         : $rt[permintaan]
				PERSEDIAAN	         : $rt[persediaan]
				P.KONDISI LAYAK		 : $rt[kondisilayak]
				PRODUKSI	         : $rt[produksi]

		
		</pre>
		<h6 align='center'>
		
	</td>
	<tr>
	<th colspan='2'></tr>
  </tr>";
 
 echo "</table>";
?>
<br>
<br>
<br>
<hr>
<hr>