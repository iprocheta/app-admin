<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
//header("Cache-Control: max-age=2592000");
?>
<?php
require 'session.php';
session::checkSession();
if (isset($_GET['action']) && $_GET['action'] = "logout") {
    session::destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/style2.css">
    <title>Admin Panel</title>
</head>

<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Heart attack prediction system</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="change-password.php">Change Password</a></li>
                <li><a href="?action=logout">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="search.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by patient id" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</header>