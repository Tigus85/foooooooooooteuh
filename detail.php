<?php

include "arrayTeams.php";


$selectTeam= [];

for($i=0; $i<count($premierLeagueTeams["teams"]) ;$i++){
  if($premierLeagueTeams["teams"][$i]["idTeam"] === $_GET['teamID']){
    $selectTeam = $premierLeagueTeams["teams"][$i];
  }
}

//var_dump($selectTeam);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  
  <title>Equipe 1er ligue </title>
</head>
  <body>
    <header>
      <a href="index.php"><img id=logoFristLeague src="./img/logofristleague.svg" alt="logo Frist league"></a>
      <div id="majorHeader">
        <div id="navAndTitle">
          <nav>
            <?php
              for($i=0; $i<count($premierLeagueTeams["teams"]) ;$i++){
            ?> 
              <a href="detail.php?teamID=<?= $premierLeagueTeams['teams'][$i]['idTeam'] ?>">
                <img class="logoTeam" src= <?= $premierLeagueTeams['teams'][$i]['strTeamLogo'] ?> alt=<?= $premierLeagueTeams['teams'][$i]['strTeam'] ?> >
              </a>
            <?php
              } 
            ?>
          </nav>
          <h1>Premier League</h1>
        </div>
        <!-- <div id="language">
          <ul>
            <li class="deroulant">
              <div>Selection d'un pays</div>
              <ul class="sous">
              <li><a href="#" >Angleterre</a></li>
              <li><a href="#">Allemagne</a></li>
              <li><a href="#">France</a></li>
              <li><a href="#">Chine</a></li>
              <li><a href="#">Italie</a></li>
              <li><a href="#">Japon</a></li>
              <li><a href="#">Russie</a></li>
              <li><a href="#">Espagne</a></li>
              <li><a href="#">Portugal</a></li>
              <li><a href="#">Suede</a></li>
              <li><a href="#">Pays-Bas</a></li>
              <li><a href="#">Hongrie</a></li>
              <li><a href="#">Norvège</a></li>
              <li><a href="#">Israël</a></li>
              <li><a href="#">Pologne</a></li>
              </ul>
            </li>
          </ul>
        </div> -->
    
      </div>
    </header>
    <main class="mainDetail">
      <section class="bannerSection">
        <h2 class="h2Detail"> <?= $selectTeam['strTeam'] ?> </h2>
        <img src=<?= $selectTeam['strTeamBanner'] ?> alt= <?= $selectTeam['strTeam'] ?> >
      </section>
      <section class="link">
        <div><a href="#stade">Stade</a></div>
        <div><a href="#description">Description</a></div>
        <div><a href="#galerie">Galerie</a></div>
        <div><a href="#liens">Info</a></div>
      </section>
      <section id="stade">
        <img  src=<?= $selectTeam['strStadiumThumb'] ?> alt= <?= $selectTeam['strStadium'] ?> >
        
        <div class="nameStade" >
          <div>Nom du Stade : <?= $selectTeam['strStadium'] ?> </div>
          <div>Localisation : <?= $selectTeam['strStadiumLocation'] ?> </div>
          <div>Capacity : <?= $selectTeam['intStadiumCapacity'] ?> </div>
          
          <h4>Description Stade</h4>
          <p> <?= $selectTeam['strStadiumDescription'] ?> </p>
      
        </div>

      </section>
      <section id="description">
        <h4>Description Equipe </h4>
        <p> 
          <?php
            
            if($selectTeam['strDescriptionFR'] === NULL){
              echo $selectTeam['strDescriptionEN'];
            } else {
              echo $selectTeam['strDescriptionFR'];
            }
            
          ?>
        </p>
      </section>
      <section id="galerie">
        <h4>Fan Arts</h4>
        <div>
          <img src=<?= $selectTeam['strTeamFanart1'] ?> alt="Fanart 1">
          <img src=<?= $selectTeam['strTeamFanart2'] ?> alt="Fanart 2">
          <img src=<?= $selectTeam['strTeamFanart3'] ?> alt="Fanart 3">
          <img src=<?= $selectTeam['strTeamFanart4'] ?> alt="Fanart 4"> 
        </div>
      </section>
      <footer id="liens">
        <h4>Liens Utiles</h4>
        <div>
          <a href=<?= $selectTeam['strWebsite'] ?> >
            <i class="fa-solid fa-globe"></i>
            <div><?= $selectTeam['strWebsite'] ?> </div>
          </a>
          <a href=<?= $selectTeam['strFacebook'] ?> >
            <i class="fa-brands fa-facebook"></i>
            <div><?= $selectTeam['strFacebook'] ?> </div>
          </a>
          <a href=<?= $selectTeam['strTwitter'] ?> >
            <i class="fa-brands fa-twitter"></i>
            <div><?= $selectTeam['strTwitter'] ?> </div>
          </a>
          <a href=<?= $selectTeam['strInstagram'] ?> >
            <i class="fa-brands fa-instagram"></i>
            <div><?= $selectTeam['strInstagram'] ?> </div>
          </a>
          <a href=<?= $selectTeam['strYoutube'] ?> >
            <i class="fa-brands fa-youtube"></i>
            <div><?= $selectTeam['strYoutube'] ?> </div>
          </a>
        </div>
      </footer>
    </main>
    <script src="https://kit.fontawesome.com/703f43b48a.js" crossorigin="anonymous"></script>
  </body>
</html>