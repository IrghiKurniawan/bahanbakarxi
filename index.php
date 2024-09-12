<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="bensin.php" method="post">
            <h1>Bahan bakar shell</h1>
            <label for="liter" required>Jumlah Liter</label><br><br>
            <input type="number" id="liter" name="liter" min="1" placeholder="Masukan jumlah liter" required><br><br>
            <label for="jenis" required>Jenis bahan bakar</label><br><br>
            <select name="jenis" id="jenis" required>
            <option value="super">super</option>
            <option value="vpower">v-power</option>
            <option value="vpowernitro">v-power nitro</option>
            <option value="vpowerdiesel">v-power diesel</option>
            </select> <br><br>
            <button type="submit" name="beli">Isi</button>
        </form>

</body>
</html>