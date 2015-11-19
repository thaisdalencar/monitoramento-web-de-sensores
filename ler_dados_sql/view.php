<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/css/template.css">
	<script src="static/js/jquery-1.9.1.js"></script>
	<script src="static2/js/include.js"></script>
	<script src="static2/js/bootstrap.js"></script>
	<title>Sensores</title>
</head>
<body>

</div>
<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-10">
    	<div id="titulo" class="center-block">
    		<h1>MONITORAMENTO DE SENSORES </h1>
    	</div>
    </div>
    <div class="col-md-1"></div>
</div>   


<div class="row">
	<div class="col-md-1"></div>
    <div id="box" class="col-md-10">
    	<div class="row">
		 	<div class="col-md-4">
		    	<div class="center-block boxSense">
		    		<img class="imgSensor center-block" src="static/temp2.png">
		    		<h2 class="tituloSensor">Temperatura</h2>		    		
		   			<h3 id="valor1" class="parametros"></h3>
		   			<h4 id="timeTemp" class="parametrosTime"></h4>

		    	</div>
		    </div>
			<div class="col-md-4">
		    	<div class="center-block boxSense">
		    		<img class="imgSensor center-block" src="static/luz2.png">
		    		<h2 class="tituloSensor">Luminosidade</h2>
		    		<h3 id="valor2" class="parametros"></h3>
		    		<h4 id="timeLuz" class="parametrosTime"></h4>
		    	</div>
		    </div>
		    <div class="col-md-4">
		    	<div class="center-block boxSense">
		    		<img class="imgSensor center-block" src="static/bussola2.png">
		    		<h2 class="tituloSensor">Efeito Hall</h2>
		    		<h3 id="valor3" class="parametros"></h3>
		    		<h4 id="timeHall" class="parametrosTime"></h4>
		    	</div>
		    </div>
		</div>  
	
    </div>
    <div class="col-md-1"></div>
</div> 

<div class="row">
	<div class="col-md-1"></div>
    <div id="linha" class="col-md-10"></div>
    <div class="col-md-1"></div>
</div>

<div class="row">
	<div class="col-md-1"></div>
    <div id="box" class="col-md-10">
    	<div class="row">
		 	<div class="col-md-4">
		    	<div class="center-block boxSense">
		    		<img class="imgSensor center-block" src="static/run2.png">
		    		<h2 class="tituloSensor">Movimento</h2>
		   			<h3 id="valor4" class="parametros"></h3>
		   			<h4 id="timePressao" class="parametrosTime"></h4>
		    		
		    	</div>
		    </div>
			<div class="col-md-4">
		    	<div class="center-block boxSense">
		    		<img class="imgSensor center-block" src="static/mq-22.png">
		    		<h2 class="tituloSensor" >Sensor de Fumaça</h2>
		    		<h3 id="valor5" class="parametros"></h3>
		    		<h4 id="timeChuva" class="parametrosTime"></h4>
		    	</div>
		    </div>
		    <div class="col-md-4">
		    	<div class="center-block boxSense">
		    		<img class="imgSensor center-block" src="static/led.png">
		    		<h2 class="tituloSensor">Led</h2>
		    		<h3 id="valor6" class="parametros"></h3>
		    		<h4 id="timeFluxo" class="parametrosTime"></h4>
		    	</div>
		    </div>
		</div>  
	
    </div>
    <div class="col-md-1"></div>
</div> 

 

</body>
</html>