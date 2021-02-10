<?php
session_start();
date_default_timezone_set('Asia/calcutta');
class Blog
{

    private $mysqli_server = 'localhost';
    private $mysqli_user = 'root';
    private $mysqli_password = '';
    private $mysqli_database = 'phptest';
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
            echo 'connection failed';
        } else {
            return $this->con;
        }
    }

    // function to insert records
    public function registerUser($post)
    {

        if (
            isset($_POST['prefix']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['mobilenumber'])
            && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['information'])
        ) {

            $prefix = $_POST['prefix'];
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $mobile = $_POST['mobilenumber'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $password2 = md5($_POST['password2']);
            $information = $_POST['information'];
            $last_login_at = date('Y-m-d H:i:s:u');
            $created_at = date('Y-m-d H:i:s:u');

            if (
                !empty($prefix) && !empty($fname) && !empty($lname) && !empty($mobile) && !empty($email)
                && !empty($password) && !empty($password2) && !empty($information)
            ) {
                $query = "SELECT * from user where email = '".$email."'";
                $result = $this->con->query($query);
            
                if($result->num_rows > 0) {
                    $_SESSION['emailmessage']="email already exist";
                }
                else {
                    $query = "INSERT into user (prefix, first_name, last_name, mobile, email, password, information, last_login_at, created_at)
                    VALUES ('$prefix','$fname','$lname','$mobile','$email','$password','$information','$last_login_at','$created_at')";

                    $result = $this->con->query($query);

                    if ($result == true) {
                        $_SESSION['user_email'] = $email;
                        $query = "select * from user where email='".$email."'";
                        $result = $this->con->query($query);
                        if($result->num_rows == 1) {
                            $row = $result->fetch_assoc();
                            $_SESSION['user_id'] = $row['id'];
                            header('Location: blogposts.php');
                        }
                    }
                }     
            }
        } else {
            echo 'sorry';
        }
    }

    // login user
    public function loginUser($post)
    {   
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            if(!empty($email) && !empty($password)) {

                $query = "select * from user where email='".$email."' and password = '".$password."'";
                $result = $this->con->query($query);
                if($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $_SESSION['loginmessage']="Logged in successfully";
                    $_SESSION['user_email'] = $email;
                    $_SESSION['user_id'] = $row['id'];
                    $last_login_at = date('Y-m-d H:i:s:u');
                    $query = "update user set last_login_at = '".$last_login_at."' where id = ".$row['id']."";
                    $result = $this->con->query($query);
                    if($result == true) {
                        header('Location: blogposts.php');
                    } 
                }
                else {
                    $_SESSION['loginerrormessage']="Please enter correct details";
                }
            }
        }
    }


    // get all parent categories 
    public function getParentCategories() {
        $query = "select * from parent_category";
        $result = $this->con->query($query);
        if($result->num_rows > 0) {
            $data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
        }else {
            echo 'sorry, no categories';
        }
    }


    // add category
    public function addCategory($post)
    {
        if (
            isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['meta_title'])
            && isset($_POST['parent_category'])
        ) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $url = $_POST['url'];
            $meta_title = $_POST['meta_title'];
            $parent_category = $_POST['parent_category'];
            $created_at = date('Y-m-d H:i:s');
            $photo = $_FILES['category_image']['name'];
            $tempname = $_FILES['category_image']['tmp_name'];
            $location = 'uploads/'.$photo;
            move_uploaded_file($tempname, $location);

            if (
                !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) && !empty($_POST['meta_title'])
                && !empty($_POST['parent_category']) && !empty($_FILES['category_image']) 
            ) {
                echo $query = "insert into category (parent_category_id, title, meta_title, url, image, content, created_at)
                values ($parent_category,'$title','$meta_title','$url','$location','$content','$created_at')";

                $result = $this->con->query($query);
                if ($result == true) {
                    header('Location: manage_category.php');
                }
                else {
                    echo 'something went wrong';
                }
            }
        }
        else 
        {
            echo "no";
        }

    }

    // select one record from category
    public function selectCategory($id)
    {
        $query = "SELECT * FROM category WHERE category_id = '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }

    // delete category
    public function deleteRecord($id)
    {
        echo $query = "DELETE from category where category_id = " . $id . "";
        $sql =  $this->con->query($query);
        if ($sql == true) {
            echo 1;
        } else {
            echo 0;
            exit;
        }
    }

    // update category 
    public function updateCategory($post)
    {
        if (
            isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['meta_title'])
            && isset($_POST['parent_category'])
        ) {
            $id = $_POST['updateid'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $url = $_POST['url'];
            $meta_title = $_POST['meta_title'];
            $parent_category = $_POST['parent_category'];
            $updated_at = date('Y-m-d H:i:s');

            $img_url = $_POST['photourl'];
            $filename = $img_url;

                if($_FILES['category_image']['error'] == 0) {
                    $photo = $_FILES['category_image']['name'];
                    $tempname = $_FILES['category_image']['tmp_name'];
                    $filename = 'uploads/'.$photo;
                    $fileuploaded = move_uploaded_file($tempname, $filename);
                }       

            if (
                !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) && !empty($_POST['meta_title'])
                && !empty($_POST['parent_category']) && !empty($_FILES['category_image']) 
            ) {
                echo $query = "update category set parent_category_id = $parent_category, title = '$title', meta_title = '$meta_title', url = '$url',
                image = '$filename', content = '$content' , updated_at = '$updated_at' where category_id ='$id'";

                $result = $this->con->query($query);
                if ($result == true) {
                    if($fileuploaded) {
                        unlink($img_url);
                    }
                    header('Location: manage_category.php');
                }
                else {
                    echo 'something went wrong';
                }
            }
        }
    }


    // select particular record based on passed id for profile
    public function selectOne($id)
    {
        $query = "SELECT * FROM user WHERE id = '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }


    // add category
    public function addPost($post)
    {
        if (
            isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url'])
        ) {
            
            $userid = $_SESSION['user_id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $url = $_POST['url'];
            $created_at = date('Y-m-d H:i:s');
            $photo = $_FILES['blog_image']['name'];
            $tempname = $_FILES['blog_image']['tmp_name'];
            $location = 'blogimgs/'.$photo;
            move_uploaded_file($tempname, $location);
            $published = date('Y-m-d H:i:s');
            $category = $_POST['category'];

            if (
                !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['url']) &&!empty($_FILES['blog_image']) 
            ) {
                echo $query = "insert into post (userid, title, url,content, image, published_at,category, created_at)
                values ($userid,'$title','$url','$content','$location','$published','$category','$created_at')";

                $result = $this->con->query($query);
                if ($result == true) {
                    header('Location: blogposts.php');
                }
                else {
                    echo 'something went wrong';
                }
            }
        }
        else 
        {
            echo "no";
        }

    }


    public function deleteBlog($id)
    {
        echo $query = "DELETE from post where id = " . $id . "";
        $sql =  $this->con->query($query);
        if ($sql == true) {
            echo 1;
        } else {
            echo 0;
            exit;
        }
    }

    // // get all parent categories 
    // public function getCategories() {
    //     $query = "select * from parent_category";
    //     $result = $this->con->query($query);
    //     if($result->num_rows > 0) {
    //         $data = array();
	// 		while ($row = $result->fetch_assoc()) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
    //     }else {
    //         echo 'sorry, no categories';
    //     }
    // }
}
    

