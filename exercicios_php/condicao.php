<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudações</title>
</head>
<body>
    <?php 
        $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
        $hora = $datetime->format( 'H' );
    
        if ($hora >= 0 && $hora <= 12) {
            echo 'Bom dia! <br> <img src="/img/bomdia.png">';
        }

        if ($hora > 12 && $hora < 18) {
            echo 'Boa tarde! <br> <img src="/img/boatarde.png">';
        }

        if ($hora >= 18 && $hora <= 24) {
            echo 'Boa noite! <br> <img src="/img/boanoite.png">';
        }
    ?>
</body>
</html>