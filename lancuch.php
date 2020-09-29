<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="8-utf">
</head>
<body>
  <?php

    $tekst = "Przyklady Operacji na lancuchach";
    print $tekst."<br>";
    print strlen($tekst)."<br>";
    print strtolower($tekst)."<br>";
    print strtoupper($tekst)."<br>";
    print substr($tekst, 1,3)."<br>";


    print str_replace(' ', '', $tekst);
    print "<br>";
    print "<hr>";
    for($i=0;$i<strlen($tekst);$i++){
      if(substr($tekst,$i,1)==" ") continue;
      print substr($tekst,$i,1);
    }
    print "<hr>";
    print "<br>";
    print substr($tekst, -10)."<br>";

    print "<hr>";

    $licznik = 0;
    $poczatek = 0;
    while(!empty(strpos($tekst,"a", $poczatek))){
      $poczatek = strpos($tekst,"a", $poczatek)+1;
      $licznik++;
    }
    print $licznik;

    print "<br>";
    print substr_count($tekst, "a");

    print "<hr>";

    print str_repeat("_", 40)."<br>";

    $premier = "premier@polska.gov.pl";
    $prezydent = "prezydent@polska.gov.pl";
    $email = "prezydent@polska.gov.pl";
    parse_str("premier=polska.gov.pl");
      print $premier. "<br>";
    parse_str("prezydent=polska.gov.pl");
      print $prezydent. "<br>";

      print substr($email,strpos($email,"@")+1);

      print "<hr>";

    print_r(explode(" ",$tekst));

for($i=0;$i<100;$i++){
    $los = rand(0,100);
    print $los .",";
  }

  print "<hr>";

  $suma = 0;
  for($i=0;$i<100;$i++){
    $los = rand(0,100);
    $suma += $los;
    print $los. ",";
    if($suma>200) break;
  }
print "<br>Suma liczb: ".$suma;

  print "<br>".$trimmed = trim($tekst, "Pał");

  print "<br>".chop($tekst,"operacji");

  print "<br>".nl2br("One line. \nAnother line.");

  print "<br>".htmlspecialchars($tekst);

  print "<br>".strip_tags("Hello <b>world!</b>");

  print "<br>".ucfirst("hello <b>world!</b>");

  ?>


  </body>
  </html>
