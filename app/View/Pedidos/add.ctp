<div class="pedidos form">
<?php echo $this->Form->create('Pedido');?>
	<fieldset>
		<legend><?php echo __('Add Pedido'); ?></legend>
	<?php
		//echo $this->Form->input('id_requi');
		echo $this->Form->input('id_tipo', array(
            'options' => array('1' => 'Segunda via de Documentos - Contábil', 
            '2' => 'Carta de Correção','3' => 'Certidões Negativas', '4' =>'Declaração de Faturamento',
			'5' => 'Documentos para AIDOF', '6' => 'Recálculo de Impostos' ,'7' => 'Contratação',
			'8' => 'Alteração de Dados' , '9' => 'Solicitação de Férias', '10' => 'Cálculo de Rescisão',
			'11' => 'Alteração de VT' , '12' => 'Atestado de Afastamento' , '13' => 'Personalizada'
            )
        ));
		echo $this->Form->input('nome');
		echo $this->Form->input('status', array(
            'options' => array('0' => 'Inativo', '1' => 'Ativo' 
        )
        ));
		echo $this->Form->input('rzsocial');
		echo $this->Form->input('cgc');
		echo $this->Form->input('solicitante');
		echo $this->Form->input('fantasia');
		//echo $this->Form->input('data');
		//echo $this->Form->input('data_fech');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index'));?></li>
	</ul>
</div>
