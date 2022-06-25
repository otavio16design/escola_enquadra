<?PHP
require_once('../conexao/banco.php');

$id = $_REQUEST['txt_codigo'];
$titulo = $_REQUEST['txt_titulo'];
$icon = $_REQUEST['txt_icone'];
$descricao = $_REQUEST['txt_descricao'];

$sql = "update tb_informacoes set
                    inf_titulo = '$titulo',
                    inf_icon = '$icon',
                    inf_descricao = '$descricao'
                where
                    inf_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_informacoes.php");
?>