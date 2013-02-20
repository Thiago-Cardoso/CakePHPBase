<?php
App::uses('RequiContabilsController', 'Controller');

/**
 * TestRequiContabilsController *
 */
class TestRequiContabilsController extends RequiContabilsController {
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
 * RequiContabilsController Test Case
 *
 */
class RequiContabilsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.requi_contabil');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequiContabils = new TestRequiContabilsController();
		$this->RequiContabils->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequiContabils);

		parent::tearDown();
	}

}
