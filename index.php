<?php
require_once("Pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("João Vitor de Sousa Rodrigues");
$pessoa->setEndereco("Curuça");
$pessoa->setBairro("Vila Nova Curuça");
$pessoa->setCep("028750934");
$pessoa->setCidade("São Paulo");
$pessoa->setEstado("SP");

?>

<html>
    <head>
        <title>Primeiro teste php</title>
    </head>
    <body>
        <table style= "border : 1px solid; background-color: black">
            <tr>
                <td style= "border : 1px solid; background-color: #cccccc; padding: 15px "> <?php echo $pessoa->getNome();?></td>
            </tr>
            <tr>
                <td style= "border : 1px solid; background-color: #f3f3f3;  padding: 15px "> <?php echo $pessoa->getEndereco();?></td>
            </tr>
            <tr>
                <td style= "border : 1px solid; background-color: #f3f3f3;  padding: 15px "> <?php echo $pessoa->getBairro();?></td>
            </tr>
            <tr>
                <td style= "border : 1px solid; background-color: #f3f3f3;  padding: 15px "> <?php echo $pessoa->getCep();?></td>
            </tr>
            <tr>
                <td style= "border : 1px solid; background-color: #f3f3f3;  padding: 15px "> <?php echo $pessoa->getCidade();?></td>
            </tr>
            <tr>
                <td style= "border : 1px solid; background-color: #f3f3f3;  padding: 15px "> <?php echo $pessoa->getEstado();?></td>
            </tr>
        </table>
    </body>
</html>