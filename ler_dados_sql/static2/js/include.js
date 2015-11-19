function atualiza_dados(valores){	
	/*temperatura*/
	console.log(valores);
	$("#valor1").html(valores[0][1]+ "°");
	$("#valor2").html(valores[1][1]+"%");
	$("#valor3").html(valores[2][1]);
	$("#valor4").html(valores[3][1]);
	$("#valor5").html(valores[4][1]);
	$("#valor6").html(valores[5][1]);

}

$(document).ready(function(){
	var cont = 0;
	console.log("iniciou");
	setInterval(function(){
	  	$.ajax({
	        type: "GET",
	        url: "php_exec_e_ler.php",
	        success: function (data){
	        	console.log("contador="+cont); 
	        	console.log(data); 
      			atualiza_dados(data);  
      			cont = cont + 1;      	
			},
			dataType: "json"
	    });
	}, 2000);	
});