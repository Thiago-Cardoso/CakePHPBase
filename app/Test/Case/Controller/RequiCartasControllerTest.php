<?php
App::uses('RequiCartasController', 'Controller');

/**
 * TestRequiCartasController *
 */
class TestRequiCartasController extends RequiCartasController {
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
 * RequiCartasController Test Case
 *
 */
class RequiCartasControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.requi_carta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequiCartas = new TestRequiCartasController();
		$this->RequiCartas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequiCartas);

		parent::tearDown();
	}

}
