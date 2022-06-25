<?PHP
require_once('../conexao/banco.php');

$id = $_REQUEST['slo_id'];

$sql = "delete from slogan where slo_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_slogan.php");

?>