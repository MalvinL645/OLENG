<!DOCTYPE html>
<html>
<head>
	<!-- MEMANGGIL JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- MEMANGGIL BOOTSTRAP.JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- MEMANGGIL CUSTOM JAVASCRIPT -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/java.js"></script>

	<!-- MEMANGGIL BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">	
	<!-- MEMANGGIL FONTAWESOME BUAT ICON-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- MEMANGGIL FONT DARI GOOGLE -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<!-- TAMPILAN BUATAN -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/register.css">
	<!-- JUDUL PAGE -->
	<title>Daftar | OLENG</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col border border-dark rounded" id="one">
				<h1>DAFTAR OLENG</h1>
				<hr style="margin-bottom: 20px;">
				<!-- FORM UNTUK REGISTRASI USER -->
				<form class="form" method="post">
					<!-- ERROR JIKA FIEND INPUT ADA YANG KOSONG -->
					<div class="alert alert-warning alert-dismissible" id="hwo">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <strong>Warning!</strong> Make sure all fields are filled and try again.
        			</div>
        			<!-- end -->
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
   								<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-vcard fa-fw" aria-hidden="true"></i></span>
 						 	</div>
 						 	<input id="nama" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="nama" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
   								<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i></span>
 						 	</div>
 						 	<input id="notelp" type="text" class="form-control" placeholder="Nomor Telepon" aria-label="notelp" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
   								<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>
 						 	</div>
 						 	<input id="mail" type="email" class="form-control" placeholder="Alamat Email" aria-label="mail" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
   								<span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
 						 	</div>
 						 	<input id="pass" type="password" class="form-control" placeholder="Password" aria-label="notelp" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<hr>
				</form>
				<!-- end -->
				<!-- BUTTON UNTUK DAFTAR -->
				<div class="form-group">
					<button class="btn btn-primary" id="daftar">DAFTAR</button>
				</div>
				<!-- end -->
				<p>Dengan menekan Daftar, saya mengkonfirmasi telah menyetujui <a href="">Syarat dan Ketentuan</a>, serta <a href="">Kebijakan privasi</a> OLENG</p>
			</div>
			<div class="col"></div>
		</div>
	</div>
</body>
</html>