<?php
	//Declaração da Classe. NÃO FECHE ESTA CLASSE, vamos fechar no final das funções.
	class UsuariosController extends AppController {
 
		public function criar(){
 
			//Checar se a requisição é do tipo POST. Isto evita o usuário de inserir dados nulos.
			if ($this->request->is('post')){
 
				//Salvando novo usuário
				if ($this->Usuario->save($this->request->data)){
 
					//Enviando uma mensagem ao usuário
					$this->Session->setFlash('Usuário criado com sucesso =)');
 
					//Redirecionando para a lista de usuários
					$this->redirect(array('action' => 'index'));
 
				}else{
 
					//Se houver falha
					this->Session->setFlash('Falha na criação do Usuário =(');
 
				}
			}
		}

		public function index() {
 
			$this->set('usuarios', $this->Usuario->find('all'));
 
		}


		public function atualizar() {
 
			//Pegando o código do usuário que vai ser atualizado e apontando na variável $id
			$id = $this->request->params['pass'][0];
 
			//Apontando o codigoUsuario do usuário para atualização
			$this->Usuario->id = $id;
 
			//Checando se o usuário existe
			if( $this->Usuario->exists() ){
 
				//Checando se a requisição feita é do tipo post ou put
				if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
 
					//Salvando o usuário
					if( $this->Usuario->save( $this->request->data ) ){
 
					//Enviando uma mensagem para o usuário
					$this->Session->setFlash('Usuário atualizado com sucesso =)');
 
					//Redirecionando para a tela inicial
					$this->redirect(array('action' => 'index'));
 
					}else{
 
					//Caso ocorra um erro na atualização do usuário
					$this->Session->setFlash('Falha na atualização do usuário =(');
 
					}
 
				}else{
 
				//Se não foi uma requisição do tipo post ou put, coloca-se os dados do usuário no formulário da view automaticamente
				$this->request->data = $this->Usuario->read();
 
				}
 
			}else{
 
				//Se o usuário não existe enviar uma mensagem que o usuário é inexistente
				$this->Session->setFlash('O usuário que você está desejando atualizar não existe =(');
 
				//E redirecionar para a listagem de usuários
				$this->redirect(array('action' => 'index'));
			}   
		}

		public function excluir() {
 
			//Pegando o código do usuário que vai ser atualizado e apontando na variável $id
			$id = $this->request->params['pass'][0];
 
			//Checando se a requisição é do tipo GET. Neste caso precisamos que a requisição seja do tipo post, pois usamos o método postLink na view que deleta o usuário 
			if( $this->request->is('get') ){
 
				//Enviando uma mensagem para o usuário
				$this->Session->setFlash('Não é permitido excluir usuários através do método GET =(');
 
			}else{
 
				//Checando se o id do usuário é válido
				if(!$id ) {
 
					//Enviando uma mensagem para o usuário
					$this->Session->setFlash('Código de usuário inválido =(');
 
				}else{
 
					//Excluindo usuário
					if( $this->Usuario->delete( $id ) ){
 
						//Enviando uma mensagem para o usuário
						$this->Session->setFlash('Usuário excluído com sucesso =)');
 
					}else{  
 
						//Se não for possível excluir o usuário, enviar mensagem
						$this->Session->setFlash('Falha na excluão do usuário =(');
 
					}
				}
			}
 
			//Redirecionando para a listagem de usuários
			$this->redirect(array('action' => 'index'));
		}
	}//Fechando a classe UsuariosController
?>