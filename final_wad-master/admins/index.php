<!DOCTYPE html>
<?php
require "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modren Machines </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body class="bg-warning">
<a href="../index.php"  >
    home
</a>
<header class="container-fluid">
    <div class="row">
        <div class="col-12 no-padding">
            <nav class="navbar navbar-light bg-warning navbar-expand-sm fixed-top">
                <a class="navbar-brand" href="index.php"><img src="media/logo.jpg" width="175" height="50" alt="logo">
                </a>
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarToggler">
                    <div class="col-lg-8 offset-lg-1 col-md-8 col-sm-7">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="search" class="form-control"
                                       id="search-bar" name="search"
                                       placeholder="Find Motors,pumps, and generators..">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-lg bg-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>

</header>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-light">
        <ul class="list-unstyled components">

            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link bg-dark">
                    <i class="fas fa-briefcase"></i>
                    Brands
                </a>
                <ul class="collapse show list-unstyled bg-dark" id="pageSubmenu">
                    <?php getBrands(); ?>
                </ul>
            </li>
            
        </ul>
    </nav>
    <article id="content" class="container-fluid bg-white">
        <div class="row">
            <?php getPro(); ?>
        </div>
    </article>


</div>
<footer class="container-fluid">
        <div class="row">
            <div class="col text-center">
               &copy; 2019 by Muhammad Usama
            </div>
        </div>
    </footer>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>