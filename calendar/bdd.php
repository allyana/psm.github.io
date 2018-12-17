<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=counselling;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
