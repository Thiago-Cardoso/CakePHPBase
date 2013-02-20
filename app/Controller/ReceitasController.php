<?php
	
	class ReceitasController extends AppController{

  		public function index(){

        echo "Receita";
  		}

  	   public function cadastrar(){
         // verifica se a requisição é do tipo post
         if($this->request->is("POST")){
          		$this->Receita->save($this->request->data);
                 $this->Session->setFlash('Cadastro com Sucesso da Receita.');//o método SessionComponent::setFlash()
                  // do componente SessionComponent para definir
                  // uma variável de sessão com uma mensagem a ser exibida na página depois de ser redirecionada. 
                  $this->redirect(array('action' => 'cadastrar'));
          }
        		$autores = $this->Receita->Autor->find('list');
            $this->set('autors',$autores); 
        }

       public function listar(){
          /*
          chamamos o métodos find(‘all’) do model para retornar todos os registros
          */
          $receitas = $this->Receita->find('all');
          /* 
          enviamos a variável receitas para a view pelo metodo set do controller
          */
          $this->set('receitas',$receitas);
      }

        /* outros métodos aqui em cima */
      public function delete($id = null){
          /*
        verificamos se o id é igual a null e caso ele seja chamamos
        o método redirect do controller para redirecionar a requisição
        junto com uma mensagem de aviso.
        */
            if(!isset($id))
      /*Uso do component Session, coisa de outros posts*/
          // $this->Session->setFlash('Erro!');
         /*redireciona para a acton listar*/
         //  $this->redirect->("/receitas/listar");
            /*
      Criamos um novo objeto do tipo receita Isso é necessário
      aqui porquê vamos setar propriedades para o objeto manipular.
      */
      $this->Receita->create();
         /*setamos o id da receita*/
      $this->Receita->id = $id;
      /*chamamos a função delete do model que retorna true ou false*/

        if($this->Receita->delete()){
        /*Uso do component Session, coisa de outros posts*/
             $this->Session->setFlash('Arquivo deletado!');         
        }else{
          $this->Session->setFlash('Não foi possível deletar!');     
        }
        /*redireciona para a acton listar*/
            // $this->redirect->("/receitas/listar");
      }
  }  
?>