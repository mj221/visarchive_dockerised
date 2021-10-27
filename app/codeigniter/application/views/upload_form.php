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
    <div class = "container">
        <?php echo $error;?>
        <?php echo form_open_multipart('/upload/do_upload');?>
        <h2>Title:</h2>
        <input type = "text" name = "videotitle" size="20" /> <br /><br />
        <h2>Description:</h2>
        <textarea name = "videodescription" size="20"> Enter description.</textarea> <br /><br />

        <input type="file" name="userfile" size="20"/> <br /><br />

        <input type="submit" value="Upload" />
    </div>
</form>
</body>

<!-- <input type="file" name = "video"/>
<input type="submit" onClick="reloadRandomFrame()" value="load random frame" /><br/>
<canvas id="prevImgCanvas">Your browser does not support the HTML5 canvas tag.</canvas>


<script type="text/javascript">
    var video = document.createElement("video");

    var canvas = document.getElementById("prevImgCanvas");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    video.addEventListener('loadeddata', function() {
    reloadRandomFrame();
    }, false);

    video.addEventListener('seeked', function() {
    var context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    }, false);

    var playSelectedFile = function(event) {
    var file = this.files[0];
    var fileURL = URL.createObjectURL(file);
    video.src = fileURL;
    }

    var input = document.querySelector('input');
    input.addEventListener('change', playSelectedFile, false);

    function reloadRandomFrame() {
        if (!isNaN(video.duration)) {
            var rand = Math.round(Math.random() * video.duration * 1000) + 1;
            video.currentTime = rand / 1000;
        }
    }
    var data = canvas.toDataURL(image/jpeg);
    $.post("process.php", {
        imageData : data
    }, function(data){
        window.location = data;
    });

    $data = substr($_POST['imageData'], strpos($_POST['imageData'], ",")+1);
    $decodedData = base64_decode($data);
    $fp = fopen("canvas.png", 'wb');
    fwrite($fp, $decodedData);
    fclose();
    echo "/canvas.png"; -->

</script>
</html>