<?php

require_once __DIR__ . './data/carta.php';
require_once __DIR__ . './data/prodotti.php';
require_once __DIR__ . './data/utenti.php';

$maglietta1 = new Maglietta( "S", "Blu", "Maschile", "Maniche corte", "Maglietta", "Boolean" , 50, 1);
$maglietta2 = new Maglietta("M", "Navy", "Femminile", "Maniche lunghe", "Maglietta", "Boolean", 50, 1);

$acquisti = [$maglietta1,$maglietta2];

$utente = new Utente("David", 24, "Piscopodavid97@gmail.com");

$cartaDebito = new Carta("David", "6564756548", "30/10/24", "Revolut");

$utente->aggiungiCarte($cartaDebito);

function prezzoTotale($prezzo, $quantita){
    $carrello = $prezzo * $quantita;
    return $carrello;
}

$spesa1 = prezzoTotale($maglietta1->getPrezzo(),$maglietta1->getQuantita());
$spesa2 = prezzoTotale($maglietta2->getPrezzo(),$maglietta2->getQuantita());

$spesaTotale = $spesa1 + $spesa2;

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2 - Shop</title>
</head>
<body>
    <h1>Shopping</h1>
    <br>
    <h2>Nome utente: <?= $utente->getNome(); ?></h2>
    <h2>Email Utente: <?= $utente->getMail(); ?></h2>
    <h2>Carta Utente: <?= $cartaDebito->getNomecarta() . " " . $cartaDebito->getDataScadenza(); ?></h2>

    <hr>

    <h3>Prodotti acquistati: 
        <?php forEach($acquisti as $acquisto){; ?></h3>
            <p><?= $acquisto->getNome() . " " . $acquisto->getTaglia() . " " . $acquisto->getColore() . " " . $acquisto->getTipo() . " " . $acquisto->getGenere(); ?>
            </p>
        <?php }; ?>
    <br>
    <h2>Spesa totale: <?= $spesaTotale; ?>&euro;</h2>
    
</body>
</html>
