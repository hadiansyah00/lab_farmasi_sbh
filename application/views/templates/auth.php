<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets-new/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="assets-new/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ['assets-new/css/fonts.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets-new/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets-new/css/azzara.min.css">
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">SISFO INVENTORI</h3>

			<?= $this->session->flashdata('pesan'); ?>
			<?= form_open('', ['class' => 'user']); ?>

			<div class="login-form">
				<div class="form-group">
					<input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
					<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control form-control-user" placeholder="Password">
					<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group form-action-d-flex mb-3">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label m-0" for="rememberme">Remember Me</label>
					</div>
					<div class="form-action mb-4">
						<button type="submit" href="#" class="btn btn-primary btn-rounded btn-login float-lg-right">Sign In</button>
					</div>
				</div>
				</form>
				<!-- 				<div class="form-action">
					<a href="#" class="btn btn-primary btn-rounded btn-login">Sign In</a>
				</div> -->
				<div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="#" id="show-signup" class="link">Sign Up</a>
				</div>
			</div>
		</div>
		<?= form_close(); ?>

		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
			<div class="login-form">
				<?= $this->session->flashdata('pesan'); ?>
				<?= form_open('', ['class' => 'user']); ?>
				<div class="form-group">
					<label for="fullname" class="placeholder"><b>Username</b></label>
					<input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" id="username" name="username" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email" class="placeholder"><b>Email</b></label>
					<input value="<?= set_value('email'); ?>" type="text" id="email" name="email" type="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="passwordsignin" class="placeholder"><b>Password</b></label>
					<div class="position-relative">
						<input id="passwordsignin" name="password" type="password" class="form-control" required>
						<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="confirmpassword" class="placeholder"><b>Confirm Password</b></label>
					<div class="position-relative">
						<input id="confirmpassword" name="password2" type="password" class="form-control" required>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
						<?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="position-relative">
						<label for="no_telp" class="placeholder"><b>No Telp</b></label>
						<input value="<?= set_value('no_telp'); ?>" type="text" id="no_telp" name="no_telp" type="number" class="form-control" required>
					</div>
					<?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="row form-action">
					<div class="col-md-6">
						<a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
					</div>
					<div class="col-md-6">
						<button type="submit" href="#" class="btn btn-primary w-100 fw-bold">Sign Up</button>
					</div>
				</div>

			</div>

		</div>
	</div>
	<?= form_close(); ?>
	<script src="assets-new/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets-new/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets-new/js/core/popper.min.js"></script>
	<script src="assets-new/js/core/bootstrap.min.js"></script>
	<script src="assets-new/js/ready.js"></script>
	<script type="text/javascript" src="//themera.net/embed/themera.js?id=71769"></script>
</body>

</html>
