<?php 
class Conexao{
	function __construct(){
		$conexao = @mysql_connect('127.0.0.1','userSensor','sensores') or die('não conectou ao banco');
		mysql_select_db("sensores",$conexao);
	}
}
class Model extends conexao{	
	function __construct(){
    	parent::__construct();
    }	
	function grava_dados($valor){
		$sensorTemperatura = $valor[0];
		$valorTemperatura = $valor[1];
		$sensorLuz = $valor[2];
		$valorLuz = $valor[3];

			$sql1 = "INSERT INTO temperatura(sensor,valor) VALUES ('$sensorTemperatura',$valorTemperatura)";
			$query1 = mysql_query($sql1);
			$sql2 = "INSERT INTO luminosidade(sensor,valor) VALUES ('$sensorLuz',$valorLuz)";
			$query2 = mysql_query($sql2);
			if($query1 && $query2){
				var_dump("salvo");
				return $query;  
			}else{
				var_dump("não salvo");
			}

		
        
	}
	function deletar_primeiros(){
		//mantem no banco so os ultimos 10 registros
		$sql="SELECT id FROM sensores ORDER BY id DESC LIMIT 10";
  		$result = mysql_query($sql);
  		while ($row = mysql_fetch_array($result)) {
              $lista[] =  $row;  
          }
        $deletar = $lista[9][0];
        $sql = "DELETE FROM sensores WHERE id < $deletar";
        $result = mysql_query($sql);
        return $result;  		
	}
}
?>