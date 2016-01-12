<?php include('header.php') ?>

<div class="container">
<div class="row">
<div class="col-md-6">
<h1>IF ELSE</h1>
<?php

//geboortejaar met DateTime
$flverjaardag = new DateTime('1993-11-03');
$geboortejaar = $flverjaardag->format('y');
$flhuidigjaar = new DateTime('today');
$flleeftijd = $flverjaardag->diff($flhuidigjaar)->y;
echo 'Uw leeftijd is: '.$flleeftijd. '<br>';

// kijken of iemand 18 is. met if else statement

if ($flleeftijd < 18)
{
	echo'Flikker op kleuter kom maar terug als je 18 ben.';	
} elseif($flleeftijd == 18) {
	echo'Op het randje meneer, net achtien geworden zeker vieslak.';
} elseif($geboortejaar < 1980 && $geboortejaar > 1920){
	echo'U kunt door gaan ouwe lul';
} elseif($geboortejaar <1920){
	echo'Grapjas je gaat me zeker vertellen dat je Konin Willem de tweede heet.';
} else {
	echo'U kunt door gaan u bent ouder dan 18, Lekker bezig.';	
}
?>
</div>
<div class="col-md-6">
<h1>FOR WHILE LOOPS</h1>

<?php
// for en while loopies

for($i = 1; $i <= 10; $i++)
{
	echo $i;
}
?>
</div></div>
<div class="row">
<div class="col-md-12">
<h1>ARRAYS</H1>
<?php
//arrays and shizzle
$argegevens = array('Duckstad', '1111AA', '06-12345678', 'mail@example.com');
echo '<p><strong>Raw output ARRAY:</strong></p>'.'<pre>'.print_r($argegevens, true). '</pre><br>';
echo '<p>Mijn woonplaats is '.$argegevens[0].' Had je niet gedacht heh!</p>';
// waarden toevoegen aan array
$argegevens[] = 'NL';
array_push($argegevens, 'UMT+1');
echo '<p><strong>Waarden toegevoegd:</strong></p>'.'<pre>'.print_r($argegevens, true). '</pre><br>';

//foreach loop array uitlezen
foreach($argegevens as $frgegevens){
	echo $frgegevens;
}

//associatieve array
$arleeftijden = array(
'Pieterieter' => 22,
'Willem' => 8,
'Jemoeder' => 100,
'Jan' => 52
); 
echo '<p><strong>Raw output associatieve ARRAY:</strong></p>'.'<pre>'.print_r($arleeftijden, true). '</pre><br>';
echo '<p>Jemoeder is al '.$arleeftijden['Jemoeder'].'. Dat is toch niet normaal gast!.</p>';
echo '<p><strong>Foreach output:</strong></p>';
foreach ($arleeftijden as $frleeftijden => $ileeftijden ){
	echo $frleeftijden.': '.$ileeftijden.' ';
}
echo '<p><strong>Multidimensionale array output:</strong></p>';
//multidimensionale arrays
$arnederland = array(
	'Plaatsen' => array(
		'Amsterdam',
		'Eindhoven',
		'Alkmaar'
	),
	'Pretparken' => array(
		'Efteling',
		'Slagharen',
		'Toverland'
	)
);
echo '<pre>'.print_r($arnederland, true).'</pre><br>';
echo $arnederland['Plaatsen'][2].' is een kut stad!';
echo '<p><strong>Foreach output:</strong></p>';
//foreach output
foreach ($arnederland as $frsoort => $frlocaties )
{
	echo'<b>'.$frsoort.'</b> ';
	foreach($frlocaties as $frlocatie)
	{
		echo $frlocatie.' ';
	}
}
?>


</div></div>
    <div class="row">
<div class="col-md-12">
<h1>FUNCTIONS</h1>
<?php
//functie definiëren
function geefmijweer ()
{
	echo 'Dit is geen weer, ';
}
//functie oproepen
geefmijweer();

function geefwatterug ()
{
	return 'Hello Cruel World, ';
}
echo geefwatterug();
//function met parameter
function geefmijweer2 ($sstring)
{
	echo $sstring;
}
geefmijweer2('Tekst via parameter ');

//function voor tellen items array
function tel($ararray)
{
	//beginnen met tellen bij 0
	$iaantal = 0;
	
	//array doorlopen en 1 optellen bij $iaantal optellen
	foreach ($ararray as $waarde) 
	{
		//tel 1 bij $iaantal op
		$iaantal++;
	}
	//eind getal na optellen
	return $iaantal;
}
$arraytest = array(1,2,3,4,5);
//functie testen
echo '$arraytest bevat '.tel($arraytest).' items. ';

$sgebruikersnaam ='adminadmiadmiadmiadmi';
//gebruikersnaam testen op lengte en mag niet admin zijn en langer dan 15 letters is niet goed.
function checkgebruiker($sgebruikersnaam){
	if(strlen($sgebruikersnaam) >15) {
		return false;
	} 
	elseif ($sgebruikersnaam == 'admin' ){
		return false;
	} 
	elseif (strlen($sgebruikersnaam) >3) {
		return true;		
	}
	else {
		return false;
	}
}
if (checkgebruiker($sgebruikersnaam)){
	echo 'Gebruikersnaam is geldig ';
} else {
	echo 'Gebruikersnaam is ongeldig ';
}

//functie bedrag optellen optioneel btw
function calctotaal($arbedragen, $abtw = false)
{
	//totaal berekeken van array $arbedragen
	$ftotaal = array_sum($arbedragen);
	
	//kijken of btw berekend moet worden
	if ($abtw) 
	{
		//het totaal * 1.21 (21% btw)
		$ftotaal *= 1.21;
	}
	// totaal return
	return number_format($ftotaal, 2);
}
//functie testen
$arbedragen = array(5.45, 9.95, 34.95);
Echo 'Totaal excl. BTW: '.calctotaal($arbedragen).' ';
Echo 'Totaal incl. BTW: '.calctotaal($arbedragen, true).' ';
?>
</div></div>
    <div class="row">
<div class="col-md-3">
<h1>FORMULIER</h1>
</div>
   
<div class="col-md-6">
<br><br>

<form role="form" action="php/verwerken.php" method="post">

<div class="form-group">
<label for="voornaam">Voornaam:</label>
<input type="text" id="voornaam" class="form-control" name="voornaam">
</div>

<div class="form-group">
<label for="achternaam">Achternaam:</label>
<input type="text" id="achternaam" class="form-control" name="achternaam">
</div>

<div class="form-group">
 <label>Geboortedatum:</label>
        <select name="dag" class="form-control">
            <?php
            for($i = 1; $i <= 31; $i++)
            {

                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
        </select>
        <select name="maand" class="form-control">
            <?php
            for($i = 1; $i <= 12; $i++)
            {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
        </select>
        <select name="jaar" class="form-control">
            <?php
            for($i = date('Y'); $i >= 1920; $i--)
            {
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
            ?>
        </select>
</div>
<button type="submit" class="btn btndefault">Verzenden</button>
</form>

</div>

   
<div class="col-md-3">
</div></div>


</div></div>

 </div></div>
 <?php include('footer.php')?>