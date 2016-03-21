<div class="span9">

	<h4>Editar configurações do site</h4>

	<div class="form-horizontal">
		
		<?php echo form_open('configuracoes/update', '', $cnfCodigo); ?>

		<div class="control-group">
			<div class="controls span4">
		    	<?php echo form_input($CnfNomeSite); ?>			
			</div>
		</div>	

		<div class="control-group">
			<div class="controls span4">
		    	<?php echo form_input($CnfLinkSite); ?>			
			</div>
		</div>		  

	    <div class="clearfix"></div>
	    <?php echo form_submit($send_cnf); ?>
	    <a href="<?php echo base_url('home') ?>" class="btn btn-danger">Cancelar</a>

	    <?php echo form_close(); ?>

	</div>
	
</div>

