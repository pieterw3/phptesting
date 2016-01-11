<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boostrap</title>
 
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
<div class="col-md-6">
<h1>ARRAYS</H1>
<?php
//arrays and shizzle
$argegevens = array('Duckstad', '1111AA', '06-12345678', 'mail@example.com');
echo '<p>Raw output ARRAY:</p>'.'<pre>'.print_r($argegevens, true). '</pre><br>';
echo '<p>Mijn woonplaats is '.$argegevens[0].' Had je niet gedacht heh!</p>';

//foreach loop array uitlezen
foreach($argegevens as $frgegevens){
	echo $frgegevens;
}

//associatieve array
$arleeftijden = array(
'pieter' => 22,
'willem' => 8,
'jemoeder' => 100,
'jan' => 52
); 
echo '<p>Raw output associatieve ARRAY:</p>'.'<pre>'.print_r($arleeftijden, true). '</pre><br>';
echo '<p>Jemoeder is al '.$arleeftijden['jemoeder'].'. Dat is toch niet normaal gast!.</p>';
foreach ($arleeftijden as $frleeftijden => $ileeftijden ){
	echo $frleeftijden.': '.$ileeftijden.' ';
}
?>


</div></div>
    
 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>