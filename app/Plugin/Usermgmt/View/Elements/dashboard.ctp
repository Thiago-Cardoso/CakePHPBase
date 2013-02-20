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
<div id="dashboard">
	<div style="float:left"><?php echo $this->Html->link(__("Dashboard",true),"/dashboard") ?></div>
<?php   if ($this->UserAuth->getGroupName()=='Admin') { ?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Adicionar Usuario",true),"/addUser") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Todos os usuários",true),"/allUsers") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Adicionar Grupo",true),"/addGroup") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Todos os grupos",true),"/allGroups") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Permissões",true),"/permissions") ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Visualizar Perfil",true),"/viewUser/".$this->UserAuth->getUserId()) ?></div>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Editar Perfil",true),"/editUser/".$this->UserAuth->getUserId()) ?></div>
<?php   } else {?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Perfil",true),"/myprofile") ?></div>
<?php   } ?>
	<div style="float:left;padding-left:10px"><?php echo $this->Html->link(__("Trocar Senha",true),"/changePassword") ?></div>
	<div style="float:right;padding-left:10px"><?php echo $this->Html->link(__("Sair",true),"/logout") ?></div>
	<div style="clear:both"></div>
</div>