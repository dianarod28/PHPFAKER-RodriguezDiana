<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","faker");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 100; $i++){   
$sql = "INSERT INTO faker.useraccount(email, lastName, firstName, userName, password) values('".$faker->email."', '".$faker->lastName."', '".$faker->firstName."','".$faker->userName."','".md5($faker->password)."')";     
mysqli_query($conn, $sql);}

?>