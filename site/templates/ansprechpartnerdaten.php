<?php

echo "<div class='card border-dark mb-3' style='max-width: 23rem;'>";
echo "<div class='card-body text-dark'>";
echo "<div class='card-header'>";
echo "<h3> $page->title";
echo "<h3> $page->Vorname $page->Nachname";
echo "</div>";
echo "<h3> $page->TelefonNr";
echo "<h3> $page->Mailadresse";
 if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>";

?>



