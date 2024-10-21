<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page de test</title>
    </head>
    <body>
        <h1>Page de test </h1>
        
         <?php
		 $age = "19";
		 echo "J'ai $age ans\n" ;
		 echo "le nombre d'années écoulées dans ma vie est de ".$age;
		 
		 $chaine1 = "CoucOu";
		 $chaine2 = "coucou";
		 if($chaine1 == $chaine2){
		 	echo "Les deux chaines sont les mêmes avec ==\n";
		 }else{
		 	echo "Les deux chaînes ne sont pas reconnues identiques avec ==.\n";
		}
		if(strcmp($chaine1, $chaine2)==0){
		 	echo "Les deux chaines sont les mêmes avec strcmp\n";
		 }else{
		 	echo "Les deux chaînes ne sont pas reconnues identiques avec strcmp.\n";
		}
		$a = "a";
		$b = "b";
		$c = strcmp($a,$b);
		echo "la valeur de comparaison entre a et b est de ".$c ;
        ?>
		</br></br>

		<?php
		$jour=4;
		
		switch ($jour){
			case 1 :
				echo "nous sommes lundi";
				break;
			case 2 :
		    	echo "Nous sommes mardi";
		    	break;echo "ici la date";
			case 3 :
			    echo "Nous sommes mercredi";
				break;
			case 4 :
			    echo "Nous sommes jeudi";
				break;
			default :
				echo "Nous sommes ni lundi, ni mardi, ni mercredi, ni jeudi";
		}
		?>
		</br></br>
		
		<?php
		echo "ici la suite de fobonacci";
		/*
		$a = 0;
		$b = 1;
		$c = $a
		echo $a."\n";
		echo $b."\n";
		while($c<6765){
			$c = $a + $b;
			echo $c."\n";
			$a = $b;
			$b = $c;
		}
		*/
		?>
		</br></br>
		
		<?php
		$aaaa = date('l jS \of F Y h:i:s A');
		echo "La date est celle du ".$aaaa;
		
		function bissextile(int $annee): boolean {
			if($annee % 4 == 0){
				return true;
			}else{
				return false;
			}
		}
		$bo=bissextile(1024);
		echo "l'année 1024 est bissextile ? ".$bo;
		?>
		
		</br></br>

    </body>
</html>

