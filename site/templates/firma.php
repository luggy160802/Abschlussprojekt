
<div class="container">
    <h1 class="mt-6 mb-3">Verfügbare Firmen</h1>


    <?php
    foreach ($page->children() as $firma) {
        echo "<div class='row'>";
        echo "<div class='col-md-7'>";
        $img = $firma->Bild;
        echo "<img class='card-img rounded mb-3 mb-md-0' src='$img->url'>";
        echo "</a>";
        echo "</div>";
        echo "<div class='col-md-5'>";
        echo "<h3>$firma->title</h3>";
        echo "<p>$firma->Beschreibung</p>";
        $url = $firma->Link;
        echo "<a class='btn btn-primary' href='$url' target='_blank'>Firmenwebseite ";
        echo "<span class='glyphicon glyphicon-chevron-right'></span>";
        echo "</a>";
        echo "</div>";
        echo "</div>";
        echo "<hr>";
    }
    ?>

    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

