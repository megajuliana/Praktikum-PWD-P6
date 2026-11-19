<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 6</title>
</head>
<body>
    <h3>1. Pengulangan 1-10 (Genap)</h3>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    ?>

    <h3>2. Table perkalian</h3>
    <table border= "1" cellpadding = "5" cellspacing = "2">
        <tr>
            <td>bilangan</td>
            <?php 
            for($kolom = 1; $kolom <= 10; $kolom++){
                echo "<td bgcolor='lime'>" . $kolom . "</td>";
            }
            ?>

            <?php
            for ($baris = 1; $baris <= 10; $baris++) {
                echo "<tr>";
                echo "<td bgcolor='lime'>" . $baris . "</td>";
                for ($kolom = 1; $kolom <= 10; $kolom++) {
                    $hasil = $baris * $kolom;
                    if ($hasil % 2 != 0) {
                        echo "<td bgcolor='yellow'>" . $hasil . "</td>";
                    } else {
                        echo "<td bgcolor='cyan'>" . $hasil . "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
</body>
</html>