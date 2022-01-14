<?php
function monthYears(String $optionText, Int $max = 0, Int $start = 1):string {
    $options = '';
    for ($i = $start; $i <= $max; $i++) {
        $options .= "
            <option value='mois =$i'>
                $optionText: $i
            </option>
            ";
    }
    return $options;
}?>

    <label for="month">Mois</label>
    <select name="month" id="month"> <?= monthYears("Mois",12)?></select>
    <label for="year">Années</label>
    <select name="year" id="year"> <?= monthYears('Années',2023,2000) ?></select>



