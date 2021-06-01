<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body{
   background-image: url("garuda.png");
   background-repeat: no-repeat;
   background-size:cover
}
</style>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table">
<div>
<center>
<img src="pssi.png" alt=""><br><br>
<h1>Input Data Baru</h1>
<h1>Seleksi Timnas Garuda Select</h1><br><br>
</center>
</div>

<form action="../controller/proses.php?aksi=tambah" method="post">

<center>
<table class="table">
    <tr class="aa">
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="nama"></td>
    </tr>
    <tr class="table-info">
        <td>Umur</td>
        <td><input type="number" name="umur" placeholder="umur"></td>
    </tr>
    <tr class="table-info">
        <td>Asal</td>
        <td><input type="text" name="asal" placeholder="asal"></td>
    </tr>
    <tr class="table-info">
        <td>Lulusan</td>
        <td><input type="text" name="lulusan" placeholder="lulusan"></td>
    </tr>
    <tr class="table-info">
        <td>Posisi</td>
        <td><input type="text" name="posisi" placeholder="posisi"></td>
    </tr>
    <tr class="table-info">
        <td></td>
        <td><input type="submit" value="Simpan" class="ab"></td>
    </tr>
</table>
</center>
</form>
</body>
</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>