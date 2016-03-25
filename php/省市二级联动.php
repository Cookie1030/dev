<?
		$connection=mysql_connect("localhost","root","cookie"); //连接并选择数据库服务器 
		mysql_query("set names utf8");
		mysql_select_db("cookie",$connection); 	
		
		$proid = $_GET["province"]; 
			if(isset($proid)){ 
				$q=mysql_query("select * from city where provinceid = $proid"); 
				while($row=mysql_fetch_array($q)){ 
					$select[] = array("cityid"=>$row[cityid],"city"=>$row[city]); 
				} 
				//var_dump($select);
			 echo json_encode($select); 
			}
?>
