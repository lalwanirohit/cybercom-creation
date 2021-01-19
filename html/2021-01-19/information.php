<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info.css">
    <title>Information</title>
</head>
<body>
    
<?php

        if (empty($_POST['lastname']  || $_POST['gender'] || $_POST['month'] || $_POST['day'] || $_POST['year'] || $_POST['email'] || $_POST['address'] || $_POST['city'] || $_POST['state'] || $_POST['zip'])) {
            $lastname = "";  
            $gender = "";      
            $security_answer="";
            $address="";
            $city="";
            $state="";
            $zip="";
            $month=1;
            $day=1;
            $year = 1999;
        }
        else{
            $firstName = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $dob = '' . $_POST['month'] . $_POST['date'] . $_POST['year'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $security_question = $_POST['secque'];
            $security_answer = $_POST['secans'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $phone = $_POST['phone'];
        }
?>

<div class="content">
    <fieldset>
        <legend><b>Personal Information</b></legend>
        <table>
            <tr>
                <td><label>First Name</label></td>
                <td><b>
                        <?php echo $firstName ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Last Name</label></td>
                <td><b>
                        <?php echo $lastname ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Date Of Birth</label></td>
                <td><b>
                        <?php echo $dob ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td><b>
                        <?php echo $gender ?>
                    </b></td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend><b>Account Information</b></legend>
        <table>
            <tr>
                <td><label>Email</label></td>
                <td><b>
                        <?php echo $email ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><b>
                        <?php echo $password ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Security Question</label></td>
                <td><b>
                        <?php echo $security_question ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Security Answer</label></td>
                <td><b>
                        <?php echo $security_answer ?>
                    </b></td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend><b>Contact Information</b></legend>
        <table>
            <tr>
                <td><label>Address</label></td>
                <td><b>
                        <?php echo $address ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>City</label></td>
                <td><b>
                        <?php echo $city ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>State</label></td>
                <td><b>
                        <?php echo $state ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Zip Code</label></td>
                <td><b>
                        <?php echo $zip ?>
                    </b></td>
            </tr>
            <tr>
                <td><label>Phone</label></td>
                <td><b>
                        <?php echo $phone ?>
                    </b></td>
            </tr>
        </table>
    </fieldset>
</div>
</body>
</html>