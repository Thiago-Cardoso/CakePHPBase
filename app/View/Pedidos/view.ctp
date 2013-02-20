<div class="pedidos view">
<h2><?php  echo __('Pedido');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php echo __('Id Tipo'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id_tipo']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rzsocial'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['rzsocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cgc'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['cgc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitante'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['solicitante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fantasia'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['fantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['data']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php echo __('Data Fech'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['data_fech']); ?>
			&nbsp;
		</dd>-->
	</dl>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
	</ul>
</div>
