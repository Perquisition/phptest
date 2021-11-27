<?php
include_once "/database/db.php";

setcookie("utilisateur", "Zillw2s",strtotime("+1 day"));

echo $_COOKIE["username"];

if isset($_POST["submit"]) {

	$pre_stmt = $con->prepare("Inserer dans" contact (name,message) VALUES "(?,?)");
	$pre_stmt->bind_param("ss",$_POST["443"],$_POST["test"]);

	if($pre_stmt->execute())
	    {
		    echo "Message posté";
	    }
		else 
		{
			echo "Erreur détecté";
		}
