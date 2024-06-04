<?php

require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/food.php";
require_once __DIR__ . "/Models/toy.php";

$dogCategory = new Category("dog");
$dogCategory->setIcon("fa-solid fa-dog");

$catCategory = new Category("cat");
$catCategory->setIcon("fa-solid fa-cat");

// var_dump($dogCategory);
// var_dump($catCategory);

$catFood = new Food("Sheba bocconcini gatti", 3, 85);
$catFood->setImage("https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379");
$catFood->category = $catCategory;

$dogFood = new Food("Cesar bocconcini cani", 5.50, 150);
$dogFood->setImage("https://m.media-amazon.com/images/I/81h0Hiu8IsL._AC_SX679_PIbundle-14,TopRight,0,0_SH20_.jpg");
$dogFood->category = $dogCategory;

$newDogFood = new Food("Almo Nature cani", 5.50, 150);
$newDogFood->setImage("https://www.bauzaar.it/media/catalog/product/d/a/daily-tacchino-zucchine_1.png?width=700&height=700&store=default&image-type=image");
$newDogFood->category = $dogCategory;

$scratch = new Toy("Tiragraffi per gatti", 10);
$scratch->setImage("https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQHu8jm_vNFTwZuIXS3UaTfFIli2JW03FddMNASTFizLMwhQCLA_CO1qbm2ADGIyIa_e10kmBp9JXOodJbGg1rpPOnRsAVKWvgZj3hHuKVMBOflCLIw0saaYLo1QlybM2OjzBN2ZQ&usqp=CAc");
$scratch->category = $catCategory;

$ball = new Toy("Pallina Kongo", 4);
$ball->setImage("https://animalsplanet.it/wp-content/uploads/2022/04/gioco-per-cani-kong-squeezz-goomz-a-forma-di-pallina-con-punte-con-squeak-taglia-xl.jpg");
$ball->category = $dogCategory;

$dogRope = new Toy("Corda per cani", 8);
$dogRope->setImage("https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000");
$dogRope->category = $dogCategory;


$catalogue = [$catFood, $dogFood, $newDogFood, $scratch, $ball, $dogRope];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Catalogo prodotti</h2>
        <div class="row">
        <?php foreach ($catalogue as $product) { ?>
            <div class="col-4">
            <div class="card mb-3">
                <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h4><?php echo $product->getName(); ?></h4>
                <p><?php echo $product->getPrice(); ?>€</p>
                <?php if (get_class($product) === "Food") { ?>
                    <p><?php echo $product->getWeightGr(); ?></p>
                <?php } ?>
                </div>
            </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>