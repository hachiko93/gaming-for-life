<?php 
@session_start();

class User{

	public $id_korisnika; 
	public $ime;
	public $prezime;
	public $email;
	public $password;
	public $privilegija;
	public $omeni;

	public function create($data){
		$this->ime = $data['name'];
		$this->prezime = $data['surname'];
		$this->email = $data['email'];
		$this->password = $data['password'];
		$this->privilegija = 1;
		$this->omeni = null;
	}

	public function writeToDb(){
		
		include "connection.php";
		$query="INSERT INTO korisnici (ime, prezime, email, password, privilegija) VALUES ('".$mysqli->real_escape_string($this->ime)."', '".$mysqli->real_escape_string($this->prezime)."', '".$mysqli->real_escape_string($this->email)."', '".$mysqli->real_escape_string($this->password)."', '".$mysqli->real_escape_string($this->privilegija)."')";
		if ($mysqli->query($query))
		{
			?> <script type="text/javascript">
			window.location.href = 'success.php';
			</script>
			<?php
		} 
		else {
			return "<p>There was an error. Please try again later.</p>" . $mysqli->error;
		}

		$mysqli->close();
	}

	public function changePass($new, $old, $mail) {

		include "connection.php";

		$query="SELECT * FROM korisnici WHERE (email='".trim($mail)."' AND password='".trim($old)."')";

		if (!$q=$mysqli->query($query)){
			return "<p>An error has occured. Please try later.</p>";
			exit();
		}
		if ($q->num_rows==1){

			$query2="UPDATE korisnici SET password='".$mysqli->real_escape_string($new)."' WHERE (email='".trim($mail)."' AND password='".trim($old)."')";
			if (!$q2=$mysqli->query($query2)){
				return "<p>An error has occured. Please try later.</p>";
				exit();
			}

			return "Password updated successfully!";
		}

		else
		{
			return "Invalid Password";         
		}
		$mysqli->close();
	}

	public function logIn($mail, $pass){
	include "connection.php";

    $query="SELECT * FROM korisnici WHERE (email='".trim($mail)."' AND password='".trim($pass)."')";

     if (!$q=$mysqli->query($query)){
      return "<p>An error has occured. Please try later.</p>";
      
    }
    if ($q->num_rows==1){
    	$row=$q->fetch_object();
      $_SESSION['use']=$mail;
      $_SESSION['privilegija']=$row->privilegija;
      $_SESSION['id_korisnika']=$row->id_korisnika."";
      ?>
     <script type="text/javascript">
      window.location.href = 'success.html';
      </script>

      <?php 
    }

    else
    {
      return "invalid UserName or Password";        
    }
    $mysqli->close();
	}

	public function findUser($mail){
		include "connection.php";

	    $query="SELECT * FROM korisnici WHERE (email='".trim($mail)."')";

	     if (!$q=$mysqli->query($query)){
	      return "<p>An error has occured. Please try later.</p>";
	      
	    }
	    if ($q->num_rows==1){
	    	return $q;
		}

}
}

?>
