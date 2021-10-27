<html>
    <head>
        <title>VisArchive</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <style>
            .nav-item{
                list-style: none;
                margin-right: 10px;
            }
            .dropbtn{
                background-color: grey;
                border:double
            }
            .dropdown{
                position: relative;
                display: inline-block;
            }

            .dropdown-content{
                display:none;
                position: absolute;
                z-index = 1;
            }
            .dropdown-content a{
                color: black;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover{background-color: grey;}
            .dropdown:hover .dropdown-content{display:block;}
            .dropdown:hover .dropbtn {background-color: grey;}
        </style>
    </head>

    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url(); ?>videos">VisArchive <?php $this->session->userdata('username')?></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>videos">Videos </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>upload">Upload </a>
                    </li>
                </ul>
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>Authen/login"> Login </a>
                        </li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">

                            <div class="dropdown">
                                <a href="<?php echo base_url(); ?>profiles" class = "dropbtn" input type = button>Profile</a>
                                    <div class= "dropdown-content">
                                        <a href="<?php echo base_url(); ?>profiles/setting"> Settings</a>
                                    </div>
                            </div>
                        </li>
                            <a href="<?php echo base_url(); ?>Authen/logout"> Logout </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>


        </nav>
    </body>
</html>
