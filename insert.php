<?php

require "connection.php";

$nameF = $_POST['nameF'];
$nameL = $_POST['nameL'];
$userN = $_POST['userN'];
$gen = $_POST['gen'];
$mail = $_POST['email'];
$linkedin = $_POST['linked'];
$git = $_POST['gitz'];
$Language = $_POST['lang'];
$avatar = $_POST['avatar'];
$video = $_POST['video'];
$quote = $_POST['quote'];
$qute = $_POST['guoteaut'];
$date = $_POST['date'];


if (isset($_POST['nameF'], $_POST['nameL'], $_POST['userN'], $_POST['gen'], $_POST['email'], $_POST['linked'], $_POST['gitz'], $_POST['lang'])) {

// Create connection

    $sql = openConnection()->prepare("
        INSERT INTO student (first_name, last_name, username, gender,email,linkedin,github,preferred_language,avatar,video,quote,quote_author,created_at)
        VALUES (:first_name, :last_name, :user_name, :gender,:Email,:LinkedIn,:Git, :lang, :ava, :vid, :quot, :quotaut, :created)");

    $sql->bindParam(':first_name', $nameF);
    $sql->bindParam(':last_name', $nameL);
    $sql->bindParam(':user_name', $userN);
    $sql->bindParam(':gender', $gen);
    $sql->bindParam(':Email', $mail);
    $sql->bindParam(':LinkedIn', $linkedin);
    $sql->bindParam(':Git', $git);
    $sql->bindParam(':lang', $Language);
    $sql->bindParam(':ava', $avatar);
    $sql->bindParam(':vid', $video);
    $sql->bindParam(':quot', $quote);
    $sql->bindParam(':quotaut', $qute);
    $sql->bindParam(':created', $date);

    $sql->execute();


}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Insert User</title>
</head>
<body>
<div class="container">
    <h1 class="jumbotron-heading">User Registration</h1>
    <form method="post">
        <input name="nameF" class="form-control mb-1" placeholder="First Name" required>
        <input name="nameL" class="form-control mb-1" placeholder="Last Name" required>
        <input name="userN" class="form-control mb-1" placeholder="Username" required>
        <select class="form-control mb-1" name="gen">
            <option value="Male" selected>Male</option>
            <option value="Female">Female</option>
        </select>
        <input class="form-control mb-1" type="email" placeholder="Email" name="email" required>
        <input class="form-control mb-1" name="linked" placeholder="Linkedin link" required>
        <input class="form-control mb-1" name="gitz" placeholder="Github link" required>
        <select class="form-control mb-1" name="lang">
            <option value="&#127482;&#127474;🇺🇸🇺🇸🇺🇸">English</option>
            <option value="&#127467;&#127479;">French</option>
            <option value="&#127470;&#127481;">Italian</option>
            <option value="&#127481;&#127479;">Turkish</option>
            <option value="&#127466;&#127480;">Spanish</option>
            <option value="&#127464;&#127475;">Chinese</option>
            <option value="&#127480;&#127462;">Arabic</option>
        </select>
        <input class="form-control mb-1" name="avatar" placeholder="Avatar link" required>
        <input class="form-control mb-1" name="video" placeholder="Video link" required>
        <input class="form-control mb-1" name="quote" placeholder="Quote" required>
        <input class="form-control mb-1" name="guoteaut" placeholder="Quote author" required>
        <input class="form-control mb-3" name="date" type="datetime-local" required>
        <button type="submit" name="submit" class="btn btn-primary">POST</button>
        <a class="btn btn-outline-primary" href="index.php" role="button">SHOW USERS</a>
    </form>
</div>
</body>
</html>
