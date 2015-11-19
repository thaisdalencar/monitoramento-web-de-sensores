
function mostrar_dados(valores){
	$("#valor").html(valores[0]+"</br>");
}

$(document).ready(function(){
	var cont = 0;
	console.log("iniciou");
	setInterval(function(){
		console.log(cont);
	  	$.ajax({
	        type: "GET",
	        url: "leitura_controller.php",
	        success: function (data){
	        	console.log(data);
      			mostrar_dados(data);  
      			cont = cont + 1;      	
			},
			dataType: "json"
	    });
	}, 2000);	
});
