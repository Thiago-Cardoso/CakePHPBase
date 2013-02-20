<?php
App::uses('RequiContabisController', 'Controller');

/**
 * TestRequiContabisController *
 */
class TestRequiContabisController extends RequiContabisController {
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
 * RequiContabisController Test Case
 *
 */
class RequiContabisControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.requi_contabi');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequiContabis = new TestRequiContabisController();
		$this->RequiContabis->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequiContabis);

		parent::tearDown();
	}

}
