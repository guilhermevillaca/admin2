<div class="span9">

	<a class="btn btn-primary" href="<?php echo base_url('posts/new-post'); ?>">Inserir Novo</a>
    <a class="btn btn-primary pull-right" href="<?php echo base_url('posts'); ?>">Voltar</a>
    <hr>
    <?php foreach ($single as $key => $value): ?>

    <h4 class="subheader"><?php echo $value->title ?></h4>

    <img src="<?php echo base_url('img/uploads/'.$value->image) ?>">

    <p class="text-left"><?php echo nl2br($value->text); ?></p>
    
    <a class="btn btn-primary" href="<?php echo base_url('posts/edit/'.$value->id); ?>">Editar</a>
    <a class="btn btn-danger" href="<?php echo base_url('posts/delete/'.$value->id) ?>">Excluir</a>
        
    <?php endforeach ?>

</div>