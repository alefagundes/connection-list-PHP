<?php 

/*function soma($a, $b){
	return $a + $b;
}
$val = soma(5, 12);

print $val;

function validaValor($valor){
	if($valor % 2 == 0){
		print "par";
	}else{
		print "impar";
	}
}

validaValor(15);*/

/*$hostname = "localhost";
$bancoDeDados = "teste"
$usuario = "root";
$senha = "";*/



$conexao = mysqli_connect("localhost", "root", "", "teste");

if($conexao->connect_error){
	echo "Falha ao se conectar: (" .$conexao->connect_error . ") " . $conexao->connect_error;
}

?>