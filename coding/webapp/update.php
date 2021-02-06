<?php 

require 'components/header.php';
require 'server/server.php';

$contactObj = new Contact();

if(isset($_GET['editid']) && !empty($_GET['editid'])) {
    $editid = $_GET['editid'];
    $contact = $contactObj->displyaRecordById($editid);
}

if(isset($_POST['update'])) {
    $contactObj->updateConatct($_POST);
  }  

?>

    <div class="content_heading">
        <h2>Update Contact # <?php echo $contact['contact_id']; ?> </h2> <br>
        <hr>
    </div>

    <div class="content_form">
        <form action="update.php" method="post" id="update_form" name="update_form">

            <table>
                <tbody>
                    <tr>
                        <td><label for="id">ID</label> <br> <input type="text" name="id" id="id" value="<?php echo $contact['contact_id']; ?>" disabled></td>
                        <td><label for="name">Name</label> <br>  <input type="text" name="name" id="name" value="<?php echo $contact['contact_name']; ?>" placeholder="Ex. Rohit Sharma"></td>
                    </tr>
                    <tr>
                        <td><label for="id">Email</label> <br> <input type="email" name="email" id="email" value="<?php echo $contact['contact_email']; ?>" placeholder="Ex. rohitsharma@email.com"></td>
                        <td><label for="name">Phone</label> <br> <input type="text" name="phone" id="phone" value="<?php echo $contact['contact_phone']; ?>" placeholder="Ex. 8320247191"></td>
                    </tr>
                    <tr>
                        <td><label for="id">Title</label> <br> <input type="text" name="title" id="title" value="<?php echo $contact['contact_title']; ?>" placeholder="Ex. Employee"></td>
                        <td><label for="name">Created</label> <br> <input type="text" name="created_at" id="created_at" value="<?php echo $contact['created_at']; ?>" disabled></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <input type="hidden" name="updateid" value="<?php echo $contact['contact_id']; ?>">
            <button type="submit" name="update">Update Contact</button>
        </form>
    </div>

<?php

require 'components/footer.php';

?>
       