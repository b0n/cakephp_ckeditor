<?php
App::uses('AppHelper', 'Helper');

class CkeditorHelper extends AppHelper {

/**
 * @var array
 */
	protected  $_default = array();

/**
 * @var array
 */
	public $helpers = array(
		'Html',
		'Js'
	);

/**
 * @param View $View
 * @param array $settings
 */
	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);
		$this->_default = Set::merge($this->_default, $settings);
	}

/**
 * @param array $option
 */
	public function setOption($option = array()) {
		$this->_default = $option;
	}

/**
 * @param $id
 * @param array $options
 * @return mixed
 */
	public function load($id, $options = array()) {
		$options = Set::merge($this->_default, $options);
		$code = "CKEDITOR.replace( '$id', " . $this->Js->object((object)$options) . ");";
		return $this->Html->scriptBlock($code);
	}

}
