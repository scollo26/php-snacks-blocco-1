<div class=" Snack 8">
    <h2>Snack 8</h2>

 <!-- Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->

<?php
    $products = [
        [
            'name' => 'pomodori',
            'price' => 1.99,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/14/Pomodori.JPG',
            'prod' => 'frutto',
        ],
        
        [
            'name' => 'melanzane',
            'price' => 30.00,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8b/Melanzane_alla_Parmigiana.jpg',
            'prod' => 'frutto',
        ],
        [
            'name' => 'carciofi',
            'price' => 6.49,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6e/-_Carciofi_-.jpg',
            'prod' => 'fiore',
        ],
        [
            'name' => 'asparagi',
            'price' => 2.89,
            'image' => 'https://cdn.pixabay.com/photo/2018/05/13/12/14/asparagus-3396246_960_720.jpg',
            'prod' => 'fiore',
        ],
        [
            'name' => 'carote',
            'price' => 1.49,
            'image' => 'https://cdn.pixabay.com/photo/2016/11/23/00/22/carrots-1851424_960_720.jpg',
            'prod' => 'radice',
        ],
    ];

        $prodottoFiltrato=[];

        if(isset($_GET['prod']) !== false){
            $prod = $_GET['prod'];
            if($prod ==='all'){
                $prodottoFiltrato = $products;
            }
                foreach($products as $product){
                    if($product['prod'] === $prod){
                        $prodottoFiltrato[]=$product;
                    }
                }
            
        } else{
            $prodottoFiltrato = $products;
        }   
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
<form action="snack-8.php" method="GET">
      <!-- <input type="text" name="titolo"> -->
      <select name="prod" id="prod">
            <option value="all">all</option>
            <option value="frutto">frutto</option>
            <option value="fiore">fiore</option>
            <option value="radice">radice</option>
      </select>
      <button>Cerca</button>
    </form>
    <?php 
    foreach ($prodottoFiltrato as  $product) {
        ?>
        <div class="card-container">
        <img style="heigth: 100px; width: 200px;" src="<?= $product['image'] ?>" alt="">
            <h4 ><?= $product['name']?></h4>
            <h5 ><?= $product['price']?></h5>
            <p ><?= $product['prod']?></p>
        </div>
        <?php }; ?>
</body>
</html>