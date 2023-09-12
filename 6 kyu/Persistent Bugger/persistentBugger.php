function persistenceIner(int $num, int &$counter ): int {
    if ($num < 10) {
        return $num;
    }
    $counter++;
    $strNum = (string)$num;
    $sum = 1;
    foreach(str_split($strNum) as $num) {
        $sum *=$num;
    }
    return persistenceIner($sum, $counter);
}

function persistence(int $num): int {
    if($num < 10) {
        return 0;
    }
    $counter = 0;
    persistenceIner($num, $counter);
    return $counter;
  }