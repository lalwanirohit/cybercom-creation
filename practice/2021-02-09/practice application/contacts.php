<?php

include_once 'components/header.php';
include_once 'datasource/controller.php';

$obj = new Contact();

?>

<div class="container">

    <script>
        $(document).ready(function(){
            //delete
            $('.delete').click(function() {
                var el = this;

                // delete id
                var deleteid = $(this).data('id');

                $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response) {
                        if(response==1){
                            //remove row from html table
                            $(el).closest('tr').fadeOut(800, function() {
                                $(this).remove();
                            });
                        } else {
                            alert('invalid id');
                        }
                    }
                });
            });
        });
    </script>


    <br>
    <h2>Read Contacts</h2>
    <hr>
    <button type="button" class="btn btn-success" onclick="location.href='create.php'">Create Contact</button><br><br>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Address</th>
                <th scope="col">DOB</th>
                <th scope="col">Games</th>
                <th scope="col">Photo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php

            //define total number of results you want per page  
            $results_per_page = 5;

            //find the total number of results stored in the database  
            $query = "select * from rohit";
            $result = mysqli_query($obj->con, $query);
            $number_of_result = mysqli_num_rows($result);

            //determine the total number of pages available  
            $number_of_page = ceil($number_of_result / $results_per_page);

            //determine which page number visitor is currently on  
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            //determine the sql LIMIT starting number for the results on the displaying page  
            $page_first_result = ($page - 1) * $results_per_page;

            //retrieve the selected results from database   
            $query = "SELECT *FROM rohit LIMIT " . $page_first_result . ',' . $results_per_page;
            $result = mysqli_query($obj->con, $query);

            //display the retrieved result on the webpage  
            while ($contact = mysqli_fetch_array($result)) {  ?>
                <tr>
                    <th scope="row"><?php echo $contact['id']; ?></th>
                    <td><?php echo $contact['name']; ?></td>
                    <td><?php echo $contact['email']; ?></td>
                    <td><?php echo $contact['gender']; ?></td>
                    <td><?php echo $contact['marital_status']; ?></td>
                    <td><?php echo $contact['address']; ?></td>
                    <td><?php echo $contact['dob']; ?></td>
                    <td><?php echo $contact['game']; ?></td>
                    <td><?php echo $contact['photo']; ?></td>
                    <td><a href="view.php?viewid=<?php echo $contact['id']; ?>" id="view"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <td><a href="update.php?editid=<?php echo $contact['id']; ?>" id="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="" class="delete" data-id='<?php echo $id = $contact['id']; ?>' id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
    <?php
    $pagLink = "";
    if ($page >= 2) {
        echo "<a href='contacts.php?page=" . ($page - 1) . "'>  Prev </a>";
    }

    for ($i = 1; $i <= $number_of_page; $i++) {
        if ($i == $page) {
            $pagLink .= "<a class = 'active' href='contacts.php?page="
                . $i . "'>" . $i . " </a>";
        } else {
            $pagLink .= "<a href='contacts.php?page=" . $i . "'>   
                                                " . $i . " </a>";
        }
    };
    echo $pagLink;

    if ($page < $number_of_page) {
        echo "<a href='contacts.php?page=" . ($page + 1) . "'>  Next </a>";
    }
    ?>

</div>
<?php

include_once 'components/footer.php';

?>