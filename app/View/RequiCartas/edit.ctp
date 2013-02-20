<div class="requiCartas form">
<?php echo $this->Form->create('RequiCarta');?>
	<fieldset>
		<legend><?php echo __('Edit Requi Carta'); ?></legend>
	<?php
			echo $this->Form->input('pedido_id', array('type' => 'hidden', 'value' => '2'));
		echo $this->Form->input('data');
		echo $this->Form->input('rzsocial_des');
		echo $this->Form->input('cgc_des');
		echo $this->Form->input('end_des');
		echo $this->Form->input('num_des');
		echo $this->Form->input('compl_des');
		echo $this->Form->input('estado_des');
		echo $this->Form->input('cidade_des');
		echo $this->Form->input('ref_nf', array(
            'options' => array('Escolher 1' => 'Escolher 1', 
            'Escolher 2' => 'Escolher 2','Escolher 3' => 'Escolher 3', 'Escolher 4' =>'Escolher 4',
			'Escolher 5' => 'Escolher 5'
            )
        ));
		echo $this->Form->input('num_nf');
		echo $this->Form->input('data_nf');
		echo $this->Form->input('serie_nf');
		echo $this->Form->input('rzsocial_esp');
		echo $this->Form->input('end_esp');
		echo $this->Form->input('munin_esp');
		echo $this->Form->input('estado_esp');
		echo $this->Form->input('num_cnpj_esp');
		echo $this->Form->input('num_estad_esp');
		echo $this->Form->input('natu_op_esp');
		echo $this->Form->input('cod_fisc_esp');
		echo $this->Form->input('via_trans_esp');
		echo $this->Form->input('data_es_esp');
		echo $this->Form->input('data_sai_esp');
		echo $this->Form->input('unin_prod_esp');
		echo $this->Form->input('quali_prod_esp');
		echo $this->Form->input('descr_prod_esp');
		echo $this->Form->input('prec_esp');
		echo $this->Form->input('valor_esp');
		echo $this->Form->input('class_esp');
		echo $this->Form->input('aliqu_esp');
		echo $this->Form->input('valor_ipi_esp');
		echo $this->Form->input('base_calc_esp');
		echo $this->Form->input('valor_total_nf');
		echo $this->Form->input('aliqu_icms_esp');
		echo $this->Form->input('valor_icms_esp');
		echo $this->Form->input('base_calc_icms');
		echo $this->Form->input('trans_esp');
		echo $this->Form->input('end_trans_esp');
		echo $this->Form->input('termo_esp');
		echo $this->Form->input('termo_icms_esp');
		echo $this->Form->input('peso_esp');
		echo $this->Form->input('peso_liq_esp');
		echo $this->Form->input('quant_esp');
		echo $this->Form->input('rasu_esp');
		echo $this->Form->input('valor_total_esp');
		echo $this->Form->input('suspec_esp');
		echo $this->Form->input('suspec_icms_esp');
		echo $this->Form->input('outros_esp');
		echo $this->Form->input('coment_esp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequiCarta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequiCarta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requi Cartas'), array('action' => 'index'));?></li>
	</ul>
</div>
