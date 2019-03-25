<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>PHP MySQL MVC</title>
    <link href="view/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" medai="all">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="view/jquery-1.9.1.js"></script>
    <script src="view/list.js"></script>
    <script src="view/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>
<body data-gr-c-s-loaded="true">
    <div class="container">
        
        <legend class="header">
        <?php 
        if(isset($_SESSION['uname'])){ ?>
            <form class="pull-right" action="index.php?action=logout" method="post">
            <input type="submit" class="btn btn-primary" value="Logout" name="but_logout">
        </form>
        <a href="index.php?action=viewUser" class="pull-right "><button class="btn btn-primary">Manage User</button></a>
        <?php
        }
        ?>
            
            <h3 class="pull">Employee Manager</h3>
        </legend>

        <?php
        include "view/" . $data['page'] . ".php";
        ?>     
    </div> <!-- /container -->

</body>
</html>