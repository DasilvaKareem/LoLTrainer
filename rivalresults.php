<?php
$rivalwins = $r['playerStatSummaries'][$i]['wins'];

?>
<h1><?php
    echo $rival

 ?></h1>
<table>
  <h2>
    <tr>
      <td>Ranked Wins </td><td>Ranked Losses</td>
      <tr>

        <td id="lwin"><?php echo $rivalwins ; ?></td>
        <td class="llose"><?php echo $r['playerStatSummaries'][$i]['losses']; ?></td>

      </table>
    
