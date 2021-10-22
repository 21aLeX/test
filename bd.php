<?php
$value = 7;
for($j = 0; $j<1000000;){
  for($i=0;$i<=100000;$i++){
    $arr[$i] = $value;
    $value = array_sum(str_split($value**2))+1;
  }
  $qweri = "INSERT INTO us3462 (value) VALUES (".  implode("), (", $arr) . ");";
  $result = mysqli_query($conn,$qweri);
  $j +=$i;
}
if(!$result){
  echo ("<script>alert('Ошибка: " . $conn->error."')</script>");
}
mysqli_close($conn);
?>