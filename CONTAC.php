<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="qq.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   
    
.Mr1 {
display: flex;
 justify-content: center;
margin-top: 30px; 
margin-left: 45vh;
}
.Mr1 .Mr2{
  
}
.Mr2{
  width: 50%;
  gap:10PX;
 
}
.Mr2 .casep{

  padding: 15px;
  
}
.casep div{
  width: 50%;
  height: 80px;
   display: flex;
  background: none;
  border: 1px solid #000;  /* ← ici tu peux changer le 1px selon l’épaisseur souhaitée */
  padding: 8px 16px;
  color: #000;
  font-size: 16px;
  cursor: pointer;
  border-radius: 25px;
  align-items: center;     /* Centre verticalement */
  justify-content: center; 
    
   
}
.casep {
  
    justify-content: center;
    display: flex;
    gap:4px;
    
}
.img2{
  height: 70vh;
  width: 35vh;
}
.imgdiv{
  width: 60%;
  height: 100%;
   display: flex;
  justify-content: center;      /* centre horizontalement */
  align-items: flex-end;        /* colle en bas */
                /* ou toute autre hauteur */
       /* optionnel */
}
.imgdiv{
 justify-content: center; 
  align-items: center; 
 
}
.info{
  height: 100%;
  width: 100%;
  margin-top: 14vh; 
}
.contact-form{
  margin-left: 25vh;
  margin-right: 25vh;
}
.butt2{
  color:white;
  background-color:black;
  border-radius: 25px;
justify-content: center;
width: 10vw;
height: 6vh;
}
.casep2 {
  padding: 8px 16px;
}


   
  </style>
</head>
<body>
    <header class="AAA">
        <div class="logo">
            <div class="lll">
                <a href="ACCUEIL.php"><img class="img" src="Logo-Blanc-sans-fond 1.png" alt=""></a>
            </div>
           
        </div>
        <div class="menu">
            <ul>
                <li><a href="NOS SERVICE.php">NOS SERVICES</a></li>
                <li><a href="CONTAC.php"> CONTACT</a></li>
                <li><a href="qui somme nous.php">QUI SOMME-NOUS</a></li>
            </ul>
        </div>
    </header>
<body>
 <div class="Mr1">
  <div class="Mr2">
    <div class="info">
      <div class="casep2">
      <button class="butt2">Nous contacter</button>
    </div>
      
    
    <div class="casep">
      <div>Godwin Dovon</div>
      <div>The Circle</div>
    </div>
    <div class="casep">
      <div >+33 6 29 53 65 12</div>
      <div>godwindovon@gmail.com</div>
    </div>
    <div class="casep">
      <div>ANGERS 49100</div>
      <div>16 Rue du Maine </div>
    </div>
    </div>
  </div>
  <div class="Mr2">
    <div class="imgdiv">
      <img src="Device 2.png" alt="" class="img2">
    </div>
   
  </div>

 </div>















    
 

        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Récupérer les données - Etape 1
            $firstName    = $_REQUEST['name'];
            $email      = $_REQUEST['email'];
            $subject    = $_REQUEST['subject'];
            $message    = $_REQUEST['message'];
            $errors = 0;


            // Vérification des données - Etape 2
            if (strlen($firstName) < 2) {
              echo '<div class="alert alert-danger" role="alert">Le prénom doit contenir au minimum 2 caractères !</div>';
              $errors++;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              echo '<div class="alert alert-danger" role="alert">L\'email doit être valide !</div>';
              $errors++;
            }

            if (strlen($subject) < 2) {
              echo '<div class="alert alert-danger" role="alert">Le sujet doit contenir au minimum 2 caractères !</div>';
              $errors++;
            }

            if (strlen($message) < 10) {
              echo '<div class="alert alert-danger" role="alert">Le message doit contenir au minimum 10 caractères !</div>';
              $errors++;
            }


            // Cas Nominal  
            if ($errors === 0) {

              // Traitement des données - Etape 3
              $to      = 'godwindovon@gmail.com';
              $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
              //mail($to, $subject, $message, $headers);


              echo '<div class="alert alert-success" role="alert">Votre message a été envoyé avec succès !</div>';
              unset($firstName);
              unset($email);
              unset($message);
              unset($subject);
            }
       
          }

?>
        <form action="CONTAC.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
            </div>
            <div class="form-group">
                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" placeholder="Sujet du message" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
            </div>
            <button type="submit" class="submit-button">Envoyer</button>
        </form>
    </div>
    <?php include 'footer.php'; ?> 
    
</body>
</html>
