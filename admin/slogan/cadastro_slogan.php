<?PHP
require_once('../conexao/banco.php');

$slogan = $_REQUEST['txt_descricao'];

$sql = "insert into tb_slogan (slo_slogan)
                                values ('$slogan')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_slogan.php");

?>