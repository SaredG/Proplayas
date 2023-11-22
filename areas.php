<?php
include "conn.php";

session_start();

if (isset($_GET['logout'])) {


    session_unset();

    session_destroy();
}

if (isset($_SESSION['fkroles'])) {
    switch ($_SESSION['fkroles']) {
        case '0':
            header('location: inicio');
            break;

        case '1':
            header('location: inicio');
            break;

         case '2':
            header('location: inicio');
            break;   
    }
} { ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>

    <body>

        <?php if ($_SESSION['fkroles'] == '0') {
            header("Location: inicio.php"); ?>

            }

        <?php } else if  ($_SESSION['fkroles'] == '1'){
            header("Location: inicio.php"); ?>

    <?php } else if  ($_SESSION['fkroles'] == '2'){
                header("Location: inicio.php"); ?>

        <?php } else {
            header("Location: index.php"); ?>
    </body>

    </html>

<?php }
    } ?>