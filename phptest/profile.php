<?php
include_once 'controller/controller.php';

if ($_SESSION['user_email'] == '' && $_SESSION['user_id'] == '') {
    header('Location: index.php');
}

$id = $_SESSION['user_id'];

$obj = new Blog();

$profile = $obj->selectOne($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery file -->
    <script src="js/jquery.js"></script>
    <!-- css for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog Application</title>
</head>

<body>

    <div class="container">
        <br>
        <button type="button" class="btn btn-success" onclick="location.href='blogposts.php'">Manage Blogpost</button>
        <button type="button" class="btn btn-success" onclick="location.href='manage_category.php'">Manage Category</button>
        <button type="button" class="btn btn-info" onclick="location.href='profile.php'">My Profile</button>
        <button type="button" class="btn btn-danger" onclick="location.href='logout.php'">Logout</button>
        <br><br>
        <h2>Profile</h2>
        <hr>
        <div class="row">
            <div class="col">
                <label for="fullname" class="form-label">Full Name</label> <br>
                <label class="form-label"><strong><?php echo $profile['prefix'] . ' ' . $profile['first_name'] . ' ' . $profile['last_name']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Mobile</label> <br>
                <label class="form-label"><strong><?php echo $profile['mobile']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Email</label> <br>
                <label class="form-label"><strong><?php echo $profile['email']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Information</label> <br>
                <label class="form-label"><strong><?php echo $profile['information']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Last Login At</label> <br>
                <label class="form-label"><strong><?php echo $profile['last_login_at']; ?></strong></label>
            </div>
        </div> <br>