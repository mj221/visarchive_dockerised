

<?php echo form_open('/ratings/do_rate'); ?>
<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-6 centered">
            <?php if($this->session->userdata('logged_in')) : ?>
                <?php $this->load->model('user_model'); ?>
                <?php 
                    $UID = $this->session->userdata('ID');
                    $VID = $this->session->userdata('VID');
                ?>

                <?php $checked = $this->user_model->check_userLiked($UID, $VID); ?>
                <?php if($checked) : ?>
                    <button type="submit" class="btn btn-primary btn-block">Like</button>


                <?php endif; ?>
                <?php if(!$checked) : ?>
                    <button type="button" disabled class="btn btn-primary btn-block">Liked</button>
                <?php endif; ?>
                
                
                Likes: 
                <?php 
                    echo $count['video_likes'];
                ?>
            <?php endif; ?>
            
            
        </div>
        
	</div>
</div>
<?php echo form_close(); ?>
