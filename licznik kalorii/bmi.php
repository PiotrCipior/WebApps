<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"></meta>
<link rel="stylesheet" href="style.css" type="text/css"/> 
	<title>Licznik BMI</title>
</head>
<body>
    <div id="top">
    <h1>Kalkulator: </h1>
</div>
<div id="main">
<form method="POST" action="">
    <a>Wybierz co chcesz obliczyć</a>
<select name="wybr">
<option value="BMR">BMR</option>
<option value="BMI">BMI</option>
</select><br><br>
    <a>Twój wiek:</a>
    <input type="number" name="Wiek" placeholder="0" min="0" /> lat<br>
    <a>Twój wzrost:</a>
    <input type="number" name="Wzrost" placeholder="0" min="0" /> Cm<br>
    <a>Twoja Waga:</a>
    <input type="number" name="Waga" placeholder="0" min="0" /> Kg<br>
    <a>Podaj płeć:</a>
<select name="Plec">
    <option value="Male" name="Male">Mężczyzna</option>
    <option value="Female">Kobieta</option>
</select><br>
    <input type="submit" value="Zatwierdź" /><br><br><br>
</form>

    <div id="answer">
    <?php
     ini_set('display_errors',"0");
@$wybr=$_POST['wybr'];
@$Wiek=$_POST['Wiek'];
@$Wzrost=$_POST['Wzrost'];
@$Waga=$_POST['Waga'];
@$Plec=$_POST['Plec'];
    @$c=9.99*$Waga+6.25*$Wzrost-4.92*$Wiek;
    @$b=$Waga/($Wzrost*$Wzrost*0.0001);
    round($b,2);
    switch($Plec){
        case 'Male': @$c+=5; break;
        case 'Female': @$c-=161; break;
    } 
    
    switch ($wybr){
        case 'BMR': echo "Twoje BMR wynosi $c kcal"; break;
        case 'BMI': {
            if ($b<18.5){
                echo "Twoje BMI Wynosi "; echo round($b,2); echo " i masz niedowagę"; break;}
            elseif ($b>=18.5 && $b<25){
                echo "Twoje BMI Wynosi "; echo round($b,2); echo " i masz wagę prawidłową"; break;}
            elseif ($b>=25 && $b<30){
                echo "Twoje BMI Wynosi "; echo round($b,2); echo " i masz nadwagę"; break;}
            elseif ($b>30){
                echo "Twoje BMI Wynosi "; echo round($b,2); echo " i masz otyłość"; break;}
        }
            
    } 
    ?>
    </div>
</body>
</html>