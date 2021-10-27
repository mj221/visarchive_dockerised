<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<?php foreach ($comments as $comment_item): ?>
    

<p1><strong><?php echo $comment_item['username']; ?></strong> posted on <?php echo $comment_item['posted_dateTime']; ?>:</p1>
<div class="main"> 
    <?php echo $comment_item['content']; ?> 
</div>
<hr>

<?php endforeach; ?>

<script>
    $.ajax({
        url: "<?php echo base_url("Comments/viewjax");?>",
        type: "POST",
        cache: false,
        success: function(data){}
    })
    </script>
</html>