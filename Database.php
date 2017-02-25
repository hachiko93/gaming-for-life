<?php
class Database
{
private $hostname="localhost";
private $username="root";
private $password="";
private $dbname;
private $dblink; 
private $result; 
private $records; 
private $affected; 
function __construct($dbname)
{
$this->dbname = $dbname;
                $this->Connect();
}
public function getResult()
{
return $this->result;
}
function Connect()
{
$this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
if ($this->dblink ->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$this->dblink->set_charset("utf8");
}
function select ($table="proizvodi", $rows = 'ime, tekst, slika, cena, tip, zanr', $where = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
	    if($where != null)  
            $q .= ' WHERE '.$where;  
  				
$this->ExecuteQuery($q);
}

function insert ($table="proizvodi", $rows = "ime, tekst, slika, cena, tip, zanr", $values)
{
$query_values = implode(',',$values);
$insert = 'INSERT INTO '.$table;  
            if($rows != null)  
            {  
                $insert .= ' ('.$rows.')';   
            }  
			$insert .= ' VALUES ('.$query_values.')';
			
if ($this->ExecuteQuery($insert))
return true;
else return false;
}
function update ($table="proizvodi", $id, $keys, $values)
{
$set_query = array();
for ($i=0; $i<sizeof($keys);$i++){
	$set_query[] = $keys[$i] . " = '".$values[$i]."'";
	}
	$set_query_string = implode(',',$set_query);


$update = "UPDATE ".$table." SET ". $set_query_string ." WHERE id=". $id;
if (($this->ExecuteQuery($update)) && ($this->affected >0))
return true;
else return false;
}
function delete ($table="proizvodi",  $keys, $values)
{
$delete = "DELETE FROM ".$table." WHERE ".$keys[0]." = '".$values[0]."'";

if ($this->ExecuteQuery($delete))
return true;
else return false;
}


function ExecuteQuery($query)
{
if($this->result = $this->dblink->query($query)){
if (isset($this->result->num_rows)) $this->records         = $this->result->num_rows;
if (isset($this->dblink->affected_rows)) $this->affected        = $this->dblink->affected_rows;

return true;
}
else
{
return false;
}
}


}
?>
