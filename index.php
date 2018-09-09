<!DOCTYPE html>
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
                width: 30%;
                height: 300px; /* only for demonstration, should be removed */
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
                padding: 20px;
                width: 70%;
                background-color: #c7c3bd;
                height: 300px; /* only for demonstration, should be removed */
            }

/* Clear floats after the columns */
            section:after {
                content: "";
                display: table;
                clear: both;
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

<section>
  <nav>
    <ul>
      <li><a href="register.php" target="blank">สมัคร Run</a></li>
      <li><a href="report.php" target="blank">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>

  <article>
    <h1>ทำไมต้อง Run</h1>
    <img src="img/picture1.jpg" width="160" height="120">
    <p>กขคง กขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง  กขคงกขคงกขคงกขคง   </p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>
