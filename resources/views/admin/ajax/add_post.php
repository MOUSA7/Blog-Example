<?php


include ('db.php');

if (isset($_POST['title'])){
    $add_post = $_POST['title'];
    $query ="insert into posts(title)VALUE ('$add_post')";
    $query_post = mysqli_query($conn,$query);

    if (!$query_post){
        die("query failed");
    }
    header('location: index.php' );
}