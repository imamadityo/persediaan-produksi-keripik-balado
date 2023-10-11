<?php	
        $sqlmtn = mysqli_query($kon, "SELECT * from produksi order by permintaan desc");
		$rmtn = mysqli_fetch_array($sqlmtn);//permintaan naik

		$sqlmtt = mysqli_query($kon, "SELECT * from produksi order by permintaan asc");
		$rmtt = mysqli_fetch_array($sqlmtt);//permintaan turun

		$sqlsdb = mysqli_query($kon, "SELECT * from produksi order by persediaan desc");
		$rsdb = mysqli_fetch_array($sqlsdb);//persediaan terbesar

		$sqlsds = mysqli_query($kon, "SELECT * from produksi order by persediaan asc");
		$rsds = mysqli_fetch_array($sqlsds);//persediaan terkecil

		$sqlsda = mysqli_query($kon, "SELECT * from produksi order by kondisilayak desc");
		$rsda = mysqli_fetch_array($sqlsda);//kondisi layak jual

		$sqlsdf = mysqli_query($kon, "SELECT * from produksi order by kondisilayak asc");
		$rsdf = mysqli_fetch_array($sqlsdf);//kondisi layak jual
		
		$sqlsdb = mysqli_query($kon, "SELECT * from produksi order by produksi desc");
		$prob = mysqli_fetch_array($sqlsdb);//persediaan terbesar

		$sqlsds = mysqli_query($kon, "SELECT * from produksi order by produksi asc");
		$prot = mysqli_fetch_array($sqlsds);//persediaan terkecil
?>
<br>
<a href="<?php echo "?p=input"; ?>"><button type="button" class="btn btn-add">KEMBALI</button></a>
&raquo;
<button type="button" class="btn btn-dis">INPUT DATA</button>
<div class="card">
<div class="kepalacard">TAMBAH DATA KERUPUK</div>
<div class="isicard" style="text-align:center;">
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
             
        <input type="text" name="permintaan" id="permintaan" placeholder="Permintaan" />
        <input type="text" name="persediaan" id="persediaan" placeholder="Persediaan" />
        <input type="text" name="kondisilayak" id="kondisilayak" placeholder="P.KondisiLayak" />
        <input type="submit" name="simpan" id="simpan" value="SIMPAN DATA" />
     
</form>
<?php
if($_POST["simpan"]){
    
		$mintaanmax = (($_POST[permintaan]-$rmtt["permintaan"])/($rmtn["permintaan"]-$rmtt["permintaan"]));
		$mintaanmin = (($rmtn["permintaan"]-$_POST[permintaan])/($rmtn["permintaan"]-$rmtt["permintaan"]));
		$sediaanmax = (($_POST[persediaan]-$rsds["persediaan"])/($rsdb["persediaan"]-$rsds["persediaan"]));
		$sediaanmin = (($rsdb["persediaan"]-$_POST[persediaan])/($rsdb["persediaan"]-$rsds["persediaan"]));
		$layakmax = (($_POST[kondisilayak]-$rsdf["kondisilayak"])/($rsda["kondisilayak"]-$rsdf["kondisilayak"]));
		$layakmin = (($rsda["kondisilayak"]-$_POST[kondisilayak])/($rsda["kondisilayak"]-$rsdf["kondisilayak"]));
		
		$rule1 = min($mintaanmin,$sediaanmin,$layakmin);
		$rule2 = min($mintaanmin,$sediaanmin,$layakmax);
		$rule3 = min($mintaanmin,$sediaanmax,$layakmin);
		$rule4 = min($mintaanmin,$sediaanmax,$layakmax);
		$rule5 = min($mintaanmax,$sediaanmin,$layakmin);
		$rule6 = min($mintaanmax,$sediaanmin,$layakmax);
		$rule7 = min($mintaanmax,$sediaanmax,$layakmin);
		$rule8 = min($mintaanmax,$sediaanmax,$layakmax);
		
		$z1 = ($prob["produksi"] -(($prob["produksi"] - $prot["produksi"]) * $rule1));
		$z2 = ($prob["produksi"] -(($prob["produksi"] - $prot["produksi"]) * $rule2));
		$z3 = ($prob["produksi"] -(($prob["produksi"] - $prot["produksi"]) * $rule3));
		$z4 = ($prob["produksi"] -(($prob["produksi"] - $prot["produksi"]) * $rule4));
		$z5 = ($prot["produksi"] +(($prob["produksi"] - $prot["produksi"]) * $rule5));
		$z6 = ($prot["produksi"] +(($prob["produksi"] - $prot["produksi"]) * $rule6));
		$z7 = ($prot["produksi"] +(($prob["produksi"] - $prot["produksi"]) * $rule7));
		$z8 = ($prot["produksi"] +(($prob["produksi"] - $prot["produksi"]) * $rule8));

		$a1 = ($rule1 * $z1)+($rule2 * $z2)+($rule3 * $z3)+($rule4 * $z4)+($rule5 * $z5)+($rule6 * $z6)+($rule7 * $z7)+($rule8 * $z8);
		$a2 = $rule1 + $rule2 + $rule3 + $rule4 + $rule5 + $rule6 + $rule7 + $rule8;
		$hasil = $a1/$a2;

	include "koneksi.php";
$sqlt = mysqli_query($kon, "insert into produksi(idadmin, permintaan, persediaan,  kondisilayak, produksi, tanggal) values ('$ra[idadmin]','$_POST[permintaan]','$_POST[persediaan]','$_POST[kondisilayak]','$hasil', NOW())");

$sqlt = mysqli_query($kon, "insert into maxmin(permintaanmax,permintaanmin,persediaanmax,persediaanmin,kondisilayakmax,kondisilayakmin) values ('$mintaanmax','$mintaanmin','$sediaanmax','$sediaanmin','$layakmax','layakmin')");   
   
$sqlt = mysqli_query($kon, "insert into rule(rule1,rule2,rule3,rule4,rule5,rule6,rule7,rule8) values ('$rule1','$rule2','$rule3','$rule4','$rule5','$rule6','$rule7','$rule8')"); 
   
$sqlt = mysqli_query($kon, "insert into iterasi(it1,it2,it3,it4,it5,it6,it7,it8) values ('$z1','$z2','$z3','$z4','$z5','$z6','$z7','$z8')");   

  if($sqlt){
  	echo "Kategori Berhasil Disimpan";
  }else{
    echo "Gagal Menyimpan";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=hasil'>";
}
?>
</div>
</div>
<br>