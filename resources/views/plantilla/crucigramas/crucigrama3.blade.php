<html>
<head>
<title>JQuery Crossword Puzzle Widget</title>
<script type="text/javascript" src="{{ asset('bower_components/cruci/jquery-1.6.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/cruci/jquery.crossword.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('bower_components/cruci/jquery.crossword.css') }}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/MDBootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/MDBootstrap/css/mdb.min.css') }}">
<style type="text/css">

	#puzzleContainer {
		width  :95%;
		height : 95%;
		margin :auto;
		float:left;
	}
	
	#acrossContainer, #downContainer {
		border : 4px solid black;
		width: 100%;
		margin : 0% 2% 2% 2%;
		float:left;
		overflow-y:auto;
		overflow-x:hidden;
	}

	#header { width:90%; margin: 5%; height: 80px; font-size:32pt; }
	#left { height: 465px; width: 465px; }
	#right {margin-top:3%; height: 450px; width: 380px;  }
	.button { float : right; width : 80px; margin: 10px;}
			
</style>

<script type="text/javascript">
$(document).ready(
	
function () 
{

	var samplePuzzle = { "row" : [
	"____________________",
	"____________________",
	"____________________",
	"____________________",
	"_____NUMISMATICA____",
	"______SUMALAO_______",
	"_______SUPLICANTE___",
	"______VELETA________",
	"___NACIONAL_________",
	"_______COLONIAL_____",
	"_BUSCHIAZZO_________",
	"_____CABILDANTES____",
	"_______INDEPENDIENTE",
	"_CAPITULAR__________",
	"_______DENARIO______",
	"PREHISTORICO________",
	"____________________",
	"____________________",
	"____________________",
	"____________________"
	] };


	var sampleClues =  { 
	"across" : [
		{ no : "1", text: "¿Cómo se conoce a la colección de monedas y medallas?" },
		{ no : "12", text: "Lugar de dónde provino la campana que se encuentra en la galería de la planta alta. " },
		{ no : "13", text: "Pieza que ha sido robada del Cabildo en el año 2003." },
		{ no : "18", text: "Objeto que se encuentra en la punta de la torre del Cabildo." },
		{ no : "19", text: "¿El museo del Cabildo es un museo Nacional o provincial?" },
		{ no : "22", text: "El museo plantea el recorrido en tres periodos. ¿Cuál es el periodo que se encuentra en el segundo piso?" },
		{ no : "27", text: "Arquitecto a cargo de la restauración en 1945." },
		{ no : "33", text: "¿Cómo se denominaban a los miembros del Cabildo?" },
		{ no : "39", text: "¿En qué periodo finaliza el recorrido que plantea el Museo?" },
		{ no : "44", text: "Sala que representa lo más importante del museo, sala que cumplía la función principal en el periodo colonial." },
		{ no : "50", text: "Moneda que se encuentra en la sala de Numismática, que perteneció al Imperio Romano y tiene mucha significación. " },
		{ no : "55", text: "¿Cuál es el primer periodo que plantea el recorrido del Cabildo?" }
	], 
	"down" : [
		{ no : "3",  text : "MUSEO CABILDO" },
		{ no : "",  text : "" }
]
};



	$(this).crossword(
	 { 
	 	'puzzle' 			: samplePuzzle, //JSON puzzle structure  				
	 	'clues' 			: sampleClues, //JSON clue structure
	 	'title'				: "Crucigrama referido a Museo Cabildo", //A title for the puzzle
	 	'puzzleContainer'	: "#puzzleContainer", // id of puzzle display DIV 
	 	'acrossContainer'	: "#acrossContainer", // id of across clues display DIV
	 	'downContainer'		: "#downContainer", // id of down clues display DIV
	 	'revealButton'		: "#revealButton", // id of reveal button
	 	'hideButton'		: "#hideButton", // id of hide button
	 	'saveButton'		: "#saveButton",  // id of save to cookie button
	 	'loadButton'		: "#loadButton"  // id of load from cookie  button
	 } );

}

);

</script>

</head>
<body>
<div class="container">
	<div class="row">
			<div id="left" class="col">
		<div id="puzzleContainer">
		<table id="puzzleTable" class="cwTable">
		  <tr class="cwRow">
		    <td class="cwCell"><div class="cwNumber">12</div>A</td>
		    <td class="cwCell">B</td>
		  </tr>    
		  <tr class="cwRow">
		    <td class="cwCell">C</td>
		    <td class="cwCell">D</td>
		  </tr>
		</table>   
		</div>
	</div>
	<div id="right" style="width: auto;" class="col">
		<div id="acrossContainer" style="height: fit-content;">
		ACROSS
		</div>
		<div id="downContainer" style="height: fit-content;">
		DOWN
		</div>
	</div>
	</div>
</div>
<br>
<br>
<br>
	<div class="container">
		<button id="revealButton" class="btn btn-secondary">Mostrar</button>
		<button id="hideButton" class="btn btn-secondary">Ocultar</button>
	</div>
</body>
</html>

