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
                <th><?php echo $value->PstCodigo; ?></th>
                <th><?php echo $value->PstTitulo; ?></th>
                <th><?php echo word_limiter($value->PstDescricao, 10); ?></th>
                <th>
                    <a class="btn btn-primary" href="<?php echo base_url('posts/single/'.$value->PstCodigo); ?>">Leia Mais</a>
                    <a class="btn btn-danger" href="<?php echo base_url('posts/delete/'.$value->PstCodigo) ?>">Excluir</a>
                </th>
            </tr>            
        <?php endforeach ?>            

        </tbody>
    
    </table>
	

    <div class="pagination-centered"><?php echo $pages; ?></div>

</div>