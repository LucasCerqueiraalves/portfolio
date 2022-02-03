<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Email Enviado</title>
    </head>
    <body>
        <?php
            $nome = $_POST ['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];
        ?>

        <?php
            $to = "lucascerqueiraalves0@gmail.com";

            $mensagem = "<strong>Nome:</strong> $nome<br/><br/> <strong>Email:</strong> $email<br/><br/> <strong>Mensagem:</strong> $mensagem";
            $hader = "MIME-Version: 1.0\n";
            $header .= "Content-type: text/html; charset=iso-8859-1\n";
            $header .= "From: $email\n";

            mail ($to, $mensage, $header);
            echo "Mensae";
        ?>
    </body>
</html>
