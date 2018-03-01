<?php

$files = scandir(__DIR__);

unset($files[0],$files[1]);

foreach($files as $file) 
{
	$xmlString = file_get_contents($file);
	
	$xml = new SimpleXMLElement($xmlString);
	
	$status = $xml->TilbagemeldingOplysninger->IndberetningValideringStatus;
	$errorMsg = $xml->TilbagemeldingOplysninger->FejlListe->Fejl->IndberetningFejlTekst;
	
	echo "$file;$status;$errorMsg;\n";
}
