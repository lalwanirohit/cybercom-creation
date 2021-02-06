<?php 

require 'components/header.php';
require 'server/server.php';

$contactobj = new Contact(); 

?>
    <div class="content_heading">
        <h2>Read Contacts</h2> <br>
        <hr> <br>
        <button type="submit" onclick="location.href = 'create.php';">Create Contact</button>
        <small>
            <?php
                if (isset($_GET['msg1']) == "insert") {
                    echo 'Inserted Successfully.';
                    header('Location: contacts.php');
                }
            ?>
        </small>
    </div>
    <div class="content_table">
        <div id="message"></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($contacts = $contactobj->selectAll()) {
                        foreach($contacts as $contact) {
                    
                ?>

                <tr>
                    <td><?php echo $contact['contact_id']; ?></td>
                    <td><?php echo $contact['contact_name']; ?></td>
                    <td><?php echo $contact['contact_email']; ?></td>
                    <td><?php echo $contact['contact_phone']; ?></td>
                    <td><?php echo $contact['contact_title']; ?></td>
                    <td><?php echo $contact['created_at']; ?></td>
                    <td><?php echo $contact['updated_at']; ?></td>
                    <td><a href="update.php?editid=<?php echo $contact['contact_id'];?>" id="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="delete.php?deleteid=<?php echo $contact['contact_id'];?>" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php } }else {
                    echo ""; }?>
            </tbody>
        </table>    

    </div>
<?php

require 'components/footer.php';

?>



