<?php

function enviaSMS($numero_destino, $mensagem, $access_token) {

    $body = array();
    $body["numero_destino"] = $numero_destino;
    $body["mensagem"] = $mensagem;
    $body["resposta_usuario"] = false;
    $body["multi_sms"] = false;
    $body = json_encode($body);

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-Type: application/json\r\n".
                "Accept: application/json\r\n".
                "Access-Token: ".$access_token."\r\n",
            'content' => $body,
            'timeout' => 60
        )
    );

    $context  = stream_context_create($opts);
    $url = 'https://api.totalvoice.com.br/sms';
    return $result = file_get_contents($url, false, $context);
}