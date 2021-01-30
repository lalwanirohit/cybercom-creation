<?php

$xml = simplexml_load_file('CEOs.xml');

foreach($xml -> company as $company) {
    echo $company->name.'\'s CEO is <strong>'.$company->ceo .'</strong><br><br>';
    foreach($company -> details as $detail) {
        echo 'birth date is : '.$detail->birthdate .'<br> age is : '. $detail->age .'<br><br>';
    }
}

?>