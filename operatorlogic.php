<?php
function bagi($atas, $bawah)
{
    $hasil = 0;
    for ($i = 1; $i <= $atas; $i++) {
        $total = $bawah * $i;
        $hasil = $i;
        if ($total > $atas) {
            $hasil = $i - 1;
            break;
        } else if ($total == $atas) {
            $hasil = $i;
            break;
        }
    }
    echo $hasil;
}
bagi(12, 4);
