<body>
<h1>Video ID: <?php echo $video_item['VID'];?></h1>

<?php $location = $video_item['filename']; ?>

<?php
echo '<h2>'.$video_item['title'].'</h2>';
echo $video_item['description']; echo '<br />'; echo '<br />';
//echo $location;
?>

<strong>uploaded by 
<?php 
    $UID = $video_item['UID']; 
    $VID = $video_item['VID']; 
    $data['uploader'] = $this->user_model->get_userByID($UID);
    $username = $data['uploader']['username'];
    echo $username; 
?>
</strong>
<br>
<html>
    <head>
        <style>
            body {
                text-align: center;
            }
            #video-block {
                margin-top: 1vh;
                display: inline-block;
                position: relative;
                cursor: pointer;
            }
            #video {
                /* object-fit: initial; */
                /* width: 400px;
                height: 240px; */
                
            }
            #play-btn {
                width: 100%;
                height: 100%;
                position: absolute;
                background-color: #0f0f0f;
                z-index: 100;
                opacity: 0.6;
            }
            .play #play-btn {
                visibility: hidden;
            }
            .stop #play-btn{
                visibility: visible;
            }
            img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 10%;
            }
            
        </style>
    </head>
        <div id="video-block">
            <div id="play-btn" class="stop">
                <img src="<?php echo base_url(); ?>uploads/img/play_button.png" onclick="playPause()">
            </div>
            <video id="video" controls autoplay>
                
                <?php
                    echo "<source src='".$location."' type = 'video/mp4'> onclick='playPause()'";
                ?>
                <?php
                    echo "<source src='".$location."' type = 'video/mov'> onclick='playPause()'";
                ?>
            </video>
            
        </div>
        <br><br>
        <a type = "button" onclick="makeSmall()">Smaller</a>
        <a type = "button" onclick="makeNormal()">Normal</a>
        <a type = "button" onclick="makeBig()">Larger</a>

        <script type="text/javascript"> 
            var myVideo=document.getElementById("video"),
                playBtn = document.getElementById("video-block");
            
            
            function playPause(){ 
                if (myVideo.paused) {
                    playBtn.classList.remove("stop");
		            playBtn.classList.add("play");
                    myVideo.play();
                }
                else{
                    playBtn.classList.remove("play");
                    playBtn.classList.add("stop");
                    myVideo.pause();
                }
            } 
            
            function makeBig(){ 
                myVideo.height=myVideo.videoHeight*2;
            } 
            function makeSmall(){ 
                myVideo.height=myVideo.videoHeight/2; 
                
            } 
            function makeNormal(){ 
                myVideo.height=myVideo.videoHeight;
            } 
        </script> 

        
</body>
</html>

