<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Esercizio PHP</title>
</head>

<body>
	Nell'array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai vari corsi svolti dall'ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i cognomi e nomi dei partecipanti ad un corso specifico.<br>
	L'array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2, ecc.<br>

	Si chiede di svolgere le seguenti attività:<br>
	aggiungere il nuovo partecipante 'Novella Novellini' al corso di Informatica<br>
	elencare i nomi di tutti i partecipanti (di tutti i corsi)<br>
	calcolare il numero medio dei partecipanti ai corsi<br>
	indicare il nome del corso con il maggior numero di partecipanti<br>
	tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
	giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
	primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i
	corsi).<br>
	si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, 
	con chiave 'corso' e valore il nome del corso, fornito nel secondo array.<br>

	Svolgere le stesse attività richieste sopra (escluso il punto 6) con questi array:<br>
	<?php
		//definisco il primo array
		$p1 = ['Primini Primo', 'Secondini Secondo'];
		$p2 = ['Giannini Gianni', 'Stefanini Stefano', 'Mariolini Maria','Giacomini Giacomo'];
		$p3 = ['Violetti Viola','Gaietti Gaia'];
		$partecipanti= [$p1, $p2, $p3];
		$corsi = ['Autocad','Informatica','Inglese'];

		//cerco l'indice dell'array relativo al corso di informatica
		for($i = 0; $i < 3; $i++){
			if ($corsi[$i] == 'Informatica'){
				$indice = $i;
			}
		}

		//aggiungo il nuovo partecipante 'Novella Novellini' al corso di Informatica
		$partecipanti[$indice][] = 'Novella Novellini';

		//elenco tutti i partecipanti di tutti i corsi
		foreach($partecipanti as $array){
			foreach($array as $studente){
				// echo $studente . '<br>';
			}
		}

		//calcolo il numero medio dei partecipanti ai corsi
		//calcolo il numero di corsi
		$numero_corsi = count($corsi);

		//calcolo il numero di partecipanti
		$numero_partecipanti = 0;
		foreach($partecipanti as $array){
			$numero_partecipanti += count($array);
		}

		//calcolo il numero medio di partecipanti
		$numero_medio = $numero_partecipanti / $numero_corsi;

		echo '<br>la media di partecipanti per corso è: ' . $numero_medio .'<br>';

		//indicare il nome del corso con il maggior numero di partecipanti
		$massimo = 0;
		for($i = 0; $i<count($corsi); $i++){
			if(count($partecipanti[$i])>$massimo){
				//il numero di partecipanti è superiore al massimo, segno i valori
				$massimo = count($partecipanti[$i]);
				$corso_massimo = $i;
			}
		}

		echo "il corso con più iscritti è " . $corsi[$corso_massimo];

		echo '<br>secondo array<br>';

		//definisco il secondo array
		$s1=['cognome'=>'Primini', 'nome'=>'Primo','corso' => 'Autocad'];
		$s2=['cognome'=>'Secondini', 'nome'=>'Secondo','corso' => 'Autocad'];
		$s3=['cognome'=>'Giannini', 'nome'=>'Gianni','corso' => 'Informatica'];
		$studenti = [$s1, $s2, $s3];

		//aggiungo il nuovo partecipante 'Novella Novellini' al corso di Informatica
		$studenti[] = ['cognome'=>'Novellini', 'nome'=>'Novella','corso' => 'Informatica'];
		$studenti[] = ['cognome'=>'Mariucci', 'nome'=>'Mario','corso' => 'Informatica'];

		// var_dump($studesnti);

		//elenco tutti i partecipanti di tutti i corsi
		foreach($studenti as $array){
			// echo $array['cognome'] . ' ' . $array['nome'] . '<br>';
		}

		//calcolo il numero medio dei partecipanti ai corsi
		//calcolo il numero di corsi
		$numero_corsi = 0;
		$elenco_corsi = array();

		foreach($studenti as $studente){
			//inserisco il corso in un array
			$elenco_corsi[] = $studente['corso'];
		}
		//rimuovo i corsi duplicati
		$elenco_corsi = array_unique($elenco_corsi);
		//conto i corsi unici
		$numero_corsi = count($elenco_corsi);

		//conto gli studenti
		$numero_partecipanti = count($studenti);

		//calcolo la media
		$numero_medio = $numero_partecipanti / $numero_corsi;

		echo '<br>la media di partecipanti per corso è: ' . $numero_medio .'<br>';

		//indicare il nome del corso con il maggior numero di partecipanti
		$numero_studenti = array();

		foreach($studenti as $studente){
			//verifico se il corso è già presente nell'array
			if (key_exists($studente['corso'], $numero_studenti)){
				//il corso esiste già, aumento i partecipanti
				$numero_studenti[$studente['corso']]++;
			} else {
				//il corso non esiste, lo aggiungo all'array e inizializzo i partecipanti a 1
				$numero_studenti[$studente['corso']] = 1;
			}
		}

		$massimo = 0;
		foreach($numero_studenti as $key => $value){
			if($value > $massimo){
				//il numero di partecipanti è superiore al massimo, segno i valori
				$massimo = $value;
				$corso_massimo = $key;
			}
		}

		echo "il corso con più iscritti è " . $corso_massimo;
	
	?>
</body>
</html>
