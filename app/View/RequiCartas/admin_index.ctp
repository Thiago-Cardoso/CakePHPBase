<div class="requiCartas index">
	<h2><?php echo __('Requi Cartas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pedido_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('rzsocial_des');?></th>
			<th><?php echo $this->Paginator->sort('cgc_des');?></th>
			<th><?php echo $this->Paginator->sort('end_des');?></th>
			<th><?php echo $this->Paginator->sort('num_des');?></th>
			<th><?php echo $this->Paginator->sort('compl_des');?></th>
			<th><?php echo $this->Paginator->sort('estado_des');?></th>
			<th><?php echo $this->Paginator->sort('cidade_des');?></th>
			<th><?php echo $this->Paginator->sort('ref_nf');?></th>
			<th><?php echo $this->Paginator->sort('num_nf');?></th>
			<th><?php echo $this->Paginator->sort('data_nf');?></th>
			<th><?php echo $this->Paginator->sort('serie_nf');?></th>
			<th><?php echo $this->Paginator->sort('rzsocial_esp');?></th>
			<th><?php echo $this->Paginator->sort('end_esp');?></th>
			<th><?php echo $this->Paginator->sort('munin_esp');?></th>
			<th><?php echo $this->Paginator->sort('estado_esp');?></th>
			<th><?php echo $this->Paginator->sort('num_cnpj_esp');?></th>
			<th><?php echo $this->Paginator->sort('num_estad_esp');?></th>
			<th><?php echo $this->Paginator->sort('natu_op_esp');?></th>
			<th><?php echo $this->Paginator->sort('cod_fisc_esp');?></th>
			<th><?php echo $this->Paginator->sort('via_trans_esp');?></th>
			<th><?php echo $this->Paginator->sort('data_es_esp');?></th>
			<th><?php echo $this->Paginator->sort('data_sai_esp');?></th>
			<th><?php echo $this->Paginator->sort('unin_prod_esp');?></th>
			<th><?php echo $this->Paginator->sort('quali_prod_esp');?></th>
			<th><?php echo $this->Paginator->sort('descr_prod_esp');?></th>
			<th><?php echo $this->Paginator->sort('prec_esp');?></th>
			<th><?php echo $this->Paginator->sort('valor_esp');?></th>
			<th><?php echo $this->Paginator->sort('class_esp');?></th>
			<th><?php echo $this->Paginator->sort('aliqu_esp');?></th>
			<th><?php echo $this->Paginator->sort('valor_ipi_esp');?></th>
			<th><?php echo $this->Paginator->sort('base_calc_esp');?></th>
			<th><?php echo $this->Paginator->sort('valor_total_nf');?></th>
			<th><?php echo $this->Paginator->sort('aliqu_icms_esp');?></th>
			<th><?php echo $this->Paginator->sort('valor_icms_esp');?></th>
			<th><?php echo $this->Paginator->sort('base_calc_icms');?></th>
			<th><?php echo $this->Paginator->sort('trans_esp');?></th>
			<th><?php echo $this->Paginator->sort('end_trans_esp');?></th>
			<th><?php echo $this->Paginator->sort('termo_esp');?></th>
			<th><?php echo $this->Paginator->sort('termo_icms_esp');?></th>
			<th><?php echo $this->Paginator->sort('peso_esp');?></th>
			<th><?php echo $this->Paginator->sort('peso_liq_esp');?></th>
			<th><?php echo $this->Paginator->sort('quant_esp');?></th>
			<th><?php echo $this->Paginator->sort('rasu_esp');?></th>
			<th><?php echo $this->Paginator->sort('valor_total_esp');?></th>
			<th><?php echo $this->Paginator->sort('suspec_esp');?></th>
			<th><?php echo $this->Paginator->sort('suspec_icms_esp');?></th>
			<th><?php echo $this->Paginator->sort('outros_esp');?></th>
			<th><?php echo $this->Paginator->sort('coment_esp');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($requiCartas as $requiCarta): ?>
	<tr>
		<td><?php echo h($requiCarta['RequiCarta']['id']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['pedido_id']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['data']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['rzsocial_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['cgc_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['end_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['num_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['compl_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['estado_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['cidade_des']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['ref_nf']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['num_nf']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['data_nf']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['serie_nf']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['rzsocial_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['end_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['munin_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['estado_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['num_cnpj_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['num_estad_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['natu_op_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['cod_fisc_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['via_trans_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['data_es_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['data_sai_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['unin_prod_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['quali_prod_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['descr_prod_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['prec_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['valor_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['class_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['aliqu_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['valor_ipi_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['base_calc_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['valor_total_nf']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['aliqu_icms_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['valor_icms_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['base_calc_icms']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['trans_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['end_trans_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['termo_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['termo_icms_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['peso_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['peso_liq_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['quant_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['rasu_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['valor_total_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['suspec_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['suspec_icms_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['outros_esp']); ?>&nbsp;</td>
		<td><?php echo h($requiCarta['RequiCarta']['coment_esp']); ?>&nbsp;</td>
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
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Requi Carta'), array('action' => 'add')); ?></li>
	</ul>
</div>
