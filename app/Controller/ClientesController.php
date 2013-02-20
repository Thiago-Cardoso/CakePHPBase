<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 */
class ClientesController extends AppController {

    public $helpers = array ('Html','Form','Js');
    public $name = 'Clientes';
    public $components = array('Session','RequestHandler');

    function beforeFilter() {
        $this->loadModel('Estado');
        $this->loadModel('Cidade');
    }
     //metodo mostra os registros
     function index() {

        if ($this->request->is('post')) {
            //$this->request->data['Cliente']['user_id'] = $this->Auth->user('id'); //Added this line
            //$this->Cliente->create();
            print_r($_POST);

            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set('clientes', $this->Cliente->find('all')); // método find('all') busca todo os registros no banco tabela posts
        $this->set('estados', $this->Estado->find('list'));
    }

    //metodo para visualizar conforme o id
    public function view($id = null) {
        $this->Cliente->id = $id;
        $this->set('cliente', $this->Cliente->read()); // método read()) busca os registros conforme o id 
        //passado e set o id por parametro no banco tabela posts
    }

    public function view_all($id = null){

         $this->FilterResults->addFilters(
            array(
                'filter1' => array(
                    'Cliente.rzsocial' => array(
                        'operator' => 'LIKE',
                        'value' => array(
                            'before' => '%', // opcional
                            'after'  => '%'  // opcional
                        )
                    )
                )
            )
        );
        $this->FilterResults->setPaginate('order', 'Cliente.rzsocial ASC'); // opcional
        $this->FilterResults->setPaginate('limit', 10);              // opcional

        // Define conditions
        $this->FilterResults->setPaginate('conditions', $this->FilterResults->getConditions());

        $this->Cliente->recursive = 0;
        $this->set('clientes', $this->paginate());
         // $this->set('clientes', $this->Cliente->find('all')); // método find('all') busca todo os registros no banco tabela posts
    }

     public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Cliente']['user_id'] = $this->Auth->user('id'); //Added this line
            $this->Cliente->create();
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    //metodo para editar registros
    public function edit($id = null) {
        $this->Cliente->id = $id;
        if ($this->request->is('get')) {//pega por get
            $this->request->data = $this->Cliente->read();
        } else {
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
       }
    }

    public function listar_cidades_json() {
        $this->layout = false;
            if ($this->RequestHandler->isAjax()) {
                $this->set('cidades', $this->Cidade->find('list', array('conditions' =>
                    array('Cidade.estado_id' => $this->params['url']['estadoId']),
                'recursive' => -1)
            ));
        }
    }
}
?>
