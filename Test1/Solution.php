Shorter + better performance solution

function rotLeft($input, $num) {

    $length = count($a);
    $d = $d % $length;

    for($i = 0 ; $i < $d ; $i++) {
        $shifted[] = array_shift($a);
    }

    return array_merge($a,$shifted);
}
