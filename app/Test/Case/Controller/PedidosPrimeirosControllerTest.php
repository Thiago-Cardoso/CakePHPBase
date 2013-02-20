<?php
App::uses('PedidosPrimeirosController', 'Controller');

/**
 * TestPedidosPrimeirosController *
 */
class TestPedidosPrimeirosController extends PedidosPrimeirosController {
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
 * PedidosPrimeirosController Test Case
 *
 */
class PedidosPrimeirosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pedidos_primeiro');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PedidosPrimeiros = new TestPedidosPrimeirosController();
		$this->PedidosPrimeiros->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PedidosPrimeiros);

		parent::tearDown();
	}

}
