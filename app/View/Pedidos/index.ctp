<div class="pedidos index">
	<h2><?php echo __('Pedidos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo ('id');?></th>
			<th><?php echo ('nome');?></th>
			<th><?php echo ('status');?></th>
			<th><?php echo ('rzsocial');?></th>
			<th><?php echo ('cgc');?></th>
			<th><?php echo ('solicitante');?></th>
			<th><?php echo ('fantasia');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php

	foreach ($pedidos as $pedido): ?>
	<tr>
		<td><?php echo h($pedido['Pedido']['id']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['status']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['rzsocial']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['cgc']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['solicitante']); ?>&nbsp;</td>
		<td><?php echo h($pedido['Pedido']['fantasia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Html->link(__('ADD'), array('action' => '../requicontabils/add', $pedido['Pedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pedido['Pedido']['id']), null, __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('« Mais novas', null, null, array('class' => 'desabilitado'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next('Mais antigas »', null, null, array('class' => 'desabilitado'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?></li>
	</ul>
</div>
