<?php
$select = $_GET['select'];
$source =  $_GET['from'];

$servername = "eu-cdbr-west-02.cleardb.net";
$username = "b7d78580d78b36";
$password = "59b1c097";
$dbname = "heroku_3832b5a785f8bb2";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$name = '';
if ($select == '1'){
    $name = 'Giraffe';
}elseif($select == '2'){
    $name = 'White Tiger';
}elseif($select =='3'){
    $name = 'Asian Elephant';
}elseif($select == '4'){
    $name = 'Red-shanked douc';
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn,"utf8");


$sql = "INSERT into vote_animal(Name,Timestamp,Source) VALUES ('$name',Now(),$source)";
$conn->query($sql);
$conn->close();
if($source == 1){
    header("Location: Thank_you_web.php?select=$select");
}elseif($source == 2){
    header("Location: Vote_Animals_TV.php");
}

?>
