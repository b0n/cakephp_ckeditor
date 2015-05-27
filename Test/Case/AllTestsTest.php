<?php
class AllTestsTest extends PHPUnit_Framework_TestSuite {

/**
 * suite
 *
 * @return CakeTestSuite
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Ckeditor tests');
		$suite->addTestDirectoryRecursive(CakePlugin::path('Ckeditor') . 'Test' . DS . 'Case' . DS);
		return $suite;
	}

}
