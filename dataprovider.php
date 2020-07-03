<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		try{
			$dsn = "mysql:host=127.0.0.1;dbname=qlbanhoa";
			$dbh = new PDO($dsn, "root", "");
			$dbh->query("SET NAMES utf8");
			$result = $dbh->query($sql);
		}catch(Exception $ex){
			echo "Lỗi: ";
		}
		finally{
            $dbh = null;
		}

		return $result;
	}
}
?>
<?php ?>