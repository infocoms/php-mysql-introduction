<?php
require "connection.php";
?>


    <table class="table" align="center">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Language</th>
            <th>Profile</th>
        </tr>
        </thead>

<?php
$sql = openConnection()->query('SELECT * FROM student ')->fetchAll();




//profile.php?user=$user_id

foreach ($sql as $ticket) {
    $user_id = $ticket['Id'];
    echo
    "
    <tbody>
    <td>{$ticket['first_name']}</td>
    <td>{$ticket['last_name']}</td>
    <td>{$ticket['email']}</td>
    <td>{$ticket['preferred_language']}</td>
    <td><a href=\"profile.php?user=$user_id\">Profile</a></td>
   </tr>\n </tbody>";
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
            <title>Home</title>
        </head>
        <body>
        <a class="btn btn-outline-danger m-4" href="insert.php" role="button">Add User</a>
        </body>
        </html>
