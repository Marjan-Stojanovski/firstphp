<?php


$firstName = '';
$lastName = '';
$email = '';
$password = '';

if(isset($_POST['firstName']) && !empty($_POST['firstName'])) {
    $firstName = $_POST['firstName'];
};

if(isset($_POST['lastName']) && !empty($_POST['lastName']))  {
    $lastName = $_POST['lastName'];
};

if(isset($_POST['email']) && !empty($_POST['email']))  {
    $email = $_POST['email'];
};

if(isset($_POST['password']) && !empty($_POST['password']))  {
    $password = $_POST['password'];
};

echo $firstName . " " . $lastName . " " . $email . " " . $password;

header('Location: /user.php?firstName='.$firstName.'&lastName='.$lastName.'&email='.$email);

?>
