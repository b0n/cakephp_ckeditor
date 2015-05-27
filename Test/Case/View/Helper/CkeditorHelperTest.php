<?php
App::uses('View', 'View');
App::uses('Helper', 'View');
App::uses('HtmlHelper', 'View/Helper');
App::uses('CkeditorHelper', 'Ckeditor.View/Helper');

/**
 * CkeditorHelper Test Case
 *
 */
class CkeditorHelperTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$View = new View();
		$this->Html = new HtmlHelper($View);
		$this->Ckeditor = new CkeditorHelper($View);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ckeditor);

		parent::tearDown();
	}

/**
 * testSetOption method
 *
 * @return void
 */
	public function testSetOption() {
		$expected = array('foo' => 1);
		$this->Ckeditor->setOption($expected);
		$actual = $this->Ckeditor->_default;
		$this->assertEqual($expected, $actual);
	}

/**
 * testLoadWithNonOption method
 */
	public function testLoadWithNonOption() {
		$expected = $this->Html->scriptBlock("CKEDITOR.replace( 'foo', {});");
		$actual = $this->Ckeditor->load('foo');
		$this->assertTextEquals($expected, $actual);
	}

/**
 * testLoadWithNonClassify method
 */
	public function testLoadWithNonClassify() {
		$expected = $this->Html->scriptBlock("CKEDITOR.replace( 'foo', {});");
		$actual = $this->Ckeditor->load('foo', array(), false);
		$this->assertTextEquals($expected, $actual);
	}

/**
 * testLoadUno method
 *
 * @return void
 */
	public function testLoadUno() {
		$expected = $this->Html->scriptBlock("CKEDITOR.replace( 'foo', {\"bar\":1});");
		$actual = $this->Ckeditor->load('foo', array('bar' => 1));
		$this->assertTextEquals($expected, $actual);
	}

/**
 * testLoadDos method
 *
 * @return void
 */
	public function testLoadDos() {
		$expected = $this->Html->scriptBlock("CKEDITOR.replace( 'foo', {\"bar\":1,\"baz\":3});");
		$this->Ckeditor->setOption(array('bar' => 1, 'baz' => 2));
		$actual = $this->Ckeditor->load('foo', array('baz' => 3));
		$this->assertTextEquals($expected, $actual);
	}

}
