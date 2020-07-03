
<?php
$n=@$_REQUEST["n"];
$m=@$_REQUEST["m"];
$lt=$n;
$lt1=1;
// echo "$m";
for ($i=2; $i<=$m ; $i++){ //m^n
    $lt=$lt*$n;
    echo "$n^$i= $lt<br>";
}
for ($i=0; $i <=$m ; $i++) {
    $lt1=$lt*2;
    echo"$lt1/2=$lt<br>";
    $lt=$lt/2;

}

?>
