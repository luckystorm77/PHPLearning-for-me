<?php
    $NUMBER = 1;
    echo $NUMBER;
    $NUMBERS = array(3);
    $NUMBERS[0] = 2;
    $NUMBERS[1] = 3;
    $NUMBERS[2] = 4;
    echo ($NUMBERS[2]);
    print_r($NUMBERS);
    //↓通常は$x++でいい
    function IncrementhsNumber($number) {
        $number = $number + 1;
        return $number;
    }
    echo IncrementhsNumber($NUMBER);
    echo $NUMBER."文字列結合";
    //文字コードはOS依存なので使わない。
    //echo "\n"."次の行に行く";
    echo PHP_EOL;
    echo "</br>";
    echo "次の行</br>";
    if ($NUMBER != 0) {
        printf("0ではない");
    }
    else {
        printf("0だ");
    }
    foreach ($NUMBERS as $value) {
        echo $value."</br>";
    }
?>