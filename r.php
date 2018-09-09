<?php
$f1 = $firstname = $size = $age = $telnum = $email = $message = $lastname = $email = $gender = $comment = $addr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f1 = test_input($_POST["f1"]);
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $age = test_input($_POST["age"]);
    $telnum = test_input($_POST["telnum"]);
    $message = test_input($_POST["mes"]);
    $size = test_input($_POST["size"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); //clean char
    return $data;
}

echo "<h2>Your Input:</h2>";
echo $f1.<br>;
echo $firstname.<br>;
echo $lastname.<br>;
echo $age.<br>;
echo $size.<br>;
echo $telnum.<br>;
echo $email.<br>;
echo $message.<br>;
?>
