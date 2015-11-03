
function mostrar_dados(valores){
	$("#valor").html(valores[0][0]+"</br>");
	$("#teste").html(valores[0][1]+"</br>");
	$("#valor1").html(valores[1][0]+"</br>");
	$("#teste1").html(valores[1][1]+"</br>");
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
      			mostrar_dados(data);  
      			cont = cont + 1;      	
			},
			dataType: "json"
	    });
	}, 2000);	
});
