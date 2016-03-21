<div class="span9">

	<div class="row-fluid">
		

		<?php echo form_open_multipart('posts/inserir'); ?>

	    <?php echo form_input($title_news); ?>

	    <div class="clearfix"></div>

	    <?php echo form_upload($img_news); ?>

	    <div class="clearfix"></div>

	    <?php echo form_textarea($text_news); ?>

	    <div class="clearfix"></div>
	    <?php echo form_submit($send_news); ?>
	    <a href="<?php echo base_url('posts') ?>" class="btn btn-danger">Cancelar</a>

	    <?php echo form_close(); ?>

	</div>
	
</div>

