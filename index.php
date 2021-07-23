<?php

$paragraph = "Nel mezzo del cammin di nostra vita
mi ritrovai per una selva oscura,
ché la diritta via era smarrita.

Ahi quanto a dir qual era è cosa dura
esta selva selvaggia e aspra e forte
che nel pensier rinova la paura!

Tant' è amara che poco è più morte;
ma per trattar del ben ch'i' vi trovai,
dirò de l'altre cose ch'i' v'ho scorte.";

// $sec_parag = explode(" ", $paragraph);

$word = $_GET["word"];

$censor_p = str_replace($word,"***",$paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>


<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<main>

    <h1>Paragrafo 1</h1>
    <hr>

    <p> <?php echo $paragraph; ?> </p>

    <h4>Lettere Usate: <?php echo strlen($paragraph); ?></h4>

</main>

<footer>
    <h2>INSERISCI LA PAROLA DA CENSURARE!</h2>
    <form action="index.php" method="get">
        PAROLA: <input type="text" name="word" placeholder="inserisci la parola qui..">
        <input type="submit">
    </form> 

    <h3>La TUA parola: <?php echo $word; ?></h3>
    <p>
        <?php echo $censor_p; ?>
    </p>

    <h4>Lettere Usate: <?php echo strlen($censor_p); ?></h4>
</footer>


    
</body>
</html>