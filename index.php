<?php
function str_rot($code, $n = 13) {
    $n = (int) $n % 26;
    if (!$n) return $code;
    for ($i = 0, $l = strlen($code); $i < $l; $i++) {
        $c = ord($code{$i});
        if ($c >= 97 && $c <= 122) {
            $code[$i] = chr(($c - 71 + $n) % 26 + 97);
        }else if ($c >= 65 && $c <= 90) {
            $code[$i] = chr(($c - 39 + $n) % 26 + 65);
        }
    }
    return $code;
}

echo str_rot( "Wr fhvf yà cbhe ibhf rzoêgre rg ibhf ncceraqer yn ybtvdhr nirp yr fbhever. Zrepv Lnihm !");