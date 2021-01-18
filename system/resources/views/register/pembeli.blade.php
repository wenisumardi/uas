<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title> SIPEWANGI</title>

	<!-- Site favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{url('public/admin')}}/img/logo.jpg">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('public/login')}}/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/login')}}/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/login')}}/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<h4>SIPEWANGI</h4>
				</a>
			</div>
			<div class="login-menu">
				<ul>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{url('public/login')}}/vendors/images/foto2.jpeg" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Register Pembeli </h2>
						</div>
						<form action="{{url('storepembeli')}}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Masukan Nama Lengkap Anda" name="nama_lengkap">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>

							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Masukan Username Anda" name="username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>

							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" placeholder="Masukan Password Anda" name="password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>


							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Masukan Alamat Lengkap Anda" name="alamat">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>

							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Masukan Nomor Telp Anda" name="no_hp_pembeli">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>

							<div class="input-group custom">
								<input type="file" class="form-control form-control-lg" name="poto">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<button class="btn btn-primary btn-lg btn-block"> Daftar</button>
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{url('public/login')}}/vendors/scripts/core.js"></script>
	<script src="{{url('public/login')}}/vendors/scripts/script.min.js"></script>
	<script src="{{url('public/login')}}/vendors/scripts/process.js"></script>
	<script src="{{url('public/login')}}/vendors/scripts/layout-settings.js"></script>
</body>
</html>