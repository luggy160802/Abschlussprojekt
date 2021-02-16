<?php
echo "<h3>$page->title</h3>";
echo "<h3> $page->Beschreibung";
echo "<h3> $page->PLZ $page->Ort</h3>";
echo "<h3> $page->Strasse $page->HausNr </h3>";
echo "<h3> $page->TelefonNr";
echo "<h3> $page->Mailadresse";

 if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>";
?>