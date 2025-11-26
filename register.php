<?php

require './Validator.php';

$validator = (new Validator($_POST))
    ->required($_POST['first_name'], 'first_name')
    ->required($_POST['last_name'], 'last_name')
    ->email($_POST['email'])
    ->required($_POST['email'], 'email')
    ->required($_POST['phone'], 'phone')
    ->required($_POST['dob'], 'dob')
    ->required($_POST['address'], 'address')
    ->required($_POST['password'], 'password')
    ->required($_POST['password_confirmation'], 'password_confirmation');

// echo "<pre>";
// print_r($validator->errors);
// echo "</pre>";

if ($validator->failed()) {
    foreach ($validator->errors() as $error) {
        echo "<p style='color: red'> {$error[0]} </p>";
    }

    die;
}

header("Location index.php");