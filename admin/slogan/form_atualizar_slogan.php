<?PHP
require_once('../conexao/banco.php');
$id = $_REQUEST['slo_id'];

$sql = "select * from slogan where slo_id = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!");
$dados = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulários Atualizar </title>
        <link rel="stylesheet" Type="text/css" href="../css/formatacao.css">
    </head>
  <body>

    <form name="frm_slogan" action="atualizar_slogan.php" method="post">

        <div id="principal">
          <label> Código </label>
            <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['slo_id']; ?>">

          <label> slogan </label>
            <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['slo_slogan']; ?>">

            <input name="btn_enviar" type="submit" class="btn" >

        </div>
        
    </form>
  </body>
</html>