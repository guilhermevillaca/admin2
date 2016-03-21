<div class="span9">

	<a class="btn btn-primary" href="<?php echo base_url('posts/new-post'); ?>">Inserir Novo</a>
    <a class="btn btn-primary pull-right" href="<?php echo base_url('posts'); ?>">Voltar</a>
    <hr>
    <?php foreach ($single as $key => $value): ?>

    <h4 class="subheader"><?php echo $value->title ?></h4>
    <?php if($value->tipoArquivo === '.img') : ?>
        <img src="<?= base_url('img/uploads/'.$value->image) ?>">
    <?php elseif ($value->tipoArquivo === '.pdf') : ?>
        <a href="<?=base_url('img/uploads/'.$value->image)?>" target="_blank">Download</a>
    <?php endif; ?>

    <p class="text-left"><?= nl2br($value->text); ?></p>
    
    <a class="btn btn-primary" href="<?php echo base_url('posts/edit/'.$value->id); ?>">Editar</a>
    <a class="btn btn-danger" href="<?php echo base_url('posts/delete/'.$value->id) ?>">Excluir</a>
        
    <?php endforeach ?>

</div>