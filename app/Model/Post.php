<?php

class Post extends AppModel {
    public $name = 'Post';

    var $hasAndBelongsToMany = array(
        'Tag' => array(
            'className' => 'Tag',
            'joinTable' => 'posts_to_tags',
            'foreignKey' => 'post_id',
            'associationForeignKey' => 'tag_id',
            'with' => 'PostToTag',
        ),
    );  

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
    
    //funcao que verifica se usuário é 
    //autorizado a editar ou post ou não, nós estamos chamando a função isOwnedBy() no model Post
	public function isOwnedBy($post, $user) {
	    return $this->field('id', array('id' => $post, 'user_id' => $user)) === $post;
	}
}

?>