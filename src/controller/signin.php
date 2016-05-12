<?php
// Je me connecte à la base de données
    
        require("../bdd/config.php");
        //Sécurisation des données saisies
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        //On vérifie que le login existe dans la table
        $reponse_admin = $bdd->prepare('SELECT ISADMIN FROM USERS WHERE PSEUDO = ?');
        $reponse_admin->execute(array($pseudo));
        $droit =  $reponse_admin->fetch();
        if(isset($_POST['pseudo']) && isset($_POST['password'])){

                $verif_pseudo = $bdd->prepare("SELECT COUNT(*) FROM USERS WHERE PSEUDO = ? ");
                $verif_pseudo->execute(array($pseudo));
                $count =$verif_pseudo->fetch();
                if($count[0] == 0)
                { 
                    echo "Erreur pseudo. Veuillez vous réauthentifier ou vous inscrire";
                    header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
                    //Exception, erreur ou ce que tu désires
                }
                else { //Login existant
                 
                    //Séléction du password pour le login saisi
                    $conn = $bdd->prepare('SELECT PSEUDO,PASSWORD FROM USERS WHERE PSEUDO = ? and PASSWORD = ?');
                    $conn->execute(array($pseudo,$password));
                    //$conn -> bindParam('.$pseudo.',$pseudo,PDO::PARAM_STR);
                    //$conn -> bindParam('.$password.',$password,PDO::PARAM_STR);
                    $donnees = $conn->fetchColumn();
                    //Je vérifie que le mot de passe correspond
                    //Si le mot de passe est hashé dans la bdd, il faut appliquer ce hashage à $password dans la vérification ci-dessous
                    if ($donnees == true)
                    {
                        
                        if ($droit['ISADMIN'] == 1){
                            echo "c'est un abonne";
                            header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/acceuilabo.php');
                        }
                        else{
                             echo "c'est un admin";
                             header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/acceuiladmin.php');
                            }

                        setcookie("user",$pseudo,time()+86400,"/");//dure 1 jour
                    }
                    else{
                        header('Location: http://polymangas-igmangas.rhcloud.com/src/vue/signin.php');
                    }
                }
           }
           
?>