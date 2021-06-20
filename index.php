<?php 

    include_once __DIR__ .'/User.php';
    include_once __DIR__ .'/Product.php';
    include_once __DIR__ .'/CreditCard.php';

    $user1 = new User('Mario','Rossi',45,true);
    $user2 = new User('Luigi','Verdi',13,false);
    $prod1 = new Product('Ipad Pro','informatica','Tablet marchio Apple',1000);
    $prod2 = new Product('Ipad 2','informatica','Tablet marchio Apple',150);
    $prod3 = new Product('Ipad 3','informatica','Tablet marchio Apple',220);
    $prod4 = new Product('Ipad 4','informatica','Tablet marchio Apple',400);

    $user1 -> cart = array($prod1,$prod2);
    $user2 -> cart = array($prod3,$prod4);

    $c1 = new CreditCard(123456677,"12/21",147);
    $c2 = new CreditCard(123456677,"12/21",147);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop</title>
</head>
<body>
    
    <h2> 
        Nome: <?php echo $user1->name ?> <br> 
        Cognome: <?php echo $user1->surname ?> <br>
        Età: <?php echo $user1->age ?> <br>
        La tua carta di credito è: 
            <?php echo $c1->number ?>
            <?php echo $c1->term ?>
            <?php echo $c1->code ?> <br>
        Nel carrello hai:

            <?php foreach($user1->cart as $element) { ?>
                
                <ul>
                
                    <li> <?php echo $element->nameProd ?>  <?php echo $element->price ?> $ </li>

                </ul>

            <?php } ?>

        <?php foreach($user1->cart as $element) { ?>
    
            <?php $totale += $element->price ?>
            <?php $totaleFinale = $totale * $user1->isPremiumDiscount()?>

        <?php } ?>

        <?php echo $user1->isPremium() ?> <br>

        Il prezzo totale è: <?php echo $totaleFinale ?> $ <br>
        
    </h2>

    <h2> 
        Nome: <?php echo $user2->name ?> <br> 
        Cognome: <?php echo $user2->surname ?> <br>
        Età: <?php echo $user2->age ?> <br>
        La tua carta di credito è: 
            <?php echo $c2->number ?>
            <?php echo $c2->term ?>
            <?php echo $c2->code ?> <br>
        Nel carrello hai:

            <?php foreach($user2->cart as $element) { ?>
    
                <ul>
                    
                    <li> <?php echo $element->nameProd ?>  <?php echo $element->price ?> $</li>

                </ul>

            <?php } ?>

            <?php foreach($user2->cart as $element) { ?>
    
                <?php $totale2 += $element->price ?>
                <?php $totaleFinale2 = $totale2 * $user2->isPremiumDiscount()?>

            <?php } ?>

        <?php echo $user2->isPremium() ?> <br>
        
        Il prezzo totale è: <?php echo $totaleFinale2 ?> $ <br>

    </h2>

</body>
</html>