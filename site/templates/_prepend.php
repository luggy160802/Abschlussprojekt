<!DOCTYPE html>
<head>
    <title><?php echo $page->title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- eigene CSS -->
    <link rel="stylesheet" href='./styles/style.css'>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e2f3ff;">
    <a class="navbar-brand" href="index.html">
        <img src="https://www.mint-salzburg.at/wp-content/uploads/2019/01/HTL-Logo-mit-Schrift.jpg" width="30"
             height="30" class="d-inline-block align-top" alt="" loading="lazy">
        PraktikumsDB
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
            $homepage = $pages->get('/');
            $children = $homepage->children();

            // Home als erstes Element setzen
            $children->prepend($homepage);

            //Seiten in Navbar darstellen
            foreach ($children as $child) {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='{$child->url}'>{$child->title}</a>";
                echo "</li>";
            }

            ?>

        </ul>
    </div>
</nav>


<!-- Jquery JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>



















