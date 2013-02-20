<?php echo $this->Form->create('Post',array('url'=>array('action'=>'form')));?>
	<fieldset>
 		<legend><?php __('Post Details');?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('body');
	?>
	</fieldset>
	<fieldset>
 		<legend><?php __('Tags');?></legend>
	<?php
		// display current tags
		$links = array();
		if ($post['Tag']) {
			foreach($post['Tag'] as $k=>$row) {
				$links[] = $row['name'];
			}
		}
		// oi eae melhorando?? ou na mesma..
		echo '<div>';
		echo __('Current tags',true).':<br/>';
		echo implode(', ',$links);
		echo '</div>';
	    echo $this->Form->input('Tag.tags',array(
			'type' => 'text',
			'label' => __('Add Tags',true),
			'after' => __('Seperate each tag with a comma.  Eg: family, sports, icecream',true)
		));
	    echo $this->Form->input('ativo', array('type'=>'checkbox','label'=>"Deixe marcado para ativar"));

	    echo $this->Form->input('Model.field', array(    'type' => 'select',     'multiple' => 'checkbox',    'options' => array(            'Value 1' => 'Label 1',            'Value 2' => 'Label 2'    )));
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>