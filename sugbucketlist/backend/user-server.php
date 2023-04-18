<?php


$con = new mysqli("localhost", "root", "",  "bucket_db");
$method = $_POST["method"];
session_start();

if (function_exists($method)) {
    call_user_func($method);
} else {
    echo "Function not found!";
}


function register()
{
    global $con;
    if ($_POST['password'] != $_POST['confirm_password']) {
        echo 2; // password not match
        return 0;
    }
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = $con->prepare("INSERT INTO users(first_name, last_name, email, password) VALUES(?, ?, ?, ?)");
    $query->bind_param('ssss', $_POST['first_name'], $_POST['last_name'], $_POST['email'], $password);
    $query->execute();
    if ($query->affected_rows >= 1) {
        echo 1;
    } else {
        echo 0;
    }

    $query->close();
}


function login()
{
    global $con;

    $query = $con->prepare('SELECT * FROM users WHERE email = ?');
    $query->bind_param('s', $_POST['email']);
    $query->execute();
    $user = $query->get_result()->fetch_assoc();
    if ($user && password_verify($_POST['password'], $user['password'])) {
        echo 1;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['email'] = $user['email'];
    } else {
        echo 0;
    }
}
