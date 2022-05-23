  
    <form action="formulaire-variable.php" method="post" id="formulaire">
        <p><h2><b>Vos coordonnées :</b> </h2></p>
        <br>
        <p class = "obligatoire" style="color: red;"> <b>* Ces zones sont obligatoires. </b> </p>

        <!-- <fieldset> -->
            <!-- <legend> Vos coordonnées</legend>  -->
            <label for="societe"> Société : </label><input type="text" name="nom" id="societe"> <!-- pourquoi ca marche pas ? !-->
            <br><br>    
            <label for="contacter"> Personne à contacter :</label> <input type="text" name="prenom" id="contacter">
            <!-- <label for="sexe"> Sexe* :</label> <input type="radio" name="sexe" value="feminin" >Fémnin -->
                                            <!-- <input type="radio" name="sexe" value="masculin"> Masculin                                    -->
                                            <br><br>
            <!-- <label for="ddn"> Date de naissance* :</label> <input type="date" name="ddn" id="ddn"> <br> -->
            <label for="adresse"> Adresse de l'entreprise : </label><input type="text" name="adresse" id="adresse">
            <br><br>
            <label for="cp"> Code postal : </label><input type="text" name="cp" id="cp"> 
            <br><br>
            <label for="ville"> Ville : </label><input type="text" name="ville" id="ville" >
            <br><br>
            <label for="email"> Email : </label><input type="text" name="email" id="email" placeholder="dave.loper@afpa.fr">
            <br><br>
            <label for="telephone"> Téléphone  : </label><input type="text" name="telephone" id="telephone">
            <br><br>

            <div style="display:flex;">
                <label for="sujet" rows="5"> Selectionnez <br>l'environnement <br>technique <br>du projet :</label>
                <textarea name="sujet" id="sujet" rows="5"></textarea>   <!-- AJUSTEMENT  -->
            </div>


        <!-- </fieldset> -->
    
        
        <!-- <fieldset> -->
            <!-- <legend> Selectionnez l'environnement technique du projet : </legend> -->
            <!-- <label for="sujet" >  Selectionnez <br> l'environnement <br> technique du projet :</label><textarea name="sujet" id="sujet" rows="2" cols="30"></textarea> -->
            <br> 
            <select id="liste" name="liste">
                <option value="selectionner" disabled selected> Choisissez</option>
                <option value="acces" > Acces </option>
                <option value="java"> Java </option>
                <option value="delphi"> Delphi</option>
                <option value="windev"> Windev </option>
                <option value="visualbasic">Visual Basic</object>
                <option value="powerbuilder">Power Builder</option>
                <option value="internet">Internet</option>        
                <option value="intranet">Intranet</option>        
                <option value="windowsnt">Windows NT</option>        
                <option value="unix">Unix</option>    
                <option value="sqlserver">SQL Server</option>    
                <option value="oracle">Oracle</option>    
                <option value="autres">Autres...</option>    
            </select> 
            <br>
        
            <!-- <label for="question"></label><textarea name="question" rows="2" cols="20"></textarea> -->
        <!-- </fieldset><br> -->
        
        <!-- <input type="checkbox" name="accepter" id="accepter" > * J'accepte le traitement informatique de ce formulaire  -->
        <br><br>
        <input type="submit" value="Envoyer"> <input type="reset" value="Effacer">

    </form>    

    <?php
    
echo "societe : ". $_REQUEST ["nom"]."<br>";
echo "prenom : ".$_REQUEST["prenom"]."<br>";
echo "adresse : ".$_REQUEST["adresse"]."<br>";
echo "code postal : ".$_REQUEST["cp"]."<br>";
echo "ville : ". $_REQUEST["ville"]."<br>";
echo "email : ".$_REQUEST["email"]."<br>";
echo "telephone : ".$_REQUEST["telephone"]."<br>";
echo "sujet : ".$_REQUEST["sujet"]."<br>";
echo "liste : ".$_REQUEST["liste"];
    ?>