<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $addr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $age = test_input($_POST["age"]);
    $addr = test_input($_POST["address"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); //clean char
    return $data;
}

echo "<h2>Your Input:</h2>";
echo $name.<br>;
echo $email.<br>;
echo $age.<br>;
echo $addr.<br>;
echo $website.<br>;
echo $comment.<br>;
echo $gender.<br>;
?>
