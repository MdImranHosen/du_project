<!-- saved from url=(0063)http://examcontrollerdu.ac.bd/tb/login/report/xx1537334525.html -->

<?php 
include "lib/Database.php";
include "classes/DU_project.php";

 $db   = new Database();
 $du_p = new DU_project();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>


<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Victoria University of Bangladesh</title>
  <link rel="icon" href="icon.png">

<style type="text/css">

.page {
    width: 21cm;
    min-height: 29.7cm;
    padding: 1cm;
    margin: 1cm auto;
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
</style>
 
 
 </head><body>
  <a style="background: green;color: white;padding:5px; text-decoration: none;text-align: center;" href="certificate/">Certificate</a>
 <?php
 $result = $du_p->showResult(); 
 if (!empty($result)) {
    while ($du_result = $result->fetch_assoc()) {
 ?>
 <div class="page">                          
 <table width="100%">
   <tbody>
    <tr>
     <td width="30%">
                <table align="left" width="200" style="font-size:9px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
                    <tbody><tr>
                        <th colspan="3" style="font-size:15px; text-align:center; font-weight:bolder;">INSTRUCTIONS: </th>
                    </tr>
                    <tr>
                        <td style="text-align:center">Numerical <br> Marks</td>
                        <td style="text-align:center">Letter <br>Grade</td>
                        <td style="text-align:center">Grade <br>Point</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">80 and above</td>
                        <td style="text-align:center" height="15">A+</td>
                        <td style="text-align:center">4.00</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">75 to 79</td>
                        <td style="text-align:center">A</td>
                        <td style="text-align:center">3.75</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">70 to 74</td>
                        <td style="text-align:center">A-</td>
                        <td style="text-align:center">3.50</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">65 to 69</td>
                        <td style="text-align:center">B+</td>
                        <td style="text-align:center">3.25</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">60 to 64</td>
                        <td style="text-align:center">B</td>
                        <td style="text-align:center">3.00</td>
                    </tr>
                    
                     <tr>
                        <td style="text-align:center">55 to 59</td>
                        <td style="text-align:center">B-</td>
                        <td style="text-align:center">2.75</td>
                    </tr>
                     <tr>
                        <td style="text-align:center">50 to 54</td>
                        <td style="text-align:center">C+</td>
                        <td style="text-align:center">2.50</td>
                    </tr>        
                    <tr>
                        <td style="text-align:center">45 to 49</td>
                        <td style="text-align:center">C</td>
                        <td style="text-align:center">2.25</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">40 to 44</td>
                        <td style="text-align:center">D</td>
                        <td style="text-align:center">2.00</td>
                    </tr>
                    <tr>
                        <td style="text-align:center">  <b>&lt;40</b> </td>
                        <td style="text-align:center">F</td>
                        <td style="text-align:center">0.00</td>
                    </tr>
                  
                </tbody></table>
      
      
     </td>
     <td width="52%" valign="top">
        <table style="text-align:center;">
           <tbody><tr>
              <td><img src="logo.png" style="width:70px; height:80px;"></td>
           </tr>
           <tr>
              <td style="font-size:15px; font-weight:bolder;">Victoria University of Bangladesh</td>
           </tr>
           <tr>
              <td>Grade Certificate/Academic Transcript </td>
           </tr>
           <tr>
              <td style="font-size:13px;font-weight:bolder;">4th Year B.A.  Honours Final Examination of 2015</td>
           </tr>
           <tr>
              <td style="font-size:12px;"><b>SUBJECT: <?php echo $du_result['subject_title'] ?> (CODE-<?php echo $du_result['subject_code'] ?>) </b></td>
           </tr>
        </tbody></table>
     
     </td>
     <td width="18%" valign="top">
          <b>Issue No. ---------- </b><br>
          <b>Date: ----------------</b> 

     </td>
   
   </tr>
 
 
 </tbody>

</table>     
      
    <br>
       
 <table width="100%" style="font-size:12px; font-weight:bolder; line-height:1.5">
   
       <tbody><tr>
           <td colspan="3"><i>The following are the grades obtained by : <?php echo $du_result['student_name'] ?></i></td>
           
       </tr>
       
       <tr>
          <td colspan="3">Name of the College :  <?php echo $du_result['college_code'] ?> - <?php echo $du_result['college_name'] ?></td>           
       </tr>
       <tr>
           <td colspan="2">NU Registration No. <?php echo $du_result['nu_reg'] ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Session: <?php echo $du_result['session'] ?></td>
           <td style="text-align:right;">Examination Roll No. <?php echo $du_result['exam_roll'] ?></td>
       </tr>
 </tbody></table>
 

  <table width="100%">
     
     
        <tbody><tr>
           <td width="50%" valign="top">
              
               
                  <table width="100%" style="font-size:12px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
                     <tbody><tr>
                        <th colspan="5" style="font-size:12px;">1<sup>st</sup> YEAR</th>
                     </tr>
                     <tr>
                          <th width="30">Paper <br> Code</th>
                          <th>Course Title</th>
                          <th width="30">Credits</th>
                          <th width="30">Letter <br> Grade</th>
                          <th width="30">Grade <br> Point</th>
                     </tr>
                         <?php 
                            $codeOne = $du_result['code1'];
                            if (!empty($codeOne)) {
                            
                            $codeOne_ex = explode('=', $codeOne);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codeOne_ex[0]; ?></td>
                         <?php
                           $codefchck = $codeOne_ex[0];
                           $paperOne = $du_p->showPaperTitleCredits($codefchck);
                           $paperOnes = $paperOne->fetch_assoc();
                           if ($paperOnes) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperOnes['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperOnes['credits'] ?></td>
                         <?php } ?>
                          <td style="text-align:center;"><?php echo $codeOne_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codeOne_ex[2]; ?></td>

                     </tr>
                     <?php } ?>

                     <?php 
                            $code2 = $du_result['code2'];
                            if (!empty($code2)) {
                            
                            $code2_ex = explode('=', $code2);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code2_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code2_ex[0];
                           $paper2 = $du_p->showPaperTitleCredits($codefchcks);
                           $paper2s = $paper2->fetch_assoc();
                           if ($paper2s) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper2s['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper2s['credits'] ?></td>
                         <?php } ?>

                          <td style="text-align:center;"><?php echo $code2_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code2_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $code3 = $du_result['code3'];
                            if (!empty($code3)) {
                            
                            $code3_ex = explode('=', $code3);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code3_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code3_ex[0];
                           $paper3 = $du_p->showPaperTitleCredits($codefchcks);
                           $paper3s = $paper3->fetch_assoc();
                           if ($paper3s) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper3s['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper3s['credits'] ?></td>
                         <?php } ?>

                          <td style="text-align:center;"><?php echo $code3_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code3_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $code4 = $du_result['code4'];
                            if (!empty($code4)) {
                            
                            $code4_ex = explode('=', $code4);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code4_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code4_ex[0];
                           $paper4 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paper4)) {
                           
                           $paper4t = $paper4->fetch_assoc();
                           if ($paper4t) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper4t['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper4t['credits'] ?></td>
                         <?php } } ?>

                          <td style="text-align:center;"><?php echo $code4_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code4_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                      <?php 
                            $code5 = $du_result['code5'];
                            if (!empty($code5)) {
                            
                            $code5_ex = explode('=', $code5);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code5_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code5_ex[0];
                           $paper5 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paper5)) {
                           
                           $paper5t = $paper5->fetch_assoc();
                           if ($paper5t) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper5t['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper5t['credits'] ?></td>
                         <?php } } ?>

                          <td style="text-align:center;"><?php echo $code5_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code5_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $code6 = $du_result['code6'];
                            if (!empty($code6)) {
                            
                            $code6_ex = explode('=', $code6);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code6_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code6_ex[0];
                           $paper6 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paper6)) {
                           
                           $paper6t = $paper6->fetch_assoc();
                           if ($paper6t) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper6t['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper6t['credits'] ?></td>
                         <?php } } ?>

                          <td style="text-align:center;"><?php echo $code6_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code6_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $code7 = $du_result['code7'];
                            if (!empty($code7)) {
                            
                            $code7_ex = explode('=', $code7);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code7_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code7_ex[0];
                           $paper7 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paper7)) {
                           
                           $paper7t = $paper7->fetch_assoc();
                           if ($paper7t) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper7t['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper7t['credits'] ?></td>
                         <?php } } ?>

                          <td style="text-align:center;"><?php echo $code7_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code7_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $code8 = $du_result['code9'];
                            if (!empty($code8)) {
                            
                            $code8_ex = explode('=', $code8);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code8_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code8_ex[0];
                           $paper8 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paper8)) {
                           
                           $paper8t = $paper8->fetch_assoc();
                           if ($paper8t) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper8t['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper8t['credits'] ?></td>
                         <?php } } ?>

                          <td style="text-align:center;"><?php echo $code8_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code8_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $code10 = $du_result['code10'];
                            if (!empty($code10)) {
                            
                            $code10_ex = explode('=', $code10);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $code10_ex[0]; ?></td>
                         <?php
                           $codefchcks = $code10_ex[0];
                           $paper10 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paper10)) {
                           
                           $paper10t = $paper10->fetch_assoc();
                           if ($paper10t) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paper10t['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paper10t['credits'] ?></td>
                         <?php } } ?>

                          <td style="text-align:center;"><?php echo $code10_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $code10_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                                        
                     <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">1st YEAR TOTAL CREDIT &amp; GPA</td>
                        <td style="text-align:center;"><?php echo $du_result['total_credit'] ?></td>
                        <td style="text-align:center;"><?php echo $du_result['total_cgpa']; ?></td>
                        <td></td>
                     </tr>
                </tbody></table>
           
           </td>

           <td width="50%" valign="top">
              
               <table width="100%" style="font-size:12px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
                     <tbody><tr>
                        <th colspan="5" style="font-size:12px;">2<sup>nd</sup> YEAR</th>
                     </tr>
                      <tr>
                          <th width="30">Paper <br> Code</th>
                          <th>Course Title</th>
                          <th width="30">Credits</th>
                          <th width="30">Letter <br> Grade</th>
                          <th width="30">Grade <br> Point</th>
                     </tr>

                     
                      <?php 
                            $codes1 = $du_result['codes1'];
                            if (!empty($codes1)) {
                            
                            $codes1_ex = explode('=', $codes1);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes1_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes1_ex[0];
                           $papers1 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers1)) {
                           $papers1 = $papers1->fetch_assoc();
                           if ($papers1) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers1['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers1['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes1_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes1_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                      <?php 
                            $codes2 = $du_result['codes2'];
                            if (!empty($codes2)) {
                            
                            $codes2_ex = explode('=', $codes2);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes2_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes2_ex[0];
                           $papers2 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers2)) {
                           $papers2 = $papers2->fetch_assoc();
                           if ($papers2) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers2['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers2['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes2_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes2_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codes3 = $du_result['codes3'];
                            if (!empty($codes3)) {
                            
                            $codes3_ex = explode('=', $codes3);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes3_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes3_ex[0];
                           $papers3 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers3)) {
                           $papers3 = $papers3->fetch_assoc();
                           if ($papers3) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers3['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers3['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes3_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes3_ex[2]; ?></td>

                     </tr>
                     <?php } ?>         
                       <?php 
                            $codes4 = $du_result['codes4'];
                            if (!empty($codes4)) {
                            
                            $codes4_ex = explode('=', $codes4);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes4_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes4_ex[0];
                           $papers4 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers4)) {
                           $papers4 = $papers4->fetch_assoc();
                           if ($papers4) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers4['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers4['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes4_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes4_ex[2]; ?></td>

                     </tr>
                     <?php } ?>  
                      <?php 
                            $codes5 = $du_result['codes5'];
                            if (!empty($codes5)) {
                            
                            $codes5_ex = explode('=', $codes5);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes5_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes5_ex[0];
                           $papers5 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers5)) {
                           $papers5 = $papers5->fetch_assoc();
                           if ($papers5) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers5['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers5['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes5_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes5_ex[2]; ?></td>

                     </tr>
                     <?php } ?>     
                       <?php 
                            $codes6 = $du_result['codes6'];
                            if (!empty($codes6)) {
                            
                            $codes6_ex = explode('=', $codes6);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes6_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes6_ex[0];
                           $papers6 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers6)) {
                           $papers6 = $papers6->fetch_assoc();
                           if ($papers6) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers6['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers6['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes6_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes6_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                      <?php 
                            $codes7 = $du_result['codes7'];
                            if (!empty($codes7)) {
                            
                            $codes7_ex = explode('=', $codes7);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes7_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes7_ex[0];
                           $papers7 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers7)) {
                           $papers7 = $papers7->fetch_assoc();
                           if ($papers7) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers7['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers7['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes7_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes7_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                      <?php 
                            $codes8 = $du_result['codes8'];
                            if (!empty($codes8)) {
                            
                            $codes8_ex = explode('=', $codes8);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes8_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes8_ex[0];
                           $papers8 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers8)) {
                           $papers8 = $papers8->fetch_assoc();
                           if ($papers8) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers8['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers8['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes8_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes8_ex[2]; ?></td>

                     </tr>
                     <?php } ?>  
                      <?php 
                            $codes9 = $du_result['codes9'];
                            if (!empty($codes9)) {
                            
                            $codes9_ex = explode('=', $codes9);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codes9_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codes9_ex[0];
                           $papers9 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papers9)) {
                           $papers9 = $papers9->fetch_assoc();
                           if ($papers9) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papers9['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papers9['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codes9_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codes9_ex[2]; ?></td>

                     </tr>
                     <?php } ?>                                                     
                    <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">2nd YEAR TOTAL CREDIT &amp; GPA</td>
                        <td style="text-align:center;"><?php echo $du_result['total_credit_s'] ?></td>
                        <td style="text-align:center;"><?php echo $du_result['total_cgpa_s'] ?></td>
                        <td></td>
                     </tr>
                </tbody></table>
           
           </td>    
              
        </tr>

         <tr>
           <td width="50%" valign="top">
              
               <table width="100%" style="font-size:12px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
                    <tbody><tr>
                        <th colspan="5" style="font-size:12px;">3<sup>rd</sup> YEAR</th>
                     </tr>
                     <tr>
                          <th width="30">Paper <br> Code</th>
                          <th>Course Title</th>
                          <th width="30">Credits</th>
                          <th width="30">Letter <br> Grade</th>
                          <th width="30">Grade <br> Point</th>
                     </tr>
                            
                      <?php 
                            $codet1 = $du_result['codet1'];
                            if (!empty($codet1)) {
                            
                            $codet1_ex = explode('=', $codet1);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet1_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet1_ex[0];
                           $papert1 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert1)) {
                           $papert1 = $papert1->fetch_assoc();
                           if ($papert1) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert1['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert1['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet1_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet1_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet2 = $du_result['codet2'];
                            if (!empty($codet2)) {
                            
                            $codet2_ex = explode('=', $codet2);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet2_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet2_ex[0];
                           $papert2 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert2)) {
                           $papert2 = $papert2->fetch_assoc();
                           if ($papert2) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert2['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert2['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet2_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet2_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet3 = $du_result['codet3'];
                            if (!empty($codet3)) {
                            
                            $codet3_ex = explode('=', $codet3);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet3_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet3_ex[0];
                           $papert3 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert3)) {
                           $papert3 = $papert3->fetch_assoc();
                           if ($papert3) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert3['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert3['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet3_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet3_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet4 = $du_result['codet4'];
                            if (!empty($codet4)) {
                            
                            $codet4_ex = explode('=', $codet4);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet4_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet4_ex[0];
                           $papert4 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert4)) {
                           $papert4 = $papert4->fetch_assoc();
                           if ($papert4) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert4['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert4['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet4_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet4_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet5 = $du_result['codet5'];
                            if (!empty($codet5)) {
                            
                            $codet5_ex = explode('=', $codet5);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet5_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet5_ex[0];
                           $papert5 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert5)) {
                           $papert5 = $papert5->fetch_assoc();
                           if ($papert5) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert5['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert5['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet5_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet5_ex[2]; ?></td>

                     </tr>
                     <?php } ?>   
                     <?php 
                            $codet6 = $du_result['codet6'];
                            if (!empty($codet6)) {
                            
                            $codet6_ex = explode('=', $codet6);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet6_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet6_ex[0];
                           $papert6 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert6)) {
                           $papert6 = $papert6->fetch_assoc();
                           if ($papert6) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert6['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert6['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet6_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet6_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet7 = $du_result['codet7'];
                            if (!empty($codet7)) {
                            
                            $codet7_ex = explode('=', $codet7);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet7_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet7_ex[0];
                           $papert7 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert7)) {
                           $papert7 = $papert7->fetch_assoc();
                           if ($papert7) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert7['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert7['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet7_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet7_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                     <?php 
                            $codet8 = $du_result['codet8'];
                            if (!empty($codet8)) {
                            
                            $codet8_ex = explode('=', $codet8);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet8_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet8_ex[0];
                           $papert8 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert8)) {
                           $papert8 = $papert8->fetch_assoc();
                           if ($papert8) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert8['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert8['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet8_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet8_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                     <?php 
                            $codet9 = $du_result['codet9'];
                            if (!empty($codet9)) {
                            
                            $codet9_ex = explode('=', $codet9);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet9_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet9_ex[0];
                           $papert9 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert9)) {
                           $papert9 = $papert9->fetch_assoc();
                           if ($papert9) {
                         ?>

                          <td style="text-transform:capitalize;"><?php echo $papert9['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert9['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet9_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet9_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet10 = $du_result['codet10'];
                            if (!empty($codet10)) {
                            
                            $codet10_ex = explode('=', $codet10);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet10_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet10_ex[0];
                           $papert10 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert10)) {
                           $papert10 = $papert10->fetch_assoc();
                           if ($papert10) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papert10['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papert10['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet10_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet10_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                     <?php 
                            $codet11 = $du_result['codet11'];
                            if (!empty($codet11)) {
                            
                            $codet11_ex = explode('=', $codet11);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codet11_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codet11_ex[0];
                           $papert11 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert11)) {
                           $paperst11 = $papert11->fetch_assoc();
                           if ($paperst11) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperst11['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperst11['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codet11_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codet11_ex[2]; ?></td>

                     </tr>
                     <?php } ?>                                         
                    <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">3rd YEAR TOTAL CREDIT &amp; GPA   </td>
                        <td style="text-align:center;"><?php echo $du_result['total_credit_t'] ?></td>
                        <td style="text-align:center;"><?php echo $du_result['total_cgpa_t'] ?></td>
                        <td></td>
                     </tr>
                    
                </tbody></table>
           
           </td>
          
           <td width="50%" valign="top">
              
               <table width="100%" style="font-size:12px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
                    <tbody><tr>
                        <th colspan="5" style="font-size:12px;">4<sup>th</sup> YEAR</th>
                     </tr>
                     <tr>
                          <th width="30">Paper <br> Code</th>
                          <th>Course Title</th>
                          <th width="30">Credits</th>
                          <th width="30">Letter <br> Grade</th>
                          <th width="30">Grade <br> Point</th>
                     </tr>
                    <?php 
                            $codefo1 = $du_result['codefo1'];
                            if (!empty($codefo1)) {
                            
                            $codefo1_ex = explode('=', $codefo1);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo1_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo1_ex[0];
                           $paperfo1 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo1)) {
                           $paperfo1 = $paperfo1->fetch_assoc();
                           if ($paperfo1) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo1['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo1['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo1_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo1_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codefo2 = $du_result['codefo2'];
                            if (!empty($codefo2)) {
                            
                            $codefo2_ex = explode('=', $codefo2);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo2_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo2_ex[0];
                           $paperfo2 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo2)) {
                           $paperfo2 = $paperfo2->fetch_assoc();
                           if ($paperfo2) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo2['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo2['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo2_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo2_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codefo3 = $du_result['codefo3'];
                            if (!empty($codefo3)) {
                            
                            $codefo3_ex = explode('=', $codefo3);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo3_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo3_ex[0];
                           $paperfo3 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo3)) {
                           $paperfo3 = $paperfo3->fetch_assoc();
                           if ($paperfo3) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo3['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo3['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo3_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo3_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codefo4 = $du_result['codefo4'];
                            if (!empty($codefo4)) {
                            
                            $codefo4_ex = explode('=', $codefo4);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo4_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo4_ex[0];
                           $paperfo4 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo4)) {
                           $paperfo4 = $paperfo4->fetch_assoc();
                           if ($paperfo4) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo4['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo4['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo4_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo4_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codefo5 = $du_result['codefo5'];
                            if (!empty($codefo5)) {
                            
                            $codefo5_ex = explode('=', $codefo5);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo5_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo5_ex[0];
                           $paperfo5 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo5)) {
                           $paperfo5 = $paperfo5->fetch_assoc();
                           if ($paperfo5) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo5['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo5['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo5_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo5_ex[2]; ?></td>

                     </tr>
                     <?php } ?>   
                     <?php 
                            $codefo6 = $du_result['codefo6'];
                            if (!empty($codefo6)) {
                            
                            $codefo6_ex = explode('=', $codefo6);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo6_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo6_ex[0];
                           $paperfo6 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo6)) {
                           $papersfo6 = $paperfo6->fetch_assoc();
                           if ($papersfo6) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papersfo6['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papersfo6['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo6_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo6_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codefo7 = $du_result['codefo7'];
                            if (!empty($codefo7)) {
                            
                            $codefo7_ex = explode('=', $codefo7);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo7_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo7_ex[0];
                           $paperfo7 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo7)) {
                           $paperfo7 = $paperfo7->fetch_assoc();
                           if ($paperfo7) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo7['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo7['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo7_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo7_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                     <?php 
                            $codefo8 = $du_result['codefo8'];
                            if (!empty($codefo8)) {
                            
                            $codefo8_ex = explode('=', $codefo8);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo8_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo8_ex[0];
                           $paperfo8 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo8)) {
                           $paperfo8 = $paperfo8->fetch_assoc();
                           if ($paperfo8) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo8['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo8['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo8_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo8_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                     <?php 
                            $codet9 = $du_result['codefo9'];
                            if (!empty($codefo9)) {
                            
                            $codefo9_ex = explode('=', $codefo9);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo9_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo9_ex[0];
                           $paperfo9 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo9)) {
                           $paperfo9 = $paperfo9->fetch_assoc();
                           if ($paperfo9) {
                         ?>

                          <td style="text-transform:capitalize;"><?php echo $paperfo9['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo9['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo9_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo9_ex[2]; ?></td>

                     </tr>
                     <?php } ?>
                     <?php 
                            $codet10 = $du_result['codefo10'];
                            if (!empty($codefo10)) {
                            
                            $codefo10_ex = explode('=', $codefo10);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo10_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo10_ex[0];
                           $paperfo10 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($papert10)) {
                           $paperfo10 = $paperfo10->fetch_assoc();
                           if ($paperfo10) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $paperfo10['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $paperfo10['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo10_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo10_ex[2]; ?></td>

                     </tr>
                     <?php } ?> 
                     <?php 
                            $codefo11 = $du_result['codefo11'];
                            if (!empty($codefo11)) {
                            
                            $codefo11_ex = explode('=', $codefo11);
                         ?>
                         <tr>
                          <td style="text-align:center;"><?php echo $codefo11_ex[0]; ?></td>
                         <?php
                           $codefchcks = $codefo11_ex[0];
                           $paperfo11 = $du_p->showPaperTitleCredits($codefchcks);
                           if (!empty($paperfo11)) {
                           $papersfo11 = $paperfo11->fetch_assoc();
                           if ($papersfo11) {
                         ?>
                          <td style="text-transform:capitalize;"><?php echo $papersfo11['paper_code_title'] ?></td>
                          <td style="text-align:center;"><?php echo $papersfo11['credits'] ?></td>
                         <?php } } ?>
                          <td style="text-align:center;"><?php echo $codefo11_ex[1]; ?></td>
                          <td style="text-align:center;"><?php echo $codefo11_ex[2]; ?></td>

                     </tr>
                     <?php } ?>     
                                                                                
                                            <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">4th YEAR TOTAL CREDIT &amp; GPA   </td>
                        <td style="text-align:center;"></td>
                        <td style="text-align:center;">2.53</td>
                        <td></td>
                     </tr>
                      
                </tbody></table>
           
           </td>          
        </tr>
        
    
</tbody></table>

<table width="100%" style="font-size:11px;  font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
    <tbody><tr>
        <td style="padding-left:20px; font-weight:bolder;">NCC  </td>
        <td style="text-align:center; font-weight:bolder;" colspan="2">ENGLISH</td>
        <td style="text-align:center; font-weight:bolder;" colspan="2"><?php echo $du_result['ncc'] ?></td>
        <td style="padding-left:10px; font-weight:bolder;"> CGPA (1<sup>st</sup> - 4<sup>th</sup> Year) </td>
        <td style="text-align:center; font-weight:bolder;"><?php echo $du_result['total_gpa'] ?></td>
        <td style="text-align:center; font-weight:bolder;" colspan="">RESULT</td>
        <td style="text-align:center; font-weight:bolder;" colspan=""><?php echo $du_result['result'] ?></td>        
    </tr>
</tbody></table>
    


<table>
        <tbody><tr>
          <td colspan="7" style="font-size:9px;"> <b>Result Publication Date : <?php echo $du_result['result_publish_date'] ?> </b></td>
        </tr>
</tbody></table>

<table width="100%">
  <tbody><tr>
      <td height="40" colspan="3"></td>
  </tr>
  <tr>
    <td width="25%" align="left">
      <table>
         
         <tbody><tr>
            <td style="text-align:center;">
               <span style="font-size:10px; font-weight:bolder;">
                ADMINISTRATIVE BUILDING <br>        
                Victoria University of Bangladesh <br>    
               </span>  
               <span style="font-size:11px;">              
                DHAKA, <br>        
                BANGLADESH.     <br>
                </span>             
            </td>
         </tr>
         
       </tbody></table>
    
    </td>
    <td width="20%" align="center">
      <table>
         
         <tbody><tr>
            <td style="border-bottom:1px solid #000;">Md. Imran Hosen  </td>
         </tr>
         <tr>
            <td style="font-size:11px;">Prepared By</td>
         </tr>
         <tr>
           <td style="font-size:11px;">Date: 19/01/2019</td>
         </tr>
       </tbody></table>
    
    </td>
     <td width="21%" align="right">
       <table align="right">
         <tbody><tr>
            <td style="border-bottom:1px solid #000;">&nbsp; </td>
         </tr>
         
         <tr>
           <td style="font-size:11px;">Compared By</td>
         </tr>
         <tr>
           <td style="font-size:11px;">Date: 19/09/2018</td>
         </tr>
       </tbody></table>
    </td>
    <td width="34%" align="right">
       <table align="right">
         
      
         <tbody><tr>
            <td style="font-size:12px;  text-align:center; font-weight:bolder;">
                <i>Deputy Controller of Examinations</i><br>        
                Victoria University of Bangladesh         
            </td>
         </tr>
       </tbody></table>
    </td>
    
       
  </tr>

</tbody></table>

</div> 
<?php } }else{ echo "Error";} ?> 
</body>
</html>