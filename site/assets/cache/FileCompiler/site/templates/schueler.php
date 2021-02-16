<?php
foreach ($page->children() as $schueler) {
    echo "<div class='col-lg-4 mb-5'>";
    echo "<div class='card h-100'>";
    echo "<div class='card bg-primary text-white'>";
    echo "<h3 class='card-header'>$schueler->Vorname $schueler->Nachname</h3>";
    echo "</div>";

    echo "<h4> $schueler->PLZ $schueler->Ort </h4>";
    echo "<h4> $schueler->Strasse $schueler->HausNr </h4>";
    
    echo "<a class='btn btn-primary' href='$schueler->url' role='button'>Details</a>";

    echo "</div>";
    echo "</div>";
}
?>
