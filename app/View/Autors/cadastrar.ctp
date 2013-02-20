Cadastro de Autor <br />
<?php
	
      /*
		Aqui criamos o form e o referenciamos ao model Autor, assim ele já sabe
		     qual é o tipo  de campo do banco e dessa forma tenta criar um input 
		     adequado a ele, caso não seja suficiente essa criação pode ser
		     feita manualmente.
		Esse método corresponde a <form>
	*/

       echo $this->Form->create("Autor");
       /*
		O método input tenta criar um input html adequado a coluna no banco
		     de dados e coloca uma label com o nome da tabela.
		 
		Podemos definir propriedades caso seja necessário. Por exemplo,
		     podemos definir uma label específica através do segundo
		     parâmetro do método(Veja abaixo).
		 
		Também podemos definir tipo, tamanho, classe css entre outros atributos.
		 
		O primeiro parâmetro serve alem de indicar qual o campo está se
		     referenciando o input também para como setarmos o nome do input que
		     segui a nomenclatura padrão do cake data['NomeDoModel']['NomeDoCampo'].
		     Podemos usar array('name'=>'NomeDoCampo') para setarmos o nome do campo.
		 
		Podemos setar o tipo usando também o segundo parâmetro, assim: 
		     array('type'=>'hidden'), se quisermos um campo oculto.
		*/

     //echo  $this->Form->input(“name”,array(
       // 'label'=>”Nome”
         //   )
			// );

       echo $this->Form->input("name");
       echo $this->Form->input("texto");
       echo $this->Form->end("Salvar");
?>