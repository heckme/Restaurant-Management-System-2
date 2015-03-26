<?php 
$pt = $_POST["pt"];
$ft = $_POST["ft"];
$tax = $_POST["tax"];
$bonus = $_POST["bonus"];


 

if(!empty($ft))
{
 mysql_query("UPDATE salary_generaldetails SET salary_perhour_ft=".$ft);
}


if(!empty($pt))
{
 mysql_query("UPDATE salary_generaldetails SET salary_perhour_pt =".$pt);
}



if(!empty($tax))
{
 mysql_query("UPDATE salary_generaldetails SET tax =".$tax);
}



if(!empty($bonus))
{
 mysql_query("UPDATE salary_generaldetails SET  bonus =".$bonus);
}
a:



?>