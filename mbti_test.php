<?php
$personalityType = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eCount = 0;
    $iCount = 0;
    $sCount = 0;
    $nCount = 0;
    $tCount = 0;
    $fCount = 0;
    $jCount = 0;
    $pCount = 0;

    // Menghitung setiap tipe berdasarkan jawaban
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST["question$i"])) {
            switch ($_POST["question$i"]) {
                case 'E': $eCount++; break;
                case 'I': $iCount++; break;
                case 'S': $sCount++; break;
                case 'N': $nCount++; break;
                case 'T': $tCount++; break;
                case 'F': $fCount++; break;
                case 'J': $jCount++; break;
                case 'P': $pCount++; break;
            }
        }
    }

    // Menentukan hasil MBTI
    $personalityType = 
        ($eCount > $iCount ? 'E' : 'I') . 
        ($sCount > $nCount ? 'S' : 'N') . 
        ($tCount > $fCount ? 'T' : 'F') . 
        ($jCount > $pCount ? 'J' : 'P');
}
?>
