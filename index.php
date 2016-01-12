<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP scripts</title>
 
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <!-- Custom styles for this template -->
<link rel="stylesheet" href="css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
                    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	<div class="container">
	
	
	<div class="container">
  <div class="jumbotron">
    <h1>PHP test scripts enzo</h1> 
    </div>
  
</div>

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
<div class="col-md-4">
<h1>FORMULIER</h1>
</div>
   
<div class="col-md-4">
<br><br>

<form role="form" action="php/verwerken.php" method="post">

<div class="form-group">
<label for="voornaam">Voornaam</label>
<input type="text" id="formvoornaam" class="form-control">
</div>

<div class="form-group">
<label for="achternaam">Achternaam</label>
<input type="text" id="formachternaam" class="form-control">
</div>

<button type="submit" class="btn btndefault">Verzenden</button>
</form>

</div>

   
<div class="col-md-4">
</div></div>

 </div></div>
 <footer class="footer">
      <div class="container footer-container">
        <p class="text-muted text-center" ><?php echo'Copyright Pieter Willemse '.date('Y');?></p>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>