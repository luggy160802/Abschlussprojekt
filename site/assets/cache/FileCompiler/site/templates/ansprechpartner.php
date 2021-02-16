<?php
foreach ($page->children() as $ansprechpartner) {

    echo "<div class='col-lg-4 mb-5'>";
    echo "<div class='card h-100'>";
    
    echo "<h3 class='card-header'>$ansprechpartner->title</h3>";
    echo "<div class='card bg-primary text-white'>";
    echo "<h3 class='card-header'>$ansprechpartner->Vorname $ansprechpartner->Nachname</h3>";
    echo "</div>";
    echo "<a class='btn btn-secondary' href='$ansprechpartner->url' role='button'>Details</a>";
    
    echo "</div>";
    echo "</div>";
   
}
?>
