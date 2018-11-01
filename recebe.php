<?PHP 
include "dbconexao.php";
 
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO item (id, nome, descricao) VALUES ('$id', '$nome', '$descricao')";
mysqli_query($sql, $conexao);

if (!$sql) {
	echo "Erro";
} else {
	echo "Sucesso";
}

?>
