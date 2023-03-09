<?php
 if (isset($_POST['sub'])){
 	if (isset($_POST['Etablissement'])){
 		if (!empty ($_POST['Etablissement']) and !empty ($_POST['Capacité'])){       
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
          <h1>Bienvenue sur votre tableau de bord, <?php echo $_SESSION['Pseudo']; ?> !</h1>
          <p>Ici, vous pouvez consulter vos informations personnelles, gérer vos paramètres, etc.</p>

	      <!----- ici tableau à transmettre---->
	<form method="post", action=" "> 
		<fieldset>
                         <legend><span class="section">2</span> Informations </legend>
		<table align="center">
			
            <!---------->
            <tr>
            <label align="center" name="Etablissement"> Etablissement </label>
                    <select id="Etablissement" name="Etablissement">
             
              <!----Liste déroulante INFSPM------>           
                         <optgroup label="INFSPM">
                              <option value="INFSPM d'Alger">INFSPM d'Alger</option>
                              <option value="INFSPM d'Ain Defla">INFSPM d'Ain Defla</option>
                              <option value="INFSPM de Bouira">INFSPM de Bouira</option> 
                              <option value="INFSPM de Batna">INFSPM de Batna</option> 
                              <option value="INFSPM de Béjaia">INFSPM de Béjaia (Aokas)</option> 
                              <option value="INFSPM de Biskra">INFSPM de Biskra</option>
                              <option value="INFSPM de Bechar">INFSPM de Bechar</option>
                              <option value="INFSPM de Blida">INFSPM de Blida</option>
                              <option value="INFSPM de Bouira">INFSPM de Bouira</option> 
                              <option value="INFSPM de Ouargla">INFSPM de Ouargla</option> 
                              <option value="INFSPM de Blida">INFSPM de Blida</option>
                              <option value="INFSPM de Médéa">INFSPM de Médéa</option>             
                              <option value="INFSPM de M'Sila">INFSPM de M'Sila</option> 
                              <option value="INFSPM de Constantine">INFSPM de Constantine</option> 
                              <option value="INFSPM de Sétif">INFSPM de Sétif</option>
                              <option value="INFSPM de Skikda">INFSPM de Skikda</option>
                              <option value="INFSPM de Jijel">INFSPM de Jijel</option>
                              <option value="INFSPM de Tébessa">INFSPM de Tébessa</option> 
                              <option value="INFSPM d'Oran 1">INFSPM d'Oran (Hai Salem)</option> 
                              <option value="INFSPM d'Oran 2">INFSPM d'Oran (Gueabi Djedia)</option>
                              <option value="INFSPM de Mostaganem">INFSPM de Mostaganem</option>
                              <option value="INFSPM de Bouira">INFSPM de Bouira</option>  
                              <option value="INFSPM de Sidi Bel Abbes">INFSPM de Sidi BelAbess</option>
                              <option value="INFSPM de Mascara">INFSPM de Mascara</option> 
                              <option value="INFSPM de Tiaret">INFSPM de Tiaret</option>                              
                              <option value="INFSPM de Saida">INFSPM de Saida</option>   
                              
                         </optgroup>
              <!----Liste déroulante INFSPM------>           
                         <optgroup label="INFSSF">
                              <option value="INFSPM de Tlemcen">INFSPM de Tlemcen</option>
                              <option value="INFSPM de Tizi Ouzou">INFSPM de Tizi Ouzou</option> 
                              <option value="INFSPM d'Annaba">INFSPM d'Annaba</option>   
                              
                         </optgroup>
               <!----Liste déroulante IFPM------>          
                         <optgroup label="IFPM">
                              
                              <option value="IFPM de Guelma">IFPM de Guelma</option>
                              <option value="IFPM de Ain En Beida">IFPM de Ain El Beida</option>
                              <option value="IFPM de El Attaf">IFPM de El Attaf</option>
                              <option value="IFPM de Ain El Hammam">IFPM de Ain El Hammam</option>
                              <option value="IFPM de Laghouat">IFPM de Laghouat</option>
                              <option value="IFPM de Djelfa">IFPM de Djelfa </option>
                              <option value="IFPM de Chlef">IFPM de Chlef</option>
                              <option value="IFPM de Tamenraset">IFPM de Tamenraset</option>
                              
                              <option value="IFPM de Tipaza">IFPM de Tipaza</option>
                              <option value="IFPM de Boumerdes">IFPM de Boumerdes</option>
                              <option value="IFPM de Chlef 2">IFPM de Chlef 2</option>
                              <option value="IFPM de Djelfa 2">IFPM de Djelfa 2</option>
                              <option value="IFPM de Mila">IFPM de Mila</option>
                              <option value="IFPM de Naama">IFPM de Naama</option>
                              <option value="IFPM de Relizane">IFPM de Relizane</option>
                              <option value="IFPM de El Taref">IFPM de El Taref</option>
                              <option value="IFPM de Tissemsilt">IFPM de Tissmesilt</option>
                              <option value="IFPM de El Bayadh">IFPM de El Bayadh</option>
                              <option value="IFPM de Khenchela">IFPM de Khenchela</option>
                              <option value="IFPM de Bordj Bou Arreridj">IFPM de Bordj Bou Arreridj</option>
                         </optgroup>
                         
                    </select><br></br>
            </tr>        
            <!---------->
            <tr>
            <label for="Wilaya"> Wilaya :</label>
                 <select id="Wilaya" name="Wilaya">
                         <option value="Adrar">Adrar</option>
                         <option value="Bechar">Bechar</option>
                         <option value="Tipaza">Tipaza</option>
                         <option value="Alger">Alger</option>
                         <option value="Ain Defla">Ain Defla</option>
                         <option value="Médéa">Médéa</option>
                         <option value="Chlef">Chlef</option>
                         <option value="Guelma">Guelma</option>
                         <option value="Skikda">Skikda</option>
                         <option value="Annaba">Annaba</option>
                         <option value="Constantine">Constantine</option>
                         <option value="El Taref">El Taref</option>
                         <option value="Souk Ahras">Souk Ahras</option>
                         <option value="Mila">Mila</option>
                         <option value="Batna">Batna</option>
                         <option value="Tebessa">Tebessa</option>
                         <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                         <option value="Sétif">Sétif</option>
                         <option value="Khenchela">Khenchela</option>
                         <option value="Tissemsilt">Tissemsilt</option>
                         <option value="Mostaganem">Mostaganem</option>
                         <option value="Relizane">Relizane</option>
                         <option value="Tizi Ouzou"> Tizi Ouzou</option>
                         <option value="Bejaia">Bejaia</option>
                         <option value="Boumerdes">Boumerdes</option>
                         <option value="Bouira">Bouira</option>
                         <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                         <option value="Laghouat">Laghouat</option>
                         <option value="Touggourt">Touggourt</option>
                         <option value="Ouargla">Ouargla</option>
                         <option value="El Oued">El Oued</option>
                         <option value="El Meghair">El Meghair</option>
                         <option value="Ghardaia">Ghardaia</option>
                         <option value="Djelfa">Djelfa</option>
                         <option value="Biskra">Biskra</option>
                         <option value="Tiaret">Tiaret</option>
                         <option value="El Bayadh">El Bayadh</option>
                         <option value="Naama">Naama</option>
                         <option value="M'Sila">M'Sila</option>
                         <option value="Ouled Djellal">Ouled Djellal</option>
                         <option value="Oran">Oran</option>
                         <option value="Tlemcen">Tlemcen</option>
                         <option value="Sidi Bel Abbes">Sidi Bel Abbes</option>
                         <option value="Mascara">Mascara</option>
                         <option value="Illizi">Illizi</option>
                         <option value="Tindouf">Tindouf</option>
                         <option value="Boussaada">Boussaada</option>


                 </select>
			</tr>
			<tr>
				<td align="right">Date d'ouverture:</td>
				<td><input type="Date", name="ouverture" , placeholder="ouverture"> </td>
			</tr>
			<tr>
				<td align="right">Capacité:</td>
				<td><input type="number", name="Capacité" , value="0", min="0", placeholder="La capacité..."> </td>
			</tr>
			<tr>
				<td align="right">Directeur:</td>
				<td><input type="text", name="Directeur" , placeholder="Directeur"> </td>
			</tr>
			<tr>
				<td align="right">Le DES:</td>
				<td><input type="text", name="DP" , placeholder="Directeur Pédagogique"> </td>
			</tr>
			<tr>
				<td align="right">Email:</td>
				<td><input type="Email", name="Email" , multiple, placeholder="Adresse electronique"> </td>
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
				<td><input type="submit", name="sub", value="Valider"> </td>
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