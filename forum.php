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
        <?php include 'database.php'; ?>
        <title>My PHP Project</title>
    </head>
    <body>
    <?php ForumController::read();?>
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

<?php

class ForumController
{
    public $id;
    public $email;
    public $delete;

    public function create()
    {

    }

    public static function read()
    {
        $pdo = DatabaseController::connect();
        $query = 'SELECT * FROM tbl_questions';

        $results = array();
        foreach ($pdo->query($query) as $row) {
            array_push($row, $results);
        }
        var_dump($results);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}

?>