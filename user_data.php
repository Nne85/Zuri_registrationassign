<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$country = $_POST["country"];

$filename = './user_data.csv';// file name created



$fp = fopen($filename, 'a'); // this will oen the file in append mode and write the submitted data
fwrite($fp, print_r($name, true)); // this will write the name
echo '<br>';
fwrite($fp, print_r($email, true)); // this will write the email
echo '<br>';
fwrite($fp, print_r($dob, true)); // this will write the date of birth
echo '<br>';
fwrite($fp, print_r($gender, true)); // this will write the gender
echo '<br>';
fwrite($fp, print_r($country, true)); // this will write the country
echo '<br>';
//Once the data is written, it will be saved in the csv file created.

fclose($fp);// close the file
print_r($name); 
echo '<br>';
print_r($email);
echo '<br>';
print_r($dob);
echo '<br>';  
print_r($gender);
echo '<br>'; 
print_r($country); 




?>