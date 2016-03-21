<div class="span9">
	<a class="btn btn-primary" href="<?php echo base_url('user/new-user'); ?>">Inserir Novo</a>

	<hr>

    <table class="table table-striped">

        <thead>
            <th>#</th>
            <th>Usuário Login</th>            
            <th>Ações</th>

        </thead>

        <tbody>

        <?php foreach ($news as $key => $value): ?>                
            <tr>                
                <th><?php echo $value->UsrCodigo; ?></th>
                <th><?php echo $value->UsrLogin; ?></th>
                <th>
                    <a class="btn btn-primary" href="<?php echo base_url('user/edit/'.$value->UsrCodigo); ?>">Editar</a>
                    <a class="btn btn-danger" href="<?php echo base_url('user/delete/'.$value->UsrCodigo) ?>">Excluir</a>
                </th>
            </tr>            
        <?php endforeach ?>            

        </tbody>
    
    </table>
	

    <div class="pagination-centered"><?php echo $pages; ?></div>

</div>