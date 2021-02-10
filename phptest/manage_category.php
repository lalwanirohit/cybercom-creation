<?php
include_once 'controller/controller.php';

if ($_SESSION['user_email'] == '' && $_SESSION['user_id'] == '') {
    header('Location: index.php');
}

$obj = new Blog();

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
    <div class="container"> <br>
        <script>
            $(document).ready(function() {
                //delete
                $('.delete').click(function() {
                    var el = this;

                    // delete id
                    var deleteid = $(this).data('id');

                    $.ajax({
                        url: 'delete.php',
                        type: 'POST',
                        data: {
                            id: deleteid
                        },
                        success: function(response) {
                            if (response == 1) {
                                //remove row from html table
                                $(el).closest('tr').fadeOut(800, function() {
                                    $(this).remove();
                                });
                            }
                        }
                    });
                });
            });
        </script>

        <button type="button" class="btn btn-success" onclick="location.href='blogposts.php'">Manage Blogpost</button>
        <button type="button" class="btn btn-info" onclick="location.href='profile.php'">My Profile</button>
        <button type="button" class="btn btn-danger" onclick="location.href='logout.php'">Logout</button>
        <br><br>
        <div class="row">
            <div class="col">
                <h2>Categories</h2> <br>
                <button type="button" class="btn btn-success" onclick="location.href='addcategory.php'">Add Category</button>
                <hr>
            </div>
        </div>



        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //define total number of results you want per page  
                $results_per_page = 3;

                //find the total number of results stored in the database  
                $query = "select * from category";
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
                $query = "SELECT *FROM category LIMIT " . $page_first_result . ',' . $results_per_page;
                $result = mysqli_query($obj->con, $query);

                //display the retrieved result on the webpage  
                while ($category = mysqli_fetch_array($result)) {  ?>
                    <tr>
                        <th scope="row"><?php echo $category['category_id']; ?></th>
                        <td><img src="<?php echo $category['image']; ?>" height="40px"></img></td>
                        <td><?php echo $category['title']; ?></td>

                        <td><?php echo $category['created_at']; ?></td>
                        <td><a href="updatecategory.php?editid=<?php echo $category['category_id']; ?>" id="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                        <td><a href="" class="delete" data-id='<?php echo $id = $category['category_id']; ?>' id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php  } ?>
            </tbody>
        </table>
        <?php
        $pagLink = "";
        if ($page >= 2) {
            echo "<a href='manage_category.php?page=" . ($page - 1) . "'>  Prev </a>";
        }

        for ($i = 1; $i <= $number_of_page; $i++) {
            if ($i == $page) {
                $pagLink .= "<a class = 'active' href='manage_category.php?page="
                    . $i . "'>" . $i . " </a>";
            } else {
                $pagLink .= "<a href='manage_category.php?page=" . $i . "'>   
													" . $i . " </a>";
            }
        };
        echo $pagLink;

        if ($page < $number_of_page) {
            echo "<a href='manage_category.php?page=" . ($page + 1) . "'>  Next </a>";
        }
        ?>

    </div>

    <!-- JS files -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validate.js"></script>
</body>

</html>