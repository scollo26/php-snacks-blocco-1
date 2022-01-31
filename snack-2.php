<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



<div class="Snack 2">
    <?php  
        $name=$_GET['name'];
        $mail=$_GET['mail'];
        $age=$_GET['age'];
    
        echo '<p>Inserisci un nome (minimo 3 caratteri) 
        <br> Nome:' . ' ' . $name . ' ' . '<br>' . '
        Inserisci una mail (deve contenere una @ e .)
        <br>' . ' ' . 'Mail:' . ' ' . $mail . ' ' . '<br>' . '
        Inserisci l\'età . (numero) 
        <br>' . 'Età:' . ' ' . $age . '</p><br>';
            
        if((strlen($name) > 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age))){
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';

        }
    
    ?>

</div>