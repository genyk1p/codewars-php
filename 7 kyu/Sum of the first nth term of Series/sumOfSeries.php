function series_sum($n) {
    if ($n === 0){
        return '0.00';
    }
    $divider = 1;
    $sum = 1.00;
    for($i = 1; $i < $n; $i++){
        $divider += 3; 
        $sum += 1 / $divider;
    }
    return number_format($sum, 2);
  }