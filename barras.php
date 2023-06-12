<?php
	require_once "php/conexion.php";
	$conexion = conexion();
    //$sql = "SELECT gestion, cantidad FROM datos order by gestion";
	$sql = "SELECT gestion, cantidad FROM practicantes order by gestion";
    $result = mysqli_query($conexion,$sql);
    $valoresY=array();//cantidad
    $valoresX=array();//gestion

    while($ver=mysqli_fetch_row($result)){
        $valoresY[]=$ver[1];
        $valoresX[]=$ver[0];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
?>

<div id="graficaBarras"></div>

<script type="text/javascript">
    function crearCadenaBarras(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras('<?php  echo $datosX?>');
    datosY=crearCadenaBarras('<?php  echo $datosY?>');

var data = [

	{

  		x: datosX,
  		y: datosY,
		marker: {color: 'rgb(100, 183, 209)'},
  		type: 'bar'

	}

];
var layout = {
	// title: 'Gráfica de barras',
	font:{
		family: 'Raleway, sans-serif'
	},
	xaxis: {
		tickangle:-45,
		title: 'Gestiones',
		color: 'rgb(0, 0, 0)',
	},
		yaxis: {
		title: 'Cantidad de Practicantes',
		color: 'rgb(0, 0, 0)',
	}
};
	Plotly.newPlot('graficaBarras', data, layout);
</script>


