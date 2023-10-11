<?php
  session_start();
  include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="imam.css" type="text/css" />
<title>Halaman Administrator</title>
</head>

<body>
<?php
if(!empty($_SESSION["useradm"]) and !empty($_SESSION["passadm"])){
  $sqla = mysqli_query($kon, "select * from admin where username='$_SESSION[useradm]' and password='$_SESSION[passadm]'");
  $ra = mysqli_fetch_array($sqla);
?>
<div class="grid">
  <div class="dh12">
	<div class="container1">
		<span style="font-size:20px;cursor:pointer; padding-right:15px;" onclick="openNav()">&#9776;</span> 
		<a>DATA PRODUKSI KERIPIK BALADO MAHKOTA</a>
	</div>
  </div>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="foto/avatar1.png" width="120px" />
  <p>Selamat Datang</p>
  <h3><?php echo "$ra[nama]"; ?></h3>
  <hr><a href="<?php echo "?p=home"; ?>">Beranda</a> 
  <hr><a href="<?php echo "?p=struktur"; ?>">Profile</a> 
  <hr><a href="<?php echo "?p=input"; ?>">Input Data</a> 
  <hr><a href="<?php echo "?p=logout"; ?>">Logout</a>
  <hr>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="grid">
  <div class="dh12">
	<div class="container2">
<?php
  if($_GET["p"]=="logout"){
	include "logout.php";
  }else if($_GET["p"]=="struktur"){
	include "struktur.php";
  }else if($_GET["p"]=="sejarah"){
	include "sejarah.php";
  }else if($_GET["p"]=="input"){
	include "input.php";
  }else if($_GET["p"]=="inputdata"){
	include "inputdata.php";
  }else if($_GET["p"]=="hasil"){
  include "hasil.php";
  }else if($_GET["p"]=="detail"){
  include "detail.php";
  }else{
    include "home.php";
  }
?>
	  </div>
	</div>
  </div>
</div>
<div class="grid">
  <div class="dh12">
	<div class="container3">
	  <h6  align="center">Copyright &copy; Imam Adityo, 2022</h6>	
	</div>
  </div>
</div>
<?php
}else{
  include "login.php";
}
?>
</body>
</html>
