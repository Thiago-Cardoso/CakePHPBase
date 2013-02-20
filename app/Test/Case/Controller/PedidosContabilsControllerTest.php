<?php
App::uses('PedidosContabilsController', 'Controller');

/**
 * TestPedidosContabilsController *
 */
class TestPedidosContabilsController extends PedidosContabilsController {
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
 * PedidosContabilsController Test Case
 *
 */
class PedidosContabilsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pedidos_contabil');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PedidosContabils = new TestPedidosContabilsController();
		$this->PedidosContabils->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PedidosContabils);

		parent::tearDown();
	}

}
