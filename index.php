<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JADUAL KOTAK</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <fieldset>
        <form method="POST">
            <h1>JANA KOTAK</h1>
            <label for="lebar">Lebar:</label>
            <input type="number" name="lebar" id="lebar"><br><br>
            <label for="tinggi">Tinggi:</label>
            <input type="number" name="tinggi" id="tinggi"><br><br>
            <input type="submit" name="jana" value="Jana">
        </form>
    </fieldset>
    <br>

    <?php
    if (isset($_POST['jana'])) {
        $width = $_POST['lebar'];
        $height = $_POST['tinggi'];

        ?>
        <table border='1'>
        <?php
        for ($i = 0; $i < $height; $i++) {
        ?>
        <tr>
        <?php
        for ($j = 0; $j < $width; $j++) {
                echo "<td>row " . $i . " column " . $j . "</td>";
            }
            ?></tr>
        <?php
        }
        echo "</table>";
    }
    ?>

</body>

</html>