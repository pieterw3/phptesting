<?php
// Controle of een formulier gepost is
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Arrays declareren voor opslag van fouten en data
    $aErrors = array();
    $aData = array();
    
    // Velden die in het formulier aanwezig moeten zijn
    $aFormulierVelden = array('voornaam', 'achternaam','dag','maand','jaar');
    
    // Alle formuliervelden doorlopen
    foreach($aFormulierVelden as $sVeld)
    {
        // Controleren of er een waarde voor het formulierveld bestaat
        if(isset($_POST[$sVeld]))
        {    
            // Spaties aan begin en eind weghalen
            $sValue = trim($_POST[$sVeld]);
            
            // Controle of variabele gevuld is
            if(empty($sValue))
            {
                // Foutmelding toevoegen
                $aErrors[] = 'Je bent vergeten om '.$sVeld.' in te vullen';
            }
            
            // Ingevulde waarden aan data array toevoegen
            $aData[$sVeld] = $sValue;
        }
        else
        {
            $aErrors[] = 'Het veld '.$sVeld.' is niet gepost!';
        }
    }
    // datum controle
	if(isset($aData['maand'],$aData['dag'],$aData['jaar']) && checkdate ($aData['maand'],$aData['dag'],$aData['jaar']))
	{
		$sdatum =$aData['dag'].'-'.$aData['maand'].'-'.$aData['jaar'];
	} else {
		$aErrors[] = 'Dit is geen geldige datum';
	}
    // Controleren of er geen fouten opgetreden zijn
    if(empty($aErrors))
    {
        // Formulier succes!
        echo '<p>Je hebt het formulier succesvol ingevuld! De volgende gegevens zijn bekend:</p>';
        echo '<p>Naam: '.$aData['voornaam'].' '.$aData['achternaam'];
        
		echo '<p>Geboortedatum: '.$sdatum.' ';
    }
    else
    {
        // Fouten opgetreden: weergeven en terug naar formulier
        header('Refresh: 3; url=../index.php');
        foreach($aErrors as $sError)
        {
            echo '<p style="color:red">'.$sError.'</p>';
        }
    }
}
else
{
    // Verwerk.php mag nog niet bezocht worden, terug naar het formulier
    header('Location: ../index.php');
}
?>