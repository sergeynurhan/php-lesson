<?php

require './Validator.php';
require './Connection.php';
require './helper_functions.php';

session_start();

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

$connection = (new Connection("localhost", "root", "root", "php_lesson"))->connect();
$connection->createDatabase();

$connection->createTable("users", [
    'id' => 'int(6) unsigned auto_increment primary key',
    'first_name' => 'varchar(50) not null',
    'last_name' => 'varchar(50) not null',
    'email' => 'varchar(50) not null',
    'phone' => 'varchar(50) not null',
    'dob' => 'varchar(50) not null',
    'address' => 'varchar(255) not null',
    'password' => 'varchar(255) not null'
]);

$connection->insert('users', [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'dob' => $_POST['dob'],
    'address' => $_POST['address'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
]);

$_SESSION['message'] = "User created successfully!";

header("Location: index.php");