<?php
include('riot.php');
//testing classes
$summoner = 'NatrixDream';

$summoner_id = 25331321;

$matchId = 1687780771;
$test = new riotapi('na');
//$r = $test->getSummonerByName($summoner);
//$r = $test->getSummoner($summoner_id);
//$r = $test->getSummoner($summoner_id,'masteries');
//$r = $test->getSummoner($summoner_id,'runes');
//$r = $test->getSummoner($summoner_id,'name');
//$r = $test->getLeague($summoner_id);
//$r = $test->getStats($summoner_id, 'summary');
//$r = $test->getMatchHistory($summoner_id);

//$r = $test->getGame($summoner_id);
//$cool = $test ->getSummonerId($super);
//$r = $test ->getMatch($matchId);
//$r = $test->getLeague($summoner_id);


?>
<pre>
	<?php
	var_dump($r);
	?>
</pre>
<td class="lwin"><?php echo $r['games']['0']['stats']['wardPlaced']; ?></td>
<td class="lwin"><?php echo $r['23071393']['0']['entries']['0']['division']; ?></td>
