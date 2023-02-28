<!-- Boucle while -->
<?php
$i=0;
while($i<10){
    echo $i . '<br>';
    $i++;
   
}
?>
<!-- boucle for -->
<?php
for($i=0;$i<=10;$i++){
echo $i . '<br>';

}
?>

<?php
$joueurs = array("pierre","paul",'jacques');
foreach($joueurs as $joueur){
    echo $joueur . '<br>';
}
?>