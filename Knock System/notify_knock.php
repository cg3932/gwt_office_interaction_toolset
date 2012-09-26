<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/public_functions.php"); ?>

<?php
if(isset($_GET['name'])){
   $response = "N/A";
   $name = $_GET['name'];
   $name = preg_replace("/<.*?>/", "", $name);
   $name = preg_replace("/_/", " ", $name);
   $rep_set = get_top_notification($name);
   if($rep = mysql_fetch_array($rep_set)){
      $response = "Name: ".$rep['sender_nam']."<br/>Position: ".$rep['sender_pos'];
      $response .="<br/>Department: ".$rep['sender_dep']."<br/>Interaction: ".$rep['interaction']."<br/>Message: ".$rep['message'];
      delete_top_note($rep['id']);
   }
   echo $response;
}
?>

<?php
   //5. Close connection
   if (isset($connection)) {
    mysql_close($connection);
   }
?>