<?php
/**
 * RequisicoFixture
 *
 */
class RequisicoFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'requisicoes';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_requi' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'id_tipo' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'cod' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'codcli' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 7),
		'nome' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rzsocial' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cgc' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'solicitante' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fantasia' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'data' => array('type' => 'timestamp', 'null' => true, 'default' => 'CURRENT_TIMESTAMP'),
		'data_fech' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id_requi', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_requi' => 1,
			'id_tipo' => 1,
			'cod' => 1,
			'codcli' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit ame',
			'rzsocial' => 'Lorem ipsum dolor sit amet',
			'cgc' => 'Lorem ipsum dolor sit amet',
			'solicitante' => 'Lorem ipsum dolor sit amet',
			'fantasia' => 'Lorem ipsum dolor sit amet',
			'data' => 1345052406,
			'data_fech' => 1345052406
		),
	);
}
