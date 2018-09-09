<!DOCTYPE html>
<html lang="th">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>title</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>age</th>
                <th>size</th>
                <th>telnum</th>
                <th>email</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>

        <?php
        include("connection/mysqlconn.php");

        // Check connection


        $sql = "select * from usermyprofile";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {
    // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["title"];?></td>
                        <td><?php echo $row["firstname"];?></td>
                        <td><?php echo $row["lastname"];?></td>
                        <td><?php echo $row["age"];?></td>
                        <td><?php echo $row["size"];?></td>
                        <td><?php echo $row["telnum"];?></td>
                        <td><?php echo $row["email"];?></td>
                        <td><?php echo $row["message"];?></td>
                        <br>
                    </tr>
                <?php
                //echo "id: " . $row["id"]. " - Name: " . $row["title"]."".$row["firstname"] . " " . $row["lastname"]. " ". $row["email"]." ".$row["size"] . " ". $row["age"]." "
                //.$row["telnum"]. " " . $row["message"]. "<br>";
            }
        } else {
        echo "0 results";
        }
        ?>
        </tbody>
    </table>
</body>
