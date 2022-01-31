<div class=" Snack 5">
<!-- // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<h2>Snack-5</h2>
<?php

$articolo = 'Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo';
$paragrafi = explode('.', $articolo);

echo $articolo . '<br>'. '<br>';

foreach ($paragrafi as $key => $paragrafo) {
    // echo $key;
    // echo $paragrafo;
    echo 'paragrafo n° ' . $key . ' ' . $paragrafo . '<br>';
}    

?>

</div>