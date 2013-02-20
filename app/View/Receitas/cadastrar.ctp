
Cadastro de Receitas<br />

<?php
	echo $this->Form->create("Receita");
	echo $this->Form->input("title",array('label' => 'Titulo'));
	echo $this->Form->input('texto',array('label' => 'Receita'));

	//aqui estamos criando um select com o relaciomaneto
	echo $this->Form->input("autor_id",array("label"=>'Autor'));
	//echo $this->Form->year('purchased', 2000, date('Y'));
	echo $this->Form->end('Postar');
?>