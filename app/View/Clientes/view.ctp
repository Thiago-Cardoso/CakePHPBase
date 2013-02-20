<div class="clientes view">
<h2><?php  echo __('Cliente');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rzsocial'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['rzsocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fantasia'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atuacao'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['atuacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsavel'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['responsavel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['complemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datainc'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['datainc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'view_all')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'index')); ?> </li>
	</ul>
</div>
