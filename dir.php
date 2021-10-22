<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="contest";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sqltable = "CREATE TABLE IF NOT EXISTS us3462 (id INTEGER AUTO_INCREMENT PRIMARY KEY, value MEDIUMINT UNSIGNED);";
if($conn->query($sqltable)===false){
  echo ("<script>alert('Ошибка создания таблицы: " . $conn->error."')</script>");
}
$sql = "SELECT id  FROM us3462";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
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
}
if(isset($_POST['id'])){
  
  if (!$conn) {
      echo ( 'Ошибка подключения');
      exit();
  }
      $id = $_POST['id'];
      $value = mysqli_query($conn, "SELECT value FROM us3462 WHERE id = '$id'");
      $com_pol = $value ->fetch_row()[0];
      $value ->close();
        
  if($com_pol == null){
      echo 'ошибка';
  }
      echo $com_pol;
  }
  
  if(isset($_POST['file'])){
      $name = $_POST['file'];
      $page = file_get_contents($name);
      echo $page;
  }
?>