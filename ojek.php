<?php
class Ojek
{
    function hitung_waktu($s,$v)
    {
        if ($s <0 || $v < 0)
        {
            return "Jarak atau kecepatan tidak boleh negatif!";
        }
        elseif ($v==0) {
            return "Perjalanan tidak mungkin dilakukan karena tidak ada kecepatan";
        }
        else{
            $t = $s / $v;
            $jam = floor($t);
            $menit = ($t - $jam) * 60;
            return  "Waktu yang dapat ditempuh : " . intval($jam) . "jam". intval($menit) . "menit";
        }
    }
}
?>

<html>
    <form action=""></form>
</html>