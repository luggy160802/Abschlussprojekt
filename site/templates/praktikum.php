<?php
echo "<div class='row'>";
foreach ($page->children() as $praktikum) {
    echo "<div class='col-lg-4'>";
    echo "<div class='card h-100'>";
    echo "<div class='card bg-primary text-white'>";
    echo "<h3 class='card-header'>$praktikum->title</h3>";
    echo "</div>";
    $img = $praktikum->Bild;
    echo " <img class='card-img' src=$img->url style='max-height: 200px'>";
    echo "<h4> Dauer: $praktikum->Dauer Wochen </h4>";
    echo "<h4>" . strftime("%d. %B %Y", strtotime($praktikum->Bewerbungsfrist)) . "</h4>";
    echo "<a class='btn btn-primary' href='$praktikum->url' role='button'>Details</a>";
    echo "</div>";
    echo "</div>";

}
echo "</div>";
?>