<html>
  <head>
    <title>Sorteador de Times</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js"></script>
  </head>
  <body>
  <div class="container">
        <h1>Sorteio de Times</h1>
        <form method="post" action="">
            <label for="players">Insira os nomes dos jogadores (separados por vírgula):</label>
            <textarea id="players" name="players" rows="4" cols="50" onkeyup="countPlayers()"></textarea>
            <span id="playerCount">0 jogadores</span><br><br>

            <label for="players_team">Quantidade de jogadores por time:</label>
            <select id="players_team" name="players_team">
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select><br><br>

            <input type="submit" name="sortear" value="Sortear">
        </form>

        <div class="result">
            <?php 
            if (isset($_POST['sortear'])) {
                $players_input = $_POST['players'];
                $perebas = explode(',', $players_input);
                $perebas = array_map('trim', $perebas); // Remove espaços em branco extras
                shuffle($perebas);

                $players_team = (int)$_POST['players_team'];

                for($i = 0; $i < count($perebas); $i++){
                    if ($i % $players_team == 0) {
                        echo "<div class='team'>Time " . (int)($i / $players_team + 1) . ": ";
                    }
                    echo $perebas[$i];
                    if (($i + 1) % $players_team == 0) {
                        echo "</div><br>";
                    } else {
                        echo " - ";
                    }
                }
            }
            ?> 
        </div>
    </div>
  </body>
</html>