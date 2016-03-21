<div class="span9">
	<a class="btn btn-primary" href="<?php echo base_url('posts/new-post'); ?>">Inserir Novo</a>

	<hr>

    <table class="table table-striped">

        <thead>
            <th>#</th>
            <th>Titulo</th>
            <th>Titulo</th>
            <th>Ações</th>

        </thead>

        <tbody>

        <?php foreach ($news as $key => $value): ?>                
            <tr>                
                <th><?php echo $value->id; ?></th>
                <th><?php echo $value->title; ?></th>
                <th><?php echo word_limiter($value->text, 10); ?></th>
                <th>
                    <a class="btn btn-primary" href="<?php echo base_url('posts/single/'.$value->id); ?>">Leia Mais</a>
                    <a class="btn btn-danger" href="<?php echo base_url('posts/delete/'.$value->id) ?>">Excluir</a>
                </th>
            </tr>            
        <?php endforeach ?>            

        </tbody>
    
    </table>
	

    <div class="pagination-centered"><?php echo $pages; ?></div>

</div>