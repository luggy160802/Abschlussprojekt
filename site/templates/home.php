<!-- Slideshow darstellen -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.hipwallpaper.com/i/0/41/dQ2zTu.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
            <img src="https://www.shades-tours.com/wp-content/uploads/2017/04/Depositphotos_145064481_original-1900x1080.jpg"
                 class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
            <img src="https://1000things.b-cdn.net/wp-content/uploads/Ritzenhof_Herbst.jpg" class="d-block w-100"
                 alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<div class="container">
    <h1 class="my-4 mt-5">HTL Saalfelden - PraktikumsDB</h1>

    <h2>Willkommen auf dem Online Portal für dein Praktikum.
        <h2>
            <div class="row mt-5">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Firmen</h4>
                        <div class="card-body">
                            <p class="card-text">Was alles in den beliebtesten Firmen passiert...</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Mehr...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Tipps für die Bewerbung</h4>
                        <div class="card-body">
                            <p class="card-text">Wie man eine professionelle Bewerbung schreibt mit Lebenslauf...</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Mehr...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Hilfe</h4>
                        <div class="card-body">
                            <p class="card-text">Hier könnte man auf die Hilfe Startseite gelangen</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Mehr...</a>
                        </div>
                    </div>
                </div>

                <h3>Fachbereiche</h3>
                <?php
                foreach ($page->children() as $child) {
                    // If Abfrage damit nur die Abteilungen dargestellt werden
                    if ($child->name == "abteilungen") {
                        foreach ($child->children() as $abteilung) {
                            echo "<div class='col-lg-4 mb-5'>";
                            echo "<div class='card h-100'>";
                            echo "<h4 class='card-header'>$abteilung->title</h4>";
                            echo "<div class='card-body'>";
                            echo "<h6>$abteilung->Beschreibung</h6>";
                            $img = $abteilung->Bild;
                            echo "<img class='card-img' src='$img->url'>";
                            echo "</div>";
                            echo "<div class='card-footer'>";
                            $url = $abteilung->Link;
                            echo "<a href='$url' class='btn btn-primary' target='_blank'>Details</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                }
                ?>

            </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 w-100"
        style="background-color: #2e2e2e; color:#efefef; margin-top: 15px;">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Über uns</h5>
                <?php echo "<p>$page->Text_Ueber_Uns</p>"; ?>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Kontakt</h5>
                <ul class="list-unstyled">
                    <li>
                        <?php echo "<p>$page->Text_Kontakt</p>"; ?>
                    </li>

                </ul>

            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Aktuelles</h5>
                <ul class="list-unstyled">
                    <li>
                        <?php echo "<p>$page->Text_Aktuelles</p>"; ?>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Quicklinks</h5>
                <ul class="list-unstyled">
                    <li>
                        <?php echo "<p>$page->Text_Quicklinks</p>"; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

