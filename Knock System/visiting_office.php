<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/public_functions.php"); ?>
<?php $statusLUT = array("Available", "Busy", "In Call", "Out of Office"); ?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link type="text/css" rel="stylesheet" href="gwt-windows-1.7.0/MyApplication/war/MyApplication.css">
    <title>Web Application Starter Project</title>
    <script type="text/javascript" language="javascript" src="gwt-windows-1.7.0/MyApplication/war/myapplication/myapplication.nocache.js"></script>
  </head>
  <body>
    <iframe src="javascript:''" id="__gwt_historyFrame" tabIndex='-1' style="position:absolute;width:0;height:0;border:0"></iframe>
    <div style="background-color: #A4ACC3; height: 10%; width: 100%;">
        <span style="font-size: 30px; padding-top: 10px; ">&nbsp&nbsp&nbsp Visiting Office Page Prototype</span>
    </div>
    <div style="float: left; background-color: #DCDBDC; height: 100%; max-height: 600px; width: 25%; min-width: 50px;"><br /><br />
        <table align="center">
            <tr>
              <td colspan="2" style="font-weight:bold;">Please enter your info:</td>        
            </tr>
            <tr>
              <td>Name:</td><td id="nameFieldContainer"></td></tr>
              <tr><td>Position:</td><td id="positionFieldContainer"></td></tr>
              <tr><td>Department:</td><td id="departmentFieldContainer"></td>
            </tr>
          </table>
    </div>
    <div style="float: left; background: url(bgimage.jpg) no-repeat; height: 100%; max-height: 600px; width: 75%;">
        <br /><br /><br />
    <table align="center" style="background: url(main.jpg) repeat;" width=60% cellpadding=0 cellspacing=0>
      <tr>
        <td colspan="5" style="background: url(bg.bmp) repeat-x; height: 50px;
        font-size: 20px; font-weight:bold; text-align:center;">You've reached the office of:</td>
      </tr>
      <tr>
        <td rowspan=7 colspan=2 style="font-weight:bold; text-align:center;">Dude Guy<br /><br /><img src="img.bmp" style="width: 128px; height: 127px; padding-left:2em; padding-right:2em;" /></td>
        
        
        <td style="text-align: right;">Name:</td>                <td style="background-color: white; padding:3px; border: solid #59546F;"><span id="recipFieldContainer">Dude Guy</span></td>
        <td>&nbsp</td></tr>
        <tr><td style="text-align: right;">Position:</td>            <td style="background-color: white; padding:3px; border: solid #59546F;">Accountant</td>
        <td>&nbsp</td></tr>
        <tr><td style="text-align: right;">Department:</td>      <td style="background-color: white; padding:3px; border: solid #59546F;">Accounting</td>
        <td>&nbsp</td></tr>
        <tr><td style="text-align: right;">E-mail:</td>           <td style="background-color: white; padding:3px; border: solid #59546F;">dude.guy@acc.voffice.ca</td>
        <td>&nbsp</td></tr>
        <tr><td style="text-align: right;">Telephone (Home):</td><td style="background-color: white; padding:3px; border: solid #59546F;">514-123-4567</td>
        <td>&nbsp</td></tr>
        <tr><td style="text-align: right;">Telephone (Cell):</td><td style="background-color: white; padding:3px; border: solid #59546F;">514-321-7654</td>
        <td>&nbsp</td></tr>
        <tr><td style="text-align: right;">Fax:</td>             <td style="background-color: white; padding:3px; border: solid #59546F;">514-242-4922</td>
        <td>&nbsp</td></tr>
        
        <tr><td colspan=2><center>
        Status:&nbsp&nbsp
        <span style=" font-weight: bold; background-color: white; padding:3px; border: solid #A8FDC4; width: 100px;"><?php
        $rep_set = getStatus("dude_guy");
        $stat = "";
        if($rep = mysql_fetch_array($rep_set)){
          $stat = $statusLUT[$rep['status']];
        }
        echo $stat;//getStatus("dude_guy"); ?></span>
        </center><br />
        </td>
        <td style="text-align: right;">Website:</td>             <td style="background-color: white; padding:3px; border: solid #59546F;">http://dudeguy5.voffice.ca</td>
      </tr>
      <tr>
        <td>&nbsp</td>
        <td id="sendButtonContainer" ></td>
        <td>Yell</td>
        <td>Email</td>
        <td>Leave Note</td>
      </tr>
      <tr><td>&nbsp</td></tr>
    </table>
    </div>
  </body>
</html>

<?php
   //5. Close connection
   if (isset($connection)) {
    mysql_close($connection);
   }
?>
