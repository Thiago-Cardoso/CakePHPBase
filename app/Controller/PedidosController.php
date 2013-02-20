<?php
App::uses('AppController', 'Controller');
/**
 * Pedidos Controller
 *
 */
class PedidosController extends AppController {

   public $helpers = array ('Html','Form','Js');
   public $name = 'Pedidos';
   public $components = array('Session','RequestHandler');

	 function index(){

        //crio a paginacao
        $options = array(
            'fields' => array('Pedido.nome', 'Pedido.rzsocial','Pedido.id',
                'Pedido.status','Pedido.cgc','Pedido.solicitante','Pedido.fantasia'),
            'conditions' => array('Pedido.status' => true),

            'order' => array('Pedido.data' => 'DESC'),
            'limit' => 10
        );

        $this->paginate = $options;
        // Roda a consulta, já trazendo os resultados paginados
        $pedidos = $this->paginate('Pedido');
        // Envia os dados pra view
        $this->set('pedidos', $pedidos);
		//$this->set('pedidos', $this->Pedido->find('all')); // método find('all') busca todo os registros no banco tabela posts
	}

	public function add(){

		 if ($this->request->is('post')) {
            //$this->request->data['Cliente']['user_id'] = $this->Auth->user('id'); //Added this line
            //$this->Cliente->create();
            //debug($_POST);
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
               $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
           }
        }
	}

	//metodo para visualizar conforme o id
    public function view($id = null) {
        $this->Pedido->id = $id;
        $this->set('pedido', $this->Pedido->read()); // método read()) busca os registros conforme o id 
        //passado e set o id por parametro no banco tabela posts
       // echo Inflector::pluralize('requi_contabil');
    }

    //RequiContabil
    //metodo para editar registros
    public function edit($id = null) {
        $this->Pedido->id = $id;
        if ($this->request->is('get')) {//pega por get
            $this->request->data = $this->Pedido->read();
        } else {
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
       }
    }	
}