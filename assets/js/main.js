function countPlayers() {
    var players = document.getElementById('players').value;
    var playerArray = players.split(',');
    var playerCount = playerArray.filter(function(player) {
        return player.trim() !== '';
    }).length;
    document.getElementById('playerCount').innerText = playerCount + ' jogadores';
}