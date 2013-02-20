<?php
App::uses('PedidosUmsController', 'Controller');

/**
 * TestPedidosUmsController *
 */
class TestPedidosUmsController extends PedidosUmsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * PedidosUmsController Test Case
 *
 */
class PedidosUmsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pedidos_um');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PedidosUms = new TestPedidosUmsController();
		$this->PedidosUms->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PedidosUms);

		parent::tearDown();
	}

}
