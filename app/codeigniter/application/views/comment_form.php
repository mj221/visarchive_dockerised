
<h2><?php echo $title; ?></h2>

<?php echo form_open('/comments/do_comment'); ?>
<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-6 centered">
            <?php if(!$this->session->userdata('logged_in')) : ?>
            
                <a href="<?php echo base_url(); ?>/Authen/login"> Login to Post </a>
               
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) : ?>
            
                <textarea name = "commenttext" size="20"> Enter comment.</textarea> <br /><br />

                <button type="submit">Post</button>
    
            <?php endif; ?>
            
		</div>
	</div>
</div>
<?php echo form_close(); ?>
