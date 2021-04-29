<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'products') or die(mysqli_error($mysqli));

$productPhoto = '';
$productType = '';
$description = '';
$originalPrice = '';
$price = '';
$rating = '';

if (isset($_POST['submit'])){
    $productPhoto = $_POST['productPhoto'];
    $productType = $_POST['productType'];
    $description = $_POST['description'];
    $originalPrice = $_POST['originalPrice'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];

   
    $mysqli->query("INSERT INTO productEntry( productPhoto, productType, description, originalPrice, price, rating) VALUES 
    ('$productPhoto', '$productType', '$description', '$originalPrice', '$price', '$rating')") or die ($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: index.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM productEntry WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Danger";

    header("location: index.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM productEntry WHERE id=$id")
    or die ($mysqli->error());
    if (count($result) == 1){
        $row = $result->fetch_array();
        $productPhoto = $row['productPhoto'];
        $productType = $row['productType'];
        $description = $row['description'];
        $originalPrice = $row['originalPrice'];
        $price = $row['price'];
        $rating = $row['rating'];
    }
}
?> 