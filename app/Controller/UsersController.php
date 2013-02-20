<?php
	class UsersController extends AppController{
		
		//beforeFilter está falando para o AuthComponent não solicitar um login para a ação add em adição
		// as aços index e view``que foram prontamente autorizadas na função ``beforeFilter do AppController.

		public function beforeFilter() {
	   // parent::beforeFilter();
	      //  $this->Auth->allow('add', 'logout'); // Letting users register themselves
	   }
       
	    public function index(){
	    	$this->User->recursive = 0;
        	$this->set('users', $this->paginate()); //metodo para paginacao ainda nao testei
	    }

	    //metodo para visualização
	    public function view($id = null){
	    	$this->User->id = $id;

	    	if (!$this->User->exists()) {
            	throw new NotFoundException(__('Invalid user'));
            	$this->set('user', $this->User->read(null, $id));
        	}
	    }

	    //metodo para inserir
	    public function add() {
	        if ($this->request->is('post')) {
	            $this->User->create();
	            if ($this->User->save($this->request->data)) { //metodo save para salvar no banco
	                $this->Session->setFlash(__('The user has been saved'));
	                $this->redirect(array('action' => 'add'));
	            } else {
	                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	            }
	        }
    	}

    	//metodo para editar
		public function edit($id = null) {
        	$this->User->id = $id;
	        if (!$this->User->exists()) {
	            throw new NotFoundException(__('Invalid user'));
	        }
	        if ($this->request->is('post') || $this->request->is('put')) {
	            if ($this->User->save($this->request->data)) {
	                $this->Session->setFlash(__('The user has been saved'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	            }
	        } else {
	            $this->request->data = $this->User->read(null, $id);
	            unset($this->request->data['User']['password']);
	        }
		}

		//metodo para deletar
		public function delete($id = null) {
	        if (!$this->request->is('post')) {
	            throw new MethodNotAllowedException();
	        }
	        $this->User->id = $id;
	        if (!$this->User->exists()) {
	            throw new NotFoundException(__('Invalid user'));
	        }
	        if ($this->User->delete()) { //metodo deleta para deletar do banco
	            $this->Session->setFlash(__('User deleted'));
	            $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('User was not deleted'));
	        $this->redirect(array('action' => 'index'));
    	}

    	//metodo para login chama a função $this->Auth->login() do AuthComponent, retorna se o login foi bem sucedido
    	public function login() {
    		
		    if ($this->Auth->login()) {
		        $this->redirect($this->Auth->redirect());
		    } else {
		        $this->Session->setFlash(__('Invalid username or password, try again'));
		    }
		}
		
		//metodo para logout
		public function logout() {
	   		 $this->redirect($this->Auth->logout());
		}
	}
?> 
 