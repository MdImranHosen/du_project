<?php 
$filepath = realpath(dirname(__FILE__));								
include_once ($filepath.'/../lib/Database.php');
?>
<?php 
 class DU_project{
 	
 	private $db;
	public function __construct(){

	 $this->db = new Database();

	}

	
	/* public function showResult(){
		$query = "SELECT s.*, c.college_name, sc.subject_title, f.*, se.*, t.*, fo.*
		        FROM student_info as s,  college_code as c, subject_code_title as sc, first_year_result as f, second_year_result as se, third_year_result as t, fourth_year_result as fo
		        WHERE s.college_code = c.college_code AND s.subject_code = sc.subject_code AND s.nu_reg = f.nu_reg AND s.nu_reg = se.nu_reg AND s.nu_reg = t.nu_reg AND s.nu_reg = fo.nu_reg
                ORDER BY s.id DESC ";
                $result = $this->db->select($query);
                return $result;
	} */

	public function showResult(){
		$query = "SELECT s.*, c.college_name, sc.subject_title, f.*, se.*, t.*, fo.*
		        FROM student_info as s, college_code as c, subject_code_title as sc, first_year_result as f, second_year_result as se, third_year_result as t, fourth_year_result as fo
		        WHERE s.college_code = c.college_code AND s.subject_code = sc.subject_code AND s.du_reg = f.du_reg AND s.du_reg = se.du_reg AND s.du_reg = t.du_reg AND s.du_reg = fo.du_reg
                ORDER BY s.id DESC ";
                $result = $this->db->select($query);
                return $result;
	}
	/*public function showResult(){
		$query = "SELECT * FROM student_info";
		$result = $this->db->select($query);
		return $result;
	}
*/
	public function showPaperTitleCredits($codefchck){
		$sql = "SELECT * FROM paper_code_title_credits where paper_code = '$codefchck'";
		$result = $this->db->select($sql);
		return $result;
	}


}