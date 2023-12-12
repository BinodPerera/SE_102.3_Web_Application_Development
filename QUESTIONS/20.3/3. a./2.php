<?php

    //getting values from form
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $mobileNo = $_REQUEST["telNo"];
    $gender = $_REQUEST["gender"];
    $email = $_REQUEST["email"];
    $additional = $_REQUEST["additional"];
    $music = $_REQUEST["music"];
    $condition = $_REQUEST["condition"];
    
    //changed...

    echo "First Name: " ,$fname,"<br>";
    echo "Last Name: ", $lname,"<br>";
    echo "Mobile No: ",$mobileNo, "<br>";
    echo "Gender: ", $gender,"<br>";
    echo "Email: ", $email, "<br>";
    echo "Additional Data: ", $additional,"<br>";
    echo "Music: ";
    foreach ($music as $e){
        echo $e," / ";
    }
    echo "<br>Tearms & conditions: ",$condition,"<br>";
?>