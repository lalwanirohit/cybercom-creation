<?php ob_start(); ?>

<h1>My page</h1>
this is my page

<?php
    $redirec_path = 'https://google.co.in';
    $redirect = true;

    if($redirect == true) {
        header('Location: '.$redirec_path);
    }

    ob_end_flush();
?>