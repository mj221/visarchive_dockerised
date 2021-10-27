<?php echo form_open('/users/login/'); ?>
<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-6 centered">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
