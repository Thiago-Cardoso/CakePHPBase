<div class="clientes index">
	<?php echo $this->Html->script('views/home/listar_cidades.js'); ?>
	<div class="form2">
	   <?php echo $this->Form->create('Cliente');?>
		<fieldset>
			<legend><?php echo __('Add Cliente'); ?></legend>
		<?php
			//	echo $this->Form->input('user_id');
			echo $this->Form->input('descricao');
			echo $this->Form->input('rzsocial');
			echo $this->Form->input('cpf');
			echo $this->Form->input('fantasia');
			echo $this->Form->input('atuacao');
			echo $this->Form->input('responsavel');
			echo $this->Form->input('logradouro');
			echo $this->Form->input('numero');
			echo $this->Form->input('complemento');
			echo $this->Form->input('bairro');
			echo $this->Form->input('cep');
			echo $this->Form->input('fone');
			echo $this->Form->input('datainc');

			// echo $this->Form->input('nome', array(
            // 'maxlength' => '40',
            //'after' => 'Digite o nome com até 40 letras.'
			//echo $this->Form->input('textarea', array('type'=>'textarea','rows' => '5', 'cols' => '5'));
		?>
		</fieldset>
	    <fieldset>
	        <?php echo $this->Form->input('estado_id', array('type' => 'select', 'options' => $estados, 'id' => 'estados', 'empty' => 'selecione um estado')) ?>
	        <?php echo $this->Form->input('cidade_id', array('type' => 'select', 'id' => 'cidades', 'empty' => 'selecione uma cidade')) ?>
	    </fieldset>
	    <?php echo $this->Form->end(__('Submit'));?>
	    <?php echo $this->Form->end(); ?>
	</div>	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Clientes'), array('action' => 'view_all')); ?></li>
	</ul>
</div>

