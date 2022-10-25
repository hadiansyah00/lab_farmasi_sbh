<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets-new/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->

	<script src="/assets-new/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['/assets-new/css/fonts.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets-new/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets-new/css/azzara.min.css">
</head>

<body class="login">


	<div class="wrapper wrapper-login">

		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sistem Informasi Inventory</h3>


			<?= $this->session->flashdata('pesan'); ?>
			<?= form_open('', ['class' => 'user']); ?>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
					<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group form-floating-label">
					<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="show-password">
					<i class="flaticon-interface"></i>
				</div>

			</div>
			<div class="row form-sub m-0">

				<!-- <a href="" class="link float-right">Forget Password ?</a> -->
				<a class="small" href="<?= base_url('register') ?>">Create Account!</a>
				<a class="small" href="<?= base_url('h1') ?>">Halaman 1!</a>
			</div>
			<div class="form-action mb-4">
				<button type="submit" href="#" class="btn btn-primary btn-rounded btn-login float-lg-right">Sign In</button>
			</div>

		</div>
		</form>
	</div>

	</div>
	<script src="/assets-new/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets-new/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets-new/js/core/popper.min.js"></script>
	<script src="/assets-new/js/core/bootstrap.min.js"></script>
	<script src="/assets-new/js/ready.js"></script>
</body>

</html>
