<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="style.css">
    
    <title>Document</title>
</head>
<body>  
    <div class="section"> 
        <form action="formulario.php" method="post">
            <div class="titulo">
                <h2>Formulario de cadastro</h2>    
            </div>
            <div class="in">
                <!--Div Nome-->
                <label for="">Primerio nome: </label>
                <input type="text" name="nome" id="input-nome" placeholder="ex: Maria " maxlength="40">
            </div>
            <div class="in">
                <!--Div Sobrenome-->
                <label for="">Sobrenome:</label>
                <input type="text" name="sobrenome" id="input-sobrenome" maxlength="40">
            </div>
            <div class="in">                
                <!--Div data de nascimetno-->
                <label for="">Data de nascimento:</label>
                <input type="date" name="nascimento" id="input-nascimento">
            </div>
            <div class="in">
                <!--Div email-->
                <label for="">Email: </label>
                <input type="text" name="email" id="input-email" placeholder="nome@email.com" maxlength="110">
            </div>       
            <div class="in">
                <!--Div cidade-->
                <label for="">Cidade: </label>
                <input type="text" name="cidade" id="input-cidade" maxlength="50">
            </div>
            <Div class="in">
              
                <!--Div rua-->
                <label for="">Rua: </label>
                <input type="text" name="rua" id="input-rua" maxlength="50">
            </Div>
            <div class="in">
                <!--Div bairro-->
                <label for="">Bairro: </label>
                <input type="text" name="bairro" id="input-bairro" maxlength="50">
            </div>
               
            
            <div class="buttons">
                <!--Reset e submit-->
                <input type="reset" value="Reset">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>