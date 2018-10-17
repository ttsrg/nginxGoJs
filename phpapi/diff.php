<?php
#header('Content-Type: application/json');
$result["Status"] = "o.k.";
$result["Code"] = 0;
$result["Result"] = 0;
$a = $_GET['a'];
$b = $_GET['b'];
if ($a == null) {
    $result["Status"] = "param A is missing";
    $result["Code"] = 1;
} else if (!is_numeric($a)) {
    $result["Status"] = "param A is not a number";
    $result["Code"] = 2;
}
if ($b == null) {
    $result["Status"] = "param B is missing";
    $result["Code"] = 3;
} else if (!is_numeric($b)) {
    $result["Status"] = "param B is not a number";
    $result["Code"] = 4;
}
if ($result["Code"] == 0) $result["Result"] = $a - $b;
#if ($code == 0) $result = $a - $b;

echo json_encode($result);
#echo json_encode(array('Status'=>$status,'Code'=>$code,'Result'=>$result)), "\n";
?>
