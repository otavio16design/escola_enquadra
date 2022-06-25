<?PHP
require_once('../conexao/banco.php');
 
$sql = "select *, 
        date_format(inf_data_cadastro,'%d/%m/%Y') as data_cadastro
     from tb_informacoes";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!");
 
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Consulta Informações </title>
        <link rel="stylesheet" type="text/css" href="../css/consulta.css">
        
        <script type="text/javascript">   

function excluir_registro() {

    if(!confirm('Deseja realmente excluir este registro?') 

){

    if(window.event)

        window.event.returnValue=false;

    else

        e.preventDefault();

 }

}

</script>
</head>
<body>
 
<div id="principal">
 
    <div class="linha">
        <div class="coluna_01"> <strong> ID </strong> </div>
        <div class="coluna_03"> <strong> Título </strong> </div>
        <div class="coluna_03"> <strong> Descrição </strong> </div>
        <div class="coluna_02"> <strong> Data Cadastro </strong> </div>
    </div>
 
    <?php while($dados = mysqli_fetch_array($sql)) { ?>
 
    <div class="linha">
        <div class="coluna_01"> <?php echo $dados ['inf_id']; ?> </div>
        <div class="coluna_03"> <?php echo $dados ['inf_titulo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados ['inf_descricao']; ?> </div>
        <div class="coluna_02"> <?php echo $dados ['data_cadastro']; ?> </div>
 
        <div class="coluna_01">    
            <a href="delete_informacoes.php?slo_id=<?php echo $dados['inf_id']; ?>" onclick="excluir_registro(event)">
                <img src="../img/excluir.png">
            </a>
        </div>
 
        <div class="coluna_01">
            <a href="form_atualizar_informacoes.php?slo_id=<?php echo $dados['inf_id']; ?>">
                <img src="../img/edit.png">
            </a>
        </div>
 
    </div>
 
    <?php } ?>
 
</div>
</body>
</html>