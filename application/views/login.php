<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company') . ' | DPTek '  . ' | ' .  $this->lang->line('login_login'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo 'dist/bootswatch/' . (empty($this->config->item('theme')) ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css' ?>"/>
	<!-- start css template tags -->
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<!-- end css template tags -->
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 login-left-container">
				<figure align="center">
					<img class="login-left-img img-fluid" src="<?php echo base_url();?>images/pos.png">
				</figure>
				<ul>
					<li>Easy</li>
					<li>Secure</li>
					<li>Reliable</li>
				</ul>
				<h1>POINT OF SALE</h1>
			</div>
			<div class="col-12 col-md-4">
				<div class="logo" align="center">
					<img class="img-logo" src="<?php echo base_url();?>images/logo.jpg">
				</div>
				<div id="login">
					<?php echo form_open('login') ?>
						<div id="container">
							<div align="center" style="color:red"><?php echo validation_errors(); ?></div>

							<?php if (!$this->migration->is_latest()): ?>
							<div align="center" style="color:red"><?php echo $this->lang->line('common_migration_needed', $this->config->item('application_version')); ?></div>
							<?php endif; ?>

							<div id="login_form">
								<div class="form-group">
									<div>
										<label for="username">Username</label>
									</div>
									<div class="input-group">
										<span class="input-group-addon input-sm input-span"><span class="glyphicon glyphicon-user"></span></span>
										<input class="form-control input_input" name="username" type="text" size=20 autofocus></input>
									</div>
								</div>

								<div class="form-group">
									<div>
										<label for="password">Password</label>
									</div>
									<div class="input-group">
										<span class="input-group-addon input-sm input-span"><span class="glyphicon glyphicon-lock"></span></span>
										<input class="form-control input_input" name="password" type="password" size=20></input>
									</div>
								</div>

								<?php
								if($this->config->item('gcaptcha_enable'))
								{
									echo '<script src="https://www.google.com/recaptcha/api.js"></script>';
									echo '<div class="g-recaptcha" align="center" data-sitekey="' . $this->config->item('gcaptcha_site_key') . '"></div>';
								}
								?>

								<input class="btn btn-primary btn-block" type="submit" name="loginButton" value="LOG IN"/>
							</div>
						</div>
					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</body>
</html>
