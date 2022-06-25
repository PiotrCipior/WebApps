<!DOCTYPE HTML>
<html>
<head>
	<title>Pizza</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="stylpizza.css"/>
</head>
<body>
<div class="naglowek">
    <a class="pizzeria">PIZZERIA</a>
    <a class="zjedz">ZJEDZ MNIE</a>
</div>
<div class="glowna">
	<form method="POST" action="">
<div class="lewa">
	<p id="Pizza">Pizza (22cm/duża30cm)</p>
    <input type="radio" name="Pizza" id="Pizza1" value="18" checked>
	<label for="Pizza1">Pizza margerita - 18zł</label><br>
	<input type="radio" name="Pizza" value="19" id="Pizza2">
	<label for="Pizza2">Pizza diabolo - 19zł</label><br>
	<input type="radio" name="Pizza" value="22" id="Pizza3">
	<label for="Pizza3">Pizza konkretna - 22zł</label><br>
	<input type="checkbox" name="duza[]" value="5" id="duza">
	<label for="duza">duża +5zł</label><br>
        
	<p id="napoje">Napoje (0.33l/duży 0.5l)</p>
	<input type="radio" name="piciu" id="piciu1" value="6" checked>
	<label for="piciu1">Coca-cola - 6zł</label><br>
	<input type="radio" name="piciu" value="8" id="piciu2">
	<label for="piciu2">pinacolada - 8zł</label><br>
	<input type="radio" name="piciu" value="2" id="piciu3">
	<label for="piciu3">woda mineralna - 2zł</label><br>
	<input type="checkbox" name="duza[]" value="2" id="duze">
	<label for="duze">powiększone +2zł</label><br>
	
	<p id="sosy">Sosy</p>
	<input type="checkbox" name="Sosy[]" id="Sosy1">
	<label for="Sosy1">Czosnkowy</label><br>
	<input type="checkbox" name="Sosy[]" id="Sosy2">
	<label for="Sosy2">Pomidorowy</label><br>
	<input type="checkbox" name="Sosy[]" id="Sosy3">
	<label for="Sosy3">Majonezowy</label><br>

	<p id="dodatki">Dodatki</p>
	<input type="checkbox" name="Dodatki[]" value="2" id="Dodatki1">
	<label for="Dodatki1">pieczarki - 2zł</label><br>
	<input type="checkbox" name="Dodatki[]" value="1" id="Dodatki2">
	<label for="Dodatki2">cebula - 1zł</label><br>
	<input type="checkbox" name="Dodatki[]" value="3" id="Dodatki3">
	<label for="Dodatki3">oliwki - 3zł</label><br>
	<input type="checkbox" name="Dodatki[]" value="3" id="Dodatki4">
	<label for="Dodatki4">szynka - 3zł</label><br>
	<input type="checkbox" name="Dodatki[]" value="3" id="Dodatki5">
        <label for="Dodatki5">feta - 3zł</label><br>
</div>
<div class="prawa">
	<p id="salatki">Sałataki</p>
	<input type="radio" name="Sałataki" value="18" id="Sałataki1">
	<label for="Sałataki1">wiosenna - 18zł</label><br>
	<input type="radio" name="Sałataki" value="19" id="Sałataki2">
	<label for="Sałataki2">jesienna - 19zł</label><br>
	<input type="radio" name="Salataki" value="22" id="Sałataki3">
	<label for="Sałataki3">zimowa - 22zł</label><br>
	<input type="radio" name="Sałataki" value="18" id="Sałataki4">
	<label for="Sałataki4">letnia - 18zł</label><br><br>
	
        <input type="reset" value="reset">
	<input type="submit" value="Zamów"><br><br><br>
        </div>
	</form>
    <div class="wynik">
		<div class="prawa"><?php
    @$pizza=$_POST['Pizza'];
    @$duze=$_POST['duza'];
    @$pic=$_POST['piciu'];
    @$dod=$_POST['Dodatki'];
    @$salatki=$_POST['Salatki']; 
	  $suma=0;
    
    if (!empty($duze)) {
	  foreach($duze as $k=>$v) $suma += $v;
	 }
    if (!empty($dod)) {
	  foreach($dod as $k=>$v) $suma += $v;
	 }
    @$suma=$suma+$pic+$pizza+$salatki;
    echo "Twój rachunek wynosi ".$suma." złotych";
    
			?>
    </div>
    </div>
    </div>
</body>
</html>