<div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Produtos</li>
              <li <?= active('produtos')?>><a class="inactive" href="#">Produtos (em construção)</a></li>
              <li <?= active('produtos')?>><a class="inactive" href="#">Categorias (em construção)</a></li>
              <li class="nav-header">Site</li>
              <li <?= active('produtos')?>><a class="inactive" href="#">Fotos (em construção)</a></li>
              <li <?= active('posts')?>><a href="<?= base_url('posts') ?>">Lista de Preços</a></li>
              <li class="nav-header">Clientes</li>
              <li <?= active('clientes')?>><a class="inactive" href="#">Gerenciar (em construção)</a></li>
              <li class="nav-header">Admin</li>
              <li <?= active('user')?>><a href="<?=base_url('user/listar')?>">Usuários</a></li>
              <li <?= active('config')?>><a href="#">Configurações</a></li>
              <li><a href="<?php echo base_url('user/logout') ?>">Sair</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->