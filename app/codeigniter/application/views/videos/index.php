<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            .row{
                margin-left: 50px;
            }
        </style>
    </head>

    <body>
        <div class="container">
    
            
            <?php echo form_open('/videos', array('method'=>'get'))?>

            <h2 class="text-center"><?php echo $title; ?></h2>
            <hr>
            
                <div class="row">
                    <div class="col-3 form-inline">
                        <label for="video_name"> Search video:&nbsp;</label>
                        <input size="10" id="video_name" type="text" class="form-control" name="keyword" value="<?php if(isset($keyword)) echo $keyword ?>">
                    </div>

                    <div class="col-4 form-inline">
                        <div class="form-group">
                            <label for="like_sort">Likes Sorted in:&nbsp;</label>
                            <select name="sort_by" id="like_sort" class="form-control" >
                                <option <?php echo $sort_by ?> value="asc">Ascending</option>
                                <option <?php echo $sort_by ?>  value="desc">Descending</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-1">
                        <button type="submit"  class="btn btn-primary" >Search</button>
                    </div>
			
                </div>

                <br>


            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Video Title</th>
                        <th> Description</th>
                        <th> Uploader</th>
                        <th> Uploaded</th>
                        <th> Likes</th>
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

                       
                        echo "
                            <tr>
                                <td>
                                    <a href=\"$VID\">
                                        $title
                                    </a>
                                </td>
                                <td>$description</td>
                                <td>$username</td>
                                <td>$dateTime</td>
                                <td>$Likes</td>
                            </tr>
                        ";
                    }?>
                </tbody>
            </table>
        </div>
    </body>
</html>

