<?php
@session_start();
require_once 'model/productsModel.php';
require_once 'model/categoryModel.php';
/**
 *
 */
class productsController {

	function __construct() {
		$this -> catmodel = new categoryModel();

	}

	public function redirect($location) {
		header('Location: ' . $location);
	}

	public function handleRequest() {

		if (isset($_GET['search'])) {
			$this -> searchProducts();

		} else {

			$op = $_GET['op'];

			switch ($op) {
				case 'list' :
					$this -> showProducts();
					break;

				case 'pdesc' :
					$this -> showProduct();
					break;

				case 'bid' :
				 $this -> bidOn();
				 break;

				default :
					break;
			}

		}

	}

	public function showProducts() {
		$cat;
		if (isset($_GET['cat'])) {
			$cat = $_GET['cat'];
		} else {
			$cat = "all";
		}
		$productmodalobj = new productsModel();
		$products = $productmodalobj -> getProducts($cat);
		$menu = $this -> catmodel -> getCategory();
		include 'view/products.php';
	}

	public function showProduct() {
		$pid = $_GET['pid'];
		$productmodalobj = new productsModel();
		$product = $productmodalobj -> getProduct($pid);
		include 'view/product.php';
	}
	
	public function bidOn() {
		$pid = $_GET['pid'];
		$productmodalobj = new productsModel();
		$product = $productmodalobj -> getProduct($pid);
		include 'view/bid.php';
	}
	
	public function searchProducts() {
		$srch = $_GET['srch'];
		$productmodalobj = new productsModel();
		$products = $productmodalobj -> searchProduct($srch);
		$menu = $this -> catmodel -> getCategory();
		include 'view/products.php';
	}

}
?>