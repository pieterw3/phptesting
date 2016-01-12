<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/********************************************************
* CONFIG Variabelen:                                    *
*                                                        *
* ARRAY $allowed: array met alle toegestane extensies   *
* STRING $dir: locatie waar bestanden geuplaod worden   *
* INT $maxsize: maximum bestandsgrootte in bytes        *
********************************************************/

$allowed = array('jpg', 'jpeg', 'gif', 'doc', 'png'); 
$dir = 'uploads/';
$maxsize = 100000; 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(is_uploaded_file($_FILES['bestand']['tmp_name']))
    {
        $pathinfo = pathinfo($_FILES['bestand']['name']);
        if(in_array($pathinfo['extension'], $allowed))
        {
            // De bestandsnaam van het uiteindelijke bestand
            // Natuurlijk naar eigen wens aan te passen.
            $file = $_FILES['bestand']['name'];
            
            if($_FILES['bestand']['size'] < $maxsize)
            {
                if(move_uploaded_file($_FILES['bestand']['tmp_name'], $dir.$file))
                {
                    $content[] = '<p>Het bestand: '.$file.' is succesvol geupload.</p>';
                    $content[] = '<p>De locatie van het bestand is: '.$dir.$file;
                }
                else
                {
                    $errors[] = '<p>Er is iets fout gegaan tijdens het uploaden</p>';
                }
            }
            else
            {
                if($maxsize == 0)
                {
                    $errors[] = '<p>Het uploaden van bestanden is uitgeschakeld</p>';
                }
                else
                {
                    $errors[] = '<p>Het bestand is te groot.</p>';
                }
            }
        }
        else
        {
            $errors[] = '<p>Deze extensie is niet toegestaan!</p>';
        }
    }
    else
    {
        $errors[] = '<p>Er is geen bestand opgegeven</p>';
    }
}
?>

<?php include('header.php') ?>


    <?php 
	//Koekje uit index.php
	echo 'Welkom '.$_COOKIE['KutKoekje'];
	
	?>
        <h1>Bestanden uploaden</h1>
                
        <form action="#" method="post" id="upload" enctype="multipart/form-data">
            <p>
                <label class="field" for="bestand">Bestand:</label>
                <input type="file" name="bestand" id="bestand" />
                <input type="submit" value="Uploaden" />
            </p>
        </form>
        
        <?php
		
        // Weergeven van meldingen uit het phpscript.
        if(isset($errors))
        {
            echo '<ul>';
            foreach($errors as $error);
            {
                echo '<li>'.$error.'</li>';
            }
            echo '</ul>';
        }
        elseif(isset($content))
        {
            foreach($content as $line)
            {
                echo $line;
            }
        }
        ?>
        
    
        
<?php include('footer.php')?>