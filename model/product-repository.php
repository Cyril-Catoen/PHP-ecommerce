<?php $products = [
    [
        'title'          => 'Réfrigérateur Samsung',
        'price'          => 499.99,
        'promotionPrice' => 449.99,
        'image'          => 'https://m.media-amazon.com/images/I/71TMYcG0zhL._AC_UF1000,1000_QL80_.jpg',
        'isPublished'    => true,
        'category'       => 'Réfrigérateur',
        'publishedAt'    => new DateTime('2025-03-10')
    ],
    [
        'title'          => 'Machine à laver LG',
        'price'          => 399.99,
        'promotionPrice' => 349.99,
        'image'          => 'https://www.lg.com/content/dam/channel/wcms/fr/images/lave-linge/f84g62wh_abwqwfs_eefs_fr_c/gallery/LG-F84G62WH_D1_260917.jpg',
        'isPublished'    => true,
        'category'       => 'Lave-linge',
        'publishedAt'    => new DateTime('2025-02-28')
    ],
    [
        'title'          => 'Lave-vaisselle Bosch',
        'price'          => 299.99,
        'promotionPrice' => 279.99,
        'image'          => 'https://www.sellcaz.fr/shop/7460-large_default/lave-vaisselle-bosch-13-couverts-.jpg',
        'isPublished'    => false,
        'category'       => 'Lave-vaisselle',
        'publishedAt'    => new DateTime('2025-01-15')
    ],
    [
        'title'          => 'Micro-ondes Whirlpool',
        'price'          => 129.90,
        'promotionPrice' => 99.90,
        'image'          => 'https://frwhirlpool.vtexassets.com/arquivos/ids/179350-800-auto?v=638566710023770000&width=800&height=auto&aspect=true',
        'isPublished'    => true,
        'category'       => 'Micro-ondes',
        'publishedAt'    => new DateTime('2025-03-01')
    ],
    [
        'title'          => 'Four encastrable Siemens',
        'price'          => 699.99,
        'promotionPrice' => 649.99,
        'image'          => 'https://cuisineandcie.com/6779-large_default/four-encastrable-pyrolyse-siemens-hb675gbs1f.jpg',
        'isPublished'    => true,
        'category'       => 'Fours',
        'publishedAt'    => new DateTime('2025-03-12')
    ],
]

function createProduct ($title, $price, $promotionPrice, $image, $category){
    $newProduct = [
        "title" => $title,
        "price" => $price,
        "promotionPrice" => $promotionPrice,
        "image" => $image,
        "isPublished" => true,
        "category" => $category,
        "publishedAt" => new DateTime()
        
    ];

    global $products;

    array_push($products, $newProduct);}
    ?>


?>

