<div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Produtos</li>
              <li <?= active('produtos')?>><a href="#">Gerenciar Produtos</a></li>
              <li <?= active('produtos')?>><a href="#">Gerenciar Categorias</a></li>
              <li class="nav-header">Site</li>
              <li <?= active('produtos')?>><a href="#">Gerenciar Fotos</a></li>
              <li <?= active('posts')?>><a href="<?php echo base_url('posts') ?>">Gerenciar Notícias</a></li>
              <li class="nav-header">Admin</li>
              <li <?= active('user')?>><a href="#">Usuários</a></li>
              <li <?= active('config')?>><a href="#">Configurações</a></li>
              <li><a href="<?php echo base_url('user/logout') ?>">Sair</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->