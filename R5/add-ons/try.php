function Game(gameId, totalBets, multiplier)
{
 this.gameId = gameId;
 this.totalBets = totalBets;
 this.multiplier = multiplier;
}

game.prototype.getMultiplier()
{
  return this.multiplier;
}
game.prototype.getTotalBets()
{
  return this.totalBets;
}

let all5 = new Game();
all5.getMultiplier();