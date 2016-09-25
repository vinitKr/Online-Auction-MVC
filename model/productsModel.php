<?php

/**
 *
 */
require_once 'config.php';
class productsModel {

	function __construct() {
		$this -> conset = new config();
	}

	public function openDB() {
		$this -> conn = new mysqli($this -> conset -> servername, $this -> conset -> username, $this -> conset -> password, $this -> conset -> dbname);
		if ($this -> conn -> connect_error) {
			die("Connection failed: " . $this -> conn -> connect_error);
		}
	}

	public function closeDB() {
		$this -> conn -> close();
	}

	public function getProducts($cat) {
		$this -> openDB();
		if ($cat == "all") {
			$stmt = $this -> conn -> prepare("SELECT * FROM addproducts");
		} else {
			$stmt = $this -> conn -> prepare("SELECT * FROM addproducts WHERE cid = ?");
			$stmt -> bind_param("i", $cat);
		}
		$stmt -> execute();
		$res = $stmt -> get_result();
		$this -> closeDB();
		$products = array();
		while ($row = $res -> fetch_object()) {
			$products[] = $row;
		}
		return $products;
	}

	public function getProduct($id) {
		$this -> openDB();
		$stmt = $this -> conn -> prepare("SELECT * FROM addproducts WHERE pid = ?");
		$stmt -> bind_param("i", $id);
		$stmt -> execute();
		$res = $stmt -> get_result();
		$this -> closeDB();
		return $res -> fetch_object();

	}
		
	public function searchProduct($name) {
		$this -> openDB();
		$stmt = $this -> conn -> prepare("SELECT * FROM addproducts WHERE title LIKE ?");
		$name = "%".$name."%";
		$stmt -> bind_param("s", $name);
		$stmt -> execute();
		$res = $stmt -> get_result();
		$this -> closeDB();
		$products = array();
		while ($row = $res -> fetch_object()) {
			$products[] = $row;
		}
		return $products;
	}


}
?>