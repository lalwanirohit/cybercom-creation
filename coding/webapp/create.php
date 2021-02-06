<?php 

require 'components/header.php';
require 'server/server.php';

$contact = new Contact();

if(isset($_POST['submit'])) {
    $contact->insertContact($_POST);
}

?>
            
    <div class="content_heading">
        <h2>Create Contact</h2> <br>
        <hr> <br>
    </div>
    <div class="content_form">
        <form action="create.php" method="post" id="create_form" name="create_form">

            <table>
                <tbody>
                    <tr>
                        <td><label for="id">ID</label> <br> <input type="text" name="id" id="id" value="auto" disabled></td>
                        <td><label for="name">Name</label> <br>  <input type="text" name="name" id="name" placeholder="Ex. Rohit Sharma"></td>
                    </tr>
                    <tr>
                        <td><label for="id">Email</label> <br> <input type="email" name="email" id="email" placeholder="Ex. rohitsharma@email.com"></td>
                        <td><label for="name">Phone</label> <br> <input type="text" name="phone" id="phone" placeholder="Ex. 8320247191"></td>
                    </tr>
                    <tr>
                        <td><label for="id">Title</label> <br> <input type="text" name="title" id="title" placeholder="Ex. Employee"></td>
                        <td><label for="name">Created</label> <br> <input type="text" name="created_at" id="created_at" value="<?php echo date('d/m/Y  h:i:sa'); ?>" disabled></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <button type="submit" name="submit">Create</button>
        </form>
    </div>

<?php

require 'components/footer.php';

?>