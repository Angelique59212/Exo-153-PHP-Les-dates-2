<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)

echo date("d/m/y");
echo "<br><br>";

## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
echo date("d-m-y");
echo "<br><br>";

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.

setlocale(LC_TIME,'fr_FR');
echo strftime('%A %d %B %Y');
echo "<br><br>";

## Exercice 4 Afficher le timestamp du jour.
$timestamp = time();
echo "Le timestamp du jour est : $timestamp";
echo "<br><br>";

## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$timestamp = mktime(15,00,null,8,2,2016);
echo "Le timestamp du mardi 2 août 2016 est : $timestamp";
echo "<br><br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$date1 = strtotime('2022-01-14');
$date2 = strtotime('2016-05-16');
echo "Différence entre les deux dates: " .abs($date1 - $date2)/60/60/24 ." jours";
echo "<br><br>";

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.
$number = cal_days_in_month(CAL_GREGORIAN, 02,2016);
echo "Il y avait $number jours en Février 2016";
echo "<br><br>";

##Exercice 7 Afficher la date du jour + 20 jours.
$date = new DateTime();
$date->modify('+20 days');
echo $date->format('d-m-y');
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$date = new DateTime();
$date->modify('-22 days');
echo $date->format('d-m-y');
echo "<br><br>"; ?>


##TP Faire un formulaire avec deux listes déroulantes.
##La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
#MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )
<?php
    require "./form.php";
?>





<!--<form action="GET">-->
<!--    <select name="month" id="month"> --><?php
//    for ($i = 1; $i <= 12; $i++) { ?>
<!--        <option value="mois--><?//= $i ?><!--">-->
<!--            Mois: --><?//= $i ?>
<!--        </option> --><?php
//    } ?>
<!--</select>-->
<!--</form>-->
<!---->
<!--<form action="GET">-->
<!--    <select name="years" id=" "> --><?php
//        for ($i = 2000; $i <= 2030; $i++) { ?>
<!--            <option value="years--><?//= $i ?><!--">-->
<!--                Année: --><?//= $i ?>
<!--            </option> --><?php
//        } ?>
<!--    </select>-->
<!--</form>-->
