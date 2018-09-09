<!DOCTYPE html>
<html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

/* Style the header */
            header {
                background-color: #1749b3;
                padding: 30px;
                text-align: center;
                font-size: 35px;
                color: white;
            }

/* Create two columns/boxes that floats next to each other */
            nav {
                float: left;
                width: 15%;
                height: 500px; /* only for demonstration, should be removed */
                background: #19b092;
                padding: 20px;
            }

/* Style the list inside the menu */
            nav ul {
                list-style-type: none;
                padding: 0;
            }

            article {
                float: right;
                padding: 50px;
                width: 85%;
                background-color: #c7c3bd;
                height: 500px; /* only for demonstration, should be removed */
            }

/* Clear floats after the columns */
            section:after {
                content: "";
                display: table;
                clear: both;
            }

            form{
                background-color: #c7c3bd
            }

/* Style the footer */
            footer {
                background-color: #1749b3;
                padding: 10px;
                text-align: center;
                color: white;
            }

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
            @media (max-width: 600px) {
                nav, article {
                    width: 100%;
                    height: auto;
                }
            }
        </style>
    </head>
<body>
    <header>
        <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
    </header>
    <nav>
      <ul>
        <li><a href="register.php">สมัคร Run</a></li>
        <li><a href="report.php">ตรวจสอบ BIB</a></li>
        <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
      </ul>
    </nav>
    <section>
<article>
    <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
    <?php

    include("connection/mysqlconn.php");
    $title = $firstname = $size = $age = $telnum = $email = $message = $lastname = $email = $gender = $comment = $addr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = test_input($_POST["title"]);
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);
        $email = test_input($_POST["email"]);
        $age = test_input($_POST["age"]);
        $telnum = test_input($_POST["telnum"]);
        $message = test_input($_POST["message"]);
        $size = test_input($_POST["size"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data); //clean char
        return $data;
    }

    //echo "<h2>Your Input:</h2>";
    echo $title."<br>";
    echo $firstname."<br>";
    echo $lastname."<br>";
    echo $age."<br>";
    echo $size."<br>";
    echo $telnum."<br>";
    echo $email."<br>";
    echo $message."<br>";

    $sql = "INSERT INTO usermyprofile (title, firstname, lastname, age, size ,telnum ,email ,message)
    VALUES ('$title', '$firstname', '$lastname', '$age', '$size' ,'$telnum' ,'$email', '$message')";

//echo $sql."<br>";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);
    ?>
    <a href="report.php">ผู้สมัคร</a>
</article>
</section>
<footer>

  <p>Footer</p>
</footer>
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
