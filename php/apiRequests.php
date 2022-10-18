<?php
function apiBotRequest($url, $post = FALSE, $headers = array())
{
    $botToken = $_ENV['BOT_TOKEN'];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $response = curl_exec($ch);


    if ($post)
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

    $headers[] = 'Accept: application/json';

    if ($botToken)
        $headers[] = 'Authorization: Bot ' . $botToken;

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    return json_decode($response);
}
