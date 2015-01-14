
<?php $MatchDetails = $que ->getMatch($pairedMatches[6]);
$k = 0;


do {

  if($MatchDetails["participantIdentities"][0]["player"]["summonerName"] != $ally){
    $k++;
  }

} while($MatchDetails["participantIdentities"][$k]["player"]["summonerName"] != $ally );
$j = 0;
if($MatchDetails["status"]){

}else {
  do {

    $j++;
  }
  while($MatchDetails["participantIdentities"][$j]["player"]["summonerName"] != $rival );
}

$allyMatchID = $MatchDetails["participantIdentities"][$k]["participantId"];
$rivalMatchID = $MatchDetails["participantIdentities"][$j]["participantId"];

$allyResult =$MatchDetails["participants"][$k]["stats"]["winner"];
$rivalResult = $MatchDetails["participants"][$j]["stats"]["winner"];
$allySpree = $MatchDetails["participants"][$k]["stats"]["largestKillingSpree"];
$rivalSpree = $MatchDetails["participants"][$j]["stats"]["largestKillingSpree"];
$allyScore = array($MatchDetails["participants"][$k]["stats"]["kills"], $MatchDetails["participants"][$k]["stats"]["deaths"], $MatchDetails["participants"][$k]["stats"]["assists"]);
$rivalScore = array($MatchDetails["participants"][$j]["stats"]["kills"], $MatchDetails["participants"][$j]["stats"]["deaths"], $MatchDetails["participants"][$j]["stats"]["assists"]);
$allyGold = $MatchDetails["participants"][$k]["stats"]["goldEarned"];
$rivalGold = $MatchDetails["participants"][$j]["stats"]["goldEarned"];
$allyDamage = $MatchDetails["participants"][$k]["stats"]["totalDamageDealt"];
$rivalDamage = $MatchDetails["participants"][$j]["stats"]["totalDamageDealt"];

?>

<Section id="compare" class="intro-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Game 7</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <table class= "table table-striped">
          <tr>
            <th><?php echo $ally?></th>
          </tr>
          <tr>
            <td>Match Result</td>
          </tr>
          <tr>

            <td><?php if($allyResult == True){

              echo 'Winner';
            } else {

              echo 'Loser';
            }
            ?>
          </td>
        </tr>
        <tr>
          <td><?php echo $ally. "'s Score"?></td>
        </tr>
        <tr>
          <td><?php echo $allyScore[0]. " Kills ".$allyScore[1]." Deaths ".$allyScore[2]. " Assists"?></td>
        </tr>
        <tr>
          <td>Total Damage Dealt to Champions</td>
        </tr>
        <tr>
          <td><?php echo $allyDamage ?></td>
        </tr>
        <tr>
          <td>Total Gold Earned</td>
        </tr>
        <tr>
          <td><?php echo $allyGold ;?></td>
        </tr>
      </table>
    </div>

    <div class="col-md-6">
      <table class= "table table-striped">
        <tr>
          <th><?php echo $rival?></th>
        </tr>
        <tr>
          <td>Match Result</td>
        </tr>
        <tr>

          <td><?php if($rivalResult == True){

            echo 'Winner';
          } else {

            echo 'Loser';
          }
          ?>
        </td>
      </tr>
      <tr>
        <td><?php echo $rival. "'s Score"?></td>
      </tr>
      <tr>
        <td><?php echo $rivalScore[0]. " Kills ".$rivalScore[1]." Deaths ".$rivalScore[2]. " Assists"?></td>
      </tr>
      <tr>
        <td>Total Damage Dealt to Champions</td>
      </tr>
      <tr>
        <td><?php echo $rivalDamage ?></td>
      </tr>
      <tr>
        <td>Total Gold Earned</td>
      </tr>
      <tr>
        <td><?php echo $rivalGold ;?></td>
      </tr>
    </table>
  </div>

</div>
</div>
</section>
