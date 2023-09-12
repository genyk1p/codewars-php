function count_smileys($arr): int {
    $counter = 0;
    foreach($arr as $item){
        $eyes  = 0;
        $mouth = 0;
        if (strlen($item) === 2){
            if($item[0] === ':' || $item[0] === ';'){
                        $eyes++;
                    }
            if($item[1] === ')' || $item[1] === 'D'){
                $mouth++;
            }
        } elseif(strlen($item) === 3){
            if($item[1] === '-' || $item[1] === '~') {
                if($item[0] === ':' || $item[0] === ';'){
                    $eyes++;
                }
                if($item[2] === ')' || $item[2] === 'D'){
                    $mouth++;
                }
            }
        }
        if ($eyes > 0 && $mouth > 0){
            $counter++;
        }
    }
    return $counter;
  }