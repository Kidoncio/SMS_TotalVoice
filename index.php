<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="form.css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Enviar SMS</title>
</head>

<body>
<div id="content">
    <h1>Enviar SMS</h1>

    <form action="sms.php" method="post">
        <label for="numero_destino" class="icon-phone"> Número
            <span class="required">*</span>
        </label>
        <input type="number" id="numero_destino" name="numero_destino" required="required" placeholder="Exemplo: 47997640377" />

        <label for="access_token" class="icon-key"> Access Token
            <span class="required">*</span>
        </label>
        <input type="text" id="access_token" name="access_token" required="required" placeholder="Exemplo: 74d878c31502bd2f3c5cf0a08be3e99b" />

        <label for="mensagem" class="icon-comment"> Mensagem
            <span class="required">*</span>
        </label>
        <textarea placeholder="Olá, tudo bem?" id="mensagem" name="mensagem" required="required"></textarea>

        <p class="indication">
            Campos com <span class="required"> * </span>são obrigatórios
        </p>

        <input type="submit" value="Enviar SMS!" id="submit"/>
    </form>
</div>
