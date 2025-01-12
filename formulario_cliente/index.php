<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>

    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>

    <body class="body">
        <div class="page">
            <form method="POST" class="formLogin">
        <div class="typewriter">
        <h1 class="h1"> Cadastro de cliente </h1>
        <p>Digite os seus dados para se cadastrar</p>
    </div>
    <br>
        <form class="formulario" action="#" method="post">
        
            <p> 
                <label class="nome"for="nome"><b>Nome: </b></label>
                <input id="nome" name="nome" required placeholder="Nome e Sobrenome"> 
    
            </p>
            <p>
                <label class="email" for="email"> <b>E-mail: </b></label>
                <input id="email" type="email" name="email" placeholder="usuario@empresa.com"> 
            </p>
    
            <p>
                <label class="senha" for="senha"><b>Senha: </b> </label>
                <input id="senha" type="password" name="senha" required maxlength="6">
            </p>
    
            <p>
                <input class="idade" type="number" placeholder="idade" min="15" max="99"> - 
                <label class="data" for="nascimento"><b>Data de Nascimento </b></label>
                <input class="nascimento"  type="date" id="nascimento">
            </p>
   
            <p class="calcado">
                
                <select name="calcado">
                    <option value=""><b>UF</b></option>

                    <option value="39">AC</option>
                    <option value="40">	AL</option>
                    <option value="41">AP</option>
                    <option value="39">	AM</option>
                    <option value="40">	BA</option>
                    <option value="41">CE</option>
                    <option value="39">	DF</option>
                    <option value="40">	ES</option>
                    <option value="41">GO</option>
                    <option value="39">MA</option>
                    <option value="40">	MT</option>
                    <option value="41">MS</option>
                    <option value="39">MG</option>
                    <option value="40">	PA</option>
                    <option value="41">PB</option>
                    <option value="39">PR</option>
                    <option value="40">	PE</option>
                    <option value="41">PI</option>
                    <option value="39">RJ</option>
                    <option value="40">	RN</option>
                    <option value="39">RS</option>
                    <option value="40">	RO</option>
                    <option value="41">RR</option>
                    <option value="39">	SC</option>
                    <option value="40">	SP</option>
                    <option value="39">	SE</option>
                    <option value="40">	TO</option>
                </select>
            </p>
    
            <p>
                <input class="tele" type="tel" placeholder="Telefone"><br>
                <input class="site"type="url" placeholder="CEP"><br>
            <p>

                <input type="submit" value="Salvar" class="botao" />
                <input type="reset" value="Limpar" class="botao" /> 

            </p>
       
        </form>
        </div>
</body>
</html>