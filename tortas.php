<?php
	require_once "php/conexion.php";
    $conexion = conexion();
    $sql = "SELECT gestion, cantidad FROM datos order by gestion";
    $result = mysqli_query($conexion,$sql);
    $valoresY=array();//cantidad
    $valoresX=array();//gestion

    while($ver=mysqli_fetch_row($result)){
        $valoresY[]=$ver[0];
        $valoresX[]=$ver[1];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);
?>

<div id="graficaTorta"></div>

<script type="text/javascript">
    function crearCadenaTorta(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

    datosX=crearCadenaTorta('<?php  echo $datosX?>');
    datosY=crearCadenaTorta('<?php  echo $datosY?>');

    var data = [{
        values: datosX,
        labels: datosY,
        type: 'pie'
    }];

    var layout = {
        height: 400,
        width: 500
    };

    Plotly.newPlot('graficaTorta', data, layout);
</script>