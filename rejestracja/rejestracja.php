<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
 <title>Nasze hobby</title> 
 <link rel="stylesheet" href="hobby.css" type="text/css"/> 
</head>
<body>
    <div id="baner">
        <h1>FORUM HOBBYSTYCZNE</h1>
    </div>
    <div id="pale">
        <?PHP
        @$nick=$_POST['nick'];
        @$hobby=$_POST['hobby'];
        @$zawod=$_POST['zawod'];
        @$piec=$_POST['piec'];
        @$login=$_POST['login'];
        @$haslo=$_POST['haslo'];
        @$polityka=$_POST['polityka'];
        
        $polaczenie=mysqli_connect("localhost","root","","forum");
            $zap1="INSERT INTO uzytkownicy VALUES ('', '$nick', '$hobby' , '$zawod' , '$piec')";
            $zap2="INSERT INTO konta VALUES ('', '$login', '$haslo')";
            
            
            mysqli_query($polaczenie, $zap1);
            mysqli_query($polaczenie, $zap2);
            
            echo "Konto " . $nick . " zostało utworzone na forum.";
        
        mysqli_close($polaczenie);
        ?>
        <br><br>
        <a href="forum.html">Wróć do strony rejestracji</a>
    </div>
    <div id="papr">
        <h3>TEMATY NA FORUM</h3>
        <ul>
            <li>Hodowla zwierząt
            <ul>
                <li>psy</li>
                <li>koty</li>
            </ul>
            </li>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        </ul>
    </div>
</body>
</html>