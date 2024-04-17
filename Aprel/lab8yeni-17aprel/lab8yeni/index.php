<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="ad">Ad:</label>
    <input type="text" id="ad" name="ad" value="<?php if(isset($_POST['ad'])) echo $_POST['ad']; ?>"><br><br>

    <label for="soyad">Soyad:</label>
    <input type="text" id="soyad" name="soyad" value="<?php if(isset($_POST['soyad'])) echo $_POST['soyad']; ?>"><br><br>

    <label for="reqem1">Qiymət 1: </label>
    <input type="number" id="reqem1" name="reqem1" value="<?php if(isset($_POST['reqem1'])) echo $_POST['reqem1']; ?>"><br><br>
    <label for="reqem2">Qiymət 2: </label>
    <input type="number" id="reqem2" name="reqem2" value="<?php if(isset($_POST['reqem2'])) echo $_POST['reqem2']; ?>"><br><br>
    <label for="reqem3">Qiymət 2: </label>
    <input type="number" id="reqem3" name="reqem3" value="<?php if(isset($_POST['reqem3'])) echo $_POST['reqem3']; ?>"><br><br>

    <button type="submit" name="ortalama">Qiymələrin ortalamasını hesabla</button>
    <button type="submit" name="yoxlama">Qiymətlərin ortalamasını yoxla</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ortalama değerini her iki butona da tıklanmadan önce hesaplayın
    $ortalama = 0;
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $reqem1 = $_POST['reqem1'];
    $reqem2 = $_POST['reqem2'];
    $reqem3 = $_POST['reqem3'];
    $ortalama = ($reqem1 + $reqem2 + $reqem3 ) / 3;

    if (isset($_POST['ortalama'])) {
        echo "Ortalama: " . $ortalama;
    } elseif (isset($_POST['yoxlama'])) {
        if ($ortalama > 45) {
            echo "Ortalama bal 45-dən böyükdür. Tələbə uğurla keçdi.";
        } elseif ($ortalama < 45) {
            echo "Ortalama bal 45-dən kiçikdir. Tələbə kəsildi.";
        } else {
            echo "Ortalama bal 45-ə bərabərdir.";
        }
    }
}
?>

</body>
</html>
