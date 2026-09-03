<?php
$nome = $_POST['nome'];

$dados = [$nome];

file_put_contents('dados.json', json_encode($dados));

echo "Salvei o nome: " . $nome;