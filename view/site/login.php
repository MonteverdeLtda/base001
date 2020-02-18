<?php 
/* *******************************
 *
 * Developer by FelipheGomez
 *
 * ******************************/
?>

		
		<div class="container register">
			<div class="row">
				<div class="col-md-3 register-left">
					<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
					<h3>Welcome</h3>
					<p>You are 30 seconds away from earning your own money!</p>
				</div>
				<div class="col-md-9 register-right">
					<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">New User</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
							<h3 class="register-heading">Login</h3>
							<div class="row register-form">
								<div class="col-md-12 profile_card">
									<form class="form-inline">
										<div class="form-group">
											<i class="fa fa-envelope-o"></i>
											<input type="text" class="form-control" placeholder="Email" value="" />
										</div>
										<div class="form-group">
											<i class="fa fa-lock"></i>
											<input type="password" class="form-control" placeholder="Password *" value="" />
										</div>
										<div class="float-right">
											<input type="submit" class="btn btn-primary" value="Register" />
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
							<h3 class="register-heading">New User</h3>
							<div class="row register-form">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="First Name *" value="" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Last Name *" value="" />
									</div>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email *" value="" />
									</div>
									<div class="form-group">
										<input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Password *" value="" />
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Confirm Password *" value="" />
									</div>
									<div class="float-right">
										<input type="submit" class="btn btn-primary" value="Register" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<div>
	<a class="hiddenanchor" id="signup"></a>
	<a class="hiddenanchor" id="signin"></a>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content">
				<h1><?= $title; ?></h1>
				<p>Al crear la cuenta en nuestro sitio confirmas haber leído la política de privacidad y aceptar los Términos y condiciones*</p>
				<?= $model->formulario; ?>
				<div class="clearfix"></div>
				<div class="separator">
					<p class="change_link">
						nuevo en el sitio?
						<a href="#signup" class="to_register"> Crear una cuenta </a>
					</p>
					<div class="clearfix"></div>
					<br />
					<div>
						<!-- // <h1><i class="fa fa-paw"></i> C&CMS </h1> -->
						<!-- // <p><?= ControladorBase::PowerBy(); ?>. Privacy and Terms</p> -->
					</div>
				</div>
			</section>
		</div>
		
		<div id="register" class="animate form registration_form">
			<section class="login_content">
				<h1>Crear Cuenta</h1>
				<p>Al pulsar en el botón confirmas haber leído la política de privacidad y aceptas los términos y condiciones.</p>
				<?= $register->formulario; ?>
					<div class="clearfix"></div>
					<div class="separator">
						<p class="change_link">
							¿Ya tienes cuenta?
							<a href="#signin" class="to_register"> Ingresar </a>
						</p>
						<div class="clearfix"></div>
						<br />
						<div>
							<!-- // <h1><i class="fa fa-paw"></i> C&CMS </h1> -->
							<!-- // <p><?= ControladorBase::PowerBy(); ?>. Privacy and Terms</p> -->
						</div>
					</div>
			</section>
        </div>
	</div>
</div>