<?PHP
require_once('../conexao/banco.php');

$titulo = $_REQUEST['txt_titulo'];
$icone = $_REQUEST['txt_icone'];
$descricao = $_REQUEST['txt_descricao'];


$sql = "insert into tb_informacoes (inf_titulo, inf_descricao, inf_icon)
                                values ('$titulo' , '$descricao', '$icone')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_informacoes.php");

?>