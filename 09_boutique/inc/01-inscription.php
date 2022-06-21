<?php
       require_once('./init.php');
       jeprint_r($_SESSION);
    if( !empty($_POST)){
        $_POST['psuedo'] = htmlspecialchars($_POST['psuedo']);
        $_POST['mdp'] = htmlspecialchars($_POST['mdp']);
        $_POST['nom'] = htmlspecialchars($_POST['nom']);
        $_POST['prénom'] = htmlspecialchars($_POST['prénom']);
        $_POST['civilite'] =htmlspecialchars ($_POST['civilite']);
        $_POST['adresse'] =htmlspecialchars($_POST['adresse']);
        $_POST['code_postal'] =htmlspecialchars($_POST['code_postal']);
        $_POST['ville'] =htmlspecialchars($_POST['ville']);

        $_requete =$pdoSITE->prepare("INSERT INTO membre(pseudo,mdp,nom,prenom,email,civilite,adresse,code_postal,ville)(:pseudo, :mdp, :nom, :prenom, :email, :civilite, :adresse, :code_postal, ;ville)");

        $requete->execute(array(
            ':pseudo' => $_POST['pseudo'],
            ':mdp' => $_POST['mdp'],
            ':nom' => $_POST['nom'],
            ':prenom' => $_POST['prenom'],
            ':email' => $_POST['email'],
            ':civilite' => $_POST['civilite'],
            ':adresse' => $_POST['adresse'],
            ':code_postal' => $_POST['code_postal'],
            ':ville' => $_POST['ville'],
          ));
        } // fin du if !empty       
?>
<!doctype html>
<html lang="en">
  <head>
    <title>La boutique - Inscription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <main class="container bg-white m-4 mx-auto p-4">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <h1>La boutique-Inscrivez-vous</h1>
                <form action="" method="POST" class="w-75 mx-auto">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" 
                        value="<?php echo $_POST['pseudo']??'';?>" required> 
                    </div>
                    
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" 
                        value="<?php echo $_POST['mdp']??'';?>" required> 
                        <small>Votre mot de passe doit contenir entre 8 et 20 caractéres !</small>
                    </div>
                </form>
            </div>
        </div>
    </main>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>