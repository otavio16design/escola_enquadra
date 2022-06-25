<?PHP
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$slogan = $_REQUEST['txt_descricao'];

$sql = "update slogan set
                    slo_slogan = '$slogan'
                where
                    slo_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_slogan.php");
?>