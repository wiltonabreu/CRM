<?php
class Consultas{

  public static function getList(){
	$sql = new Sql();
	return $sql->select("select id from opportunities WHERE date_modified >=CURRENT_DATE() AND sales_stage = 'Closed Won';");	
  }


  public static function search($query,$id){
	$sql = new Sql();
	$sq = $sql->select($query, array(
	 ':ID'=>$id
	));
	return $sq;
  }

public static function getNome($query,$id){
        $sql = new Sql();
        $stmt = $sql->selectNome($query, array(
         ':ID'=>$id
        ));

	
	return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        
  }


}

?>	
