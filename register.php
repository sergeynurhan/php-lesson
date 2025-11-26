<?php

require './Validator.php';

$validator = (new Validator($_POST))
    ->required('first_name')
    ->required('last_name')
    ->email($_POST['email'])
    ->required('email')
    ->required('phone')
    ->required('dob')
    ->required('address')
    ->required('password')
    ->required('password_confirmation')
    ->validate();

header("Location index.php");
exit;