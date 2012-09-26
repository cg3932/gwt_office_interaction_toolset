<?php require_once("includes/connection.php"); ?>

<?php
$to = "";
$from = "";
$pos = "";
$dep = "";
$inter = "";
$msg = "";
$time = time();

if(isset($_REQUEST['from'])){
   $from = $_REQUEST['from'];
}
if(isset($_REQUEST['pos'])){
   $pos = $_REQUEST['pos'];
}
if(isset($_REQUEST['dep'])){
   $dep = $_REQUEST['dep'];
}
if(isset($_REQUEST['inter'])){
   $inter = $_REQUEST['inter'];
}
if(isset($_REQUEST['msg'])){
   $msg = $_REQUEST['msg'];
}
if(isset($_REQUEST['to'])){
   $to = $_REQUEST['to'];
   $to = preg_replace("/<.*?>/", "", $to);
   $query = "INSERT INTO notification_stack (
         recipient, sender_nam, sender_pos, sender_dep, interaction, message, time_sent
     ) VALUES (
         '{$to}', '{$from}', '{$pos}', '{$dep}', '{$inter}', '{$msg}', {$time}
     )";
   $result = mysql_query($query);
}
?>

<?php
   //5. Close connection
   if (isset($connection)) {
    mysql_close($connection);
   }
?>