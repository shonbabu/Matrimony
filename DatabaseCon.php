<?php
class DatabaseCon {
private $dbhost = 'localhost:3306';
private $dbuser = 'root';
private $dbpass = '';
private $db = 'matrimony';
private $conn;
   function __construct()
   		 {

      		$this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->db);
				if(!$this->conn )
					{
  						die('Could not connect: ' . mysqli_error($this->conn));
					}
		
					
        }
   function insertQuery($qry) {
    		echo $qry;
	   $retval = mysqli_query( $this->conn,$qry);
			if(!$retval )
			{
 				 die('Could not enter data: ' . mysqli_error($this->conn));
			}
				
   }
    function selectQuery($str) {
	
		$f=0;
		$retval=mysqli_query($this->conn,$str);
	$num_rows= mysqli_num_rows(mysqli_query($this->conn,$str));

		if($num_rows>0)
		   {
			 $f=1;  
		   }
		   
		   return $f;
		  
   }
   function selectData($str)
   {
   $retval=mysqli_query($this->conn,$str);
   return $retval;
   }
  
   function closeDatabase()
   {
	  mysqli_close($this->conn); 
   }
}


?>