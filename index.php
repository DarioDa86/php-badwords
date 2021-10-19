<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi  tutte le occorrenze della parola da censurare. -->

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $parolaCensurata = $_GET["Censura"];

    $primoCapitolo = "Oh, una festa! Che bel modo felice di iniziare un romanzo! Sembra quasi che si voglia accentuare il contrasto tra la vita idilliaca e felice degli spensierati Hobbit e le ombre e i pericoli del mondo esterno…

    Ad ogni modo, a compiere gli anni sono, contemporaneamente, Bilbo e Frodo, i due Hobbit di Casa Baggins. Più precisamente, la data del compleanno sarà il 22 settembre, e per quest’anno si farà una grandissima vesta, visto che Bilbo compie 111 anni e Frodo invece 33 (la data della maggiore età per gli Hobbit).
    
    Bilbo è uno degli Hobbit più famosi di Hobbiville: “sessant’anni prima era sparito di colpo, per poi ritornare inaspettatamente”, ricco e bizzarro. Stranamente, non sembra invecchiato di un anno, e all’avvicinarsi suo centoundicesimo compleanno ha lo stesso aspetto del cinquantesimo. Chi ha letto il Prologo (dovreste!) o lo Hobbit si ricorderà dell’Anello Magico che Bilbo aveva ricevuto in regalo vinto da Gollum – ora, non sono un esperto di Anelli del Potere, ma forse le due cose sono collegate?
    
    Per quanto riguarda Frodo, è un lontano parente di Bilbo (figlio del suo cugino di secondo grado), ma decisamente il suo favorito tra i tanti nipoti. Sono già dodici anni che Bilbo lo ha adottato (i genitori di Frodo sono morti in un incidente in barca quando lui era giovanissimo), e portato con sé a Hobbiville. Nonostante l’adolescenza turbolenta, Frodo è ora un rispettato Hobbit.
    
    Le notizie della festa si sono, giustamente, sparse per tutta la Contea. Ham Gangee, detto il Gaffiere, giardiniere per 40 anni di Casa Baggins (ora compito di suo figlio Sam), passa ore nelle piccola Osteria sulla via per Lungacque a raccontare storie su Bilbo e su Frodo, delle quali abbiamo un piccolo assaggio . Bilbo è bizzarro, certo, ma anche molto generoso e sicuramente un Hobbit per bene. Non ci sono gioielli nelle cantine, dice il Gaffiere, ma una cosa è certa: alla festa sono tutti invitati, e ci sarà un regalo per ognuno!
    
    Le preparazioni continuano per settimane. Arrivano notizie di fuochi d’artificio, come non se ne vedono nella Contea da un secolo. Carri di gente da fuori (soprattutto Nani) portano strani pacchetti a Casa Baggins. Un giorno si fa vedere anche Gandalf lo Stregone, con il suo mantello grigio, sciarpa argentea e cappello a punta blu. Vengono rizzate tende e padiglioni, appesi lampioni, installata un’enorme cucina all’aperto. Quello che Bilbo chiama festa è in realtà un insieme di spettacoli e divertimenti, con regali per tutti (è abitudine degli Hobbit fare regali agli invitati della propria festa di compleanno, non il contrario).";
    
    $avvioCensura= str_replace($parolaCensurata ,"***", $primoCapitolo) ;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- capitolo originale -->
        <div>
            <h1>Il Signore degli Anelli</h1>
            <h3>Capitolo 1</h3>
            <p><?php echo $primoCapitolo; ?></p>
            <h4>La lunghezza del capitolo è: <?php echo strlen($primoCapitolo); ?> caratteri.</h4>
        </div>
        <!-- /capitolo originale -->
        <hr>
        
        <!-- capitolo censurato -->
        <div>
            <form action="">
                <input type="text" name="Censura" placeholder="Inserisci una parola da censurare">
                <button type="submit">Censura</button>
            </form>
            <h3>Capitolo 1 (censurato)</h3>
            <p><?php echo $avvioCensura; ?></p>
            <h4>La lunghezza del capitolo è: <?php echo strlen($avvioCensura); ?> caratteri.</h4>
        </div>
        <!-- /capitolo censurato -->


    </body>
</html>