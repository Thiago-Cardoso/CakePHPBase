<h2><?php echo __('Clientes');?></h2>
<style type="text/css">
  .limite{
  	width:300px !important;
  	height: 3px;
  }
  </style>
<?php
	/*$options = array('1'=>'rzsocial', '2'=>'responsavel',
	'3'=>'fantasia');
	echo $this->Form->create('Cliente/pesquisar', array('action'=>'pesquisar'));
	echo $this->Form->input('busca', array('label'=>'Pesquisar:'));
	echo $this->Form->input('filtro', array('label'=>'Filtro','type'=>'select','options'=> $options));
	echo $this->Form->submit('Buscar', array('class' => 'ui-state-default
	ui-corner-all'));
	echo $this->Form->end();*/
	echo $this->FilterForm->create();
	echo "Filtro: "; echo $this->FilterForm->input('filter1',array('type' => 'text', 'size' => 5 ,
		'class' => 'limite'));
	echo $this->FilterForm->end(__('Filtrar', true));
?>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th>ID</th>
			<th>User Id</th>
			<th>Descrição</th>
			<th>Razão Social</th>
			<th>CPF</th>
			<th>Fantasia</th>
			<th>Responsavel</th>
			<th>Data</th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clientes as $cliente): ?>
		<tr>
			<td><?php echo ($cliente['Cliente']['id']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['user_id']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['descricao']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['rzsocial']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['cpf']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['fantasia']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['responsavel']); ?>&nbsp;</td>
			<td><?php echo ($cliente['Cliente']['datainc']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
			</td>
		</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
		//echo $this->Paginator->counter(array(
		//'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		//));
	?>	
	</p>

	<div class="paging">
	<?php
	//	echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
	//	echo $this->Paginator->numbers(array('separator' => ''));
	//	echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'index')); ?> </li>