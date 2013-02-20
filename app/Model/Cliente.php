<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {
    public $name = 'Cliente';

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
