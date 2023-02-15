<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Aire Acondicionado',     11],
          ['Manteleria',      3],
          ['Mobiliario',  6],
          ['Solo el Salon', 4],
          ['Cancelaciones',    1]
        ]);

        var options = {
          title: 'ESTADISTICAS DE RENTA',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
	<div>
		<div>			
			<h1>Bienvenido, revisa tus estadisticas</h1>
		</div>
		<div>
			<div id="donutchart" style="width: 900px; height: 500px;"></div>
		</div>
		<div>
			<table >
				<tr>
					<th>Material</th>
					<th>Cantidad</th>
					<th>Precio unitario</th>
					<th>Precio Renta</th>
				</tr>
				<tr>
					<td>Sillas</td>
					<td>225</td>
					<td>$1000</td>
					<td>$5</td>
				</tr>
				<tr>
					<td>Mesas</td>
					<td>23</td>
					<td>$2000</td>
					<td>$20</td>
				</tr>
				<tr>
					<td>Manteles</td>
					<td>23</td>
					<td>$150</td>
					<td>$15</td>
				</tr>				
				<tr>
					<td>Cubre sillas</td>
					<td>225</td>
					<td>$50</td>
					<td>$10</td>
				</tr>			
				<tr>
					<td>Listones</td>
					<td>225</td>
					<td>$30</td>
					<td>$5</td>
				</tr>
			</table>
		</div>
		<div>
			<form action="Procesos_php/proceso_cerrar_sesion.php">
				<input type="submit" name="Cerrar sesion">
			</form>
		</div>
	</div>
</body>
</html>