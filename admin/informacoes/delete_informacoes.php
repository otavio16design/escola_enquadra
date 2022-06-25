<?PHP
require_once('../conexao/banco.php');

$id = $_REQUEST['slo_id'];

$sql = "delete from tb_informacoes where inf_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_informacoes.php");

?>