<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<div class=" Snack 4">
<h2>Snack 4</h2>

<?php 

$numberRand=[];
// con il ciclo for se numero gia esistente dentro array ne stampa uno in meno

// for ($i=0; $i < 15 ; $i++) { 
//     $random = rand(1, 100);
//     if(!in_array($random,$numberRand)){

//         $numberRand[] = $random;
//     } 
        

//     echo ($random) . '<br>';
//     var_dump($random);
// }


// count controlla se esistente dentro array

while(count($numberRand) < 15){
    $random = rand(1, 100);
    if(!in_array($random,$numberRand)){
    
        $numberRand[] = $random;
    } 

}
// echo $numberRand[0] . '<br>';
// echo $numberRand[1] . '<br>';
// echo $numberRand[2] . '<br>';
// echo $numberRand[3] . '<br>';
var_dump($numberRand);




?>

</div>
