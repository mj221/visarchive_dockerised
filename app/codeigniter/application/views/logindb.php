<?php echo form_open('/authen/login'); ?>
<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-6 centered">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
  				<p style="color:red;"><?php echo $msg ?></p>
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus
					value = "<?php if (get_cookie('user')){
						echo get_cookie('user');
					}?>">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required autofocus
					value = "<?php if (get_cookie('password')){
						echo get_cookie('pass');
					}?>">
			</div>
			<input type = "checkbox" name="chkremember" value="Remember me" 
				<?php if (get_cookie('user')){
					?> checked="checked" <?php }?>>Remember Me

			<br><br>
			<button type="submit" class="btn btn-primary btn-block">Log in</button>
			<button type="reset" class="btn btn-primary btn-block">Reset</button>
			
			<br/>
			<a href="<?php echo base_url(); ?>authen/create"><input type = button value = "Register"></a>
		</div>
	</div>
</div>
<?php echo form_close(); ?>

