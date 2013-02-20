<?php
App::uses('Requisico', 'Model');

/**
 * Requisico Test Case
 *
 */
class RequisicoTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Requisico = ClassRegistry::init('Requisico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Requisico);

		parent::tearDown();
	}

}
