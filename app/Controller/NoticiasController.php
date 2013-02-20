<?php

class NoticiasController extends AppController {

	public $helpers = array('Number');
	
	public function index() {
		
		// Salva novas notícias
		if ($this->request->is('post')) {
			if ($this->Noticia->save($this->request->data)) {
				$this->Session->setFlash('Notícia salva com sucesso!');
			} else {
				$this->Session->setFlash('Verifique os dados inseridos');	
			}
		}
		
		// Lista as notícias
		$noticias = $this->Noticia->find('all');
		$this->set(compact('noticias'));
	}
}