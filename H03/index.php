<?php

$guns["ar"] = 'AN94';
$guns["smg"] = 'PDW50';
$guns["sniper"] = 'DSR50';

foreach ($guns as $type => $model) {
  echo $type . $model;
}



$tijd = date('H'); {
  if ($tijd >= 15) {
    echo 'het is middag';
  } elseif ($tijd >= 12) {
    echo 'sr';
  }
}

$jaar = 999;
$kaarsjes = 0;

while ($kaarsjes < $jaar) {
  echo 'GEEK ';
  $kaarsjes++;
}

$jaar = 29;

for ($kaarsjes = 0; $kaarsjes < $jaar; $kaarsjes++) {
  echo ' bus';


}

$aantal = 9;


for ($img = 0; $img < $aantal; $img++) {
  echo '<img src=C:/Users/jurel/OneDrive/Afbeeldingen/watch.jpg">';
}



for ($i = 0; $i < 9; $i++) {
  for ($b = 0; $i > $b; $b++) {
    echo '*';
  }
  echo '*<br>';
}

$x = 35;
for ($x; $x >= 25; $x--) {
  echo 'hoppelepee ';
}

$leeftijd = 12;
$prijs = 10;

if ($leeftijd >= 66) {
  $prijs = 5;
  echo $prijs;

} elseif (3 > $leeftijd) {
  $prijs = 0;
  echo $prijs;

} elseif (12 >= $leeftijd) {
  $prijs = 5;
  echo $prijs;
} else {
  echo $prijs;
}






