<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="form.css" rel="stylesheet">

    <!--SweetAlert2-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.css' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>

    <meta charset="UTF-8">
    <title>Enviar SMS</title>
</head>

<body>
<div id="content">

    <h1>Enviar SMS</h1>

    <?php
    $numero_destino = $_POST['numero_destino'];
    $mensagem = $_POST['mensagem'];
    $access_token = $_POST['access_token'];

    require_once "enviaSMS.php";

    $resultado = enviaSMS($numero_destino, $mensagem, $access_token);
    $resultado = json_decode($resultado);
    ?>

    <?php
    if ($resultado->{'sucesso'} == true ){ ?>
        <script>
            swal({
                title: "SMS Enviado!",
                text:  "A sua mensagem foi entregue ao destinatário",
                type: "success",
                timer: 3500,
                showConfirmButton: false
            });
        </script>
    <?php
    } else if(!isset($resultado)) { ?>
        <script>
            swal({
                title: "OOps!",
                text:  "Algo de errado não está certo. Tente novamente.",
                type: "error"
            });
        </script>
        <?php
    }
    ?>

    <form action="index.php">
        <input type="submit" value="Voltar" id="submit"/>
    </form>
</div>
</body>
