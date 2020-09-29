<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Kalkulator</title>
</head>
<body>
  <style type="text/css">
.form-style-1, .wynik, .not {
      margin:10px auto;
      max-width: 400px;
      padding: 20px 12px 10px 20px;
      font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
      padding: 0;
      display: block;
      list-style: none;
      margin: 10px 0 0 0;
}
.form-style-1 label{
      margin:0 0 3px 0;
      padding:0px;
      display:block;
      font-weight: bold;
}
.form-style-1 input[type=submit],.wynik,.not{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=text],
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
}
.form-style-1 input[type=text]:focus,
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 input[type=submit]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
  </style>
<form class="form-style-1" action="function.php" method="post">
  <ul>
    <li>
        <label>Wybierz operacje: </label>
        <select name="operacje">
            <option value="dodawanie">Dodawanie</option>
            <option value="odejmowanie">Odejmowanie</option>
            <option value="mnozenie">Mnożenie</option>
            <option value="Dzielenie">Dzielenie</option>
        </select><br></br>
    </li>
    <li>
        Wpisz pierwszą wartość: <input type="text" name="1wartosc" placeholder="Liczba 1"><br></br>
        Wpisz drugą wartość: <input type="text" name="2wartosc" placeholder="Liczba 2"><br></br>
    </li>
    <li>
        <input type="submit" value="Pokaż wynik"><br></br>
    </li>
  </ul>
</form>
<?php

function licznik(){
    if(!empty($pr && $dr)){

  $pr = $_POST['1wartosc'];
  $dr = $_POST['2wartosc'];



  switch($_POST['operacje']){
    case "dodawanie":
        $suma = $pr + $dr;
        return $suma;
        break;
    case "odejmowanie":
        $roznica = $pr - $dr;
        return $roznica;
        break;
    case "mnozenie":
        $iloczyn = $pr * $dr;
        return $iloczyn;
        break;
    case "Dzielenie":
    if($pr==0 || $dr==0 ){
      echo "<div class=\"not\">Nie można dzielić przez 0</div>";
    }else{
        $iloraz = $pr / $dr;
        return $iloraz;}
        break;
    default:
      print "Złe operatory";
  }
}
else{
  echo "<div class=\"not\">Nie wpisałeś danych</div>";
}
}
echo "<div class=\"wynik\">Wynik to: ". licznik()."</div>";
?>
</body>
</html>
