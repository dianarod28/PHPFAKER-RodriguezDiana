<?php

require('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","faker");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 20; $i++){   
$sql = "INSERT INTO faker.carddetail(creditCardType, creditCardNumber, creditCardExpirationDate ) values('".$faker->creditCardType."', '".$faker->creditCardNumber."', '".$faker->creditCardExpirationDateString($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>