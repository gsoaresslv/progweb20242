<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/ex3.css">
    </head>
    <body>
        <h1>Resultado Relatório de Clientes</h1>
        <?php
            $clientes = array(
                array("codigo" => 1, "nome" => "Alberto Silva"),
                array("codigo" => 2, "nome" => "Bianca Duarte"),
                array("codigo" => 3, "nome" => "João Almeida"),
                array("codigo" => 4, "nome" => "Valéria Souza"),
                array("codigo" => 5, "nome" => "Augusto Silva")
            );
        ?>
        <div class="center"> 
            <table>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                <?php
                    foreach ($clientes as $cliente) {
                        echo "<tr>";
                        echo "<td>".$cliente['codigo']."</td>";
                        echo "<td>".$cliente['nome']."</td>";
                        echo "</tr>";
                        }
                ?>
                </tr>
            </table>
        </div class="center">
    </body>
</html>