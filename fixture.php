<?php

require_once "conexaoDB.php";

echo "#### Executando Fixture ####\n";

$conn = conecaoDB();

echo "Removendo tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " - OK\n";


echo "Criando tabela";
$conn->query("CREATE TABLE teste (
                id INT NOT NULL AUTO_INCREMENT,
                nome VARCHAR(45) CAHRACTER SET 'utf8' NULL,
                PRIMARY KEY (id));");
echo " - OK\n";

echo "Inserindo dados";
for($x = 0; $x <= 9; $x++){

    $nome = "Teste {$x}";

    $smt = $conn->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $smt->bindParam(":nome", $nome);
    $smt->execute();
}

echo " - ok\n";

echo "#### Concluído ####\n";