<!-- 
> - poi create alcuni prodotti appartenenti a differenti categorie 
> - e stampate delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di 
articolo che si sta visualizzando (prodotto, cibo, gioco, accessorio).

BONUS:
> Definite una proprietà privata ed un metodo privato all'interno di una classe, assegnategli un valore e mostratelo nelle card 
(ricordatevi dell'esempio del codice prodotto visto a lezione). -->



<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Toy.php';
require_once __DIR__ . '/classes/Accessories.php';
require_once __DIR__ . '/classes/Animals.php'; 
require_once __DIR__ . '/db/ProductList.php';



?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fontawesome 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>
</head>
<body>
    <header class="p-4">
        <h1>
            Boolshop
        </h1>
    </header>

    <main class="container">
        <h2>I nostri prodotti:</h2>
        <section class="main-content row p-5 mx-auto">
            <?php foreach($allProducts as $product) {?>
                <article class="card col-3 m-2 p-3">
                    <img src="<?php echo $product->GetImgURL() ?>" class="card-img-top" alt="foto prodotto">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><?php echo $product->GetName() ?></h3>
                        <p class="card-text black-font"><?php echo $product->GetTarget() ?></p>
                        <p class="card-text"> € <?php echo $product->GetPrice() ?></p>

                        <?php if(get_class($product) == 'Food') {?>
                            <p class="card-text">Peso netto: <?php echo $product->GetWeight() ?></p>
                            <p class="card-text">Ingredienti: <?php echo $product->GetIngredients() ?></p>
                        <?php } else if (get_class($product) == 'Toy') {?>
                            <p class="card-text">Caratteristiche: <?php echo $product->GetDescription() ?></p>
                            <p class="card-text">Dimensioni: <?php echo $product->GetSize() ?></p>
                        <?php } else if (get_class($product) == 'Accessories') {?>
                            <p class="card-text">Materiale: <?php echo $product->GetMaterial() ?></p>
                            <p class="card-text">Dimensioni: <?php echo $product->GetSize() ?></p>
                        <?php } ?>
                    </div>


                    
                </article>
                <?php } ?>
        </section>
    </main>
</body>
</html>