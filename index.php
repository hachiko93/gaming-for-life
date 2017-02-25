<?php
require 'flight/Flight.php';
require 'jsonindent.php';

$_GET["json_podaci"]='{
          "ime": "Donald Duck",
          "tekst": "Duckburg",
          "slika": "/koja god",
          "cena": 55,
          "tip": 1,
          "zanr": "fps"
        }'; 

Flight::register('db', 'Database', array('internet-prodavnica'));
$json_podaci = file_get_contents("php://input");
Flight::set('json_podaci', $json_podaci );

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('GET /proizvodi.json', function(){
	header ("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$db->select();
	$niz=array();
	while ($red=$db->getResult()->fetch_object()){
		$niz[] = $red;
	}
	$json_niz = json_encode ($niz,JSON_UNESCAPED_UNICODE);
	echo indent($json_niz);
	return false;

});
Flight::route('POST /proizvodi', function(){
	header ("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$podaci_json = Flight::get("json_podaci");
	$podaci = json_decode ($podaci_json);
	if ($podaci == null){
	$odgovor["poruka"] = "Niste prosledili podatke";
	$json_odgovor = json_encode ($odgovor);
	echo $json_odgovor;
	return false;
	} else {
	if (!property_exists($podaci,'ime')||!property_exists($podaci,'tekst')||!property_exists($podaci,'slika')||!property_exists($podaci,'cena')||!property_exists($podaci,'tip')||!property_exists($podaci,'zanr')){
			$odgovor["poruka"] = "Niste prosledili korektne podatke";
			$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
			echo $json_odgovor;
			return false;
	
	} else {
			$podaci_query = array();
			foreach ($podaci as $k=>$v){
				$v = "'".$v."'";
				$podaci_query[$k] = $v;
			}
			if ($db->insert("proizvodi", "ime, tekst, slika, cena, tip, zanr", array($podaci_query["ime"], $podaci_query["tekst"], $podaci_query["slika"], $podaci_query["cena"], $podaci_query["tip"], $podaci_query["zanr"]))){
				$odgovor["poruka"] = "Proizvod je uspešno ubačen";
				$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
				echo $json_odgovor;
				return false;
			} else {
				$odgovor["poruka"] = "Došlo je do greške pri ubacivanju proizvoda";
				$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
				echo $json_odgovor;
				return false;
			}
	}
	}	
	

});
Flight::route('PUT /proizvodi/@id', function($id){
	header ("Content-Type: application/json; charset=utf-8");
	$db = Flight::db();
	$podaci_json = Flight::get("json_podaci");
	$podaci = json_decode ($podaci_json);
	if ($podaci == null){
	$odgovor["poruka"] = "Niste prosledili podatke";
	$json_odgovor = json_encode ($odgovor);
	echo $json_odgovor;
	} else {
	if (!property_exists($podaci,'ime')||!property_exists($podaci,'tekst')||!property_exists($podaci,'slika')||!property_exists($podaci,'cena')||!property_exists($podaci,'tip')||!property_exists($podaci,'zanr')){
			$odgovor["poruka"] = "Niste prosledili korektne podatke";
			$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
			echo $json_odgovor;
			return false;
	
	} else {
			$podaci_query = array();
			foreach ($podaci as $k=>$v){
				$v = "'".$v."'";
				$podaci_query[$k] = $v;
			}
			if ($db->update("proizvodi", $id, array('ime','tekst','slika', 'cena', 'tip', 'zanr'),array($podaci->ime, $podaci->tekst, $podaci->slika, $podaci->cena, $podaci->tip, $podaci->zanr))){
				$odgovor["poruka"] = "Proizvod je uspešno izmenjen";
				$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
				echo $json_odgovor;
				return false;
			} else {
				$odgovor["poruka"] = "Došlo je do greške pri izmeni proizvoda";
				$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
				echo $json_odgovor;
				return false;
			}
	}
	}

});
Flight::route('DELETE /proizvodi/@ime', function($name){
	header ("Content-Type: application/json; charset=utf-8");
		$db = Flight::db();
		if ($db->delete("proizvodi", array("ime"),array($name))){
				$odgovor["poruka"] = "Proizvod je uspešno izbrisana";
				$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
				echo $json_odgovor;
				return false;
		} else {
				$odgovor["poruka"] = "Došlo je do greške prilikom brisanja proizvoda";
				$json_odgovor = json_encode ($odgovor,JSON_UNESCAPED_UNICODE);
				echo $json_odgovor;
				return false;
		
		}	

});


Flight::start();
?>
