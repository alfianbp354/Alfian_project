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
<center><img src="pssi.png" alt="" height="150px"></center>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table">
<?php
include '../model/database.php';
$db = new database();
?>

<center>
<h1>SELEKSI TIMNAS GARUDA SELECT</h1>
<h2></h2>
<h3>Data Pemain Timnas yang Terpilih</h3>
</center><br>

<center>
<a href="input.php">Input Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Asal</th>
        <th>Lulusan</th>
        <th>Posisi</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['umur']; ?></td>
        <td><?php echo $x['asal']; ?></td>
        <td><?php echo $x['lulusan']; ?></td>
        <td><?php echo $x['posisi']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
            <a href="../controller/proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    </center>
    <?php
    }
    ?>
    </div>
				</div>
			</div>
		</div>
	</div>
    </table>
        <div class="row justify-content-center">
		<a href="logout.php" class="btn btn-link">Logout</a>

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