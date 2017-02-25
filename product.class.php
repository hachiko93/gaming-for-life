<?php 

class Product{

	public $id_proizvoda; 
	public $ime;
	public $tekst;
	public $slika;
	public $cena;
	public $tip;

	public function create($data){
		$this->ime = $data['name'];
		$this->tekst = $data['description'];
		$this->slika = $data['image'];
		$this->cena = $data['price'];
		$this->tip = $data['type'];
	}

	public function writeToDb(){
		include "connection.php";

		$query="INSERT INTO proizvodi (ime, tekst, slika, cena, tip) VALUES ('".$mysqli->real_escape_string($this->ime)."', '".$mysqli->real_escape_string(strip_tags($this->tekst))."', '".$mysqli->real_escape_string($this->slika)."', '".$mysqli->real_escape_string($this->cena)."', '".$mysqli->real_escape_string($this->tip)."')";
		if ($mysqli->query($query))
		{
			return "Product successfully added.";
		} 
		else {
			return "<p>There was an error. Please try again later.</p>" . $mysqli->error;
		}

		$mysqli->close();
		
	}

	public function deleteProduct($product_name){
		include "connection.php";
		$query="DELETE FROM proizvodi WHERE ime='".$product_name."'";

		if (!$q=$mysqli->query($query)){
			return "<p>An error has occured. Please try later.</p>";
			exit();
		}else {
			return "Product successfully deleted!";
		}
	}

	public function findType ($type){
		include "connection.php";

		$query="SELECT * FROM proizvodi WHERE (tip=".$type.")";
		if (!$q=$mysqli->query($query)){
			return "<p>There was an error. Please try again later</p>";
			exit();
		}
		if ($q->num_rows==0){
			return "There are no games in the store";
		} else {
			return $q;
		}
		$mysqli->close();
	}

	
		
}