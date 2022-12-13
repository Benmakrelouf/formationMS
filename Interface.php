<?php
 if (isset($_POST['sub'])){
 	if (isset($_POST['password'])){
 		if (!empty ($_POST['password']) and !empty ($_POST['ouverture'])){       
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
			margin-right: 35%;
			margin-left: 35%;
			margin-top: 10%;
			padding-top: 10%;
			padding-bottom: 10%;
		}
	</style>
</head>
<body>
	<form method="post", action=" "> 
		<fieldset>
                         <legend><span class="section">2</span> Informations </legend>
		<table align="center">
			<tr>
				<td align="right">Wilaya</td>
				<td ><input type="text", name="WILAYA", placeholder="Votre wilaya" > </td>
			</tr>
			<tr>
				<td align="right">Date d'ouverture</td>
				<td><input type="Date", name="ouverture" , placeholder="ouverture"> </td>
			</tr>
			<tr>
				<td align="right">Capacité</td>
				<td><input type="number", name="Capacité" , value="0", min="0", placeholder="La capacité..."> </td>
			</tr>
			<tr>
				<td align="right">Email</td>
				<td><input type="Email", name="Email" , multiple, placeholder="Adresse electronique"> </td>
			</tr>
			<tr>
				<td align="right">Mot de passe</td>
				<td><input type="password", name="password" , placeholder="Mot de passe"> </td>
			</tr>
			<tr>
             <td align="phone">Telephone:</td>
             <td><input type="tel" id="phone" name="phone" placeholder="Telephone"
                  pattern="[0-9]{10}"
                  required></td>
         </tr>       
         <tr>
             <td align="phone">Fax:</td>
             <td><input type="tel" id="Fax" name="Fax" placeholder="Fax"
                  pattern="[0-9]{10}"
                  required></td>
         </tr>      
          

      </fieldset>     
      
		</table>

      <fieldset>
                         <legend><span class="subsection">2.1</span> Informations </legend>
         <tr>
             <td align="phone">Adresse postale</td>
             <textarea name="Adresse" maxlength="140" rows="5"></textarea>
         </tr>
         
      </fieldset> 

       <fieldset>
         <tr>
				<td></td>
				<td><input type="submit", name="sub", value="NEXT"> </td>
			</tr>
       </fieldset>


	</form>
	<p style="color:red;"> <?php if (isset($error)){ echo $error;}?></p>
</body>
</html>