<?php
App::uses('AppController', 'Controller');
App::import('Core', 'l10n');

/**
 * RequiContabils Controller
 *
 */
class RequiContabilsController extends AppController {

	//public $scaffold;
  public $helpers = array ('Html','Form','Js');
  public $components = array('Session','RequestHandler');

	public function index(){	

    $requiContabils = $this->RequiContabil->find('all');
    /* 
    enviamos a variável receitas para a view pelo metodo set do controller
    */

    //seto o objeto
    $this->set('requiContabils', $requiContabils);

	}

  	public function add(){

  		if ($this->request->is('post')) {
              //$this->request->data['Cliente']['user_id'] = $this->Auth->user('id'); //Added this line
              //$this->Cliente->create();
              echo debug($_POST);
              if ($this->RequiContabil->save($this->request->data)) {
                  $this->Session->setFlash(__('The user has been saved'));
                  $this->redirect(array('action' => 'index'));
              } else {
                 $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
             }
          }
  	}

    public function view($id = null){

       $this->RequiContabil->id = $id;
       $this->set('requiContabil',$this->RequiContabil->read());
    }

       public function edit($id = null) {
         $this->RequiContabil->id = $id;
          if ($this->request->is('get')) {//pega por get
              $this->request->data = $this->RequiContabil->read();
          } else {
              if ($this->RequiContabil>save($this->request->data)) {
                  $this->Session->setFlash('Your post has been updated.');
                  $this->redirect(array('action' => 'index'));
              }
         }
      }
      
      /* outros métodos aqui em cima */
      public function delete($id = null){
          /*
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
      $this->RequiContabil->create();
         /*setamos o id da receita*/
      $this->RequiContabil->id = $id;
      /*chamamos a função delete do model que retorna true ou false*/

        if($this->RequiContabil->delete()){
        /*Uso do component Session, coisa de outros posts*/
             $this->Session->setFlash('Arquivo deletado!');         
        }else{
          $this->Session->setFlash('Não foi possível deletar!');     
          // casa q precisa pra tantos dias - melhor proposta - dono da obra vai ter lucro
        }
        /*redireciona para a acton listar*/
        // $this->redirect->("/receitas/listar");
      } 
}
