<?php    
if(isset($_POST['id'])){
$servername = "localhost"; 
$username = "root@localhost"; 
$password = ""; 
$dbname ="contest";
$conn = mysqli_connect($servername, $username, $password, $dbname);

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
    mysqli_close($conn);
}

if(isset($_POST['file'])){
    $name = $_POST['file'];
    $page = file_get_contents($name);
    echo $page;
}
 ?>