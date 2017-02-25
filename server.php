<?php if(isset($_GET['combo'])){ ?>
<?php if($_GET['combo']=="genre"){ ?>
<?php
@session_start();
header("Content-type: application/json");?>{"games":<?php
require_once "connection.php";
$sql="SELECT zanr FROM kupio RIGHT JOIN proizvodi ON id_igrice=id_proizvoda WHERE (id_korisnika='".$_SESSION['id_korisnika']."' AND tip='1')";
if (!$q=$mysqli->query($sql)){
echo '{"Error":"Query not executed."}';
exit();
} else {
if ($q->num_rows>0){
$array = array();
while ($row=$q->fetch_object()){
$array[] = $row;
}
$array_json = json_encode ($array);
print ($array_json);
} else {
echo '{"Error":"No results."}';
}
}
?>}
<?php } } ?>

<?php if(isset($_GET['combo'])){ ?>
<?php if($_GET['combo']=="price"){ ?>
<?php
@session_start();
header("Content-type: application/json");?>{"games":<?php
require_once "connection.php";
$sql="SELECT ime, cena FROM kupio RIGHT JOIN proizvodi ON id_igrice=id_proizvoda WHERE id_korisnika='".$_SESSION['id_korisnika']."'";
if (!$q=$mysqli->query($sql)){
echo '{"Error":"Query not executed."}';
exit();
} else {
if ($q->num_rows>0){
$array = array();
while ($row=$q->fetch_object()){
$array[] = $row;
}
$array_json = json_encode ($array);
print ($array_json);
} else {
echo '{"Error":"No results."}';
}
}
?>}
<?php } } ?>