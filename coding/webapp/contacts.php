<?php 

require 'components/header.php';
require 'server/server.php';

$contactobj = new Contact(); 

?>

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
                            $(el).closest('tr').css('background','tomato');
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


    <div class="content_heading">
        <h2>Read Contacts</h2> <br>
        <hr> <br>
        <button type="submit" onclick="location.href = 'create.php';">Create Contact</button>
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

        //define total number of results you want per page  
        $results_per_page = 5;  
    
        //find the total number of results stored in the database  
        $query = "select * from contacts";  
        $result = mysqli_query($contactobj->con, $query);  
        $number_of_result = mysqli_num_rows($result);  
    
        //determine the total number of pages available  
        $number_of_page = ceil ($number_of_result / $results_per_page);  
    
        //determine which page number visitor is currently on  
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  
    
        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page-1) * $results_per_page;  
    
        //retrieve the selected results from database   
        $query = "SELECT *FROM contacts LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($contactobj->con, $query);  
        
        //display the retrieved result on the webpage  
        while ($contact = mysqli_fetch_array($result)) {  ?>
            <tr>
                    <td><?php echo $contact['contact_id']; ?></td>
                    <td><?php echo $contact['contact_name']; ?></td>
                    <td><?php echo $contact['contact_email']; ?></td>
                    <td><?php echo $contact['contact_phone']; ?></td>
                    <td><?php echo $contact['contact_title']; ?></td>
                    <td><?php echo $contact['created_at']; ?></td>
                    <td><?php echo $contact['updated_at']; ?></td>
                    <td><a href="update.php?editid=<?php echo $contact['contact_id'];?>" id="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="" class="delete" data-id='<?php echo $id = $contact['contact_id']; ?>'  id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
      <?php  } ?> 
                   </tbody>
        </table> <br><br><br>
    </div>
            <div class="pagination">

            
    <?php
        $pagLink ="";
        if($page>=2){   
            echo "<a href='contacts.php?page=".($page-1)."'>  Prev </a>";   
        }       
                
        for ($i=1; $i<=$number_of_page; $i++) {   
        if ($i == $page) {   
            $pagLink .= "<a class = 'active' href='contacts.php?page="  
                                                .$i."'>".$i." </a>";   
        }               
        else  {   
            $pagLink .= "<a href='contacts.php?page=".$i."'>   
                                                ".$i." </a>";     
        }   
        };     
        echo $pagLink;   

        if($page<$number_of_page){   
            echo "<a href='contacts.php?page=".($page+1)."'>  Next </a>";   
        }   
?>

</div>
<?php

require 'components/footer.php';

?>



