<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style type="text/css">
.login-block{
	float:left;
	width:100%;
	padding : 50px 0;
}

.container{background:#D3D3D3; border-radius: 10px; width: 40%; height: 40%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #0069c0;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#6ec6ff; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #0069c0; color:#fff; font-weight:600;}
</style>

<section class="login-block">
	<div class="container">
		<div class="row ">
			<div class="col login-sec">
				<h2 class="text-center">Ticket Igniter</h2>
				<form class="login-form">
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Username</label>
						<input type="text" class="form-control" placeholder="">

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Password</label>
						<input type="password" class="form-control" placeholder="">
					</div>


					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							<small>Remember Me</small>
						</label>
						<button type="submit" class="btn btn-login float-right">Submit</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>
