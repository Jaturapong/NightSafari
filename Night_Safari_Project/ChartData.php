<?php

$servername = "eu-cdbr-west-02.cleardb.net";
$username = "b7d78580d78b36";
$password = "59b1c097";
$dbname = "heroku_3832b5a785f8bb2";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn,"utf8");

$sql = "SELECT COUNT(Name) as Num FROM vote_animal WHERE Name='Giraffe'";
$result =  $conn->query($sql);

while($row = mysqli_fetch_array($result)) { 
    $giraffe = $row["Num"];
}

$sql = "SELECT COUNT(Name) as Num FROM vote_animal WHERE Name='White Tiger'";
$result =  $conn->query($sql);

while($row = mysqli_fetch_array($result)) { 
    $WhiteTiger = $row["Num"];
}

$sql = "SELECT COUNT(Name) as Num FROM vote_animal WHERE Name='Asian Elephant'";
$result =  $conn->query($sql);

while($row = mysqli_fetch_array($result)) { 
    $elephant = $row["Num"];
}

$sql = "SELECT COUNT(Name) as Num FROM vote_animal WHERE Name='Red-shanked douc'";
$result =  $conn->query($sql);

while($row = mysqli_fetch_array($result)) { 
    $Red_shanked = $row["Num"];
}

$conn->close();

?>