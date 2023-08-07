<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "database1";

    // Connect to the MySQL database
    $con = new mysqli($server, $username, $password, $database);

    // Check the connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    //getting values from form
    $fname = $_REQUEST["fname"]; //$fname = $_POST["fname"];
    $lname = $_REQUEST["lname"];    //$lname = $_GET["lname"];
    $mobileNo = $_REQUEST["telNo"];
    $gender = $_REQUEST["gender"];
    $email = $_REQUEST["email"];
    $additional = $_REQUEST["additional"];
    $array = $_REQUEST["music"];
    $condition = $_REQUEST["condition"];

    /* Adding values to the database */
    // 'employee' is the table name, 'firstname' & 'telNo' are cloumns is the employee table
    $sql = "INSERT INTO employee (firstname, telNo) VALUES ('$fname', '$mobileNo')";
    $result = $con->query($sql);

    //update data in the record. 
    //$sql = "UPDATE employee SET telNo = $mobileNo WHERE firstname = $fname";
    //$result = $con->query($sql);
    

    echo "First Name: " ,$fname,"<br>";
    echo "Last Name: ", $lname,"<br>";
    echo "Mobile No: ",$mobileNo, "<br>";
    echo "Gender: ", $gender,"<br>";
    echo "Email: ", $email, "<br>";
    echo "Additional Data: ", $additional,"<br>";
    echo "Music: ";
    foreach ($array as $singleValue){     //  getting single values from array
        echo $singleValue," / ";  //  display $e variable value
    }
    echo "<br>Tearms & conditions: ",$condition,"<be>";

    //closing the connection
    $con->close();
?>
