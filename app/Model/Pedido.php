<?php

class Pedido extends AppModel {
    public $name = 'Pedido';

    public $validate = array(
        'rzsocial' => array(
            'rule' => 'notEmpty'
        ),
        'descricao' => array(
            'rule' => 'notEmpty'
        ),
        'cpf' => array(
        	'rule' => 'notEmpty'
    	),
        'fantasia' => array(
            'rule' => 'notEmpty'
        ),
        'responsavel' => array(
            'rule' => 'notEmpty'
        )
    );
}	

?>