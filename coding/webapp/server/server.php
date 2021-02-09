<?php

date_default_timezone_set('Asia/calcutta');

class Contact {

    private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "";
	private $database 	= "training";
	public  $con;


	// Database Connection 
	public function __construct()
	{
		$this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		if(mysqli_connect_error()) {
			trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		}else{
			return $this->con;
		}
	}

    // fetch contact data from contacts table
    // public function selectAll() {
    //     $query = "SELECT * FROM contacts";
    //     $result = $this->con->query($query);
    //     if($result->num_rows > 0) {
    //         $data = array();
    //         while($row = $result->fetch_array()) {
    //             $data[] = $row;
    //         }
    //         return $data;
    //     } else {
    //         echo 'there are no records in table';
    //     }
    // }


    // Insert contact data into contacts table
    public function insertContact($post)
    {
        $name = $this->con->real_escape_string($_POST['name']);
        $email = $this->con->real_escape_string($_POST['email']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        $title = $this->con->real_escape_string($_POST['title']);
        $created_at = date('d/m/Y  h:i:sa');
        
        $query="INSERT INTO contacts (contact_name, contact_email, contact_phone, contact_title, created_at) VALUES ('$name','$email','$phone','$title','$created_at')";
        $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location: contacts.php");

        }else{
            echo "Registration failed try again!";
        }
    }

    // Fetch single data for edit from contacts table
    public function displyaRecordById($editid)
    {
        $query = "SELECT * FROM contacts WHERE contact_id = '$editid'";
        $result = $this->con->query($query);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        }else{
            echo "Record not found";
        }
    }

    // Update contact data into contacts table
    public function updateConatct($postData)
    {
        $id = $this->con->real_escape_string($_POST['updateid']);
        $name = $this->con->real_escape_string($_POST['name']);
        $email = $this->con->real_escape_string($_POST['email']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        $title = $this->con->real_escape_string($_POST['title']);
        $updated_at = date('d/m/Y  h:i:sa');
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE contacts SET contact_name = '$name', contact_email = '$email', contact_phone = '$phone' , contact_title = '$title' , updated_at = '$updated_at' WHERE contact_id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location: contacts.php");
            }else{
                echo "Registration updated failed try again!";
            }
        }
        
    }   
    
    // delete single record
    function deleteRecord($id) {
        $query = "DELETE from contacts where contact_id = ".$id. "";
        $sql =  $this->con->query($query);
        if($sql==true) {
            echo 1;
            exit;
        }
        else {
            echo 0;
            exit;
        }
    }
}

?>