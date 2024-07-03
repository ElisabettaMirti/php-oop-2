<?php

$royal_crocchini = new Food('Royal Canin Mini Adult', $dog, '43,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', '545g', 'prosciutto, riso');

$almo_crocchini = new Food ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', $dog, '44,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg', '600g', 'manzo, cereali' );

$almo_lattina = new Food ('Almo Nature Cat Daily Lattina', $cat, '34,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', '400g', 'tonno, pollo, prosciutto');

$cibo_pesci = new Food ('Mangime per Pesci Guppy in Fiocchi', $fish, '2,95', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', '30g', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

$voliera = new Accessories ('Voliera Wilma in Legno', $bird, '184,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Legno', 'M: L 83 x P 67 x H 153 cm');

$filtri = new Accessories ('Cartucce Filtranti per Filtro EasyCrystal', $fish, '2,29', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Materiale espanso', 'ND');

$toy_kong = new Toy ('Kong Classic', $dog, '13,49', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Galleggia e rimbalza', '8,5 cm x 10 cm');

$toy_mouse = new Toy ('Topini di peluche Trixie', $cat, '4,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Morbido con codina in corda', '8,5 cm x 10 cm');

$allProducts = Product::all();
?>
