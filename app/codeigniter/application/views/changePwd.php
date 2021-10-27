<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<?php echo form_open('/Authen/update_pwd'); ?>
<div class="row justify-content-center">

		<div class="col-md-4 col-md-offset-6 centered">
		<p style="color:red;"><?php echo $msg ?></p>
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Change Password</button>
		</div>
	</div>
</div>
<?php echo form_close(); ?>

</html>