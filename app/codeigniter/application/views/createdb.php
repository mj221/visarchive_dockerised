<?php echo form_open('/authen/create'); ?>
<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-6 centered">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
  				<p style="color:red;"><?php echo $msg ?></p>
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			</div>
            <div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Create Account</button>
            <button type="reset" class="btn btn-primary btn-block">Reset</button>
		</div>
	</div>
</div>
<?php echo form_close(); ?>