<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Do Bazy</title>
</head>
<body>
    <?php 
        $imie=$_POST['Imie'];
        $nazwisko=$_POST['Nazwisko'];
        $telefon=$_POST['Nrtel'];
        $email=$_POST['Email'];
        $polaczenie=mysqli_connect("localhost","root","","ogloszenia");
            $zap1 = "INSERT INTO uzytkownik VALUES ('', '$imie', '$nazwisko', '$telefon', '$email') ";
            
            
            mysqli_query($polaczenie, $zap1);
mysqli_close($polaczenie);

    
?>

<meta http-equiv="Refresh" content="1; rejestracja.html" />
</body>
</html>