
<Section id="compare" class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-4">
          <h1>hello</h1>
        </div>
        <div class="col-md-4">
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
