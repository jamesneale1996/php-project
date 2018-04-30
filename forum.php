<?php

    if ( isset( $_POST['submit'] ) ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $db = new PDO('mysql:host=localhost;dbname=phpproject', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO tbl_messages (name, email, message) VALUES (:name, :email, :message)";

        $statement = $db->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':message', $message);
        $statement->execute() or die (print_r($statement->errorInfo(), true));
        $db = null;
    }

    function read() {
        $db = new PDO('mysql:host=localhost;dbname=phpproject', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM tbl_messages";

        $statement = $db->prepare($query);
        $statement->execute() or die (print_r($statement->errorInfo(), true));
        $results = $statement->fetch(PDO::FETCH_ASSOC);
        return var_dump($results);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Latest compiled and minified CSS BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript BOOTSTRAP -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Include main css -->
        <link rel="stylesheet" type="text/css" href="common/main.css">
        <title>My PHP Project</title>
    </head>
    <body>
    <?= read(); ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($name as $item):?>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
            <?php endforeach;?>
            </tr>

            <tr>
            <?php foreach($email as $item):?>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
            <?php endforeach;?>
            </tr>

            <tr>
            <?php foreach($message as $item):?>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
            <?php endforeach;?>
            </tr>
        </tbody>
    </table>
    </body>
</html>