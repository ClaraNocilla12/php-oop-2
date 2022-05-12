<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure 
iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili 
solo in un periodo particolare (es. da maggio ad agosto). -->




<?php
require __DIR__ . '/traits/name.php';
require __DIR__ . '/classes/shop.php';

require __DIR__ . '/classes/food.php';

require __DIR__ . '/classes/user.php';








// $crocchette = new Food('crocchette','crocchette per animali',20,1);
// $crocchette2 = new Food('crocchette','crocchette per animali',20,1);
// $crocchette3 = new Food('crocchette','crocchette per animali',20,1);
// $total=$crocchette->getPrice()+$crocchette2->getPrice()+$crocchette3->getPrice();
// echo $total;

// echo "<p>" . $crocchette->getName() . "</p>";
// echo "<p>" . $crocchette->getDescription() . "</p>";
// echo "<p>" . $crocchette->getPrice() . "</p>";
// echo "<p>" . $crocchette->getWeight() . "</p>";




//controllo carta
$Pippo->setExp('10','2020');













?>