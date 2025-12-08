<!DOCTYPE html>
<?php
$balance 0;
for($month=1;$month<=12;$month++){
    $balance+=10000;
    if($month%11==0){
        $balance-=50;
    }
    echo "Month $month=Balance=$balance <br>";

}