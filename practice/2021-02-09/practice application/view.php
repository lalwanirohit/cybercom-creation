<?php

require 'components/header.php';
require 'datasource/controller.php';

$obj = new Contact();

if (isset($_GET['viewid']) && !empty($_GET['viewid'])) {
    $viewid = $_GET['viewid'];
    $contact = $obj->selectOne($viewid);
}

?>

<div class="container">
    <br>
    <h2>View Contact # <?php echo $contact['id']; ?> Details</h2>
    <hr>
    <div class="row">
            <div class="col">
                <label for="games" class="form-label">Photo</label> <br>
                <img src="<?php echo $contact['photo']; ?>" height="200px"></img>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="fullname" class="form-label">Full Name</label> <br>
                <label class="form-label"><strong><?php echo $contact['name']; ?></strong></label>
            </div>
            <div class="col">
                <label for="email" class="form-label">Email</label> <br>
                <label class="form-label"><strong><?php echo $contact['email']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="gender" class="form-label">Gender</label> <br>
                <label class="form-label"><strong><?php echo $contact['gender']; ?></strong></label>
            </div>
            <div class="col">
                <label for="maritalstatus" class="form-label">Marital Status</label> <br>
                <label class="form-label"><strong><?php echo $contact['marital_status']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="address" class="form-label">Address</label> <br>
                <label class="form-label"><strong><?php echo $contact['address']; ?></strong></label>
            </div>
        </div> <br>
        <div class="row">
            <div class="col">
                <label for="dob" class="form-label">Date of birth</label> <br>
                <label class="form-label"><strong><?php echo $contact['dob']; ?></strong></label>
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
                <label for="games" class="form-label">Games</label> <br>
                <label class="form-label"><strong><?php echo $contact['game']; ?></strong></label>
            </div>
        </div> <br>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success" onclick="location.href='contacts.php'">Back</button>
            </div>
                    </div>
</div>

<?php

include_once 'components/footer.php';

?>