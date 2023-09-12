function createPhoneNumber($numbersArray) {
        $firstPart = implode("", array_slice($numbersArray, 0,3));
        $secondPart = implode("", array_slice($numbersArray, 3,3));
        $thirdPart = implode("", array_slice($numbersArray, 6,4));
        $result = "({$firstPart}) {$secondPart}-{$thirdPart}";
        return $result;
    }