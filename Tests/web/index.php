<?php require 'script.php'; ?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <h3>All Users By Medium</h3>

    <?php echo HTML::table( $usersByMedium['columnHeaders'], $usersByMedium['rows'] ); ?>


    <h3>New Users By Medium</h3>

    <?php echo HTML::table( $newUsersByMedium['columnHeaders'], $newUsersByMedium['rows'] ); ?>


    </body>
</html>