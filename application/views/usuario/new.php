<div class="span9">

	<div class="form-horizontal">
		

		<?php echo form_open('user/inserir'); ?>

		<div class="control-group">
			<div class="controls span4">
		    	<?php echo form_input($usrLogin); ?>			
			</div>
		</div>

		<div class="control-group">
		    <div class="controls span4">
		    	<?php echo form_password($usrSenha); ?>
		    </div>
	    </div>	    

	    <div class="clearfix"></div>
	    <?php echo form_submit($send_user); ?>
	    <a href="<?= base_url('user/listar') ?>" class="btn btn-danger">Cancelar</a>

	    <?php echo form_close(); ?>

	</div>
	
</div>

