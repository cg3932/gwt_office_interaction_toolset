<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/public_functions.php"); ?>
<?php $statusLUT = array("Available", "Busy", "In Call", "Out of Office"); ?>
<?php
        $rep_set = getStatus("dude_guy");
        $stat = "";
        echo "TRY";
        echo $rep_set;
        if($rep = mysql_fetch_array($rep_set)){
          $stat = $statusLUT[$rep['status']];
          echo "WORKING";
          echo $rep['status'];
        }
        echo "4";
        echo $stat;//getStatus("dude_guy");
?>

<?php
   //5. Close connection
   if (isset($connection)) {
    mysql_close($connection);
   }
?>