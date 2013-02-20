<div class="requiContabils view">
<h2><?php  echo __('Requi Contabil');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form1'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['form1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form2'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['form2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form3'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['form3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form4'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['form4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form5'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['form5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form6'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['form6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano1'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['ano1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano2'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['ano2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($requiContabil['RequiContabil']['comentario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Requi Contabil'), array('action' => 'edit', $requiContabil['RequiContabil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Requi Contabil'), array('action' => 'delete', $requiContabil['RequiContabil']['id']), null, __('Are you sure you want to delete # %s?', $requiContabil['RequiContabil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Requi Contabils'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requi Contabil'), array('action' => 'add')); ?> </li>
	</ul>
</div>
