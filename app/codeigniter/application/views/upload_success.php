<html>
    <head>
        <title>Upload Form</title>
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
<body>
    <div class= "container">
    <h3>Your file was successfully uploaded!</h3>
    <p><?php echo anchor('/upload', 'Click to upload another file.'); ?></p>
        </div>
</body>
</html>