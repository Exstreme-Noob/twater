<?php
function connectDB(){//Veljko
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zwitscher";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function getSQLQuery($sql, $params = [])//Veljko
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

function insertUser($user, $email, $password)//Leander
{
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $params = ['sss', $user, $email, $password];
    return getSQLQuery($sql, $params);
}

function getUser($user)//Leander
{
    $sql = "SELECT * FROM users WHERE name = ?";
    return getSQLQuery($sql, ['s', $user]);
}

function getEmail($email)//Leander
{
    $sql = "SELECT * FROM users WHERE email = ?";
    return getSQLQuery($sql, ['s', $email]);
}

function getPassword($email)//Leander
{
    $sql = "SELECT password FROM users WHERE email = ?";
    return getSQLQuery($sql, ['s', $email]);
}

function getAllUser()//Leander
{
    $sql = "SELECT * FROM users";
    return getSQLQuery($sql);
}

function getUserName($uid)//Veljko
{
    $sql = "SELECT name FROM users WHERE uid = ?";
    return mysqli_fetch_array(getSQLQuery($sql,['s', $uid]))[0];
}
function getUserID($email)//Veljko
{
    $sql = "SELECT uid FROM users WHERE email = ?";
    return mysqli_fetch_array(getSQLQuery($sql,['s', $email]))[0];
}
