<?PHP
require_once('../conexao/banco.php');
$id = $_REQUEST['slo_id'];

$sql = "select * from tb_informacoes where inf_id = '$id'";
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

    <form name="frm_informacoes" action="atualizar_informacoes.php" method="post">

        <div id="principal">
          <label> Código </label>
            <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['inf_id']; ?>">

            <label> Título </label>
            <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['inf_titulo']; ?>">
            
            <label> Ícone </label>
            <input name="txt_icone" type="text" class="input_01" value="<?php echo $dados['inf_icon']; ?>">
            
            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01" value="<?php echo $dados['inf_descricao']; ?>">

            <input name="btn_enviar" type="submit" class="btn" >

        </div>
        
    </form>
  </body>
</html>