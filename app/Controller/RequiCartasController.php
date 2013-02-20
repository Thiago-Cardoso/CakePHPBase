<?php
App::uses('AppController', 'Controller');
/**
 * RequiCartas Controller
 *
 */

class RequiCartasController extends AppController {

  public $helpers = array ('Html','Form','Js');
  public $components = array('Session','RequestHandler');

  public function index(){

	$requiCartas = $this->RequiCarta->find('all');
	    /* 
	    enviamos a variável receitas para a view pelo metodo set do controller
	    */
	    //seto o objeto

    $this->set('requiCartas', $requiCartas);
	}

	public function add(){
		
		if ($this->request->is('post')) {
              if ($this->RequiCarta->save($this->request->data)) {
                  $this->Session->setFlash(__('The user has been saved'));
                  $this->redirect(array('action' => 'index'));
              } else {
                 $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
             }
          }
	}

	public function edit($id = null){

		$this->RequiCarta->id = $id;
		
		if($this->request->is('get'))
		{
			$this->request->data = $this->RequiCarta->read();
		}else{

			if($this->RequiCarta->save($this->request->data)){

				 $this->Session->setFlash('Your post has been updated.');
                 $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function view($id = null){
	
		$this->RequiCarta->id = $id;
		$this->set('requiCarta',$this->RequiCarta->read());
	}

	public function delete($id = null){

		 if(!isset($id))
	      $this->RequiCarta->create();
	         /*setamos o id da receita*/
	      $this->RequiCarta->id = $id;
	      /*chamamos a função delete do model que retorna true ou false*/
	        if($this->RequiCarta->delete()){
	        /*Uso do component Session, coisa de outros posts*/
	             $this->Session->setFlash('Arquivo deletado!');  
	             $this->redirect(array('action' => 'index'));       
	        }else{
	          $this->Session->setFlash('Não foi possível deletar!');     
	          // casa q precisa pra tantos dias - melhor proposta - dono da obra vai ter lucro
	        }
	    /*redireciona para a acton listar*/
	 } 
}
