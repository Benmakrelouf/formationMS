<?php
 if (isset($_POST['sub'])){
 	if (isset($_POST['password'])){
 		if (!empty ($_POST['password']) and !empty ($_POST['Pseudo']) and !empty ($_POST['Institut'])){
        $Pseudo=htmlspecialchars($_POST['Pseudo']);
        $password=htmlspecialchars($_POST['password']);
             if ($password == "raouf" and $Pseudo== "raouf") {
        	      header('location:Interface.php');
             }

             if ($password == "raouf1" and $Pseudo== "raouf") {
                header('location:Interface.php');
             
             }else{
        	     $error = "Le nom de l'établissement et/ou le code d'accès sont/est érroné";
             }
 		
 		}else{
 			$error = "Veulliez entrer le nom de votre établissement et votre mot de passe";
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
         	<div align="center">
         		<h1> Ministère de la Santé</h1>
         		<h2> Direction de la Formation</h2>
               <img src="formation.jpg" style="width:800px;height:300px;">
         		<form method="post", action=" ">

                    <fieldset>
                         <legend><span class="section">1</span> Identification </legend>
         			
                    <label name="Institut"> Institut</label>
                    <select name="Institut">
                         <optgroup label="INFSPM">
                              <option value="INFSPM de Blida">INFSPM d'Alger</option>        
                              <option value="INFSPM de Blida">INFSPM de Blida</option>  
                              
                         </optgroup>
                         
                         <optgroup label="IFPM">
                              <option value="IFPM de Ain Delfa">IFPM de Ain Delfa</option>
                              
                         </optgroup>
                         
                    </select><br></br>

                    <label name="Pseudo"> Pseudo </label>
                    <input type="text", name="Pseudo" , placeholder="INFP/ISFPM"><br></br>
                    <label name="Mot de passe"> Mot de passe</label>
                    <input type="password" placeholder="Entrez votre password" name="password"><br></br>
         			<input type="submit" name="sub" value="Accéder">
                    </fieldset>
         		</form>
         		<p style="color:red;"> <?php if (isset($error)){ echo $error;}?></p>
         	</div>
         </body>

</html>