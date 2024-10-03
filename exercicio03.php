<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php
    $datetime = new DateTime("now", new DateTimeZone( "America/Sao_Paulo" ));
    $hora = $datetime->format('H');

    if ($hora >=0 && $hora <=12) {
        echo "<h1>Bom dia!</h1></br>" ;
        echo "<img src='https://media.istockphoto.com/id/618332658/pt/foto/colosseum-em-roma-e-manh%C3%A3-de-sol-it%C3%A1lia.jpg?s=1024x1024&w=is&k=20&c=59iZhpeaRiTGGB4YOH9bJ6cawxxJfmf7A7IwuK4e3Jo=' alt='img'>";
    } elseif ($hora >12 && $hora <18){
        echo "<h1>Boa tarde!</h1></br>" ;
        echo "<img src='https://i0.wp.com/blogandarilho.com.br/wp-content/uploads/2020/05/Ponte-dellAccademia-Veneza-It%C3%A1lia-Divulga%C3%A7%C3%A3o-1.jpg?w=750&ssl=1' alt='img'>";
    }elseif($hora >=18 && $hora <=24){
        echo "<h1>Boa noite!</h1></br>" ;
        echo "<img src='https://res.cloudinary.com/hello-tickets/image/upload/c_limit,f_auto,q_auto,w_1920/v1646710357/kf4du3b2ghohf8prmmcc.jpg' alt='img'>";
    }
    ?>
</body>
</html>