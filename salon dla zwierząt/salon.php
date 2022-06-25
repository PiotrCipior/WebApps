<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Salon pielęgnacji</title>
    <link rel="stylesheet" href="salon.css" type="text/css"/>
</head>
<body>
    <div id="baner">
        <h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
    </div>
    <div id="pale">
        <h3>SALO ZAPRASZA W DNIACH</h3>
        <ul>
            <li>Poniedziałek, 12:00-18:00</li>
            <li>Wtorek, 12:00-18:00</li>
        </ul>
        <a href="piesxl.jpeg">
        <img src="rys.jpeg"/></a>
        <a>Umów się telefonicznie na wizytę lub poprostu przyjdź!</a>
    </div>
    <div id="pasr">
        <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
        <?php
        $link = mysqli_connect('localhost','root','','salon');
        $zap = 'SELECT imie,rodzaj,nastepna_wizyta,telefon FROM zwierzeta WHERE nastepna_wizyta IS NOT NULL;';
        $wynik = mysqli_query($link,$zap);
        while($wiersz = mysqli_fetch_assoc($wynik)){
            if ($wiersz['rodzaj'] == 1){
                echo "Pies: ".$wiersz['imie']."<br>";
            }
            else if ($wiersz['rodzaj'] == 2){
                echo "Kot: ".$wiersz['imie']."<br>";
            }
        echo "Data następnej wizyty: ".$wiersz['nastepna_wizyta']." telefon właściciela ".$wiersz['telefon']."<br>";
        }
        ?>
    </div>
    <div id="papr">
        <h3>USŁUGI</h3>
        <?php 
        $link = mysqli_connect('localhost','root','','salon');
        $jojo = 'SELECT nazwa,cena FROM uslugi;';
        $wynik = mysqli_query($link,$jojo);
         while($wiersz = mysqli_fetch_assoc($wynik)){
            echo $wiersz['nazwa']." ".$wiersz['cena']." zł"."<br>";
        }
        ?>
    </div>
</body>
</html>