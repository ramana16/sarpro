<?php

//ini_set("SMTP","info@cips.co.in"); //mail server 
//ini_set("smtp_port","25");
//echo $sql;


 $to        = 'info@cips.co.in';
 //$to        = 'info@cips.co.in ';
  $subject  = 'Online Queries';
  //$name       = $_POST[name];
  $message = "
<table width='739' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
    <td>&nbsp;</td>
    <td align='center' valign='top'>&nbsp;</td>
  </tr>
  <tr>
    <td width='29'>&nbsp;</td>
    <td width='739' align='center' valign='top'>
      <input type='hidden' name='goto' value='1'>
      <table width='739' border='0' align='center' cellpadding='4' cellspacing='0'>
        <tr>
          <td colspan='3' height='10' align='left' valign='top'></td>
        </tr>
        <tr>
          <td width='74' align='left' valign='middle' class='line'>Name</td>
          <td width='8' align='left' valign='middle' class='line'>:</td>
          <td width='739' align='left' valign='middle'>".$_REQUEST['Name']."
                <span class='heading1'></span></td>
        </tr>
        <tr>
          <td align='left' valign='middle' class='line'>Designation</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['Designation']."</td>
        </tr>
		<tr>
          <td align='left' valign='middle' class='line'>Mobile</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['Mobile']."
                <span class='heading1'></span></td>
        </tr>   
        <tr>
          <td align='left' valign='middle' class='line'>Email</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'><label></label>
                <label>".$_REQUEST['Email']."
                <span class='heading1'></span></label></td>
        </tr>
         <tr>
          <td align='left' valign='middle' class='line'>CompanyName</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['CompanyName']."
                <span class='heading1'></span></td>
        </tr>
		 <tr>
          <td align='left' valign='middle' class='line'>Address</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['Address']."
                <span class='heading1'></span></td>
        </tr>
		 <tr>
          <td align='left' valign='middle' class='line'>Country</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['Country']."
                <span class='heading1'></span></td>
        </tr>
		 <tr>
          <td align='left' valign='middle' class='line'>State</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['State']."
                <span class='heading1'></span></td>
        </tr>
		 <tr>
          <td align='left' valign='middle' class='line'>City</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['City']."
                <span class='heading1'></span></td>
        </tr>
		 <tr>
          <td align='left' valign='middle' class='line'>PRODUCTSINTERESTED</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['PRODUCTSINTERESTED']."
                <span class='heading1'></span></td>
        </tr>
		 <tr>
          <td align='left' valign='middle' class='line'>contactyou</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['contactyou']."
                <span class='heading1'></span></td>
        </tr>
		
        <tr>
          <td colspan='3' height='6' align='left' valign='top'></td>
        </tr>
        <tr>
          <td colspan='2' align='left' valign='top'>&nbsp;</td>
          <td align='left' valign='top'><label></label>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width='739' align='center' valign='top'>&nbsp;</td>
  </tr>
</table>
";
 
  
 
  
  $headers  = 'From:info@cips.co.in' . "\r\n" .
          'Reply-To:info@cips.co.in' . "\r\n" .
		  'Content-Type: text/html' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
     //echo $to.'<br>'.$subject.'<br>'.$message.'<br>'.$headers;
  //ini_set ("smtp_port","25");
  $success =" ";
 // ini_set ("sendmail_from","info@cips.co.in ");
  mail($to, $subject, $message, $headers);
  $success = "Message sent successfully";

?>

<!--
<tr>
          <td align='left' valign='middle' class='line'>City</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'><label>".$_REQUEST['City']."
            
            <span class='heading1'></span></label></td>
        </tr>
        -->
<script>self.location='thankyou.htm';</script>