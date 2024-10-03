<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <table></table>
    <?php
    echo "<h1><b>Resultado Relatório de Clientes:</b></h1>";
    $array = array("Código" => "Nome", 1 => "Alberto Silva", 2 => "Bianca Duarte", 
    3 => "João Almeida", 4 => "Valéria Souza", 5 => "Augusto Silva");

    $totlinhas = count($array);

    echo "<table border='1'>";
	echo "<tr>";
		echo "<th>Carro</th>";
		echo "<th>Em estoque</th>";
		echo "<th>Vendidos</th>";
	echo "</tr>";
	for ($linha = 0; $linha < $totlinhas ; $linha++) {
		
	  //echo "<p><b>Linha número $linha</b></p>";
	  echo "<tr>";
	  for ($col = 0; $col < 3; $col++) {
		echo "<td>".$carros[$linha][$col]."</td>";
	  }
	  echo "</tr>";
	}
    echo "</table>";

    echo($array);
    ?>
</body>
</html>