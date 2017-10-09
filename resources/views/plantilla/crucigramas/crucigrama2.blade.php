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

	"_________MILITAR____",
	"___GOBERNADOR_______",
	"______GABRIEL_______",
	"__DEL_NORTE_________",
	"________VIRREINATO__",
	"______JUAN__________",
	"______CARMEN________",
	"________SIPE_SIPE___",
	"______BELGRANO______",
	"_________URUGUAY____",
	"___FORTINES_________",
	"_________LUIS_______",
	"_____CATEDRAL_______",
	"________FEBRERO_____",
	"_________GAUCHA_____",
	"_______AZUL_________",
	"____HORQUETA________",
	"_________MACACHA____",
	"______GOYECHEA______",
	"_________SUIPACHA___"
	] };


	var sampleClues =  { 
	"across" : [
		{ no : "1", text: "Carrera a la que ingreso Güemes a los 14 años." },
		{ no : "8", text: "Cargo que ocupó Güemes durante seis años en la provincia de Salta." },
		{ no : "14", text: "¿Cómo se llamaba el Padre de Güemes?" },
		{ no : "15", text: "¿A qué ejercitó se unió en 1810?: Ejercito _ _ _   _ _ _ _ _." },
		{ no : "19", text: "Nació en el __________ del Rio de la Plata." },
		{ no : "27", text: "Su nombre completo era: Martín Miguel ____ de Mata de Güemes Goyechea." },
		{ no : "29", text: "Nombre de su esposa. " },
		{ no : "32", text: "Batalla en la que fue derrotado en noviembre de 1815. " },
		{ no : "37", text: "Héroe argentino que junto con Güemes y San Martín defendió nuestra patria de los españoles. " },
		{ no : "40", text: "Calle en la que se encuentra actualmente el monumento a Güemes. " },
		{ no : "43", text: "Nombre que reciben actualmente las agrupaciones gauchas." },
		{ no : "49", text: "Nombre de uno de los hijos de Güemes." },
		{ no : "52", text: "Lugar donde se encuentran los restos de Güemes." },
		{ no : "56", text: "Mes en el que nació Martín Miguel de Güemes. " },
		{ no : "59", text: "Nombre que se le da a la Guerra que Güemes lideró. " },
		{ no : "60", text: "¿Cuál fue el color del uniforme de los primeros infernales?" },
		{ no : "62", text: "Lugar en el que el general muere: Cañada de la ____________. " },
		{ no : "66", text: "¿Cómo se la conoce a la hermana de Güemes llamada María Magdalena?" },
		{ no : "71", text: "Su madre se llamaba María de _________. " },
		{ no : "74", text: "Enfrentamiento ocurrido el 7 de noviembre de 1810." }
	], 
	"down" : [
		{ no : "1",  text : "MARTIN MIGUEL DE GUEMES" },
		{ no : "",  text : "" }

]
};



	$(this).crossword(
	 { 
	 	'puzzle' 			: samplePuzzle, //JSON puzzle structure  				
	 	'clues' 			: sampleClues, //JSON clue structure
	 	'title'				: "Crucigrama referido a Martin Miguel de Guemes", //A title for the puzzle
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

