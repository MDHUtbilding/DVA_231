<?php

    $people_json = file_get_contents('file.json');
    $decoded_json = json_decode($people_json, true);
    $customers = $decoded_json['customers'];

    foreach($customers as $customer)
    {
        $name = $customer['name'];
        $countries = $customer['countries'];

        foreach($countries as $country) 
        {
            echo $name.' visited '.$country['name'].' in '.$country['year'].'.';
        }
    }
?>