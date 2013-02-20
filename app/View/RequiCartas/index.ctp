<div class="requiCartas index">
	<h2><?php echo __('Requi Cartas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php ('id');?></th>
			<th><?php ('pedido_id');?></th>
			<th><?php ('data');?></th>
			<th><?php ('rzsocial_des');?></th>
	</tr>
	<?php
	foreach ($requiCartas as $requiCarta): ?>
	<tr>
		<td><?php echo h($requiCarta['RequiCarta']['id']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['pedido_id']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['rzsocial_des']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requiCarta['RequiCarta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requiCarta['RequiCarta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requiCarta['RequiCarta']['id']), null, __('Are you sure you want to delete # %s?', $requiCarta['RequiCarta']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	?>	</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Requi Carta'), array('action' => 'add')); ?></li>
	</ul>
</div>
