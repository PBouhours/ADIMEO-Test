<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="index.css" />
        <title>Inscription Titan</title>
    </head>
    <body>
      <div class="index">
        <img class="logo" src="logoTitan.jpg" alt="logo">
          <div class="text">
            <p>Inscrivez-vous pour faire partie des premiers touristes de Titan, la fameuse lune de Saturne !</p>
          </div>
        <form action="inscription_post.php" method="post">
          <div class="champ">
            <div class="select">
              <label class="labelStar" for="firstname">Prénom <div class="star">&#42;</div></label>  
              <input class="area" type="text" name="firstname" id="firstname" required /><br />
            </div>
            <div class="select">
              <label class="labelStar" for="lastname">Nom <div class="star">&#42;</div></label> 
              <input class="area" type="text" name="lastname" id="lastname" required/><br />
            </div>
            <div class="select">
              <label class="labelStar" for="email">Email <div class="star">&#42;</div></label>  
              <input class="area" type="email" name="email" id="email" required/><br />
            </div>
            <div class="select">
              <input type="checkbox" name="newsletter[]" value="ok"> 
              <label for="newsletter"> J'accepte de m'inscrire à la newsletter de Titan</label>
            </div>

            <button class="btn" type="submit">VALIDER MON INSCRIPTION</button>

          </div>
          
          <?php
            session_cache_expire(1);
            session_start();
              if(isset($_SESSION['message'])){
              echo $_SESSION['message'];
              }
            
          ?>
	
        </form>
      </div>
    </body>
</html>   