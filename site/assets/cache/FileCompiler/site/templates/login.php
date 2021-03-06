<?php
//Style anpassen indem Bootstrap-Klassen vor dem Laden des Logins hinzugefügt werden
$wire->addHookBefore('Inputfield::render', function ($event) {
    $inputfield = $event->object;
    if ($inputfield instanceof \ProcessWire\InputfieldTextarea) {
        $inputfield->addClass('form-control');
    } else if ($inputfield instanceof \ProcessWire\InputfieldText) {
        $inputfield->addClass('form-control');
    } else if ($inputfield instanceof \ProcessWire\InputfieldSubmit) {
        $inputfield->addClass('btn btn-danger');
    }
});
// verändertes Model laden und ausführen
echo $modules->get('LoginRegister')->execute();
?>

