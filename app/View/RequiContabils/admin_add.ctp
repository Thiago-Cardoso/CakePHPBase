<div class="requiContabils form">
<?php echo $this->Form->create('RequiContabil');?>
	<fieldset>
		<legend><?php echo __('Admin Add Requi Contabil'); ?></legend>
	<?php
		echo $this->Form->input('id_requi');
		echo $this->Form->input('form1');
		echo $this->Form->input('form2');
		echo $this->Form->input('form3');
		echo $this->Form->input('form4');
		echo $this->Form->input('form5');
		echo $this->Form->input('form6');
		echo $this->Form->input('ano1');
		echo $this->Form->input('ano2');
		echo $this->Form->input('comentario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requi Contabils'), array('action' => 'index'));?></li>
	</ul>
</div>
