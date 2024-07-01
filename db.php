<?php

function connectDB()
{
    $servername = "localhost";
    $username = "root";
    $password = "passwort";
    $dbname = "twater";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function getSQLQuery($sql, $params = [])
{
    $conn = connectDB();
    $stmt = $conn->prepare($sql);

    if ($params) {
        $stmt->bind_param(...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
}

function insertUser($user, $email, $password)
{
    $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
    $params = ['sss', $user, $email, $password];
    return getSQLQuery($sql, $params);
}

function getUser($user)
{
    $sql = "SELECT * FROM user WHERE name = ?";
    return getSQLQuery($sql, ['s', $user]);
}

function getEmail($email)
{
    $sql = "SELECT * FROM user WHERE email = ?";
    return getSQLQuery($sql, ['s', $email]);
}

function getPassword($user)
{
    $sql = "SELECT password FROM user WHERE username = ?";
    return getSQLQuery($sql, ['s', $user]);
}

function getAllUser()
{
    $sql = "SELECT * FROM user";
    return getSQLQuery($sql);
}
?>