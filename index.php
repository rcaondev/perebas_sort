<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

      
      $perebas = array('Rafael Paiva', 'Rogerio', 'Jackson', 'Adelson', 'Jô', 'Mito' , 'Thiago', 'Garrafa', 'Yuri', 'Gonio', 'Ariel', 'Renan', 'Vinicius', 'Rodrigo', 'Bruno (convidado)');
      shuffle($perebas);

      $players_team = 4;

      for($i = 0; $i < count($perebas); $i++){
        if ($i % $players_team == 0) {
          echo "Times" . ($i / $players_team + 1) . ": " ;
          
        }
        echo $perebas[$i] . " - ";
        if (($i + 1) % $players_team == 0) {
          echo "<br><br>";
        }
      }

    ?> 

  </body>
</html>