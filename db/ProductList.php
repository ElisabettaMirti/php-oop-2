<?php

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Toy.php';
require_once __DIR__ . '/classes/Accessories.php';
require_once __DIR__ . '/classes/Cat.php';
require_once __DIR__ . '/classes/Dog.php';
require_once __DIR__ . '/classes/Fish.php';
require_once __DIR__ . '/classes/Birds.php';

$royal_crocchini = new Food(new Product('Royal Canin Mini Adult', new Dog('<i class="fa-solid fa-dog"></i>'), '43,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg
'), '545g', 'prosciutto, riso');

$almo_crocchini = new Food (new Product ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', new Dog('<i class="fa-solid fa-dog"></i>'), '44,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg
'), '600g', 'manzo, cereali' );

$almo_lattina = new Food (new Product ('Almo Nature Cat Daily Lattina', new Cat ('<i class="fa-solid fa-cat"></i>'), '34,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg'), '400g', 'tonno, pollo, prosciutto');

$cibo_pesci = new Food (new Product ('Mangime per Pesci Guppy in Fiocchi', new Fish ('<i class="fa-solid fa-fish"></i>'), '2,95'), '30g', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

$voliera = new Accessories (new Product ('Voliera Wilma in Legno', new Birds ('<i class="fa-solid fa-dove"></i>'), '184,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg'), 'Legno', 'M: L 83 x P 67 x H 153 cm');

$filtri = new Accessories (new Product ('Cartucce Filtranti per Filtro EasyCrystal', new Fish ('<i class="fa-solid fa-dove"></i>'), '2,29', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg'), 'Materiale espanso', 'ND');

$toy_kong = new Toy (new Product ('Kong Classic', new Dog ('<i class="fa-solid fa-dog"></i>'), '13,49', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg'), 'Galleggia e rimbalza', '8,5 cm x 10 cm');

$toy_mouse = new Toy (new Product ('Topini di peluche Trixie', new Cat ('<i class="fa-solid fa-cat"></i>'), '4,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg'), 'Morbido con codina in corda', '8,5 cm x 10 cm');
?>
