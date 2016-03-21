<div class="span9">
	<a class="btn btn-primary" href="<?php echo base_url('posts/new-post'); ?>">Inserir Novo</a>

	<hr>

	<?php foreach ($news as $key => $value): ?>

        <p>Titulo: <?php echo $value->title; ?></p>
        <p>Noticia: <?php echo word_limiter($value->text, 25); ?></p>

        <a class="btn btn-primary" href="<?php echo base_url('posts/single/'.$value->id); ?>">Leia Mais</a>
        <a class="btn btn-danger" href="<?php echo base_url('posts/delete/'.$value->id) ?>">Excluir</a>
        
        <div class="clearfix">
        	
        </div>
        <hr>
        
    <?php endforeach ?>

    <div class="pagination-centered"><?php echo $pages; ?></div>

</div>