<?php

class RequiCarta extends AppModel {

    public $name = 'requi_cartas';

     public $validate = array(
        'rzsocial_des' => array(
            'rule' => 'notEmpty'
        )
    );
}	
?>