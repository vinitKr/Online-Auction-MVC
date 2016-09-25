<?php
session_start();
require_once 'model/homeModel.php';
require_once 'model/categoryModel.php';
/**
 *
 */
class homeController {

	function __construct() {
		$this -> catmodel = new categoryModel();
	}

	public function showHome() {
		$menu = $this -> catmodel -> getCategory();
		include 'view/home.php';
	}

	public function handleRequest() {
		$this -> showHome();
	}

}
?>