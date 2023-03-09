<?php
 if (isset($_POST['sub'])){
 	if (isset($_POST['Pseudo'])){
 		if (!empty ($_POST['password']) and !empty ($_POST['Pseudo']) ){
        $Pseudo=htmlspecialchars($_POST['Pseudo']);
        $password=htmlspecialchars($_POST['password']);
             
             if ($password == "formation" and $Pseudo== "formation") {             
        	                    header('location:InterfacePub.php');
             }

             if ($password == "formationPri" and $Pseudo== "formationPri") {
                header('location:InterfacePri.php');
             
             }else{
        	     $error = "Le nom de l'établissement et/ou le code d'accès sont/est érroné";
             }
 		
 		}else{
 			$error = "Veulliez entrer votre Pseudo et votre Mot de passe";
 		
          }
 	}
 }

?>
<!DOCTYPE html>
         <head>
         	<title>Safe page</title>
         	<meta charset="UTF-8">
          <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" type="text/css" href="https//fonts.googleapis.com/css?family=Nunito:400,300">
         </head>
         
         
         <body>
          <!----- ici notre menu---->
          <div id="menu">
               <ul>
                    <li><a href="information.html">Informations</a></li>
                    <li><a href="https://www.aps.dz/sante-science-technologie/tag/Minist%C3%A8re%20de%20la%20Sant%C3%A9">Site du ministere de la santé</a></li>
                    <li style="float: right"><a href="correspondances.html" class="active">Correspondre</a></li>


               </ul>
          </div>
          <h1>Bienvenue sur votre tableau de bord, <?php echo $_SESSION['Pseudo']; ?> !</h1>
          <p>Ici, vous pouvez consulter vos informations personnelles, gérer vos paramètres, etc.</p>

          <!----- l'entete ---->
          <div id="slider" align="center">
              
              <div class="slider.titre"> 
               <h1> Ministère de la Santé</h1>
               <h2> Direction de la Formation</h2> 
              </div>         
          
          <img id="image1" src="formation.jpg" style="width:100%;height:312px;">
          
          </div>
         	
          <!------formulaire d'identification---->
          <div id="acces" align="center">
         		
         		<form method="post", action=" ">

                    <fieldset>
                         <legend><span class="section">1</span> Identification </legend>
         			
                    

                    <label name="Pseudo"> Pseudo </label>
                    <input type="text", name="Pseudo" , placeholder="MS/INFP/ISFPM"><br></br>
                    <label name="Mot de passe"> Mot de passe</label>
                    <input type="password" placeholder="Entrez votre password" name="password"><br></br>
         			<input type="submit" name="sub" value="Accéder">
                    </fieldset>
         		</form>
         		<!----- Affichage du message d'erreur---->
               <p style="color:red;"> <?php if (isset($error)){ echo $error;}?></p>
         	</div>
          
          <footer>
                    <p>Ministère de la Santé © 2023 Algerie. Tous droits réservés.</p>
          </footer>
   
          
         </body>

</html>