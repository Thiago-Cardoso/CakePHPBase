<?php

class AutorsController extends AppController {
	
	public function index(){
    
		  echo "Cadastro de Autors";
	}

	public function cadastrar(){
   // verifica se a requisição é do tipo post
      if($this->request->is("POST")){
         //salva os dados que vem no array data, nesse caso data são os
         //dados do post, usando o método save() de Autor, herdado de //Model. 
        $this->Autor->save($this->request->data);
        $this->Session->setFlash('Cadastro com Sucesso.');//o método SessionComponent::setFlash()
          // do componente SessionComponent para definir
          // uma variável de sessão com uma mensagem a ser exibida na página depois de ser redirecionada. 
          $this->redirect(array('action' => 'cadastrar'));
      }
   }
}

?>