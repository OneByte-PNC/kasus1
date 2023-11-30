<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAKTU TEMPUH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tabel-container" >
    <h2>Menghitung Waktu tempuh</h2>
    <div class="tabel">
        <form action="" method="post">
            <label for="jarak"> Jarak (km):</label>
            <input type="text" id="jarak" name="jarak" required><br><br>

            <label for="kecepatan">Kecepatan (km/jam):</label>
            <input type="text" id="kecepatan" name="kecepatan" required><br><br>

            <label for="cuaca">Cuaca:</label>
            <select id="cuaca" method="post" name="cuaca">
                <option value="Hujan">Hujan</option>
                <option value="Cerah">Cerah</option>
            </select><br><br>

        <input type="submit" value="Hitung">
    </div>
    </form>
    </div>
    <?php
$jarak = $_POST["jarak"]??"";
$kecepatan= $_POST["kecepatan"]??"";
$cuaca= $_POST["cuaca"]??"";

class Ojek {
    public function Waktu($jarak, $kecepatan) {
        if ($jarak < 0 || $kecepatan < 0) {
            return "jarak atau kecepatan tidak boleh negatif.";
        } elseif ($kecepatan == 0) {
            return "Perjalanan tidak mungkin dilakukan dengan kecepatan nol.";
        } else {
            $waktu = $jarak / $kecepatan;
            $jam = floor($waktu);
            $menit = ($waktu - $jam) * 60;
            return "Waktu tempuh: " . intval($jam) . " jam " . intval($menit) . " menit";
        }
    }

    public function Kecepatan($cuaca) {
        switch ($cuaca) {
            case "Hujan":
                return "Rekomendasi kecepatan untuk cuaca hujan: 30-40 kpj";
            case "Cerah":
                return "Rekomendasi kecepatan untuk cuaca cerah: 40-60 kpj";
            default:
                return "Tidak ada rekomendasi kecepatan.";
        }
    }
}

$ojek = new Ojek();

echo  $ojek->Waktu($jarak, $kecepatan). "</br>";
echo  $ojek->Kecepatan($cuaca). "</br>";
?>
</body>
</html>