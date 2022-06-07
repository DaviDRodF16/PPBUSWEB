<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PPBUS - FEEDBACK </title>

</head>
<body>
    <h1> PPBUS </h1>
        <ul>
            <li> <a href="index.php"> Ínicio</a></li>
            <li> <a href="comousar.php"> Ajuda </a> </li>
            <li> <a href="onibus.php"> Ônibus </a> </li>

        </ul>
    <form action="processcoments.php" method="post">
        <fieldset>
            <legend> Nos dê seu feedback! </legend>
        <div>
            <label for="nome"> Digite seu nome</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="email"> Digite seu e-mail </label>
            <input type="email" id="nome" name="nome">
        </div>
        <div>
            <p> Esse site foi útil para vocês?  </p>
            <input type="radio" id="sim" name="sim">
            <label for="sim"> Sim  </label>
            
        </div>

        </fieldset>
    </form>
</body>
</html>