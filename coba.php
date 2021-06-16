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
		<nav class="navbar navbar-default">
			<div class="navbar-header">
		     	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="#">Tabungan-Mhs</a>
		    </div>
		</nav>
		<aside class="sidebar sidebar-collapse">
			<div class="menu">
				<ul class="menu-content">
					<li>
						<a href=""><i class="fa fa-home"></i> <span>Beranda</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-user-graduate"></i> <span>Mahasiswa</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-dollar-sign"></i> <span>Tabungan</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-cog"></i> <span>Konfigurasi</span><i class="fa fa-angle-down pull-right"></i></a>
						<ul>
							<li>
								<a href="">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</aside>
		<section class="content">
			<div class="inner">
				<div class="card">
				    <h4><b>John Doe</b></h4>
				    <p>Architect & Engineer</p>
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