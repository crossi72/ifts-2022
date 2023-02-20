<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/basic.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<?php
			//creo i pulsanti
			CreaPulsante("btnRosso", "Rosso");
			CreaPulsante("btnVerde", "Verde");
			CreaPulsante("btnBlu", "Blu");
			CreaPulsante("btnAlterna", "Alterna");
		?>
	</div>
	<div>
		<?php
			//creo di DIV
			for($i=0; $i<15; $i++){
				CreaDiv('quadrato bgBianco');
			}
		?>
	</div>
</body>
<script src="js/automate.js"></script>
</html>

<?php 

/**
 * Crea un pulsante HTML (TAG button)
 *
 * @param string $id: id da assegnare al pulsante
 * @param string $testo: testo da utilizzare nel pulsante
 * @return void
 */
function CreaPulsante($id, $testo){
	echo "<button id='". $id . "'>" . $testo . "</button>";
	//genera: <button id='btnRosso'>Rosso</button>
}

/**
 * Crea un DIV
 *
 * @param string $classe classe da assegnare al DIV
 * @return void
 */
function CreaDiv($classe){
	echo "<div class='". $classe . "'></div>";
	//genera: <div class='rettangolo'></div>
}

?>