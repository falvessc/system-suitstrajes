<?php

header('Content-Type: text/html; charset=utf-8');

$app = new Phalcon\Mvc\Micro();
echo "<pre>";
print_r($app);
exit();

$app->get('/diga/ola/{nome}', function ($nome) use ($app) {
        echo json_encode(array($nome, "uma", "informação", "importante"));
});

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'This is crazy, but this page was not found!';
});

$app->handle();