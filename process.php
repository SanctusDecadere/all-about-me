<?php 

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $color = $_POST['color'];

    setcookie('name', $name);
    setcookie('age', $age);
    setcookie('color', $color);

    // return [$name, $age, $color];

    header("location: retrieve.php");


} else {
    
    echo "Please complete the form";
};