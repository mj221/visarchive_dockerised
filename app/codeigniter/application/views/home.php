<html>
	<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            .container{
                margin-top: 20px;
                margin-left: 20px;
            }

			
        </style>
</head>
<div class="row justify-content-center">
	<div class="col-md-4 col-md-offset-6 centered">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<h2 class="text-center"><?php echo $this->session->flashdata('user_loggedin'); ?></h2> 
	</div>
</div>

</html>