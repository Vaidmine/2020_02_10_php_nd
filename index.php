<h4> ***** ND 1 ****** </h4>
<?php
//Sukurti du kintamuosius. 
//Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus 
//pvz(Jonas Jonaitis). 
//Atspausdinti trumpesnį stringą.
$actor1 = 'Matthew McConaughey';
$actor2 = 'Al Pacino';
echo "Aktoriaus vardas $actor1";
echo "<br>";
echo "Aktoriaus vardas $actor2";
echo "<br><br>";
if(strlen($actor1) < strlen($actor2)){
    echo "Trumpesnis vardas yra: $actor1";
} else if (strlen($actor2) < ($actor1)){
    echo "Trumpesnis vardas yra: $actor2";
}
echo "<br>";
echo (strlen($actor1));
echo "<br>";
echo (strlen($actor2));
?> 
 
 <h4> ***** ND 2 ****** </h4>
<?php
//Sukurti du kintamuosius. 
//Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
//Vardą atspausdinti tik didžiosiom raidėm, 
//o pavardę tik mažosioms.
$actorname = 'Brad';
$actorsurname = 'Pitt';
echo "<br>";
echo "Aktoriaus vardas ".$actorname.$actorsurname;
echo "<br>";
echo "Spausdinu:"."<br>";
echo strtoupper($actorname);
echo "<br>";
echo strtolower($actorsurname);
?> 

<h4> ***** ND 3 ****** </h4>
<?php
//Sukurti du kintamuosius.  
//Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
//Sukurti trečią kintamąjį ir jam priskirti stringą, 
//sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
//Jį atspausdinti.
$actorname1 = 'Sam';
$actorsurname1 = 'Worthington';
echo "Aktoriaus vardas ".$actorname1." ".$actorsurname1;
echo "<br>";
$actorinitials = $actorname1[0].".".$actorsurname1[0].".";
echo "Aktoriaus inicialai ".$actorinitials;
?> 

<h4> ***** ND 4 ****** </h4>
<?php
//Sukurti du kintamuosius. 
//Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
//Sukurti trečią kintamąjį ir jam priskirti stringą, 
//sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. 
//Jį atspausdinti.
$actorname2 = 'Christian';
$actorsurname2 = 'Bale';
echo "Aktoriaus vardas ".$actorname2. " ".$actorsurname2;
echo "<br>";
$lastthreeletters = substr($actorname2, -3)." ".substr($actorsurname2, -3);
echo "Paskutines 3 raides yra: ".$lastthreeletters;
?> 

<h4> ***** ND 5 ****** </h4>
<?php
//Sukurti kintamąjį su stringu: 
//“An American in Paris”. 
//Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  
//Rezultatą atspausdinti.
$sakinys = 'An American in Paris';
echo "Sakinys: ".$sakinys;
echo "<br>";
$kakeiciam = array("a", "A");
$ikakeiciam = "*";
echo "Pakeitimas: ".(str_replace($kakeiciam,$ikakeiciam,$sakinys));
 
?> 

<h4> ***** ND 6 ****** </h4>
<?php
//Sukurti kintamąjį su stringu: 
//“An American in Paris”. 
//Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides.
//Rezultatą atspausdinti.
$sakinys2 = 'An American in Paris';
echo "Sakinys: ".$sakinys2;
echo "<br>";
$visoadidziujuraidziu = substr_count($sakinys2, "A");
$visoamazujuraidziu = substr_count($sakinys2, "a");
echo "suskaiciuota didziuju 'A' raidziu: ". $visoadidziujuraidziu;
echo "<br>";
echo "suskaiciuota mazuju 'a' raidziu: ". $visoamazujuraidziu;
echo "<br>";
?> 
 
 <h4> ***** ND 7 ****** </h4>
<?php
//Sukurti kintamąjį su stringu: 
//“An American in Paris”. 
//Jame ištrinti visas balses. 
//Rezultatą atspausdinti. 
//Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
//“2001: A Space Odyssey” ir “It's a Wonderful Life”.
$filmas1 = 'An American in Paris';
$filmas2 = "Breakfast at Tiffany's";
$filmas3 = "It's a Wonderful Life";
echo "filmas 1: ".$filmas1;
echo "<br>";
echo "filmas 2: ".$filmas2;
echo "<br>";
echo "filmas 3: ".$filmas3;
echo "<br>";
$balses = array("a", "e", "i", "o", "i", "y", "u", "A", "E", "I", "Y", "U", " ");
$priebalses1 = str_replace($balses, "", $filmas1);
echo "filmas 1 priebalses: ".$priebalses1;
echo "<br>";
$priebalses2 = str_replace($balses, "", $filmas2);
echo "filmas 2 priebalses: ".$priebalses2;
echo "<br>";
$priebalses3 = str_replace($balses, "", $filmas3);
echo "filmas 3 priebalses: ".$priebalses3;
echo "<br>";
?> 

<h4> ***** ND 8 ****** </h4>
<?php
//Stringe, kurį generuoja toks kodas: 
//'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
//Surasti ir atspausdinti epizodo numerį.
$starwars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo "filmas: ".$starwars;
echo "<br>";
echo "epizodo numeris: ";
$epizodonumeris = " ";
for ($i=0; $i < strlen($starwars) ; $i++) { 
    if(is_numeric($starwars[$i])){
        $epizodonumeris = $starwars[$i];
    }
}
echo $epizodonumeris;
?> 


<h4> ***** ND 9 ****** </h4>
<?php
//Suskaičiuoti kiek stringe 
//“Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
//yra žodžių trumpesnių arba lygių nei 5 raidės.
// Pakartokite kodą su stringu 
//“Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
 
echo "<br>";
 
?> 

<h4> ***** ND 10 ****** </h4>
<?php
//Parašyti kodą, kuris generuotų atsitiktinį stringą 
//iš lotyniškų mažųjų raidžių. 
//Stringo ilgis 3 simboliai.
$visosLotRaides = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$ilgis = strlen($visosLotRaides);
$trysRaides = " ";
for( $i = 0; $i < 3 ; $i++) {  
    $trysRaides .= ($visosLotRaides[ rand( 0, $ilgis - 1 ) ]);   
    }
echo $trysRaides;
 
echo "<br>";
 
?> 