<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Formulário de Cadastro </title>

    <link rel="stylesheet" type="text/css" href="../css/formatacao.css">

</head>

<body>
    <form name="frm_informacoes" action="cadastro_informacoes.php" method="post">
        <div id="principal">

            <label> Título </label>
            <input name="txt_titulo" type="text" class="input_01">
            
            <label> Ícone </label>
            <input name="txt_icone" type="text" placeholder="No site abaixo pesquise, copie e cole o código!" class="input_01">
            <a href="https://fontawesome.com/icons" style="color: black; font-family: Arial, Helvetica, sans-serif; font-size: 13px;
            text-decoration: none;" > ICON AWESOME</a>
            <h4> </h4>
            
            <label> Descrição </label>
            <input name="txt_descricao" type="text" class="input_01">

            
            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
            
        
        </div>
        
    </form>
    
</body>

</html>