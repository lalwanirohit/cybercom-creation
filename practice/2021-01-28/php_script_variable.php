<?php
    $server_script = $_SERVER['SCRIPT_NAME'];
?>

<form action="<?php echo $server_script; ?>" method="POST">
    <input type="submit" value="Submit" name="click">
</form>