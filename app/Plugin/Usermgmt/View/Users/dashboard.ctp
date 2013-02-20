<?php
/*
	This file is part of UserMgmt.
	Author: Chetan Varshney (http://ektasoftwares.com)

	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('Painel'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
					Bem Vindo <?php echo h($user['User']['first_name']).' '.h($user['User']['last_name']); ?>
					<br/><br/>
					Geral<br />
			<?php   if ($this->UserAuth->getGroupName()=='Admin') { ?>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Adicionar Usuario",true),"/addUser") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Todos os usuários",true),"/allUsers") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Adicionar Grupo",true),"/addGroup") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Todos os grupos",true),"/allGroups") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Permissões",true),"/permissions") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Perfil",true),"/viewUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Editar Perfil",true),"/editUser/".$this->UserAuth->getUserId()) ?></span><br/><br/>
			<?php   } ?>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Alterar Senha",true),"/changePassword") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Meu Profile",true),"/myprofile") ?></span><br/><br/>
						Requisições<br />
						<span  class="umstyle6"><?php echo $this->Html->link(__("Requisição Cartas",true),"/RequiCartas") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Requisição Contabil",true),"/RequiContabils") ?></span><br/><br/>
						<span  class="umstyle6"><?php echo $this->Html->link(__("Requisição Pedidos",true),"/Pedidos") ?></span><br/><br/>
						Clientes<br />
						<span  class="umstyle6"><?php echo $this->Html->link(__("Clientes",true),"/Clientes") ?></span><br/><br/>
						Notícias<br />
						<span  class="umstyle6"><?php echo $this->Html->link(__("Noticias",true),"/Noticias") ?></span><br/><br/>
						Uploads<br />
						<span  class="umstyle6"><?php echo $this->Html->link(__("FileUpload",true),"/file_upload") ?></span><br/><br/>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>