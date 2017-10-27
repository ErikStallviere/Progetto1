<?php
	$fileCsv = "Dati.csv";
	

	if(!file_exists($fileCsv)){
		$fp = fopen($fileCsv, 'a');
		$riga1 = array("nome","cognome","dataNascita","genere","indirizzo",
			"paese","cap","nazionalita","cantone","nazione","nCellulare",
			"nTelefono","email","vecchiaScuola","acronimo","sedeVecchia","anno",
			"lavoro","scuola","sede","annoS","professione","genereLavoro",
			"nomeTutore","cognomeTutore","genereTutore","indirizzoTutore",
			"paeseTutore","capTutore","nazionalitaTutore","cantoneTutore",
			"nazioneTutore","nCellulareTutore","nTelefonoTutore","emailTutore",
			"osservazioni");
		fputcsv($fp, $riga1);
		fwrite($fp, PHP_EOL);
		$dati=array(
			$nome = $_POST['nome'],
			$cognome = $_POST['cognome'],
			$dataNascitaG = $_POST['dataNascitaG'],
			$genere = $_POST['genere'],
			$indirizzo = $_POST['indirizzo'],
			$paese = $_POST['paese'],
			$cap = $_POST['cap'],
			$nazionalita = $_POST['nazionalita'],
			$cantone = $_POST['cantone'],
			$nazione = $_POST['nazione'],
			$nCellulare = $_POST['nCellulare'],
			$nTelefono = $_POST['nTelefono'],
			$email = $_POST['email'],
			#Dati dell'ultima scuola del ragazzo
			$tipoScuola = $_POST['tipoScuola'],
			$acronimo = $_POST['acronimo'],
			$sedeV = $_POST['sedeV'],
			$anno = $_POST['anno'],
			#ll lavoro odierno del ragazzo
			$lavoro = $_POST['lavoro'],
			$scuola = $_POST['scuola'],
			$sede = $_POST['sede'],
			$annoS = $_POST['annoS'],
			$professione = $_POST['professione'],
			$genereL = $_POST['genereL'],

			#Dati del tutore legale
			$nome2 = $_POST['nome2'],
			$cognome2 = $_POST['cognome2'],
			$genere2 = $_POST['genere2'],
			$indirizzo2 = $_POST['indirizzo2'],
			$paese2 = $_POST['paese2'],
			$cap2 = $_POST['cap2'],
			$nazionalita2 = $_POST['nazionalita2'],
			$cantone2 = $_POST['cantone2'],
			$nazione2 = $_POST['nazione2'],
			$nCellulare2 = $_POST['nCellulare2'],
			$nTelefono2 = $_POST['nTelefono2'],
			$email2 = $_POST['email2'],

			#Le osservazioni
			$oss = $_POST['oss']
		);
		fputcsv($fp, $dati);
		fwrite($fp, PHP_EOL);
	}
	else{
		$fp = fopen($fileCsv, 'a');
		#Dati personali del ragazzo
		$dati=array(
			$nome = $_POST['nome'],
			$cognome = $_POST['cognome'],
			$dataNascitaG = $_POST['dataNascitaG'],
			$genere = $_POST['genere'],
			$indirizzo = $_POST['indirizzo'],
			$paese = $_POST['paese'],
			$cap = $_POST['cap'],
			$nazionalita = $_POST['nazionalita'],
			$cantone = $_POST['cantone'],
			$nazione = $_POST['nazione'],
			$nCellulare = $_POST['nCellulare'],
			$nTelefono = $_POST['nTelefono'],
			$email = $_POST['email'],
			#Dati dell'ultima scuola del ragazzo
			$tipoScuola = $_POST['tipoScuola'],
			$acronimo = $_POST['acronimo'],
			$sedeV = $_POST['sedeV'],
			$anno = $_POST['anno'],
			#ll lavoro odierno del ragazzo
			$lavoro = $_POST['lavoro'],
			$scuola = $_POST['scuola'],
			$sede = $_POST['sede'],
			$annoS = $_POST['annoS'],
			$professione = $_POST['professione'],
			$genereL = $_POST['genereL'],

			#Dati del tutore legale
			$nome2 = $_POST['nome2'],
			$cognome2 = $_POST['cognome2'],
			$genere2 = $_POST['genere2'],
			$indirizzo2 = $_POST['indirizzo2'],
			$paese2 = $_POST['paese2'],
			$cap2 = $_POST['cap2'],
			$nazionalita2 = $_POST['nazionalita2'],
			$cantone2 = $_POST['cantone2'],
			$nazione2 = $_POST['nazione2'],
			$nCellulare2 = $_POST['nCellulare2'],
			$nTelefono2 = $_POST['nTelefono2'],
			$email2 = $_POST['email2'],

			#Le osservazioni
			$oss = $_POST['oss']
		);
		fputcsv($fp, $dati);
		fwrite($fp, PHP_EOL);
	}

	fclose($fp);

	header("location: index.html");
?>