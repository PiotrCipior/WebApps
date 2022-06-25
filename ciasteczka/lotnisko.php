<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Port lotniczy</title>
    <link href="styl.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="banerj">
        <img src="zad5.png" alt="logo lotnisko">
    </div>
    <div id="banerd">
        <h1>Przyloty</h1>
    </div>
    <div id="banert">
        <h3>Przydatne linki</h3>
        <a href="zapytania.txt">Pobierz...</a>
    </div>
    <div id="glowny">
        <table>
            <tr>
                <th>Czas</th>
                <th>Kierunek</th>
                <th>Numer rejsu</th>
                <th>status</th>
            </tr>
            <?php
            $link = mysqli_connect('localhost','root','','egzamin');
        $zap = 'Select czas, kierunek, nr_rejsu, status_lotu FROM `przyloty` order by czas;';
        $wynik = mysqli_query($link,$zap);
            while($wiersz = mysqli_fetch_assoc($wynik)){
            echo "<tr>"."<td>".$wiersz['czas']."</td>"."<td>".$wiersz['kierunek']."</td>"."<td>".$wiersz['nr_rejsu']."</td>"."<td>".$wiersz['status_lotu']."</td>"."</tr>";}
            ?>
        </table>
    </div>
    <div id="stopkaj">
    <?php 
        @$imie = "ciastko";
        @$wartosc = "Komp";
        if(!isset($_COOKIE[$imie])) {
    echo "<a><b>Dzień dobry! Strona lotniska używa ciasteczek</b></a>";
            setcookie( 
            $imie, 
            $wartosc, 
            time() + 7200,
            "/");
} else {
    echo "<a><b>Witaj ponownie na stronie
lotniska</b></a>";
    
        }
        ?>
    </div>
    <div id="stopkad">
    Autor: Numer Pesel Zdającego
    </div>
    
</body>
</html>