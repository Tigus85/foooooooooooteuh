<?php
include "arrayTeams.php" ;
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
    <a href="index.php"><img id=logoFristLeague src="./img/logofristleague.svg" alt="logo First league"></a>
    <div id="majorHeader">
      <div id="navAndTitle">
        <nav>
          <?php
             for($i=0; $i<count($premierLeagueTeams["teams"]) ;$i++){
          ?> 
            <a href="#<?= $premierLeagueTeams['teams'][$i]['strTeam'] ?>">
              <img class="logoTeam" src= <?= $premierLeagueTeams['teams'][$i]['strTeamLogo'] ?> alt=<?= $premierLeagueTeams['teams'][$i]['strTeam'] ?>>
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
  <main class="mainIndex">
    <?php
      for($i=0; $i<count($premierLeagueTeams["teams"]) ;$i++){
    ?>         
    
    <section class="teamCard" id="<?= $premierLeagueTeams['teams'][$i]['strTeam'] ?>" >
      <h2><?= $premierLeagueTeams['teams'][$i]['strAlternate'] ?></h2>
      <img class="badge" src=<?= $premierLeagueTeams['teams'][$i]['strTeamBadge'] ?> alt=<?= $premierLeagueTeams['teams'][$i]['strAlternate'] ?>>
      <div class="description">
        <div>Description</div>
        <p>
          <?php
            
            if($premierLeagueTeams['teams'][$i]['strDescriptionFR'] === NULL){
              echo $premierLeagueTeams['teams'][$i]['strDescriptionEN'];
            } else {
              echo $premierLeagueTeams['teams'][$i]['strDescriptionFR'];
            }
            
          ?>
        </p>
      </div>
      <button><a href="detail.php?teamID=<?= $premierLeagueTeams['teams'][$i]['idTeam'] ?>">Plus de détails</a> </button>
      <div class="mainJersey" >
        <h3>Maillot</h3>
        <div class="jersey">
          <div class="focusJersey"> 
            <h4>Domicile</h4>
            <img class="imgJersey" src=<?= $premierLeagueTeams['teams'][$i]['strTeamJersey'] ?> alt="Maillot d'equipe">
          </div>
          <!-- <div class="focusJersey">
            <h4>Extérieur</h4>
            <img class="imgJersey" src="" alt="">
          </div> -->
        </div>
      </div>
      <div>
        <h3>Stade</h3>
        <h4><?= $premierLeagueTeams['teams'][$i]['strStadium'] ?></h4>
        <img class="imgStadium" src=<?= $premierLeagueTeams['teams'][$i]['strStadiumThumb'] ?> alt=<?= $premierLeagueTeams['teams'][$i]['strStadium'] ?>>
      </div>
    </section>
  <?php
    }
  ?>
  </main>
</body>
</html>