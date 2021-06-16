<?php
ob_start();

session_start();
if (!isset($_SESSION['id_admin'])) {
   header('location: login.php');
}
define('BASEPATH', dirname(__FILE__));

include('koneksi.php');
include('konek.php');
include('fungsi.php');
?>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aplikasi Tabungan Mahaiswa</title>
<head>
	<link rel="stylesheet" href="style/bootstrap.css" />
	<link rel="stylesheet" href="style/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" href="fontawesome/css/all.css" />
	<link rel="stylesheet" href="style/css/admin.css" />
	<style>
	tr 
	{
		cursor:default;
	}
</style>
</head>
<body>
	<div class="wrapper">
		<?php include"menu.php"; ?>

		<section class="content">
			<div class="inner">
				<div class="card">
				    <?php include"content.php"; ?>
				 </div>
			</div>
		</section>
	</div>

	
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script src="style/jquery.dataTables.min.js"></script>	
	<script src="style/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="style/rupiah.js"></script>
	<script>
		$('#example').DataTable();
		$(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
		setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$(document).on('click', '#mahasiswa', function (e) {
				document.getElementById("npm").value = $(this).attr('data-npm');
				document.getElementById("nama").value = $(this).attr('data-nama');
				$('#modal').modal('hide');
			});	
			
		});

		$(".menu li > a").click(function(e) {
			$(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
		});

		$(window).bind("load resize", function() {
			if ($(this).width() < 768) {
				$(".sidebar-collapse").addClass("collapse");
			}else{
				$(".sidebar-collapse").removeClass("collapse");
				$(".sidebar-collapse").removeAttr("style");
			}
		})
	</script>
</body>
</html>