<?php
 if (isset($_POST['sub'])){
 	if (isset($_POST['EtablissementPri'])){
 		if (!empty ($_POST['EtablissementPri']) and !empty ($_POST['Capacité'])){       
        	                               header('location:InterfacePri1.php');
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
                         <legend><span class="section">2</span> Informations </legend>
		<table align="center">
			
            <!----Liste déroulante Ecoles privées------>
            <tr>
            <label align="center" name="EtablissementPri"> Etablissement</label>
                    <select id="EtablissementPri" name="EtablissementPri">
                         
                         <optgroup label="EPFPM">
                              <option value="EPFPM Bahjat Seha">Bahjat Seha</option>        
                              <option value="EPFPM Ibn Khaldoun">Ibn Khaldoun</option>
                              <option value="EPFPM Avicenne"> Avicenne </option> 
                              <option value="EPFPM Didactica">Didactica</option>
                              <option value="EPFPM Djouad">Djouad</option>
                              <option value="EPFPM Fajr El-Amel">Fajr El-Amel</option>   
                              <option value="EPFPM El Anneb">El Anneb</option>
                              <option value="EPFPM Elef">Elef</option>
                              <option value="EPFPM Erraid">Erraid</option>
                              <option value="EPFPM El Badissia">El Badissia</option>
                              <option value="EPFPM El Nadjah">El Nadjah</option>
                              <option value="EPFPM Al Anis">Al Anis</option>
                              <option value="EPFPM Ahras Santé">Ahras Santé</option>
                         </optgroup>
                         
                    </select><br></br>
            </tr>        
            <!-----liste déroulante wilaya----->
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
                <td align="right">Numéro d'agrément:</td>
                <td><input type="number", name="num" , placeholder="numéro" min="1" max="1000" step="1" value="0"> </td>
            </tr>
            <tr>
				<td align="right">Date d'agrément:</td>
				<td><input type="Date", name="Date" , placeholder="Date"> </td>
			</tr>
			<tr>
				<td align="right">Capacité:</td>
				<td><input type="number", name="Capacité" , value="0", min="0", placeholder="La capacité..."> </td>
			</tr>
			<tr>
				<td align="right">Fondateur:</td>
				<td><input type="text", name="Directeur" , placeholder="Nom & prénom"> </td>
			</tr>
			<tr>
				<td align="right">Le DES:</td>
				<td><input type="text", name="DP" , placeholder="Nom & prénom"> </td>
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

       

       <!----Liste déroulante IFPM------>
            <fieldset>
            <tr>
            <label align="center" name="EtablissementRatt"> Etablissement de Rattachement</label>
                    <select id="EtablissementRatt" name="EtablissementRatt">
                             
                         <optgroup label="IFPM">
                              
                              <option value="IFPM de Guelma">IFPM de Gulema</option>
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
            </fieldset>       
            <!---------->

            <!-----Le bouton pour envoyer à la base de données----->

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