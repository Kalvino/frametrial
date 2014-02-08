 <?php
$digits = 4;
function gen_ran($digits) {
$n = "";
  for ($x = 1; $x <= $digits; $x++) {
  $n.=mt_rand(0,9);
  }
return $n;
}
function gen_ran2($digits)
{
    $n2 = "";
    for($a=1; $a<=$digits; $a++)
    {
        $n2 .=mt_rand(0,9);
    }
    return $n2;
}
function gen_ran3($digits)
{
    $n3 = "";
    for($a=1; $a<=$digits; $a++)
    {
        $n3 .=mt_rand(0,9);
    }
    return $n3;
}

$connect = mysqli_connect("localhost", "root", "", "")
            or die("Cannot connect");
for($a=1; $a<=5; $a++)
{
    $codes =  gen_ran($digits) ." ". gen_ran2($digits) ." ". gen_ran3($digits);

    $query = "INSERT INTO codes (pins)
                VALUES ('$codes')";
    $result = mysqli_query($connect, $query)
            or die("Error");
    if($result)
    echo"$codes<br>";
}
?>