<?php
	$name = $_GET['prod_name'];
	$desc = $_GET['prod_desc'];
	$qty = $_GET['prod_qty'];
	$price = $_GET['prod_price'];
	$uom = $_GET['uom'];
	
	include('../classes/class.products.php');
	$p = new Product();
	$p->name = $name;
	$p->desc = $desc;
	$p->price = $price;
	$p->qty = $qty;
	$p->uom = $uom;
	if($p->saveProduct()){
		echo "New product saved!";
		header("location: ../public/product_list.php");
	}
	else{
		echo "Failed to saved!";
	}
?>