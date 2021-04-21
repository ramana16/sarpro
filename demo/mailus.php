<?php

//ini_set("SMTP","saravanan@heartsmedia.com"); //mail server 
//ini_set("smtp_port","25");
//echo $sql;


 $to        = 'saravanan@heartsmedia.com';
 //$to        = 'saravanan@heartsmedia.com, ';
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
          <td align='left' valign='middle' class='line'>Enquiry</td>
          <td align='left' valign='middle' class='line'>:</td>
          <td align='left' valign='middle'>".$_REQUEST['Enquiry']."
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
 
  
 
  
  $headers  = 'From:saravanan@heartsmedia.com' . "\r\n" .
          'Reply-To:saravanan@heartsmedia.com' . "\r\n" .
		  'Content-Type: text/html' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
     //echo $to.'<br>'.$subject.'<br>'.$message.'<br>'.$headers;
  //ini_set ("smtp_port","25");
  $success =" ";
 // ini_set ("sendmail_from","saravanan@heartsmedia.com ");
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