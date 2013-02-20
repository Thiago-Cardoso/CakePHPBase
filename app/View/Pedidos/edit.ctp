<div class="pedidos form">
<?php echo $this->Form->create('Pedido');?>
	<fieldset>
		<legend><?php echo __('Edit Pedido'); ?></legend>
	<?php
		echo $this->Form->input('id_tipo');
			echo $this->Form->input('id_tipo', array(
            'options' => array('1' => 'Segunda via de Documentos - Contábil', 
           '2' => 'Carta de Correção','3' => 'Certidões Negativas', '4' =>'Declaração de Faturamento',
            )
        ));
		echo $this->Form->input('nome');
		echo $this->Form->input('status');
		echo $this->Form->input('rzsocial');
		echo $this->Form->input('cgc');
		echo $this->Form->input('solicitante');
		echo $this->Form->input('fantasia');
		echo $this->Form->input('data');
		echo $this->Form->input('data_fech');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pedido.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index'));?></li>
	</ul>
</div>
