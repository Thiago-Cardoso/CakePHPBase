<div class="requiContabils form">
<?php echo $this->Form->create('RequiContabil');?>
	<fieldset>
		<legend><?php echo __('Edit Requi Contabil'); ?></legend>
	<?php
	echo $this->Form->input('pedido_id', array('type' => 'hidden','value' =>'1'));
		echo $this->Form->input('form1', array('type'=>'checkbox','label'=>"CNPJ:",'value' =>'1' ));
		echo $this->Form->input('form2', array('type'=>'checkbox','label'=>"DCTF",'value' =>'1' ));
		echo $this->Form->input('form3', array('type'=>'checkbox','label'=>"Contrato Social",'value' =>'1' ));
		echo $this->Form->input('form4', array('type'=>'checkbox','label'=>"Alteração Contratual",'value' =>'1' ));
		echo $this->Form->input('form5', array('type'=>'checkbox','label'=>"Declaração de Impostos de Renda Pessoa Jurídica",'value' =>'1' ));
		echo $this->Form->input('ano1', array('type' => 'date'));
		echo $this->Form->input('form6', array('type'=>'checkbox','label'=>"Declaração de Imposto de Renda Pessoa Física",'value' =>'1' ));
		echo $this->Form->input('comentario');
		echo $this->Form->input('ano2', array('type' => 'date'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RequiContabil.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RequiContabil.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requi Contabils'), array('action' => 'index'));?></li>
	</ul>
</div>
