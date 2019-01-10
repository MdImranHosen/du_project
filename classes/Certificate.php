<?php 
$filepath = realpath(dirname(__FILE__));								
include_once ($filepath.'/../lib/Database.php');
?>
<?php 
 class Certificate{
 	
 	private $db;
	public function __construct(){

	 $this->db = new Database();

	}

  	public function showCertificate(){
		$query = "SELECT s.*, c.college_name, sc.subject_title
		        FROM student_info as s, college_code as c, subject_code_title as sc
		        WHERE s.college_code = c.college_code AND s.subject_code = sc.subject_code AND s.total_gpa != ''
                ORDER BY s.id DESC ";
                $result = $this->db->select($query);
                return $result;
	}

}