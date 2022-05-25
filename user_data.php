<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$data = array(
        'Name' => $name, 
        'Email' => $email, 
        'Date of Birth' => $dob, 
        'Gender' => $gender, 
        'Country' => $country
        );

print_r($data);

$filename = "./userdata.csv";
$handle = fopen($filename, "a");
    fputcsv($handle, $data);
        
fclose ($handle);
?>