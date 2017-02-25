<?php 
	
	$product_array = [
		'product_id' => $_POST['product_id'],
		'quantity'	=> $_POST['quantity'],
	];

	session_start();

	if(is_array($_SESSION['cart'])){
		array_push($_SESSION['cart'], $product_array);
	}
	else{
		$_SESSION['cart'][] = $product_array;
	}

	echo json_encode($product_array);
	?>