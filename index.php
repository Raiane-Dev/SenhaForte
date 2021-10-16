<!DOCTYPE html>
<html>
<head>
    <title>Senha Forte</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<section class="senha-forte">
<div class="screen">
    <div class="senha-forte">
        <div class="apresentacao">
            <h2>Raiane Dev</h2>
            <p>Seja bem vindo!</p>
        </div>
            <div class="form">
            <form method="post">
                <label>E-mail</label>
                <input type="text" name="email" placeholder="example@gmail.com" />
                <label>Senha</label>
                <input type="password" name="senha" placeholder="******" />
                <input type="submit" name="acao" value="Enviar!" />
            </form>

            <?php
                if(isset($_POST['acao'])){
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    if(preg_match('/^[A-Z]{1}[a-z]{3,}[0-9]{3,}$/', $senha)){
                        echo '<div class="alerta-sucesso">Sua senha foi redefinida com sucesso</div>';
                    }else{
                        echo '<div class="alerta-erro">Erro ao redefinir. Sua senha precisa de ao menos um caracter maisculo, dois caracteres ou mais e pelo menos 3 números</div>';
                    }
                }
            ?>
        </div>
    </div>
</div>
</section>

</body>
</html>