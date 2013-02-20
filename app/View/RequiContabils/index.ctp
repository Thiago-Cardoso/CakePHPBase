<div class="requiContabils index">
	<h2><?php echo __('Requi Contabils');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php ('id');?></th>
			<th><?php ('form1');?></th>
			<th><?php ('form2');?></th>
			<th><?php ('form3');?></th>
			<th><?php ('form4');?></th>
			<th><?php ('form5');?></th>
			<th><?php ('form6');?></th>
			<th><?php ('ano1');?></th>
			<th><?php ('ano2');?></th>
			<th><?php ('comentario');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($requiContabils as $requiContabil): ?>
	<tr>
		<td><?php echo h($requiContabil['RequiContabil']['id']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['form1']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['form2']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['form3']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['form4']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['form5']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['form6']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['ano1']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['ano2']); ?>&nbsp;</td>
		<td><?php echo h($requiContabil['RequiContabil']['comentario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $requiContabil['RequiContabil']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $requiContabil['RequiContabil']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $requiContabil['RequiContabil']['id']), null, __('Are you sure you want to delete # %s?', $requiContabil['RequiContabil']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	
	?>	</p>

	<div class="paging">
	<?php
		
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Requi Contabil'), array('action' => 'add')); ?></li>
	</ul>
</div>
