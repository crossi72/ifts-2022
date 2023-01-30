<!DOCTYPE html>
<html lang="en">
<head>
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
		?>
	</div>
	<div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
		<div class="quadrato bgBianco"></div>
	</div>
</body>
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

?>