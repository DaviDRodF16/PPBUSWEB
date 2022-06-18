<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PPBUS - FEEDBACK </title>
    <link rel="stylesheet" href="alertify/css/alertify.min.css">
</head>
<body>
    <h1> PPBUS </h1>
        
    <form action="processcoments.php" method="post" id="formcoment">
        <fieldset>
            <legend> Nos dê seu feedback! </legend>
        <div>
            <label for="nome"> Digite seu nome</label>
            <input type="text" id="nome" name="nome" required>

        </div>
        <div>
            <label for="email"> Digite seu e-mail </label>
            <input type="email" id="nome" name="nome" required>
        </div>
        <div>
            <p> Esse site foi útil para vocês?  </p>
            <input type="radio" id="sim" name="simnao" value="sim" required>
            <label for="sim"> Sim  </label>
            <input type="radio" id="nao" name="simnao" value="nao" required>
            <label for="nao"> Não </label>
        </div>
        <div>
            <label for="inputOpiniao"> Escreva-nos sua opinião sobre o site! </label> 
            <textarea id="inputOpiniao" name="opiniao" required></textarea>

        </div>
        <input type="submit" id="btnenviar" name="btnenviar" value="Entrar"/>
        </fieldset>
    </form>
    
    <script src="js/jquery360.min.js"> </script>
    <script src="alertify/alertify.min.js"></script>
    <script src="js/app.js "></script>
</body>
</html>