<?php

echo "<div class='col-lg-4 mb-5'>";
echo "<div class='card h-100'>";
echo "<div class='card bg-primary text-white'>";
echo "<h3>$page->Vorname $page->Nachname</h3>";
echo "</div>";
echo "<h3> $page->PLZ $page->Ort </h3>";
echo "<h3> $page->Strasse $page->HausNr </h3>";
echo "<h3> $page->TelefonNr</h3>";
echo "<h3> $page->Mailadresse</h3>";
echo "<h3><a href='{$page->Abteilung->url}'>{$page->Abteilung->title}</a></h3>";
echo "<h3><a href='{$page->Klasse->url}'>{$page->Klasse->title}</a></h3>";
if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>";

echo "</div>";
echo "</div>";

?>