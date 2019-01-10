<?php 
include "../lib/Database.php";
include "../classes/Certificate.php";

 $db = new Database();
 $cf = new Certificate();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Certificate</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="font/style.css">
<style type="text/css">

.page {
    width: 21cm;
    min-height: 29.7cm;
    padding: 1.5cm;
    margin: 2cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
    padding: 1cm;
    border: 5px red solid;
    height: 256mm;
    outline: 2cm #FFEAEA solid;
}

@page {
    size: A4;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}
.clname{ border-bottom:1px solid black;text-align:center; width:400px; display:inline;}
</style>
 
 
 
 </head><body>

<?php 
 $showCf = $cf->showCertificate();
 if ($showCf) {
 	while ($result = $showCf->fetch_assoc()) {
?>
 <div class="page" style="margin:0 auto;">  
  
	<table width="100%" style="text-align:right;">
	    <tbody><tr>
		   <td><b>Serial: DUPC-18</b></td>
		</tr>
	 </tbody></table>
	 <table width="100%" style="text-align:center;">
	  
			 <tbody><tr>
				  <td style="font-size:40px; font-family:CloisterBlackBT;  font-weight:bolder;">Victoria University of Bangladesh</td>
			   </tr>
			   <tr>
				  <td><img src="images/logo.png" style="width:70px; height:80px;"></td>
			   </tr>
			   <tr>
			     <td height="18"></td>
			   </tr>
			   <tr>
				 <td style="font-size:20px; font-family:TwCenMTCondensedBold; font-weight:bolder; ">PROVISIONAL CERTIFICATE FOR</td>
			   </tr>
			   <tr>
			     <td style="height:40px;"></td>
			   </tr>
			   <tr>
				  <td style="font-size:28px; font-family:CloisterBlackBT; font-weight:bolder;"> Bachelor of Arts </td>
			   </tr>
	 </tbody></table>     
      
	<br>
	
	
	
<div style=" font-family:SHLYALLN;">

	<table width="100%" style="line-height:1.5;  font-weight:bolder;">
	   <tbody><tr>
		   <td style="text-align:center;  font-size:28px;">This is to Certify that </td>
	   </tr>
	   <tr>
	     <td height="10"></td>
	   </tr>
	   <tr>
		   <td style="border-bottom:1px solid black; font-size:35px;  text-align:center;">
		    <?php echo $result['student_name']; ?>	     
		   </td>
	   </tr>
	   
	       					       
		       
	   <tr>
	      <td style=" text-align:justify;  font-size:28px;"> <div> of  <span style="border-bottom:1px solid black;text-align:center; font-size:35px;">&nbsp;&nbsp;&nbsp; <b><?php echo $result['college_name']; ?></b> &nbsp;&nbsp;&nbsp;  </span>, obtained the Four Year  Bachelor of Arts Honours Degree in <span style="border-bottom:1px solid black;text-align:center; font-size:35px;">&nbsp;&nbsp;&nbsp; <b><?php echo $result['subject_title']; ?></b>&nbsp;&nbsp;&nbsp;</span> in this University at the Examination of <span style="border-bottom:1px solid black;text-align:center; font-size:35px;">&nbsp;&nbsp; 2016 &nbsp;&nbsp;</span>, and that he/she obtained CGPA <span style="border-bottom:1px solid black;text-align:center; font-size:35px;">&nbsp;&nbsp;<?php echo $result['total_gpa']; ?> &nbsp;&nbsp;</span> on the Four Point Scale. </div></td>
	   </tr>
	</tbody></table>
  </div>
  
 
<table width="100%">
  <tbody><tr>
      <td height="80" colspan="3"></td>
  </tr>
  <tr>
    <td width="50%" align="left">
      <table>
         
         <tbody><tr>
            <td style="text-align:center; font-family:Tw Cen MT Condensed Extra Bold;">
				   <span style="font-size:14px; font-family:TwCenMTCondensedBold; ">
					ADMINISTRATIVE BUILDING	<br>				   
					RAMNA, DHAKA<br>		
				    Date of Issue: <?php echo date('d/m/Y'); ?></span>					
			</td>
         </tr>
         
       </tbody></table>
    
    </td>
   
    <td width="50%" align="right">
       <table align="right">
         
      
         <tbody><tr>
			<td style="font-size:18px;  text-align:center; line-height:1.5;">
				<b><i>Deputy Controller of Examinations</i><br>		
				Victoria University of Bangladesh	</b>		
			</td>
         </tr>
       </tbody></table>
    </td>
    
       
  </tr>

</tbody></table>
<table>
  <tbody><tr><td height="20"></td>
</tr></tbody></table>
<table width="48%" align="center">
   <tbody><tr>
		<td style="text-align:justify; font-family:Times New Roman; font-size:13px; width:400px;">
		"This Provisional Certificate is to be surrendered in
		exchange for the Diploma which will not be issued
		without this except in special circumstances"
		</td>
   </tr>
</tbody></table>

</div>  
<?php } }else{ echo "No Result"; } ?>
</body>
</html>