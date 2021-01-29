<?php
    // to delete or remove cookie set expiration time in past
    setcookie('username' , 'Malcom' , time()-60);
    echo 'cookie deleted';
?>