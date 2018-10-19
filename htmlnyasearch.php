<?php

$text= "Marilah seluruh Rakyat Indonesia arahkan pandanganmu ke depan, Raihlah mimpimu bagi nusa bangsa satukan tekad untuk masa depan";
	



$index=$_POST['word'];


$Scanner=explode(" ", $text);	
$cont = count($Scanner);
$ganti = str_replace(search, replace, subject)

for ($i=0; $i<$cont -1  ; $i++);
	{

		if(search == $Scanner[$i])
		{
			echo "<font color=red> $Scanner[$i]</font>";	
		}
		else{
			echo " $Scanner[$i]";
			}

		

	}


?>
