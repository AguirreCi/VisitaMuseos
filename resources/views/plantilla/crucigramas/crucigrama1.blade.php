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

	"______HIMNO____",
	"_______CABILDO_",
	"______CONGRESO_",
	"_____ESCUELAS__",
	"________ESCUDO_",
	"ESCARAPELA_____",
	"________BANDERA",
	"_____LIBERTAD__",
	"______SALTA____",
	"________GUEMES_",
	"_____PATRIA____",
	"_______GAUCHOS_",
	"__INDEPENDENCIA",
	"__ESCLAVOS_____",
	"_______________"
	] };


	var sampleClues =  { 
	"across" : [
		{ no : "1",  text : "Uno de los símbolos patrios." },
		{ no : "6",  text : "Antiguo edificio, sede del actual Museo Histórico del Norte." },
		{ no : "10", text: "Reunión en Tucumán que declaró la Independencia Nacional." },
		{ no : "11", text: "Instituciones a las que Manuel Belgrano donó importantes sumas de dinero." },
		{ no : "12", text: "Símbolo nacional argentino creado por la Asamblea del año XIII" },
		{ no : "14", text: "Símbolo patrio creado por el General Manuel Belgrano." },
		{ no : "22", text: "Pabellón nacional argentino." },
		{ no : "28", text: "Ideal por el que lucharon nuestros antepasados." },
		{ no : "31", text: "Ciudad en la que el Gral. Belgrano y su ejército libraron la batalla del 20 de febrero de 1813." },
		{ no : "32", text: "Martín Miguel de _____________." },
		{ no : "36", text: "1Viva la _____________________. " },
		{ no : "39", text: "Los _______________ de Güemes." },
		{ no : "43", text: "El congreso de Tucumán en 1816 declaró nuestra ____________________." },
		{ no : "49", text: "Privados de su libertad con sujeción a un amo (plural).      " },
	], 
	"down" : [
		{ no : "3",  text : "MANUEL BELGRANO" },
		{ no : "",  text : "" }
]
};



	$(this).crossword(
	 { 
	 	'puzzle' 			: samplePuzzle, //JSON puzzle structure  				
	 	'clues' 			: sampleClues, //JSON clue structure
	 	'title'				: "Crucigrama referido a Manuel Belgrano", //A title for the puzzle
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

