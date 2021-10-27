<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
    
        <h2 class="text-center"><?php echo $title; ?></h2>
            <?php
                $UID = $this->session->userdata('ID');
                $data['uploader'] = $this->user_model->get_userByID($UID);
                $username = $data['uploader']['username'];
                $email = $data['uploader']['Email'];
                $password = $data['uploader']['password'];
            ?>
            <p1> Username: <?php echo $username?> </p1>
            
            <hr>
            <p1> Email: <?php echo $email?> </p1>
            <hr>
            <p1 type = "password"> Password: <a href="<?php echo base_url(); ?>authen/update_pwd"> Change</a></p1>
        </div>
    </body>
</html>

