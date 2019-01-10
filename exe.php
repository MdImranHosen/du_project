<!-- saved from url=(0063)http://examcontrollerdu.ac.bd/tb/login/report/xx1537334525.html -->

<?php 
include "lib/Database.php";
include "classes/DU_project.php";

 $db = new Database();
 $du_p = new DU_project();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>


<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
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
              <td style="font-size:12px;"><b>SUBJECT: BANGLA (CODE- 1001) </b></td>
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
           <td colspan="3"><i>The following are the grades obtained by : MILON CHANDRA BARMAN</i></td>
           
       </tr>
       
       <tr>
          <td colspan="3">Name of the College :  <?php echo $du_result['college_code']; ?> DHAKA COLLEGE</td>            
       </tr>
       <tr>
           <td colspan="2">NU Registration No. 2082191  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Session: 2011-2012</td>
           <td style="text-align:right;">Examination Roll No. 8070438</td>
       </tr>
 </tbody></table>
 <table width="100%">
    <tbody><tr>
        <td width="50%" valign="top">
              
               
                    14                   <table width="100%" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
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
                                         <tr>
                          <td style="text-align:center;">1052</td>
                          <td style="text-transform:capitalize;">History and Culture of Bangladesh and Bengalies (From Ancients to 2000 AD)</td>
                          <td style="text-align:center;">4</td>
                          <td style="text-align:center;">C</td>
                          <td style="text-align:center;">2.25</td>
                     </tr>
                     
                         
                     <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">1st YEAR TOTAL CREDIT &amp; GPA</td>
                        <td style="text-align:center;">24</td>
                        <td style="text-align:center;">0.58</td>
                        <td></td>
                     </tr>
                </tbody></table>
           
           </td>
           <td width="50%" valign="top">
              
               <table width="100%" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
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
                                         <tr>
                          <td style="text-align:center;">1062</td>
                          <td style="text-transform:capitalize;">History of Bengali Literature -1</td>
                          <td style="text-align:center;">4</td>
                          <td style="text-align:center;">C</td>
                          <td style="text-align:center;">2.25</td>
                     </tr>
                                                                                
                       
                                                                                
                                            <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">2nd YEAR TOTAL CREDIT &amp; GPA</td>
                        <td style="text-align:center;">26</td>
                        <td style="text-align:center;">2.73</td>
                        <td></td>
                     </tr>
                </tbody></table>
           
           </td>
    </tr>
    <tr>
      <td width="50%" valign="top">
              
               <table width="100%" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
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
                                         <tr>
                          <td style="text-align:center;">1072</td>
                          <td style="text-transform:capitalize;">History of Bangla Literature- II, Fast part of Modern AGE- (1801-1947)</td>
                          <td style="text-align:center;">4</td>
                          <td style="text-align:center;">B-</td>
                          <td style="text-align:center;">2.75</td>
                     </tr>
                                                                                
                         
                                                                                
                                            <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">3rd YEAR TOTAL CREDIT &amp; GPA   </td>
                        <td style="text-align:center;">36</td>
                        <td style="text-align:center;">2.58</td>
                        <td></td>
                     </tr>
                    
                </tbody></table>
           
           </td>
          
           <td width="50%" valign="top">
              
               <table width="100%" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;" border="1" rules="all">
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
                                         <tr>
                          <td style="text-align:center;">1082</td>
                          <td style="text-transform:capitalize;">History Of Bangla Literature -3 (Development Literature Of Bangladesh Since 19)</td>
                          <td style="text-align:center;">4</td>
                          <td style="text-align:center;">C</td>
                          <td style="text-align:center;">2.25</td>
                     </tr>
                                                                                
                  
                                                                                
                                            <tr style="font-weight:bolder; font-size:8px;">
                        <td colspan="2" style="padding-left:9px;">4th YEAR TOTAL CREDIT &amp; GPA   </td>
                        <td style="text-align:center;">34</td>
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
        <td style="text-align:center; font-weight:bolder;" colspan="2">PASS</td>
        <td style="padding-left:10px; font-weight:bolder;"> CGPA (1<sup>st</sup> - 4<sup>th</sup> Year) </td>
        <td style="text-align:center; font-weight:bolder;">2.55</td>
        <td style="text-align:center; font-weight:bolder;" colspan="">RESULT</td>
        <td style="text-align:center; font-weight:bolder;" colspan="">PASSED</td>        
    </tr>
</tbody></table>
<table>
        <tbody><tr>
          <td colspan="7" style="font-size:9px;"> <b>Result Publication Date : 25-11-2017 </b></td>
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
                NILKHET, DHAKA-1000 <br>        
                BANGLADESH.     <br>
                </span>             
            </td>
         </tr>
         
       </tbody></table>
    
    </td>
    <td width="20%" align="center">
      <table>
         
         <tbody><tr>
            <td style="border-bottom:1px solid #000;">Md. Ariful Islam  </td>
         </tr>
         <tr>
            <td style="font-size:11px;">Prepared By</td>
         </tr>
         <tr>
           <td style="font-size:11px;">Date: 19/09/2018</td>
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
 <?php } }else{
  echo "Error";
 }?>
</body>
</html>