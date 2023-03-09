<?php
 if (isset($_POST['sub'])){
 	if (isset($_POST['Année'])){
 		if (!empty ($_POST['Année']) and !empty ($_POST['num'])){       
        	                               header('location:Merci.html');
 		}else{
 			$error = "Veulliez saisir tous les champs";
 		}
    }
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css"> 
   <link rel="stylesheet" type="text/css" href="https//fonts.googleapis.com/css?family=Nunito:400,300">
	<title>Fiche technique</title>
	<style>
		body{
			box-shadow: 1px 6px 17px;
			margin-right: 10%;
			margin-left: 10%;
			margin-top: 10%;
			padding-top: 10%;
			padding-bottom: 10%;
		}
        .sub{
            padding: 15px 25px;
            border-radius: 5px;
            border: none;

        }
        
	</style>
</head>
<body>
	      <!----- ici notre menu---->
	      <div id="menu">
               <ul>
                    <li><a href="information.html">Informations</a></li>
                    <li><a href="index1.html" >Tableau de bord</a></li> 
                    <li><a href="https://www.aps.dz/sante-science-technologie/tag/Minist%C3%A8re%20de%20la%20Sant%C3%A9">Site du ministere de la santé</a></li>
                    <li style="float: right"><a href="Index.php" class="active">Acceuil</a></li>


               </ul>
          </div>

	      <!----- ici tableau à transmettre---->
	<form method="post", action=" "> 
		<fieldset>
                         <legend><span class="section">3</span> Candidats en Formation </legend>
		<table align="center">
			
         <!----Liste déroulante Année pédagogique------>
           
            <tr>
            
            <label align="center" name="Année"> Année pédaogique</label>
                    <select id="Année" name="Année">
                             
                         <optgroup label="Année">
                              
                              <option value="2022/2023">2022/2023</option>
                              <option value="2023/2024">2023/2024</option>
                              <option value="2024/2025">2024/2025</option>
                              <option value="2025/2026">2025/2026</option>
                              
                         </optgroup>
                         
                    </select><br></br>

            </tr> 
                 
            <!---------->

			<tr>
                <td align="right">Total :</td>
                <td><input type="number", name="num" , placeholder="Total" min="1" max="1000" step="1" value="0"> </td>
            </tr>
            <tr>
                <td align="right">Première Année :</td>
                <td><input type="number", name="numF" , placeholder="Total.1" min="1" max="1000" step="1" value="0"> </td>
            </tr>
			<tr>
                <td align="right">Deuxiéme Année :</td>
                <td><input type="number", name="numH" , placeholder="Total.2" min="1" max="1000" step="1" value="0"> </td>
            </tr>
      </fieldset>     
      
		</table>

      <fieldset>
                         <legend><span class="subsection">3.1</span> Première Année </legend>
            <tr>
                <td align="right">Aides soignants :</td>
                <td><input type="number", name="numASSP" , placeholder="ASSP" min="1" max="1000" step="1" value="0" required> </td>
            </tr>
            <tr>
                <td align="right">Auxiliaires en puériculture :</td>
                <td><input type="number", name="numAPSP" , placeholder="APSP" min="1" max="1000" step="1" value="0" required> </td>
            </tr>
            
            <tr>
                <td align="right">Assitants en Fauteuil Dentaire :</td>
                <td><input type="number", name="numASSP" , placeholder="ASSP" min="1" max="1000" step="1" value="0" required> </td>
            </tr>
         
      </fieldset> 
      <fieldset>
                         <legend><span class="subsection">3.2</span> Deuxième Année </legend>
            <tr>
                <td align="right">Aides soignants :</td>
                <td><input type="number", name="numASSP2" , placeholder="ASSP2" min="1" max="1000" step="1" value="0" required> </td>
            </tr>
            <tr>
                <td align="right">Auxiliaires en puériculture :</td>
                <td><input type="number", name="numAPSP2" , placeholder="APSP2" min="1" max="1000" step="1" value="0" required> </td>
            </tr>
            
            <tr>
                <td align="right">Assitants en Fauteuil Dentaire :</td>
                <td><input type="number", name="numAFSP2" , placeholder="AFSP2" min="1" max="1000" step="1" value="0" required> </td>
            </tr>
         
      </fieldset> 

       

       

            <!-----Le bouton pour envoyer à la base de données----->

            <fieldset>
         <tr>
                <td></td>
                <div>
                <td><input type="submit", name="sub", value="Valider"> </td>
                </div>
                <div>
                       <button>Retour à la page précédente</button>
                </div> 
            </tr>
            </fieldset>






    <footer>
                    <p>Ministère de la Santé © 2023 Algerie. Tous droits réservés.</p>
    </footer>
	</form>
	
	<!----- Le message d'erreur ---->
	<p style="color:red;"> <?php if (isset($error)){ echo $error;}?></p>



	
   
</body>
</html>