<?php

class Contact
{

    private $mysqli_server = 'localhost';
    private $mysqli_user = 'root';
    private $mysqli_password = '';
    private $mysqli_database = 'training';
    public $con;


    function __construct()
    {
        $this->connection();
    }

    // function to connect with database
    private function connection()
    {
        $this->con = new mysqli($this->mysqli_server, $this->mysqli_user, $this->mysqli_password, $this->mysqli_database);

        if ($this->con->connect_error) {
            return 0;
            exit();
        } else {
            return $this->con;
        }
    }

    // function to insert records
    public function insertContact($post)
    {

        if (
            isset($_REQUEST['fullname']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['gender'])
            && isset($_REQUEST['maritalstatus']) && isset($_REQUEST['address']) && isset($_REQUEST['dob']) && isset($_REQUEST['game'])
            && isset($_FILES['photo'])
        ) {

            $name = $_REQUEST['fullname'];
            $email = $_REQUEST['email'];
            $password = md5($_REQUEST['password']);
            $genders = $_REQUEST['gender'];
            $gender = implode("", $genders);
            $mstatus = $_REQUEST['maritalstatus'];
            $marital_status = implode("", $mstatus);
            $address = $_REQUEST['address'];
            $dob = $_REQUEST['dob'];
            $game = $_REQUEST['game'];
            $games = implode(",", $game);
            $photo = $_FILES['photo']['name'];
            $tempname = $_FILES['photo']['tmp_name'];
            $location = 'uploads/'.$photo;
            move_uploaded_file($tempname, $location);

            if (
                !empty($name) && !empty($email) && !empty($password) && !empty($gender) && !empty($marital_status)
                && !empty($address) && !empty($dob) && !empty($game) && !empty($photo)
            ) {

                $query = "INSERT into rohit (name, email, password, gender, marital_status, address, dob, game, photo)
                 VALUES ('$name','$email','$password','$gender','$marital_status','$address','$dob','$games','$location')";

                $sql = $this->con->query($query);

                if ($sql == true) {
                    header('Location: contacts.php');
                }
            }
        } else {
            echo "ERROR: Could not prepare query: " . $this->con->error;
        }
    }

    // select particular record based on passed id
    public function selectOne($id)
    {
        $query = "SELECT * FROM rohit WHERE id = '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }

    // update record 
    public function updateRecord($post)
    {
        if (
            isset($_REQUEST['fullname']) && isset($_REQUEST['email']) && isset($_REQUEST['gender'])
            && isset($_REQUEST['maritalstatus']) && isset($_REQUEST['address']) && isset($_REQUEST['dob']) && isset($_REQUEST['game'])
        ) {
            $id = $_POST['updateid'];
            $name = $_POST['fullname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $genders = $_POST['gender'];
            $gender = implode("", $genders);
            $mstatus = $_POST['maritalstatus'];
            $marital_status = implode("", $mstatus);
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $game = $_POST['game'];
            $games = implode(",", $game);

            $img_url = $_POST['photourl'];
            $filename = $img_url;

            if($_FILES['photo']['error'] == 0) {
                $photo = $_FILES['photo']['name'];
                $tempname = $_FILES['photo']['tmp_name'];
                $filename = 'uploads/'.$photo;
                $fileuploaded = move_uploaded_file($tempname, $filename);
            }

            if (
                !empty($name) && !empty($email) && !empty($password) && !empty($gender) && !empty($marital_status)
                && !empty($address) && !empty($dob) && !empty($game) 
            ) {

                echo $query = "UPDATE rohit set name='$name', email='$email', gender='$gender', marital_status='$marital_status', 
                address='$address', dob='$dob', game='$games', photo='$filename' where id='$id'";

                $sql = $this->con->query($query);

                if ($sql == true) {

                    if($fileuploaded) {
                        unlink($img_url);
                    }

                    header("Location: contacts.php");
                } else {
                    echo "Registration updated failed try again!";
                }
            }
        }
    }

    // delete single record
    public function deleteRecord($id)
    {
        $query = "DELETE from rohit where id = " . $id . "";
        $sql =  $this->con->query($query);
        if ($sql == true) {
            echo 1;
            exit;
        } else {
            echo 0;
            exit;
        }
    }
}
