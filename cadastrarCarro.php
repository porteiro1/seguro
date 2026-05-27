<?php
$hostname ='127.0.0.1';
$name     ='root';
$password ='';
$database ='seguro';

$conexao  = new mysqli($hostname,$name,$password,$database);

if($conexao -> connect_errno){
  echo "deu nao paizao". $conexao -> connect_error;
  exit();
}else{
  $modelo     = $conexao->real_escape_string($_POST['modelo']);
  $lancamento = $conexao->real_escape_string($_POST['lancamento']);
  $placa      = $conexao->real_escape_string($_POST['placa']);
  $dono       = $conexao->real_escape_string($_POST['dono']);

  $sql = "INSERT INTO `seguro`.`carro` (`modelo`,`anoLancamento`,`placa`,`dono`) VALUES ('".$modelo."', '".$lancamento."', '".$placa."', '".$dono."');";

  $resultado = $conexao->query($sql);
  $conexao->close();
  header('Location: index.php',true,301);

}
?>
