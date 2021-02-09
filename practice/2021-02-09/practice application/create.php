<?php

include_once 'components/header.php';
include_once 'datasource/controller.php';

$obj = new Contact();

if(isset($_POST['insert'])) {
    $obj->insertContact($_POST);
}

?>

<div class="container">
    <br>
    <h2>Create Contacts</h2>
    <hr> 

    <form action="create.php" method="POST" id="addcontact" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" >
            </div>
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" >
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" >
            </div>
            <div class="col">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" name="password2" id="password2" class="form-control" >
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="gender" class="form-label">Gender</label> <br>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender[]" id="male" value="male" class="form-check-input">
                    <label for="Male" class="form-check-label">Male</label> 
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="gender[]" id="female" value="female" class="form-check-input">
                    <label for="female" class="form-check-label">Female</label>
                </div>
                <br><label for="gender[]" class="error" style="display:none;"></label>
            </div>
            <div class="col">
                <label for="maritalstatus" class="form-label">Marital Status</label> <br>
                <div class="form-check form-check-inline">
                    <input type="radio" name="maritalstatus[]" value="married" id="married" class="form-check-input">
                    <label for="male" class="form-check-label">Married</label> 
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="maritalstatus[]" value="unmarried" id="unmarried" class="form-check-input">
                    <label for="female" class="form-check-label">Unmarried</label>
                </div>
                <br><label for="maritalstatus[]" class="error" style="display:none;"></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" rows="3" class="form-control" ></textarea>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="dob" class="form-label">Date of birth</label>
                <input type="date" name="dob" id="dob" class="form-control">
                <!-- <label for="dob" class="form-label">Date of birth</label> <br>
                <select name="date" id="date" class="form-select form-select-sm" >
                    <option value=""selected>date</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select name="month" id="month" class="form-select form-select-sm" >
                    <option value="" selected>month</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select name="year" id="year" class="form-select form-select-sm" >
                    <option value="" selected>year</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br><label for="date" class="error" style="display:none;"></label>
                <label for="month" class="error" style="display:none;"></label>
                <label for="year" class="error" style="display:none;"></label> -->
            </div>
            <div class="col">
                <label for="games" class="form-label">Games</label>
                <br>
                <div class="form-check form-check-inline">    
                    <input type="checkbox" name="game[]" id="cricket" value="cricket" class="form-check-input">
                    <label for="cricket" class="form-check-label">Cricket</label>
                </div>
                <div class="form-check form-check-inline">    
                    <input type="checkbox" name="game[]" id="badminton" value="badminton" class="form-check-input">
                    <label for="cricket" class="form-check-label">Badminton</label>
                </div>
                <div class="form-check form-check-inline">    
                    <input type="checkbox" name="game[]" id="hockey" value="hockey" class="form-check-input">
                    <label for="cricket" class="form-check-label">Hockey</label>
                </div>
                <div class="form-check form-check-inline">    
                    <input type="checkbox" name="game[]" id="football" value="football" class="form-check-input">
                    <label for="cricket" class="form-check-label">Football</label>
                </div>
                <div class="form-check form-check-inline">    
                    <input type="checkbox" name="game[]" id="volleyball" value="volleyball" class="form-check-input">
                    <label for="cricket" class="form-check-label">Volleyball</label>
                </div>
                <br><label for="game[]" class="error" style="display:none;"></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <div class="form-check form-check-inline">    
                    <input type="checkbox" name="terms[]" id="terms" class="form-check-input">
                    <label for="cricket" class="form-check-label" >I accept all the terms & conditions</label>
                </div>
                <br><label for="terms[]" class="error" style="display:none;"></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success" name="insert" id="insert">Create</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </form>
</div>

<?php

include_once 'components/footer.php';

?>