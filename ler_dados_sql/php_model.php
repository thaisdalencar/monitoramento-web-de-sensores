<?php 
class Conexao{
	function __construct(){
		$conexao = @mysql_connect('127.0.0.1','userSensor','sensores') or die('não conectou ao banco');
		mysql_select_db("sensores",$conexao);
	}
}
class Model extends conexao{	
	function ler_dados($tamanho){
		//busca a temperatura
		$sql = "SELECT sensor,valor FROM temperatura ORDER BY id DESC LIMIT 1";
		$query = mysql_query($sql);

		if(mysql_num_rows($query)>0){
          while($row = mysql_fetch_array($query)){
              $temperatura[] = $row["sensor"];
              $temperatura[] = $row["valor"];
		     }

		} else {
		     var_dump("deu erro na lida ao banco!");
		}

		//busca a luminosidade
		$sql2 = "SELECT sensor,valor FROM luminosidade ORDER BY id DESC LIMIT 1";
		$query2 = mysql_query($sql2);

		if(mysql_num_rows($query2)>0){
          while($row = mysql_fetch_array($query2)){
              $luminosidade[] = $row["sensor"];
              $luminosidade[] = $row["valor"];
		     }
		} else {
		     var_dump("deu erro na lida ao banco!");
		}

		$valores[] = $temperatura;
		$valores[] = $luminosidade;

		return $valores;
	}
}
?>