<?php
	
	class Autor extends Appmodel{

		public $validate = array(

			'name' => array(
	            'rule' => 'notEmpty'	  
	    	)
	 	);	
}
?>