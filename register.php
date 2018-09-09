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
                height: 900px; /* only for demonstration, should be removed */
                background: #19b092;
                padding: 20px;
            }

/* Style the list inside the menu */
            nav ul {
                list-style-type: none;
                padding: 0;
            }

            article {
                float: left;
                padding: 50px;
                width: 85%;
                background-color: #c7c3bd;
                height: 900px; /* only for demonstration, should be removed */
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
        <li><a href="register.php" target="blank">สมัคร Run</a></li>
        <li><a href="report.php" target="blank">ตรวจสอบ BIB</a></li>
        <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
      </ul>
    </nav>
    <section>
    <article>
        <h2>สมัครวิ่ง</h2>

        <form method="post" action="result2.php">
            คำนำหน้า:
            <input type="radio" name="title" value="นาย" >นาย

            <input type="radio" name="title" value="นางสาว">นางสาว

            <input type="radio" name="title" value="นาง">นาง
            <br><br>

            ชื่อ:
            <input type="text" name="firstname" >
            <br>

            นามสกุล:
            <input type="text" name="lastname" >
            <br>

            <br>อายุ:
            <input type="number" name="age" min="1" max="60">
            <br>

            <br>size เสื้อ (S ,M ,L ,XL ,XXL): <br>
            <input type="radio" name="size" value="S">S
            <br>
            <input type="radio" name="size" value="M">M
            <br>
            <input type="radio" name="size" value="L">L
            <br>
            <input type="radio" name="size" value="XL">XL
            <br>
            <input type="radio" name="size" value="XXL">XXL
            <br>

            <br>เบอร์โทรศัพท์:
            <input type="number" name="telnum">
            <br>

            <br>E-Mail:
            <input type="text" name="email">
            <br>

            <br>เหตุผลที่สมัคร: <br>
            <textarea name="message" rows="10" cols="30"></textarea>
            <br>


            <input type="submit" value="Submit">
        </form>
    </article>
</section>
    <footer>
      <p>Footer</p>
    </footer>
    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
