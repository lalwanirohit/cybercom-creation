<?php

include_once 'controller/controller.php';
if ($_SESSION['user_email'] == '' && $_SESSION['user_id'] == '') {
    header('Location: index.php');
}

$obj = new Blog();
$pcategory = $obj->getParentCategories();

if (isset($_POST['addcategory'])) {
    $obj->addCategory($_POST);
}

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
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <h2>Add Category</h2>
                <?php
                if (isset($_SESSION['emailmessage'])) {
                    unset($_SESSION['emailmessage']);
                ?>

                    <div class="msg"><label class="display"> </label></div>
                    <script>
                        $('.msg').html("<label class='display'>Email Already Exist</label>");
                        $(".display").fadeOut(5000);
                    </script>
                <?php } ?>
                <hr>
            </div>
        </div>
        <form action="addcategory.php" method="POST" id="addcategory" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" rows="3" class="form-control"></textarea>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" id="url" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label class="form-label">Parent Category</label> <br>
                    <select class="form-select" name="parent_category" id="parent_category">
                        <?php
                        foreach ($pcategory as $pc) { ?>
                            <option value="<?php echo $pc['id']; ?>"><?php echo $pc['id'] . ' ' . $pc['parent_category_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="category_image" class="form-label">Image</label>
                    <input type="file" name="category_image" id="category_image" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <button type="submit" class="btn btn-success" name="addcategory" id="addcategory">Add Category</button>
                </div>
            </div>
    </div>
    </div>

    <!-- JS files -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validate2.js"></script>
</body>

</html>