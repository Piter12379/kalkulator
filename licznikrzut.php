<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="8-utf">
</head>
<body>
<?php
/*
 $p = 0;
 $d = 0;
 $t = 0;
 $c = 0;
 $pi = 0;
 $s = 0;

for($rzut=0;$rzut<100;$rzut++){
 print $losowanie = rand(1,6);
}
print "<br>"."<hr>";

if($losowanie == 1){
  $p += 1;
  print "Ilość liczb 1: ". $p."<br>";
}else{
  print "Ilość liczb 1: ". "0"."<br>";
}
if($losowanie == 2){
  $d += 1;
  print "Ilość liczb 2: ". $d."<br>";
}else{
  print "Ilość liczb 2: "."0"."<br>";
}if($losowanie == 3){
  $t += 1;
  print "Ilość liczb 3: ". $t."<br>";
}else{
  print "Ilość liczb 3: ". "0"."<br>";
}if($losowanie == 4){
  $c += 1;
  print "Ilość liczb 4: ". $c."<br>";
}else{
  print "Ilość liczb 4: ". "0"."<br>";
}if($losowanie == 5){
  $pi += 1;
  print "Ilość liczb 5: ". $pi."<br>";
}else{
  print "Ilość liczb 5: ". "0"."<br>";
}if($losowanie == 6){
  $s += 1;
  print "Ilość liczb 6: ". $s."<br>";
}else{
  print "Ilość liczb 6: ". "0"."<br>";
}
*/
print "<hr>";
$kostka = array_fill(1,6,0);
for($i=0;$i<100;$i++){
  print $lotto=rand(1,6);
  $kostka[$lotto]++;
}print "<br>"."<hr>";
for($i=0;$i<6;$i++){
  print "Oczka numer: ".($i+1)." wypadło: ".$kostka[$i+1]."<br>";
}
?>
</body>
</html>
