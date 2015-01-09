<h1><?php
    echo $name;
    $allywins = $r['playerStatSummaries'][$i]['wins'];

 ?></h1>
<table>
  <h2>
    <tr>
      <td>Ranked Wins </td><td>Ranked Losses</td>
      <tr>

        <td id="lwin"><?php echo $allywins  ?></td>
        <td class="llose"><?php echo $r['playerStatSummaries'][$i]['losses']; ?></td>

      </table>
      
