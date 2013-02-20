<?php

class Receita extends AppModel {

    public $name = 'Receita';
    public $belongsTo = array(
        'Autor' => array(
            'className'    => 'Autor',
            'foreignKey'   => 'autor_id'
        )
    );
}

?>
   