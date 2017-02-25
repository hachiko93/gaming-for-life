<?php
if (isset ($_GET['unos'])){
$var=$_GET['unos'];

include "connection.php";

$query = "SELECT id_proizvoda, ime FROM proizvodi WHERE ime LIKE '%".$mysqli->real_escape_string($var)."%' ORDER BY ime";

$result = $mysqli->query($query);

if ($result->num_rows==0){
echo "There is no product with the name: " . $mysqli->real_escape_string($var);
} 
else {
while($row = $result->fetch_object()){
	
	?>
<a href="search.php?name=<?php echo $row->ime; ?>"><?php  echo $row->ime;?></a>
<br/>
<?php
}
}
$mysqli->close();
}
?>