<?php 
/**

  The Initial Developer of the Original Code is
  Matthieu  - http://www.programmation-facile.com/
  Portions created by the Initial Developer are Copyright (C) 2013
  the Initial Developer. All Rights Reserved.

  Contributor(s) :

 */


// Structure if / elseif / else 
$cNom = "Raouf"; 
$nAge = NULL;

if ($cNom == NULL)
{ 
  echo "Bonjour inconnu !<br /><br />"; 
}
elseif ($nAge == NULL)
{ 
  echo "Bonjour $cNom ! Je ne connais pas votre age.<br /><br />"; 
}
else
{ 
  echo "Bonjour $cNom ! Vous avez ".$nAge." ans.<br />"; 
} 

// Structure switch
$sLangue = "it";  

switch ($sLangue)
{// switch 
	case "en" :  
			// instructions
			echo "Hello you";
			break;

	case "es" :  
			// instructions 2
			echo "Buenos dias";
			break;

	case "fr" :  
			// instructions 3
			echo "Bonjour à toi";
			break;

	default:
			// instructions 4
			echo "langue inconnue !<br /><br />";
}


// Structure while
$sNom = "Matthieu"; 
$nLongueur = strlen($sNom); 

$iPos = 0; 
// Tant que l'indice est inférieur à la longueur de la chaîne 
while ($iPos < $nLongueur)
{ 
  // Afficher le caractère. 
  echo $sNom[$iPos]."."; 
  $iPos++; // passe au caractère suivant
} 

echo"<br /><br />";

// Structure do...while
$sNom = "Matthieu"; 
$nLongueur = strlen($sNom); 

$iPos = 0; 
// Tant que l'indice est inférieur à la longueur de la chaîne 
do
{ 
  // Afficher le caractère. 
  echo $sNom[$iPos]."."; 
  $iPos++; // passe au caractère suivant
} while ($iPos < $nLongueur);
echo"<br /><br />";

// Structure for

// Parcours d'un tableau 
$aCouleurs = array("banane","orange","pomme"); 
$nNombre = 3; 

// Boucle utilisant un indice $i qui démarre à 0 ($i = 0)  
// qui est incrémenté d’une unité à chaque itération ($i++) ; 
// la boucle se poursuit tant que l’indice est inférieur au  
// nombre d’éléments présents dans le tableau ($i < $nombre). 
for ($i = 0; $i < $nNombre; $i++)
{ 
	echo $aCouleurs[$i]."<br />"; 
}; 

echo"<br /><br />";
// continue et break
$aCouleurs = array("banane","clementine","orange","pomme"); 

for ($i = 0; $i <= 3; $i++)
{ 
	// Passer à l’itération suivante pour le fruit "clementine"
	if ($aCouleurs[$i] == "clementine")
	{ 
		continue; // n'affiche pas clementine
	} 

	echo $aCouleurs[$i]."<br/>"; 
} 

echo"<br /><br />";
for ($i = 0; $i <= 3; $i++)
{ 
	// Stop la boucle au  fruit "clementine"
	if ($aCouleurs[$i] == "clementine")
	{ 
		break; 
	} 
	echo $aCouleurs[$i]."<br/>"; 
} 




?>
