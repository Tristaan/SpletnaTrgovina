<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include("../core/config.php");
    include("../core/functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,500italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="../style/style.css" type="text/css" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <title>TTrgovina | <?php //echo title($page); ?>Admin</title>
    </head>
    <body>
        <?php include("template/body.php"); ?>
        
    </body>
    <?php include("template/foot.php"); ?>
</html>