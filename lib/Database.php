<?php
Class Database{
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;
	
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;  //connet_error akta built in function jodi connection fail hoi tahole se bole dibe ki karone fail hoise.
		return false;
	}
 }
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	}
	
	/*public function select2($query,$arr){
		$pdo = new PDO("mysql:host="localhost";dbname=se","root","");
		$query=$pdo->prepare($query);
		$query->execute($arr);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}*/
	// Insert data
	public function insert($query){
	$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($insert_row){
		return $insert_row;
	} else {
		return false;
	}
  }
  
    // Update data
  	public function update($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($update_row){
		return $update_row;
	} else {
		return false;
	}
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($delete_row){
		return $delete_row;
	} else {
		return false;
	}
  }

/*public function selectString($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		$new=array();
        while($row=mysql_fetch_assoc($result)){
           $new=$row['email'];
       }
       mysql_free_result($result);
		
		return $new;
	}*/
} 

