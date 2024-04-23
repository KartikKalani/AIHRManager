<!DOCTYPE html>
<html>

<head>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        body {
            background-image: url('background.jpg');

            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        form {
            font-size: 30px;
        }

        .error {
            color: red;
        }

        input[type=submit] {
            background-color: cornflowerblue;
            border: none;
            color: white;
            padding: 12px 32px;
            text-decoration: none;
            margin: 20px 2px;
            cursor: pointer;
            border-radius: 10%;
            font-size: 25px;
        }

        input[type=text],
        input[type=password] {
            font-size: 25px;
            height: 35px;
            width: 300px;
            margin: 5px;
        }
    </style>
    <title>Interview</title>

    <link rel="icon" href="logo.jpeg" type="image/x-icon">
</head>

<body>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "";

    // Create connection
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

        $sql = "DELETE FROM video_id;";
        $conn->query($sql);

        $sql = "INSERT INTO video_id (id) VALUES (1)";
        $conn->query($sql);


        $sql = "select *from video_id";
        $result = $conn->query($sql);

        $row = $result->num_rows;
        if ($row == 1) {
            echo "hello how are you";
            $row1 = $result->fetch_assoc();
            $video = (int)$row1['id'];
            echo $video;
        }
    }



    ?>

    <form method="post" action="start.php">
        <br>
        <br>
        <table align="center">
            <tr align="center">
                <td>
                    <img src="HR.png" alt="HR image" height="350 px" style="border-radius: 10%;">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
