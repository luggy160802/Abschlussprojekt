<?php

echo "<div class='card text-white bg-dark mb-3' style='max-width: 18rem;'>";
echo "<h3>$page->title</h3>";
if($page->Firma) {
    echo "<div class='card-header'><h3>{$page->Firma->title}</h3></div>";
}
echo "<div class='card-body'>";
echo "<h3>$page->Aufgaben</h3>";
foreach ($page->Zielgruppe as $zielgruppe) {
    echo "<h3>$zielgruppe->title</h3>";
}

echo "<h3> $page->Voraussetzungen </h3>";
echo "<h3> Dauer: $page->Dauer Wochen </h3>";
echo "<h3>" . strftime("%d. %B %Y", strtotime($page->Bewerbungsfrist)) . "</h3>";
echo "<h3> Gehalt: $page->Gehalt € </h3>";


?>