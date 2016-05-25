<?php
$conn = mysql_connect(/*mysql db host*/, /*mysql username*/, /*mysql password*/);
$email = mysql_real_escape_string($_POST['uemail']);
$sex = mysql_real_escape_string($_POST['sex']);
$username = mysql_real_escape_string($_POST['uname']);
$feet = $_POST['feet'];
$inches = $_POST['inches'];
$weight = $_POST['weight'];
$age = $_POST['age'];
$pword = mysql_real_escape_string($_POST['pword']);
$fit = mysql_real_escape_string($_POST['fitness']);
$height = 12*$feet + $inches;
$calorie_need = 0.0;
if($sex === "male"){
  $calorie_need = 12.7*$height+6.23*$weight-6.8*$age+66;
} else {
  $calorie_need = 4.7*$height+4.35*$weight-4.7*$age+655;
}
$multiplier = 1;
switch ($switch) {
        case 'sedentary':
            $multiplier = 1.2;
            break;
        case 'light':
        $multiplier = 1.375;
        break;
        case 'moderate':
        $multiplier = 1.55;
        break;
        case 'very':
        $multiplier = 1.725;
        break;
        case 'extreme':
        $multiplier = 1.9;
        break;
    }
    $calorie_need *= $multiplier;
$sql = "INSERT INTO users (username, email, password, height, weight, sex, fitness, calorie_need)
VALUES ($username, $email, $password, $height, $weight, $sex, $fitness, $calorie_need)";
 ?>
