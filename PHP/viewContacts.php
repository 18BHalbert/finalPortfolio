<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to db
require('check-login.php');
require('/home2/bhalber1/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook contacts</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">

    <h3>Contacts</h3>

    <table id="Guestbook-table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job title</th>
            <th>Company</th>
            <th>linkedIn URL</th>
            <th>Email</th>
            <th>How We Met</th>
            <th>Other</th>
            <th>Message</th>
            <th>Mail List</th>
            <th>Mail format</th>
            <th>Time Added</th>
        </tr>
        </thead>

        <?php

        //Define a query
        $sql = "SELECT * FROM guestBookClients";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $jobTitle = $row['jobTitle'];
            $company = $row['company'];
            $linkedInURL = $row['linkedInURL'];
            $emailAddress = $row['email'];
            $howMet = $row['howMet'];
            $otherBox = $row['otherBox'];
            $message = $row['message'];
            $email = $row['mailList'];
            $method = $row['mailType'];
            $timeAdded = $row['timeAdded'];

            echo "<tr>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$jobTitle</td>
                    <td>$company</td>
                    <td>$linkedInURL</td>
                    <td>$emailAddress</td>
                    <td>$howMet</td>
                    <td>$otherBox</td>
                    <td>$message</td>
                    <td>$email</td>
                    <td>$method</td>
                    <td>$timeAdded</td>
                  </tr>";
        }

        ?>
    </table>

    <a href="http://bhalbert2.greenriverdev.com/IT305/Guestbook%20Form/">home</a>
    <a href="logout.php">logout</a>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#Guestbook-table').DataTable();
</script>
</body>
</html>