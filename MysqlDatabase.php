<?php
class MysqlDatabase {
	public $con = null;
	
	function __construct(){
		$this->connection();
	}
	
	function connection(){
		$this->con = new mysqli("localhost", "test_usr", "root@V1nam", "student");
	}
	
	function display($sql){
		return $this->con->query($sql);
	}

	
}


$test = new MysqlDatabase();
$insert=$test->display("insert into stud values(NULL,'jeffin','jeff@gmail.com',3)");
//$delete=$test->display("delete from stud where id = 5");
$students = $test->display("select * from stud");
while($data = $students->fetch_object()){
	print_r($data);
}

