<?php
class Connection
{
	public function  __construct()
    {
		global $pdo;
        $servername = "localhost";
        $username = "root";
        $password = "";
        try{
            $pdo = new PDO("mysql:host=$servername;dbname=sohure_ami", $username, $password);
        }
        catch(PDOException $e)
        {
            exit('Database error');
        }
    }
}
?>