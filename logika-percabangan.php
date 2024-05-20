<?php

$nilai = 84;

echo "Nilai If: ";
if ($nilai == 0 && $nilai <= 49) {
  echo "E";
} elseif ($nilai > 49 && $nilai <= 59) {
  echo "D";
} elseif ($nilai > 59 && $nilai <= 74) {
  echo "C";
} elseif ($nilai > 74 && $nilai <= 84) {
  echo "B";
} elseif ($nilai > 84 && $nilai <= 100) {
  echo "A";
} else {
  echo "Nilai salah";
}
echo "<br/>";
echo "<br/>";

echo "Nilai Switch : ";

switch ($nilai) {
  case $nilai == 0 && $nilai <= 49:
    echo "E";
    break;
  case $nilai > 49 && $nilai <= 59:
    echo "D";
    break;
  case $nilai > 59 && $nilai <= 74:
    echo "C";
    break;
  case $nilai > 74 && $nilai <= 84:
    echo "B";
    break;
  case $nilai > 84 && $nilai <= 100:
    echo "A";
    break;
  default:
    echo "Nilai salah";
    break;
}

echo "<br/>";
echo "<br/>";

try {
  $result_nilai = match (true) {
    $nilai == 0 && $nilai <= 49 => 'Nilai match : E',
    $nilai > 49 && $nilai <= 59 => 'Nilai match : D',
    $nilai > 59 && $nilai <= 74 => 'Nilai match : C',
    $nilai > 74 && $nilai <= 84 => 'Nilai match : B',
    $nilai > 84 && $nilai <= 100 => 'Nilai match : A'
  };
  echo $result_nilai;
} catch (\UnhandledMatchError $umd) {
  print_r($umd);
}