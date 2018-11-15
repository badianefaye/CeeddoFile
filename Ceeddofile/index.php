<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ceeddofile</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  </head>
  <body>
    <div class="show-login-btn"><i class="far fa-question-circle"></i> Aide</div>
    <div id="div6">
         
                    <div class="container mt-4">
                    <div class="row">
                    <div class="col-md-6 mb-4">
                <!-- couleur formulaire-->
                    <div class="card form-black">
                    <div class="card-body">

             <form action="index.php" method="post" enctype="multipart/form-data">
             
             <div class="upload-btn-wrapper">   
             <button class="btn" style="color:#3498db !important;font-size:24px;border-radius:25px;"><i class="fas fa-cloud-upload-alt"></i></button>
              <input type="file" name="file" id="file"><label>Ajouter un fichier</label>
              </div>



<div class="md-form">
                                    <i class="fa fa-envelope prefix btn-lg-text"></i>
                                    <label for="form22">Destinataire</label>
                                    <input type="email" id="form22" class="form-control" required>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix btn-lg-text"></i>
                                    <label for="form22">Votre email</label>
                                    <input type="email" id="form22" class="form-control" required>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-pencil prefix btn-lg-text"></i>
                                    <textarea type="text" id="form82" class="md-textarea" style="height: 100px"></textarea>
                                    <label for="form82">Message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn1 btn-info btn-lg" name="upload">Envoyer</button>
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>


             
          </form>
        </div>

    <div class="login-box">
      <div class="hide-login-btn"><i class="fas fa-times"></i></div>
    <!-- <form class="login-form" action="index.html" method="post">
      <h1>Ceedofile</h1>
      <input class="txtb" type="text" name="" placeholder="Username">
      <input class="txtb" type="password" name="" placeholder="Password">
      <input class="login-btn" type="submit" name="" value="Login">
    </form> -->
    </div>


    <script type="text/javascript">
    $(".show-login-btn").on("click",function(){
      $(".login-box").toggleClass("showed");
    });
    $(".hide-login-btn").on("click",function(){
      $(".login-box").toggleClass("showed");
    });
    </script>

<!-- upload -->
   <?php
            if (isset($_POST['upload'])){
    $fichier = $_FILES['file']['name'];
    $taille_max = 297152;
    $taille = filesize($_FILES['file']['tmp_name']);
   
   
    if ($taille > $taille_max){
        $error = '<div class="alert">Fichier trop volumineux ...</div>';
    }
    if (!isset($error)){
       
        move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$fichier);
    } else {
        echo $error;
    }
}
?>
  </body>
</html>