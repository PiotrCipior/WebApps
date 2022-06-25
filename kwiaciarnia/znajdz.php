<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css" type="text/css">
</head>
<body>
    <div id="baner">
        <h1>Moje kwiaty</h1>
    </div>
    <div id="pale">
        <h3>Kwiaty dla Ciebie</h3>
        <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a><br>
        <a href="znajdz.php">Znajdź kwiaciarnie</a><br>
        <img id="leo" src="gozdzik.jpeg" alt="Goździk" />
    </div>
    <div id="papr">
        <img src="gerbera.jpeg" alt="Gerbera"/>
        <img src="gozdzik.jpeg" alt="Goździk"/>
        <img src="roza.jpeg" alt="Róża"/>
        <p>Podaj miejscowość, w której poszukujesz kwiaciarni (na potrzeby zadania, działa tylko dla Warszawa i Malbork):</p>
        <form method="post" action="">
            <input type="text" name="miejsce"/>
            <input type="submit" value="SPRAWDŹ" />
        </form>
        <?php 
        @$miejsce=$_POST['miejsce'];
        $polaczenie=mysqli_connect("localhost","root","","kwiaciarnia");
            $zap1 = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$miejsce';";
            
            
           @$wynik = mysqli_query($polaczenie, $zap1);
        while(@$wiersz = mysqli_fetch_assoc($wynik)){
        echo $wiersz['nazwa'].", ulica ".$wiersz['ulica'];}
mysqli_close($polaczenie);

        ?>
    </div>
    <div id="stopka">
        <h3>Strone opracował: numer PESEL zdającego</h3>
    </div>
    
</body>
</html>