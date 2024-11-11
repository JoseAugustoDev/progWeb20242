<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Relatório de Clientes</title>
</head>
<body>
    <table border=1 style="text-align: center;">

        <?php 
        $clientes = array
        (
            array("Código", "Nome"),
            array("1", "Jose Augusto"),
            array("2", "Predo Henrique"),
            array("3", "Milena Mariani")
        );
        
        foreach ($clientes as $chave => $valor) {
            echo "<tr>";
            foreach ($clientes[$chave] as $cedula) {
                echo "<td>" .$cedula. "</td>";
            }   
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>