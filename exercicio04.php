<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Relatório de Clientes</h2>
    <?php
      //array associativo
      //dá pra fazer com array de arrays e fazer loop
      $pessoa1 = array("codigo"=> 1, "nome" => "Alberto Silva");
      $pessoa2 = array("codigo"=> 2, "nome" => "Bianca Duarte");
      $pessoa3 = array("codigo"=> 3, "nome" => "João Almeida");
      $pessoa4 = array("codigo"=> 4, "nome" => "Valéria Souza");
      $pessoa5 = array("codigo"=> 5, "nome" => "Augusto Silva");
      $lista = ['pessoa'][] = $pessoa1; //array maior chamado pessoa. Lista de lista
      $lista = ['pessoa'][] = $pessoa2;
      $lista = ['pessoa'][] = $pessoa3;
      $lista = ['pessoa'][] = $pessoa4;
      $lista = ['pessoa'][] = $pessoa5;

      var_dump($lista);

      //Vai imprimir 5 vezes o table
      //lista pessoa
      foreach($lista as $listapessoas){
    ?>
    <!--Volta a ser HTML, pra não usar o echo e misturar muito o front com o back-->
    <!--Linguagem macarroni mistura muito o back com o front-->

    <table>
      <tr>
        <th>Código</th>
        <th>Nome</th>
      </tr>

      <?php 
        //índice das pessoas no array pessoa
        foreach($listapessoas as $itempessoas => $valuepessoas){?>
          <tr>
            <?php
              //pega o nome e o código
              foreach($valuepessoas as $item => $value){
                echo "<td>$value</td>";
              }?>
          </tr>    
      <?php } ?>
    </table>
    <?php } ?>
</body>
</html>