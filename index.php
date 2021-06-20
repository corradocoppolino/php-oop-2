<?php 

  require_once __DIR__ . '/Product.php';
  require_once __DIR__ . '/User.php';
  require_once __DIR__ . '/CreditCard.php';
  require_once __DIR__ . '/PremiumUser.php';


  /* PRODUCTS */
  /* Prodotto 1, Ipad */
  $prod1 = new Product("Samsung Galaxy S21", "Telefonia", 700);
  $prod1->price = 100;
  /* var_dump($prod1); */
  $prod2 = new Product("Iphone 12", "Telefonia", 800);
  /* var_dump($prod2); */
  $prod3 = new Product("Tostapane", "Elettrodomestici", 100);
  /* var_dump($prod3); */
  $prod4 = new Product("Bicicletta", "Sport e tempo libero", 500);
  /* var_dump($prod4); */
  /* Array con tutti i prodotti */
  $products = array($prod1, $prod2, $prod3, $prod4);
  /* var_dump($products); */
  /* /PRODUCTS */


  /* CREDIT CARDS */
  /* Carta di credito n°1 */
  $card1 = new CreditCard('1111111111111111', 2028, '200');
  /* var_dump($card1); */
  /* Carta di credito n°2 */
  $card2 = new CreditCard('2222222222222222', 2022, '500');
  /* var_dump($card2); */
  /* Carta di credito n°3 */
  $card3 = new CreditCard('3333333333333333', 2023, '404');
  /* var_dump($card3); */
  /* Carta di credito n°4 */
  $card4 = new CreditCard('4444444444444444', 2031, '504');
  /* Array con tutte le carte di credito */
  $cards = array($card1, $card2, $card3, $card4);
  /* /CREDIT CARDS */


  /* USERS */
  /* User 1 */
  $user1 = new User("Ugo", "De Ughi");
  $user1->dateOfBirth = "14/11/1972";
  $user1->address = "Via Luigi 15, Palermo";
  $user1->age = 49;
  $user1->gender = "Uomo";
  /* Funzione che aggiunge la carta di credito all'utente selezionato */
  $user1->getCreditCard($card1);
  /* Funzione che aggiunge un prodotto al carrello dell'utente selezionato */
  $user1->addProduct($prod1);
  $user1->addProduct($prod4);
  /* var_dump($user1); */
  /* User 2 */
  $user2 = new User("Franco", "Rossi");
  $user2->dateOfBirth = "10/08/1982";
  $user2->address = "Via Rossi 1, Milano";
  $user2->age = 39;
  $user2->gender = "Uomo";
  $user2->getCreditCard($card2);
  $user2->addProduct($prod2);
  $user2->addProduct($prod3);
  /* var_dump($user2); */
  /* Array contenente tutti gli utenti */
  $users = array($user1, $user2);
  /* /USERS */

  /* PREMIUM USERS */
  /* Premium User 1 */
  $premiumUser1 = new PremiumUser('Giuseppe', 'Verdi', 22, 'bronzo');
  $premiumUser1->addProduct($prod3);
  $premiumUser1->addProduct($prod1);
  $premiumUser1->setDiscount();
  $premiumUser1->dateOfBirth = "12/10/1999";
  $premiumUser1->address = "Via Dado 1, Monza";
  $premiumUser1->gender = "Uomo";
  /* var_dump($premiumUser1); */
  /* Premium User 2 */
  $premiumUser2 = new PremiumUser("Alessia", "Bianchi", 18, 'oro');
  $premiumUser2->addProduct($prod4);
  $premiumUser2->addProduct($prod3);
  $premiumUser2->setDiscount();
  $premiumUser2->dateOfBirth = "05/06/2003";
  $premiumUser2->address = "Corso Europa 96, Pavia";
  $premiumUser2->gender = "Donna";
  /* var_dump($premiumUser2); */
  /* Array contenente tutti gli utenti premium */
  $premiumUsers = array($premiumUser1, $premiumUser2);
  /* /PREMIUM USERS */

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
  </head>
  <body>
    <header>
      <h1>Shop Online</h1>
    </header>
    <main>


      <!-- PRIMO UTENTE -->


      <h4>INFORMAZIONI UTENTE</h4>

      <p>
      
            NOME: <?php echo $user1->name ?> <br>
            COGNOME: <?php echo $user1->surname ?> <br>
            SESSO: <?php echo $user1->gender ?> <br>
            ETA': <?php echo $user1->age ?> <br>
            INDIRIZZO: <?php echo $user1->address ?> 
      
      </p>

      <h4>INFORMAZIONI CARTA</h4>

      <p>

            NUMERO CARTA: <?php echo $card1->number ?> <br>
            SCADENZA: <?php echo $card1->expirationDate ?> <br>
            CODICE SEGRETO: <?php echo $card1->code ?> <br>

      </p>

      <h4>CARRELLO</h4>

      <p>
      
            <?php foreach($user1->cart as $element) { ?>
                
                <ul>
                
                    <li> <?php echo $element->name ?> <?php echo $element->category ?> <?php echo $element->price ?> $ </li>

                </ul>

            <?php } ?>

      </p>

      <h4>TOTALE</h4>

      <?php foreach($user1->cart as $element) { ?>
    
            <?php $totale1 += $element->price ?>

      <?php } ?>

      <p>
      
            Il prezzo totale è: <?php echo $totale1 ?> $ 
      
      </p>


      <!-- SECONDO UTENTE -->


      <h4>INFORMAZIONI UTENTE</h4>

      <p>
      
            NOME: <?php echo $user2->name ?> <br>
            COGNOME: <?php echo $user2->surname ?> <br>
            SESSO: <?php echo $user2->gender ?> <br>
            ETA': <?php echo $user2->age ?> <br>
            INDIRIZZO: <?php echo $user2->address ?> 
      
      </p>

      <h4>INFORMAZIONI CARTA</h4>

      <p>

            NUMERO CARTA: <?php echo $card2->number ?> <br>
            SCADENZA: <?php echo $card2->expirationDate ?> <br>
            CODICE SEGRETO: <?php echo $card2->code ?> <br>

      </p>

      <h4>CARRELLO</h4>

      <p>
      
            <?php foreach($user2->cart as $element) { ?>
                
                <ul>
                
                    <li> <?php echo $element->name ?> <?php echo $element->category ?> <?php echo $element->price ?> $ </li>

                </ul>

            <?php } ?>

      </p>

      <h4>TOTALE</h4>

      <?php foreach($user2->cart as $element) { ?>
    
            <?php $totale2 += $element->price ?>

      <?php } ?>

      <p>
      
            Il prezzo totale è: <?php echo $totale2 ?> $ 
      
      </p>


      <!-- PRIMO UTENTE PREMIUM -->


      <h4>INFORMAZIONI UTENTE</h4>

      <p>
      
            NOME: <?php echo $premiumUser1->name ?> <br>
            COGNOME: <?php echo $premiumUser1->surname ?> <br>
            SESSO: <?php echo $premiumUser1->gender ?> <br>
            ETA': <?php echo $premiumUser1->age ?> <br>
            INDIRIZZO: <?php echo $premiumUser1->address ?> 
      
      </p>

      <h4>INFORMAZIONI CARTA</h4>

      <p>

            NUMERO CARTA: <?php echo $card3->number ?> <br>
            SCADENZA: <?php echo $card3->expirationDate ?> <br>
            CODICE SEGRETO: <?php echo $card3->code ?> <br>

      </p>

      <h4>CARRELLO</h4>

      <p>
      
            <?php foreach($premiumUser1->cart as $element) { ?>
                
                <ul>
                
                    <li> <?php echo $element->name ?> <?php echo $element->category ?> <?php echo $element->price ?> $ </li>

                </ul>

            <?php } ?>

      </p>

      <h4>TOTALE</h4>

      <?php foreach($premiumUser1->cart as $element) { ?>
    
            <?php $totale3 += $element->price ?>
            <?php $totaleFinale3 = $totale3 * $premiumUser1->getDiscount()?>

      <?php } ?>

      <p>
      
            Grazie al tuo abbonamento <?php echo $premiumUser1->category ?> il prezzo totale è: <?php echo $totaleFinale3 ?> $ 
      
      </p>


      <!-- SECONDO UTENTE PREMIUM -->


      <h4>INFORMAZIONI UTENTE</h4>

      <p>
      
            NOME: <?php echo $premiumUser2->name ?> <br>
            COGNOME: <?php echo $premiumUser2->surname ?> <br>
            SESSO: <?php echo $premiumUser2->gender ?> <br>
            ETA': <?php echo $premiumUser2->age ?> <br>
            INDIRIZZO: <?php echo $premiumUser2->address ?> 
      
      </p>

      <h4>INFORMAZIONI CARTA</h4>

      <p>

            NUMERO CARTA: <?php echo $card4->number ?> <br>
            SCADENZA: <?php echo $card4->expirationDate ?> <br>
            CODICE SEGRETO: <?php echo $card4->code ?> <br>

      </p>

      <h4>CARRELLO</h4>

      <p>
      
            <?php foreach($premiumUser2->cart as $element) { ?>
                
                <ul>
                
                    <li> <?php echo $element->name ?> <?php echo $element->category ?> <?php echo $element->price ?> $ </li>

                </ul>

            <?php } ?>

      </p>

      <h4>TOTALE</h4>

      <?php foreach($premiumUser2->cart as $element) { ?>
    
            <?php $totale4 += $element->price ?>
            <?php $totaleFinale4= $totale4 * $premiumUser2->getDiscount()?>

      <?php } ?>

      <p>
      
            Grazie al tuo abbonamento <?php echo $premiumUser2->category ?> il prezzo totale è: <?php echo $totaleFinale4 ?> $ 
      
      </p>

    </main>
    
  </body>
  
</html>