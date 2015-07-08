<?php
	require('inc/connection.inc');
	class Product {
		public $id;
		public $name;
		public $desc;
		public $qty;
		public $price; 
		public $uom;
		public $is_act = 1;
		function __construct() {
		$is_act = 1;
		}
		
		function saveProduct(){
			$sql = "INSERT INTO products VALUES (NULL,
			'". $this->name ."',
			'".$this->desc ."',
			".$this->qty .",
			".$this->price.",
			'".$this->uom."',
			".$this->is_act.")";
			return Database::$conn->query($sql);
		}
		
		function loadProducts(){
			$sql = "SELECT * FROM products WHERE is_active = 1;";
			$result = Database::$conn->query($sql);
			$ret_val = array();
			if($result->num_rows > 0){
				while($row = $result->fetch_array()){
					$p = new Product();
					$p->id = $row['prod_id'];
					$p->name = $row['prod_name'];
					$p->desc = $row['prod_desc'];
					$p->qty = $row['prod_qty'];
					$p->price = $row['prod_price'];
					$p->uom = $row['prod_uom'];
					$ret_val[] = $p;
				}
				
			}
			return $ret_val;
		}
	}
?>