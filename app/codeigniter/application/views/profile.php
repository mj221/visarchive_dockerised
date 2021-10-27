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
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Video Title</th>
                        <th> Description</th>
                        <th> Uploaded</th>
                        <th> Likes</th>
                        <th>  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($videos as $video_item){
                        $title = $video_item['title'];
                        $description = $video_item['description'];

                        $UID = $video_item['UID']; 
                        $VID = $video_item['VID']; 
                        $data['uploader'] = $this->user_model->get_userByID($UID);
                        $username = $data['uploader']['username'];
                        
                        $dateTime = $video_item['uploaded_dateTime'];
                        $Likes = $video_item['likes'];
                        $URL = base_url().'profiles/delete_video/'.$VID;
                       
                        echo "
                            <tr>
                                <td>
                                    <a href=\"$VID\">
                                        $title
                                    </a>
                                </td>
                                <td>$description</td>
                                <td>$dateTime</td>
                                <td>$Likes</td>
                                <td>
                                    <a href=\"$URL\">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        ";
                    }?>
                </tbody>
            </table>
        </div>
    </body>
</html>

