<!DOCTYPE html>
<html>

<head>
    <style>
        div {
            justify-content: center;
            align-items: center;
            border: "10";
            width: 200px;
            height: 300px;
            border: 1px solid blue;
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
            background-color: darksalmon;
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
    $password = "enter  passaword here ";
    $dbname = "enter database name here";

    // Create connection
    $conn = new mysqli(
        $servername,
        $username,
        $password,
        $dbname
    );
    // Check connection
    $video = 1;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

        $sql = "select *from video_id";
        $result = $conn->query($sql);

        $row = $result->num_rows;
        if ($row == 1) {
            echo "hello how are you";
            $row1 = $result->fetch_assoc();
            $video = (int)$row1['id'];

            $new = $video + 1;
            $sql = " UPDATE video_id SET id =$new WHERE id =$video";
            $result = $conn->query($sql);
        }
    }

    ?>

    <script>
        function reload() {
            // Video playback has ended, redirect to another page

            window.location.href = 'start.php'; // Replace 'new_page.php' with the page you want to redirect to

        }
    </script>

    <table align="center">
        <tr align="center">
            <td>

                <video width="40%" autoplay playsinline onended="reload()">
                    <source src="<?php echo "videos/$video.MP4"; ?>" type="video/mp4">
                </video>

                <span id="action"></span></p>
                <div id="output" class="hide"></div>

            </td>
        </tr>
    </table>

</body>

</html>
