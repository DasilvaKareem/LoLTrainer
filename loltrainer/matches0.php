
<Section id="compare" class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <table class= "table table-striped">
            <tr>
              <th><?php echo $ally?></th>
            </tr>
            <tr>
              <td>Match Result</td>
              <td><?php if($allyResult == True){

                echo 'Winner';
              } else {

                echo 'Loser';
              }
              ?>
            </td>
            </tr>

          <tr>
            <td><?php echo $ally. "'s Score"?></td><td><?php echo $allyScore[0]. "/".$allyScore[1]."/".$allyScore[2]?></td>
          </tr>

          <tr>
            <td>Total Damage Dealt to Champions</td>  <td><?php echo $allyDamage ?></td>
          </tr>

          <tr>
            <td>Total Gold Earned</td><td><?php echo $allyGold ;?></td>
          </tr>

        </table>
        </div>
        <div class="col-sm-4">
          <table class= "table table-striped">
            <tr>
              <th><?php echo $ally;?></th><th><?php echo $rival ?></td>
            </tr>
            <tr>
              <td><?php echo $rivalVerdict?></td>
            </tr>
            <tr>

              <td><?php echo $allyVerdict?>
            </td>
          </tr>
          <tr>
            <td><?php echo $allyVerdict?></td>
          </tr>
          <tr>
            <td><?php echo $allyVerdict?></td>
          </tr>
          <tr>
            <td><?php echo $allyVerdict?></td>
          </tr>
          <tr>
            <td><?php echo $allyVerdict?></td>
          </tr>
          <tr>
            <td><?php echo $allyVerdict?></td>
          </tr>
          <tr>
            <td><?php echo $allyVerdict?></td>
          </tr>
        </table>
        </div>
        <div class="col-sm-4">
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
